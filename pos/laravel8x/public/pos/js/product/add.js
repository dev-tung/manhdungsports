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
        }),
        Validator.tbRequired({
            selector: '#ProductPriceOutput'
        }),
        Validator.tbRequired({
            selector: '#ProductQuantity'
        }),
        Validator.tbRequired({
            selector: '#ProductUnit'
        }),
        Validator.sbRequired({
            selector: '#ProductCategory'
        })
    ],
    onSubmit: (form) => {
        document.getElementById("ModalLoading").style.display = "block";
        form.submit();
    }
});
// END VALIDATOR