
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

let _b = document.querySelector('input[data-modal-action="toggle"]');
let _e = document.querySelector(_b.getAttribute('data-modal-target'));

let customerSearchModal = new Promise((resolve, reject) => {
    document.getElementById('CustomerSearch').style.display = "none";
    document.getElementById("ModalLoading").style.display = "block";

    _b.addEventListener("click", function(){
        _e.classList.add("Show");
        document.getElementById('CustomerSearchFormInput').focus();
    });
    
    _e.addEventListener('click', function(event){
        if (_e !== event.target) return;
        _e.classList.remove("Show");
    }, false); 

    document.getElementById("CustomerSearchForm_Reset").addEventListener("click", function(){
        document.getElementById("CustomerSearchFormInput").value = "";
        document.getElementById('CustomerSearchResult').innerHTML = "";
    });

    document.onkeyup = function(press) {
        if(press.key === "Escape") {
            _e.classList.remove("Show");
        }
    }

    resolve(true);
});

customerSearchModal.then(response => {
    if( response ){
        let apiCustomerGet = document.querySelector("#apiCustomerGet").content;
        fetch(apiCustomerGet,{
            method: 'GET', 
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                "X-CSRF-Token": document.querySelector('#CsrfToken').content
            }
        })
        .then(response => {
            return response.json();
        })
        .then(response => {
            if( response.customers ){
                document.getElementById('CustomerSearch').style.display = "block";
                document.getElementById("ModalLoading").style.display = "none";
                const searchInput = document.getElementById('CustomerSearchFormInput');

                searchInput.addEventListener("keyup", () => {
                    let fetchCustomerDone = new Promise((resolve, reject) => {
                        let CustomerSearchResult = document.getElementById('CustomerSearchResult');
                        let SearchValue = searchInput.value;

                        if( SearchValue == '' ){
                            CustomerSearchResult.innerHTML = `<p class="CustomerSearchResult_No">No recent searches</p>`;
                            return;
                        }

                        function GetSearchItem(Content, SearchValue, Item){
                            Content = Content.replace(new RegExp(SearchValue, 'gi'), '<mark>$&</mark>');
                            return `<div class="CustomerSearchItem" data-customer_id="${Item.customer_id}" data-customer_name="${Item.customer_name}">
                                        <div class="CustomerSearchContent">
                                            <p class="CustomerSearchContent-Desc">${Content}</p>
                                        </div>
                                    </div>`;
                        } 

                        CustomerSearchResult.innerHTML = '';
                        response.customers.forEach(Item => {
                            let Content = Item.customer_name + ' - ' + Item.customergroup_name;
                            if( Content.toUpperCase().indexOf(SearchValue.toUpperCase()) != -1 ){
                                CustomerSearchResult.innerHTML += GetSearchItem(Content, SearchValue, Item);
                            }
                        });

                        resolve(true);
                    });

                    fetchCustomerDone.then( response =>  {
                        document.querySelectorAll('.CustomerSearchItem').forEach(item => {
                            item.addEventListener("click", function(){
                                document.getElementById('CustomerId').value = item.getAttribute('data-customer_id');
                                let customerName = document.getElementById('CustomerName');
                                customerName.value = item.getAttribute('data-customer_name');
                                customerName.focus();
                                customerName.blur();
                                _e.classList.remove("Show");
                            });
                        })
                    })
                });
                // END KEYUP EVENT

            }
        });
    }

});


