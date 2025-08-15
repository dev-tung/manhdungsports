// ==========================
// Utility debounce
// ==========================
function debounce(fn, delay = 200) {
  let timeout;
  return (...args) => {
    clearTimeout(timeout);
    timeout = setTimeout(() => fn(...args), delay);
  };
}

// ==========================
// Fetch API chuẩn
// ==========================
async function fetchJSON(url) {
  try {
    document.getElementById("ModalLoading").style.display = "block";
    const res = await fetch(url, {
      headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json',
        'X-CSRF-Token': document.querySelector('#CsrfToken').content
      }
    });
    return await res.json();
  } catch (err) {
    console.error(err);
    alert('Lỗi fetch dữ liệu!');
    return null;
  } finally {
    document.getElementById("ModalLoading").style.display = "none";
  }
}

// ==========================
// Customer Autocomplete
// ==========================
function setupCustomerAutocomplete(customers) {
  const input = document.getElementById("customer");
  const list = document.getElementById("customerList");
  const customerId = document.getElementById("CustomerId");

  const renderList = debounce(() => {
    const query = input.value.toLowerCase().trim();
    list.innerHTML = "";
    if (!query) return list.style.display = "none";

    customers
      .filter(c => c.customer_name.toLowerCase().includes(query))
      .forEach(c => {
        const div = document.createElement("div");
        div.style.padding = "10px";
        div.style.cursor = "pointer";
        div.style.fontSize = "11px";
        div.textContent = `${c.customer_name} - ${c.customergroup_name}`;
        div.addEventListener("click", () => {
          input.value = c.customer_name;
          customerId.value = c.customer_id;
          list.style.display = "none";
        });
        list.appendChild(div);
      });

    list.style.display = list.children.length ? "block" : "none";
  });

  input.addEventListener("input", renderList);

  document.addEventListener("click", e => {
    if (!list.contains(e.target) && e.target !== input) list.style.display = "none";
  });
}

