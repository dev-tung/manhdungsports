let invoiceStatuses = document.querySelectorAll(".InvoiceStatus");
invoiceStatuses.forEach( invoiceStatus => {
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
            document.getElementById("ModalLoading").style.display = "none";
        })
    });
})

let invoiceIspayments = document.querySelectorAll(".InvoiceIspayment");
invoiceIspayments.forEach(invoiceIspayment => {
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
            document.getElementById("ModalLoading").style.display = "none";
        })
    });
})
