
// VALIDATOR
Validator({
    form: '#FormInvoiceAdd',
    items: [
        Validator.tbRequired({
            selector: '#CustomerId'
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