
function Validator(params){
    if( params.items ){
        onElementChange(params.items);
        onFormSubmit(params);
    }
}

function onElementChange(items){
    items.forEach(item => {
        let element = document.querySelector(item.selector);
        element.addEventListener(item.event, () => invalidClassify(element, item.checkFunction));
    });
}

function onFormSubmit(params){
    var form = document.querySelector(params.form);
    form.onsubmit = function (e) {
        e.preventDefault();  
        let invalidElement = undefined;
        params.items.forEach(item => {
            let element = document.querySelector(item.selector);
            invalidElement = invalidClassify(element, item.checkFunction);
        });

        if( invalidElement ==  undefined) params.onSubmit(form);
        
        invalidElement.scrollIntoView({behavior: "smooth", block: "center", nline: "center"});
    }
}

function invalidClassify(element, checkFunction){
    let errorMessage = checkFunction(element);
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

 Validator.tbRequired = function(param){
    return {
        event : 'blur',
        selector : param.selector,
        checkFunction : function (element) {
            return element.value.trim() ? undefined : 'Vui lòng không để trống thông tin này!';
        }
    }
 }

  Validator.sbRequired = function(param){
    return {
        event : 'change',
        selector : param.selector,
        checkFunction : function (element) {
            return element.value.trim() ? undefined : 'Vui lòng không để trống thông tin này!';
        }
    }
 }