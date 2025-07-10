Validator.message = {
    required: "Vui lòng không để trống thông tin này!",
    int: "Vui lòng nhập vào số > 0!"
};

function Validator(params){
    if( params.items ){
        onElementChange(params);
        onFormSubmit(params);
    }

    function onElementChange(params){
        params.items.forEach(item => {
            let element = document.querySelector(item.param.selector);
            element.addEventListener(item.event, () => {
                let invalidElement = undefined;
                invalidElement = invalidClassify(item);
                if( invalidElement ==  undefined && item.param.valid) item.param.valid(element);
            });
        });
    }

    function onFormSubmit(params){
        var form = document.querySelector(params.form);
        form.onsubmit = function (e) {
            e.preventDefault();  
            let invalidElement = [];
            params.items.forEach(item => {
                let checkResponse = invalidClassify(item);
                if( checkResponse !== undefined ){
                    invalidElement.push(checkResponse);
                } 
            });

            if( invalidElement.length == 0 ) params.onSubmit(form);
            else invalidElement[0].scrollIntoView({behavior: "smooth", block: "center", nline: "center"});
        }
    }

    function invalidClassify(item){
        let element = document.querySelector(item.param.selector);
        let errorMessage = item.check(element, item.param);
        let validateElement = element.closest(".FormValidate");
        if (errorMessage !== undefined) {
            validateElement.classList.add("FormInvalid");
            validateElement.classList.remove("FormValid");
            validateElement.querySelector(".FormErrorMessage").innerText = errorMessage;
            return element;
        } 

        validateElement.classList.add("FormValid");
        validateElement.classList.remove("FormInvalid");
        validateElement.querySelector(".FormErrorMessage").innerText = "";
    }
}


Validator.tbRequired = function(param){
    return {
        event : 'blur',
        param : param,
        check : function (element, param) {
            return element.value.trim() ? undefined : Validator.message.required;
        }
    }
}

Validator.sbRequired = function(param){
    return {
        event : 'change',
        param : param,
        check : function (element, param) {
            return element.value.trim() ? undefined : Validator.message.required;
        }
    }
}

Validator.tbInt = function(param){
    return {
        event : 'blur',
        param : param,
        check : function (element, param) {
            return parseInt(element.value) > 0 ? undefined : Validator.message.int;
        }
    }
}

Validator.file = function (param) {
    return {
        event : 'change',
        param : param,
        check: function (element, param) {
            function fileValidation(element, param){

                if ( !( param.required == undefined || !param.required ) && !element.value.trim()) {
                    return Validator.message.required;
                }

                if( element.value.trim() ){
                    function getFileExtension (element) {
                        var fileName = element.files[0].name;
                        return fileName.split(".").pop().toLowerCase();
                    }

                    // Check file extension
                    if (param.extension) {
                        var fileExtension = getFileExtension(element);
                        if (!param.extension.includes(fileExtension))
                            return "Đuôi mở rộng cho phép" + " (" + param.extension.join(" | ") + ")";
                    }

                    // Check file size
                    if (param.size) {
                        var fileSize = element.files[0].size;
                        var allowFileSize = param.size * 1100000;
                        if (fileSize >= allowFileSize)
                            return "File không được vượt quá " + param.size + "MB";
                    }
                }

                return undefined;
            }

            return fileValidation(element, param);
        },
    };
}

