
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
            selector: '#StringorderKG'
        }),
        Validator.tbRequired({
            selector: '#StringOrderRevenue'
        }),
        Validator.sbRequired({
            selector: '#StringorderIspayment'
        }),
        Validator.sbRequired({
            selector: '#StringorderStatus'
        })
    ],
    onSubmit: (form) => {
        document.getElementById("ModalLoading").style.display = "block";
        form.submit();
    }
});
// END VALIDATOR