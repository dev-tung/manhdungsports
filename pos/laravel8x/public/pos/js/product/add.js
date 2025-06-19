// thumbnail
let ProductThumbnail = document.getElementById("ProductThumbnail");
document.getElementById("FormthumbnailAddBtn").addEventListener("click", function(event){
    event.preventDefault();
    ProductThumbnail.click();
});

// VALIDATOR
Validator({
    form: '#FormProductAdd',
    items: [
        Validator.file({
            selector : '#ProductThumbnail',
            extension: ['jpg', 'jpeg', 'png'],
            size : 1,
            valid : (element) => {
                // Upload image function
                document.getElementById("ModalLoading").style.display = "block";
                Functions.uploadfile(element, "upload/product/tmp", response => {
                    if( response.success ){
                        document.getElementById("ModalLoading").style.display = "none";
                        document.getElementById("FormthumbnailDisplayImg").setAttribute('src', response.uploadURL);
                        document.getElementById("FormthumbnailDisplayLink").setAttribute('href', response.uploadURL);
                        document.getElementById("FormthumbnailDisplayLink").style.display = "block";
                        document.getElementById("ProductThumbnailValue").value = response.uploadURL;
                    }
                });
            }
        }),
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