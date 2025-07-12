
// VALIDATOR
Validator({
    form: '#FormInvoiceAdd',
    items: [
        Validator.tbRequired({
            selector: '#CustomerName'
        }),
        Validator.tbRequired({
            selector : '#InvoiceQuantity'
        }),
        Validator.sbRequired({
            selector: '#ProductType',
            valid : productType => {
                let productTypeSelected = productType.options[productType.selectedIndex].dataset;
                document.getElementById('ProductPriceInput').value  = productTypeSelected.product_price_input;
                document.getElementById('ProductPriceOutput').value = productTypeSelected.product_price_output;
                document.getElementById('ProductQuantity').value = productTypeSelected.product_quantity;
                let invoiceQuantity = document.getElementById('InvoiceQuantity');
                invoiceQuantity.value = 1;
                invoiceQuantity.setAttribute("max", productTypeSelected.product_quantity);
            }
        }),
        Validator.tbInt({
            selector : '#InvoiceQuantity'
        }),
        Validator.sbRequired({
            selector: '#InvoiceIspayment'
        }),
        Validator.sbRequired({
            selector: '#InvoiceStatus'
        })
    ],
    onSubmit: (form) => {
        document.getElementById("ModalLoading").style.display = "block";
        form.submit();
    }
});
// END VALIDATOR


// CUSTOMER TOGGLE SEARCH
let _customerToggleInput = document.querySelector('input[data-modal-action="toggle"]');
let _customerSearchBox = document.querySelector(_customerToggleInput.getAttribute('data-modal-target'));

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
        let apiCustomerGet = document.querySelector("#apiCustomerGet").content;
        fetch(apiCustomerGet, {
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
                        customerName.focus();
                        customerName.blur();
                        _customerSearchBox.classList.remove("Show");
                    });
                })
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

// END CUSTOMER TOGGLE SEARCH