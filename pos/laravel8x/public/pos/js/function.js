
// Function
var Functions = {
    uploadFile: function ({ selector, upload }) {
        document.getElementById("modal__loading").style.display = "block";

        async function call(formData) {
            try {
                const response = await fetch(
                    document.querySelector("#upload-url").content,
                    {
                        method: "POST",
                        body: formData,
                    }
                );
                const result = await response.json();

                if (result.success && result.data) {
                    var fileNameElement = document
                        .querySelector(selector)
                        .closest(".validate")
                        .querySelector(".scholarship-section__field-file-edit");
                    fileNameElement.innerText = result.data;
                    document.getElementById("modal__loading").style.display =
                        "none";
                }
            } catch (error) {
                console.error("Error:", error);
            }
        }

        const formData = new FormData();
        formData.append(
            "_token",
            document.querySelector("#csrf-token").content
        );
        formData.append("file", document.querySelector(selector).files[0]);
        formData.append("field", upload);
        formData.append(
            "sid",
            document.querySelector("#scholarship-student-sid").content
        );

        call(formData);
    },
    showPhoto: function (validate, evt) {
        const ctx = document
            .getElementById("scholarship-section__field-input-signature")
            .getContext("2d");
        if (validate == undefined) {
            var imageData;
            var tgt = evt.target || window.event.srcElement,
                files = tgt.files;

            function getImageData(imageObj) {
                var fullWidth = (350 * imageObj.height) / imageObj.width;
                ctx.clearRect(0, 0, imageObj.width, imageObj.height);
                ctx.drawImage(imageObj, 0, 0, 350, fullWidth);
                imageData = ctx.getImageData(
                    0,
                    0,
                    imageObj.width,
                    imageObj.height
                ).data;
                document.getElementById(
                    "scholarship-section__field-upload-signature-hidden"
                ).value = "upload";
            }

            function showImage(fileReader) {
                var img = document.getElementById(
                    "scholarship-section__field-img-signature"
                );
                img.onload = () => getImageData(img);
                img.src = fileReader.result;
                document.getElementById(
                    "scholarship-section__field-file-upload-signature-btn"
                ).disabled = false;
                document.querySelector(
                    ".scholarship-section__field-signature .error-message"
                ).innerHTML = "";
            }

            // FileReader support
            if (FileReader && files && files.length) {
                var fr = new FileReader();
                fr.onload = () => showImage(fr);
                fr.readAsDataURL(files[0]);
            }
        } else {
            ctx.clearRect(0, 0, 350, 300);
        }
    },
    deleteErrorMessage: function(selector, error){
        var element = document.querySelector(selector);
        if( error ){
            document.querySelector(error).innerText = '';
        }else{
            element.closest('.validate').querySelector('.FormErrorMessage').innerText = '';
        }
        element.closest('.validate').classList.remove('FormInvalid', 'FormValid');
        if( fileElement.value ){
            fileElement.value = '';
        }
    },
    displayNoteMessage: function(selector, extension, size){
        var fileNoteMsg = document.querySelector(selector).closest('.validate').querySelector('.note-message-file');
        if( fileNoteMsg ){
            fileNoteMsg.innerText = 'Allowable extension (' + extension.join(' | ') + ') and size <= '+ size +'MB';
        }
    },
    checkfile: function({element, required, extension, size}){
        if( required && !element.value.trim() ){
            return Validator.message.required;
        }

        // Check file extension
        if( extension && element.value.trim() ){
            var fileExtension = Functions.getFileExtension(element);
            if( !extension.includes(fileExtension) ){
                return Validator.message.extension + '(' + extension.join(' | ') + ')';
            }
        }

        // Check file size
        if( size && element.value.trim() ){
            var fileSize = element.files[0].size;
            var allowFileSize = size * 1000000;
            if( fileSize >=  allowFileSize){
                return Validator.message.size + '(' + size + 'MB)';                
            }
        }

        return undefined;
    },
    getFileExtension : function( element ){
        var fileName = element.files[0].name;
        return fileName.split('.').pop();
    },
    cbChecked : function(cbs){
        var checkedFlag = false;
        cbs.forEach(cb => {
            if (cb.checked) {
                checkedFlag = true;
            }
        });
        return checkedFlag;
    },
    rbChecked : function(rds){
        var checkedFlag = false;
        rds.forEach(rb => {
            if (rb.checked) {
                checkedFlag = true;
            }
        });
        return checkedFlag;
    },
    rbShowHide : function({rbClass, eID, status}){
        // Element show or hide by default
        var e = document.getElementById(eID);
        e.style.display = ( status ) ? 'block' : 'none';
    
        // Check
        var rbs = document.querySelectorAll('.' + rbClass);
        rbs.forEach(rb => {
            rb.addEventListener("click", function(){ 
                e.style.display = ( rb.value == 1 ) ? 'block' : 'none';
            });
        });
    
        e.scrollIntoView();
    },
    cbShowHide : function({cbClass, eID, status}){
        var e = document.getElementById(eID);
        // Element show or hide by default
        e.style.display = ( status ) ? 'block' : 'none';
    
        var cbs = document.querySelectorAll('.' + cbClass);
    
        cbs.forEach(cb => {
            cb.addEventListener("click", function(){ 
                e.style.display = Functions.cbChecked(cbs) ? 'block' : 'none';
            });
        });
    
        e.scrollIntoView();
    }
};