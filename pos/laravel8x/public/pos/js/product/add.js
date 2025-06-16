// THUMNAIL
document.getElementById("FormThumnailAddBtn").addEventListener("click", function(event){
    event.preventDefault();
    document.getElementById("ProductThumnail").click();
});

// VALIDATOR
Validator({
    form: '#FormProductAdd',
    items: [
        Validator.tbRequired({
            selector: '#ProductName'
        }),
        Validator.tbRequired({
            selector: '#ProductPriceInput'
        })
    ],
    onSubmit: (data) => {
        document.getElementById("ModalLoading").style.display = "block";
        data.form.submit();
    }
});
// END VALIDATOR