
// VALIDATOR
Validator({
    form: '#FormProductorderAdd',
    items: [
        Validator.tbRequired({
            selector: '#CustomerId'
        }),
        Validator.tbRequired({
            selector: '#ProductType'
        }),
        Validator.tbRequired({
            selector: '#ProductorderQuantity'
        }),
        Validator.sbRequired({
            selector: '#ProductorderIspayment'
        }),
        Validator.sbRequired({
            selector: '#ProductorderStatus'
        })
    ],
    onSubmit: (form) => {
        document.getElementById("ModalLoading").style.display = "block";
        form.submit();
    }
});
// END VALIDATOR

document.getElementById('ProductType').addEventListener("change", function (e) {
    let productType = document.getElementById('ProductType');
    let productTypeSelected = productType.options[productType.selectedIndex].dataset;
    document.getElementById('ProductPriceInput').value  = productTypeSelected.product_price_input;
    document.getElementById('ProductPriceOutput').value = productTypeSelected.product_price_output;
});