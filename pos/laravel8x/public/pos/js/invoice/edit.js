
// VALIDATOR
Validator({
    form: '#FormInvoiceEdit',
    items: [
        Validator.tbRequired({
            selector: '#CustomerName'
        }),
        Validator.tbRequired({
            selector: '#ProductName'
        }),
        Validator.tbRequired({
            selector : '#InvoiceQuantity'
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

