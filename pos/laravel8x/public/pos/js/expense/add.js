
// VALIDATOR
Validator({
    form: '#FormExpenseAdd',
    items: [
        Validator.tbRequired({
            selector: '#ExpenseName'
        }),
        Validator.tbRequired({
            selector: '#ExpenseType'
        }),
        Validator.tbRequired({
            selector: '#ExpenseMoney'
        }),
        Validator.tbRequired({
            selector: '#ExpenseIspayment'
        }),
    ],
    onSubmit: (form) => {
        document.getElementById("ModalLoading").style.display = "block";
        form.submit();
    }
});
// END VALIDATOR