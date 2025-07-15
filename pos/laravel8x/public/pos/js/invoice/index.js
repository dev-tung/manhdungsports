let invoiceStatuses = document.querySelectorAll(".InvoiceStatus");
invoiceStatuses.forEach( invoiceStatus => {
    updateColor(invoiceStatus, [0, 1, 3]);
    invoiceStatus.addEventListener("change", function(){
        document.getElementById("ModalLoading").style.display = "block";
        let apiInvoiceStatus = document.querySelector("#apiInvoiceStatus").content;
        fetch(apiInvoiceStatus, {
            method: 'POST', 
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                "X-CSRF-Token": document.querySelector('#CsrfToken').content
            },
            body: JSON.stringify({ invoice_id: invoiceStatus.getAttribute('data-invoice_id'), invoice_status: invoiceStatus.value })
        })
        .then(response => {
            updateColor(invoiceStatus, [0, 1, 3]);
            document.getElementById("ModalLoading").style.display = "none";
        })
    });
})

let invoiceIspayments = document.querySelectorAll(".InvoiceIspayment");

function updateColor(element, dangerStatus){
    if(  dangerStatus.includes(parseInt(element.value)) ) element.classList.add('Text_Danger');
    else element.classList.remove('Text_Danger');
}

invoiceIspayments.forEach(invoiceIspayment => {
    updateColor(invoiceIspayment, [0]);
    invoiceIspayment.addEventListener("change", function(){
        document.getElementById("ModalLoading").style.display = "block";
        let apiInvoiceIspayment = document.querySelector("#apiInvoiceIspayment").content;
        fetch(apiInvoiceIspayment, {
            method: 'POST', 
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                "X-CSRF-Token": document.querySelector('#CsrfToken').content
            },
            body: JSON.stringify({ invoice_id: invoiceIspayment.getAttribute('data-invoice_id'), invoice_ispayment: invoiceIspayment.value })
        })
        .then(response => {
            updateColor(invoiceIspayment, [0]);
            document.getElementById("ModalLoading").style.display = "none";
        })
    });
})
