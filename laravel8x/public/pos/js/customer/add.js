
// VALIDATOR
Validator({
    form: '#FormStringAdd',
    items: [
        Validator.tbRequired({
            selector: '#CustomerId'
        }),
        Validator.sbRequired({
            selector: '#StringType'
        })
    ],
    onSubmit: (form) => {
        document.getElementById("ModalLoading").style.display = "block";
        form.submit();
    }
});
// END VALIDATOR