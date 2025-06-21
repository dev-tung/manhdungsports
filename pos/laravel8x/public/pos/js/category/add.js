// thumbnail
let CategoryThumbnail = document.getElementById("CategoryThumbnail");
document.getElementById("FormthumbnailAddBtn").addEventListener("click", function(event){
    event.preventDefault();
    CategoryThumbnail.click();
});

// VALIDATOR
Validator({
    form: '#FormCategoryAdd',
    items: [
        Validator.file({
            selector : '#CategoryThumbnail',
            extension: ['jpg', 'jpeg', 'png'],
            size : 1,
            valid : (element) => {
                // Upload image function
                document.getElementById("ModalLoading").style.display = "block";
                Functions.uploadfile(element, "upload/category/tmp", response => {
                    if( response.success ){
                        document.getElementById("FormthumbnailDisplayImg").setAttribute('src', response.uploadURL);
                        document.getElementById("FormthumbnailDisplayLink").setAttribute('href', response.uploadURL);
                        document.getElementById("CategoryThumbnailValue").value = response.fileName;
                        document.getElementById("FormthumbnailDisplayLink").style.display = "block";
                        document.getElementById("ModalLoading").style.display = "none";
                    }
                });
            }
        }),
        Validator.tbRequired({
            selector: '#CategoryName'
        }),
        Validator.tbRequired({
            selector: '#CategoryPriceInput'
        }),
        Validator.tbRequired({
            selector: '#CategoryPriceOutput'
        }),
        Validator.tbRequired({
            selector: '#CategoryQuantity'
        }),
        Validator.tbRequired({
            selector: '#CategoryUnit'
        }),
        Validator.sbRequired({
            selector: '#CategoryCategory'
        })
    ],
    onSubmit: (form) => {
        document.getElementById("ModalLoading").style.display = "block";

        form.submit();
    }
});
// END VALIDATOR