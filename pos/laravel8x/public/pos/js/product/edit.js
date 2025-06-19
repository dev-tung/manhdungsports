
    // PRODUCT
    document.getElementById("FormAddImageBtn").addEventListener("click", function(event){
        event.preventDefault();
        document.getElementById("Productthumbnail").click();
    });
    // END PRODUCT
    
    // VALIDATOR
    Validator({
        form: '#FormProductAdd',
        rules: [
            Validator.tbRequired({
                selector: '#ProductName',
                submit: true
            }),
            Validator.tbRequired({
                selector: '#ProductPriceInput',
                submit: true
            }),
            Validator.isPInt({
                selector: '#ProductPriceInput',
                submit: true
            }),
            Validator.tbRequired({
                selector: '#ProductPriceOutput',
                submit: true
            }),
            Validator.isPInt({
                selector: '#ProductPriceOutput',
                submit: true
            }),
            Validator.slbRequired({
                selector: '#ProductCategory',
                submit: true
            }),
            Validator.tbRequired({
                selector: '#ProductQuantity',
                submit: true
            }),
            Validator.isPInt({
                selector: '#ProductQuantity',
                submit: true
            }),
            Validator.tbRequired({
                selector: '#ProductUnit',
                submit: true
            })
        ],
        onSubmit: (data) => {
            alert('Submit Form Success');
        }
    });
    // END VALIDATOR