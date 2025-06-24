
// VALIDATOR
Validator({
    form: '#FormproductypeAdd',
    items: [
        Validator.tbRequired({
            selector: '#productypeName'
        })
    ],
    onSubmit: (form) => {
        document.getElementById("ModalLoading").style.display = "block";
        form.submit();
    }
});
// END VALIDATOR