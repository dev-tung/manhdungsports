
// VALIDATOR
Validator({
    form: '#FormCustomergroupAdd',
    items: [
        Validator.tbRequired({
            selector: '#CustomergroupName'
        })
    ],
    onSubmit: (form) => {
        document.getElementById("ModalLoading").style.display = "block";
        form.submit();
    }
});
// END VALIDATOR