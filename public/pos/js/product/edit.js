// thumbnail
let ProductThumbnail = document.getElementById("ProductThumbnail");
document.getElementById("FormthumbnailEditBtn").addEventListener("click", function(event){
    event.preventDefault();
    ProductThumbnail.click();
});

// VALIDATOR
Validator({
    form: '#FormProductEdit',
    items: [
        Validator.file({
            selector : '#ProductThumbnail',
            extension: ['jpg', 'jpeg', 'png'],
            size : 1,
            valid : (element) => {
                // Upload image function
                document.getElementById("ModalLoading").style.display = "block";
                Functions.fileUpload(element, "upload/product/tmp", response => {
                    if( response.success ){
                        document.getElementById("FormthumbnailDisplayImg").setAttribute('src', response.url);
                        document.getElementById("FormthumbnailDisplayLink").setAttribute('href', response.url);
                        document.getElementById("ProductThumbnailValue").value = response.fileName;
                        document.getElementById("FormthumbnailDisplayLink").style.display = "block";
                        document.getElementById("ModalLoading").style.display = "none";
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
        Validator.sbRequired({
            selector: '#ProductType'
        }),
        Validator.tbRequired({
            selector: '#ProductImportAt'
        }),
    ],
    onSubmit: (form) => {
        document.getElementById("ModalLoading").style.display = "block";
        form.submit();
    }
});
// END VALIDATOR