// ==========================
// Product Multi-select + Gift + Quantity
// ==========================
function setupProductSelector(products) {
  const btn = document.getElementById("productSelectorBtn");
  const dropdown = document.getElementById("productDropdown");
  const searchInput = document.getElementById("productSearchInput");
  const tagsContainer = document.getElementById("selectedTags");
  const productItems = document.getElementById("productItems");
  const createBtn = document.getElementById("createInvoice");
  const productIdInput = document.getElementById('ProductId');

  let selectedProducts = [];
  const productMap = new Map(products.map(p => [p.code, p]));

  function renderTags() {
    tagsContainer.innerHTML = "";
    selectedProducts.forEach(({ code, isGift, quantity }) => {
      const product = productMap.get(code);
      const tag = document.createElement("div");
      tag.className = "Tag";
      if (isGift) tag.classList.add("Tag_Gift");
      tag.textContent = `${product.name} x${quantity}`;

      if (isGift) {
        const giftLabel = document.createElement("span");
        giftLabel.textContent = " (Tặng kèm)";
        giftLabel.style.fontStyle = "italic";
        giftLabel.style.marginLeft = "5px";
        giftLabel.style.fontSize = "11px";
        giftLabel.style.color = "#1e88e5";
        tag.appendChild(giftLabel);
      }

      const closeBtn = document.createElement("span");
      closeBtn.className = "TagClose";
      closeBtn.textContent = "×";
      closeBtn.addEventListener("click", e => {
        e.stopPropagation();
        selectedProducts = selectedProducts.filter(p => p.code !== code);
        renderTags();
        renderProductItems(searchInput.value);
        updateBtnText();
      });

      tag.appendChild(closeBtn);
      tagsContainer.appendChild(tag);
    });
  }

  function updateBtnText() {
    btn.textContent = selectedProducts.length ? `Đã chọn (${selectedProducts.length})` : "Chọn sản phẩm";
  }

  function renderProductItems(search = "") {
    const query = search.toLowerCase().trim();
    productItems.innerHTML = "";

    const filtered = query
      ? products.filter(p => p.name.toLowerCase().includes(query))
      : [];

    if (!filtered.length) {
      productItems.innerHTML = "<div style='padding:10px;color:#999;font-size:10px;'>Không có sản phẩm phù hợp</div>";
      return;
    }

    filtered.forEach(item => {
      const label = document.createElement("label");
      label.className = "SuggestionsItem";

      const checkbox = document.createElement("input");
      checkbox.type = "checkbox";
      checkbox.className = "Checkbox";
      checkbox.value = item.code;
      checkbox.checked = selectedProducts.some(p => p.code === item.code);

      checkbox.addEventListener("change", () => {
        if (checkbox.checked) {
          if (!selectedProducts.some(p => p.code === item.code)) selectedProducts.push({ code: item.code, isGift: false, quantity: 1 });
        } else {
          selectedProducts = selectedProducts.filter(p => p.code !== item.code);
        }
        renderTags();
        renderProductItems(searchInput.value);
        updateBtnText();
      });

      const infoDiv = document.createElement("div");
      infoDiv.className = "ProductInfo";

      const nameSpan = document.createElement("span");
      nameSpan.className = "ProductInfoName";
      nameSpan.textContent = item.name;

      const priceSpan = document.createElement("span");
      priceSpan.className = "ProductInfoPrice";
      priceSpan.textContent = `${item.group} - ${item.price.toLocaleString("vi-VN")} ₫`;

      infoDiv.appendChild(nameSpan);
      infoDiv.appendChild(priceSpan);

      // Gift & quantity container
      const actionContainer = document.createElement("div");
      actionContainer.style.display = "flex";
      actionContainer.style.alignItems = "center";
      actionContainer.style.gap = "10px";

      // Gift checkbox
      const giftLabel = document.createElement("label");
      giftLabel.className = "Switch";

      const giftCheckbox = document.createElement("input");
      giftCheckbox.type = "checkbox";
      giftCheckbox.title = "Đánh dấu sản phẩm là tặng kèm";
      giftCheckbox.checked = selectedProducts.find(p => p.code === item.code)?.isGift || false;
      giftCheckbox.disabled = !checkbox.checked;

      giftCheckbox.addEventListener("change", () => {
        const sel = selectedProducts.find(p => p.code === item.code);
        if (sel) sel.isGift = giftCheckbox.checked;
        renderTags();
      });

      const sliderSpan = document.createElement("span");
      sliderSpan.className = "Slider";

      giftLabel.appendChild(giftCheckbox);
      giftLabel.appendChild(sliderSpan);

      // Quantity input
      const qtyInput = document.createElement("input");
      qtyInput.type = "number";
      qtyInput.min = 1;
      qtyInput.value = selectedProducts.find(p => p.code === item.code)?.quantity || 1;
      qtyInput.style.width = "50px";
      qtyInput.disabled = !checkbox.checked;

      qtyInput.addEventListener("input", e => {
        const sel = selectedProducts.find(p => p.code === item.code);
        if (sel) sel.quantity = parseInt(e.target.value) || 1;
        renderTags();
      });

      actionContainer.appendChild(giftLabel);
      actionContainer.appendChild(qtyInput);

      label.appendChild(checkbox);
      label.appendChild(infoDiv);
      label.appendChild(actionContainer);

      productItems.appendChild(label);
    });
  }

  btn.addEventListener("click", () => {
    dropdown.classList.toggle("DropdownActive");
    if (dropdown.classList.contains("DropdownActive")) renderProductItems(searchInput.value);
    searchInput.focus();
  });

  searchInput.addEventListener("input", debounce(e => renderProductItems(e.target.value), 200));

  document.addEventListener("click", e => {
    if (!dropdown.contains(e.target) && e.target !== btn) dropdown.classList.remove("DropdownActive");
  });

  updateBtnText();

  createBtn.addEventListener("click", () => {
    if (!selectedProducts.length) return alert("Vui lòng chọn ít nhất 1 sản phẩm.");
    productIdInput.value = JSON.stringify(selectedProducts);
    console.log(selectedProducts);
  });
}

// ==========================
// Main async function
// ==========================
(async () => {
  const customerData = await fetchJSON(document.querySelector("#apiCustomerGet").content);
  if (customerData?.customers) setupCustomerAutocomplete(customerData.customers);

  const productData = await fetchJSON(document.querySelector("#apiProductGet").content);
  if (productData?.products) setupProductSelector(productData.products.map(p => ({
    code: p.product_id,
    name: p.product_name,
    price: p.product_price_output,
    group: p.productype_name
  })));
})();
