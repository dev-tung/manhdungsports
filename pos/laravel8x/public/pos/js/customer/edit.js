
// VALIDATOR
Validator({
    form: '#FormCustomerEdit',
    items: [
        Validator.tbRequired({
            selector: '#CustomerName'
        }),
        Validator.sbRequired({
            selector: '#Customergroup'
        })
    ],
    onSubmit: (form) => {
        document.getElementById("ModalLoading").style.display = "block";
        form.submit();
    }
});
// END VALIDATOR