// CUSTOMER TOGGLE SEARCH
let _customerToggleInput = document.querySelector('#CustomerName');
let _customerSearchBox = document.querySelector("#CustomerSearchModal");

let customerToggleSearchInit = new Promise((success, error) => {
    try {
        document.getElementById('CustomerSearch').style.display = "none";
        document.getElementById("ModalLoading").style.display = "block";

        _customerToggleInput.addEventListener("click", function(){
            _customerSearchBox.classList.add("Show");
            document.getElementById('CustomerSearchFormInput').focus();
        });
        
        _customerSearchBox.addEventListener('click', function(event){
            if (_customerSearchBox !== event.target) return;
            _customerSearchBox.classList.remove("Show");
        }, false); 

        document.getElementById("CustomerSearchForm_Reset").addEventListener("click", function(){
            document.getElementById("CustomerSearchFormInput").value = "";
            document.getElementById('CustomerSearchResult').innerHTML = "";
        });

        document.onkeyup = function(press) {
            if(press.key === "Escape") {
                _customerSearchBox.classList.remove("Show");
            }
        }
        
        success(true);
    }
    catch(err) {
        error('customerToggleSearchInit Fail!');
    }
    
});

let customerToggleSearchFetch = new Promise((success, error) => {
    try {
        let api_customer_get = document.querySelector("#api_customer_get").content;
        fetch(api_customer_get, {
            method: 'GET', 
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                "X-CSRF-Token": document.querySelector('#CsrfToken').content
            }
        })
        .then(response => {
            document.getElementById('CustomerSearch').style.display = "block";
            document.getElementById("ModalLoading").style.display = "none";
            success(response.json());
        })
    }
    catch(err) {
        error('customerToggleSearchFetch Fail!');
    }
});

let customerToggleSearchKeyup = function(object){
    return new Promise((success, error) => {
        try {
            const searchInput = document.getElementById('CustomerSearchFormInput');
            searchInput.addEventListener("keyup", () => {
                let CustomerSearchResult = document.getElementById('CustomerSearchResult');
                let SearchValue = searchInput.value;

                if( SearchValue == '' ){
                    CustomerSearchResult.innerHTML = `<p class="CustomerSearchResult_No">No recent searches</p>`;
                    return;
                }

                CustomerSearchResult.innerHTML = '';
                object.customers.forEach(Item => {
                    let Content = Item.customer_name + ' - ' + Item.customergroup_name;
                    if( Content.toUpperCase().indexOf(SearchValue.toUpperCase()) != -1 ){
                        Content = Content.replace(new RegExp(SearchValue, 'gi'), '<mark>$&</mark>');
                        CustomerSearchResult.innerHTML += 
                        `<div class="CustomerSearchItem" data-customer_id="${Item.customer_id}" data-customer_name="${Item.customer_name}">
                            <div class="CustomerSearchContent">
                                <p class="CustomerSearchContent-Desc">${Content}</p>
                            </div>
                        </div>`;
                    }
                });

                document.querySelectorAll('.CustomerSearchItem').forEach(item => {
                    item.addEventListener("click", function(){
                        document.getElementById('CustomerId').value = item.getAttribute('data-customer_id');
                        let customerName = document.getElementById('CustomerName');
                        customerName.value = item.getAttribute('data-customer_name');
                        discountAutoFill(customerName.value);
                        customerName.focus();
                        customerName.blur();
                        _customerSearchBox.classList.remove("Show");
                    });
                })

                function discountAutoFill(customerName){
                    if( customerName == 'Khoa' ) document.getElementById('InvoiceDiscount').value = 15000;
                }

            });
        }
        catch(err) {
            error('customerToggleSearchKeyup Fail!');
        }
    });
}

customerToggleSearchInit
.then( response => {
    return customerToggleSearchFetch;
})
.then( response => {
    customerToggleSearchKeyup(response);
})
.catch( response => console.log(response) )

// CUSTOMER TOGGLE SEARCH




