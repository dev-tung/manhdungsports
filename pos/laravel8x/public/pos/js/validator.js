

function onElementChange(params){
    if( params.items ){
        params.items.forEach(item => {
            let element = document.querySelector(item.selector);
            element.addEventListener(item.event, () => {

                let error = item.check(element);
                let validateElement = element.closest(".FormValidate");
                let errorMsgElement = error
                    ? document.querySelector(error)
                    : validateElement.querySelector(".FormErrorMessage");

                if (errMsg) {
                    validateElement.classList.add("FormInvalid");
                    validateElement.classList.remove("FormValid");
                    errorMsgElement.innerText = errMsg;
                } else {
                    validateElement.classList.add("FormValid");
                    validateElement.classList.remove("FormInvalid");
                    errorMsgElement.innerText = "";
                }

            });
        });
    }
}

function onFormSubmit(params){

}

function Validator(params){
    onElementChange(params);
    onFormSubmit(params);
}

 Validator.tbRequired = function(param){
    return {
        event : 'blur',
        selector : param.selector,
        check : function (element) {
            return element.value.trim() ? undefined : 'Vui lòng không để trống thông tin này!';
        }
    }
 }