
// VALIDATOR
Validator({
    form: '#FormStringorderEdit',
    items: [
        Validator.tbRequired({
            selector: '#CustomerId'
        }),
        Validator.tbRequired({
            selector: '#StringType'
        }),
        Validator.tbRequired({
            selector: '#StringorderStatus'
        }),
        Validator.tbRequired({
            selector: '#StringorderKG'
        }),
        Validator.sbRequired({
            selector: '#StringorderIspayment'
        }),
        Validator.sbRequired({
            selector: '#StringorderStatus'
        }),
        Validator.sbRequired({
            selector: '#StringorderGen'
        })
    ],
    onSubmit: (form) => {
        document.getElementById("ModalLoading").style.display = "block";
        form.submit();
    }
});
// END VALIDATOR

document.getElementById('StringType').addEventListener("change", function (e) {
    let stringType = document.getElementById('StringType');
    let stringTypeSelected = stringType.options[stringType.selectedIndex].dataset;
    document.getElementById('StringPriceInput').value  = stringTypeSelected.string_price_input;
    document.getElementById('StringPriceOutput').value = stringTypeSelected.string_price_output;
    document.getElementById('StringorderType').value = stringTypeSelected.string_type;
});

document.getElementById('StringType').dispatchEvent(new Event('change'));