// PRODUCT TOGGLE SEARCH
let _productToggleInput = document.querySelector('#ProductName');
let _productSearchBox = document.querySelector("#ProductSearchModal");

let productToggleSearchInit = new Promise((success, error) => {
    try {
        document.getElementById('ProductSearch').style.display = "none";
        document.getElementById("ModalLoading").style.display = "block";

        _productToggleInput.addEventListener("click", function(){
            _productSearchBox.classList.add("Show");
            document.getElementById('ProductSearchFormInput').focus();
        });
        
        _productSearchBox.addEventListener('click', function(event){
            if (_productSearchBox !== event.target) return;
            _productSearchBox.classList.remove("Show");
        }, false); 

        document.getElementById("ProductSearchForm_Reset").addEventListener("click", function(){
            document.getElementById("ProductSearchFormInput").value = "";
            document.getElementById('ProductSearchResult').innerHTML = "";
        });

        document.onkeyup = function(press) {
            if(press.key === "Escape") {
                _productSearchBox.classList.remove("Show");
            }
        }
        
        success(true);
    }
    catch(err) {
        error('productToggleSearchInit Fail!');
    }
    
});

let productToggleSearchFetch = new Promise((success, error) => {
    try {
        let api_product_get = document.querySelector("#api_product_get").content;
        fetch(api_product_get, {
            method: 'GET', 
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                "X-CSRF-Token": document.querySelector('#CsrfToken').content
            }
        })
        .then(response => {
            document.getElementById('ProductSearch').style.display = "block";
            document.getElementById("ModalLoading").style.display = "none";
            success(response.json());
        })
    }
    catch(err) {
        error('productToggleSearchFetch Fail!');
    }
});

let productToggleSearchKeyup = function(object){
    return new Promise((success, error) => {
        try {
            const searchInput = document.getElementById('ProductSearchFormInput');
            searchInput.addEventListener("keyup", () => {
                let ProductSearchResult = document.getElementById('ProductSearchResult');
                let SearchValue = searchInput.value;

                if( SearchValue == '' ){
                    ProductSearchResult.innerHTML = `<p class="ProductSearchResult_No">No recent searches</p>`;
                    return;
                }

                ProductSearchResult.innerHTML = '';
                object.products.forEach(Item => {
                    let Content = '[' +Item.productype_name + '] ' + Item.product_name + ' - ' + Item.product_color + ' - ' + Item.product_size;
                    if( Content.toUpperCase().indexOf(SearchValue.toUpperCase()) != -1 ){
                        Content = Content.replace(new RegExp(SearchValue, 'gi'), '<mark>$&</mark>');
                        ProductSearchResult.innerHTML += 
                        `<div class="ProductSearchItem" data-product_id="${Item.product_id}" data-product_name="${Item.product_name}" data-product_quantity="${Item.product_quantity}">
                            <div class="ProductSearchContent">
                                <p class="CustomerSearchTitle">${Item.product_name} - ${Item.product_price_output}</p>  
                                <p class="ProductSearchContent-Desc">${Content}</p>
                            </div>
                        </div>`;
                    }
                });

                document.querySelectorAll('.ProductSearchItem').forEach(item => {
                    item.addEventListener("click", function(){
                        document.getElementById('ProductId').value = item.getAttribute('data-product_id');
                        document.getElementById('InvoiceQuantity').value = 1;
                        document.getElementById('InvoiceQuantity').setAttribute('max', item.getAttribute('data-product_quantity'));
                        document.getElementById('ProductName').value = item.getAttribute('data-product_name');
                        document.getElementById('ProductName').focus();
                        document.getElementById('ProductName').blur();
                        _productSearchBox.classList.remove("Show");
                    });
                })

            });
        }
        catch(err) {
            error('productToggleSearchKeyup Fail!');
        }
    });
}

productToggleSearchInit
.then( response => {
    return productToggleSearchFetch;
})
.then( response => {
    productToggleSearchKeyup(response);
})
.catch( response => console.log(response) )

// PRODUCT TOGGLE SEARCH