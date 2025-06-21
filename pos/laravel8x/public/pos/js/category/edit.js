
    // CATEGORY
    document.getElementById("FormAddImageBtn").addEventListener("click", function(event){
        event.preventDefault();
        document.getElementById("CategoryThumbnail").click();
    });
    // END CATEGORY
    
    // VALIDATOR
    Validator({
        form: '#FormCategoryAdd',
        rules: [
            Validator.tbRequired({
                selector: '#CategoryName',
                submit: true
            }),
            Validator.tbRequired({
                selector: '#CategoryPriceInput',
                submit: true
            }),
            Validator.isPInt({
                selector: '#CategoryPriceInput',
                submit: true
            }),
            Validator.tbRequired({
                selector: '#CategoryPriceOutput',
                submit: true
            }),
            Validator.isPInt({
                selector: '#CategoryPriceOutput',
                submit: true
            }),
            Validator.slbRequired({
                selector: '#CategoryCategory',
                submit: true
            }),
            Validator.tbRequired({
                selector: '#CategoryQuantity',
                submit: true
            }),
            Validator.isPInt({
                selector: '#CategoryQuantity',
                submit: true
            }),
            Validator.tbRequired({
                selector: '#CategoryUnit',
                submit: true
            })
        ],
        onSubmit: (data) => {
            alert('Submit Form Success');
        }
    });
    // END VALIDATOR