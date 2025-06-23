
// VALIDATOR
Validator({
    form: '#FormCategoryEdit',
    items: [
        Validator.tbRequired({
            selector: '#CategoryName'
        })
    ],
    onSubmit: (form) => {
        document.getElementById("ModalLoading").style.display = "block";
        form.submit();
    }
});
// END VALIDATOR