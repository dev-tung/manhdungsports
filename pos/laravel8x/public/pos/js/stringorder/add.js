
// VALIDATOR
Validator({
    form: '#FormStringorderAdd',
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