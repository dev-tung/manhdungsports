
// VALIDATOR
Validator({
    form: '#FormStringAdd',
    items: [
        Validator.tbRequired({
            selector: '#StringName'
        }),
        Validator.tbRequired({
            selector: '#StringPriceInput'
        }),
        Validator.tbRequired({
            selector: '#StringPriceOutput'
        }),
        Validator.sbRequired({
            selector: '#StringType'
        }),
        Validator.sbRequired({
            selector: '#StringColor'
        })
    ],
    onSubmit: (form) => {
        document.getElementById("ModalLoading").style.display = "block";
        form.submit();
    }
});
// END VALIDATOR