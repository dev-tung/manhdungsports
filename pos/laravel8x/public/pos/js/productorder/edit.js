
// VALIDATOR
Validator({
    form: '#FormProductorderEdit',
    items: [
        Validator.tbRequired({
            selector: '#CustomerId'
        }),
        Validator.tbRequired({
            selector: '#ProductorderType'
        }),
        Validator.tbRequired({
            selector: '#ProductorderOrderRevenue'
        }),
        Validator.sbRequired({
            selector: '#ProductorderorderIspayment'
        }),
        Validator.sbRequired({
            selector: '#ProductorderorderStatus'
        })
    ],
    onSubmit: (form) => {
        document.getElementById("ModalLoading").style.display = "block";
        form.submit();
    }
});
// END VALIDATOR