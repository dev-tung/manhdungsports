
// Function
let Functions = {
    uploadfile : async function (element, folder, callback) {
        const formData = new FormData();
        formData.append("_token", document.querySelector("#CsrfToken").content);
        formData.append("file", element.files[0]);
        formData.append("folder", folder);

        try {
            const response = await fetch( document.querySelector("#apiUploadFile").content,
                {
                    method: "POST",
                    body: formData,
                }
            );
            const result = await response.json();
            callback(result);

        } catch (error) {
            console.error("Error:", error);
        }
        
    }
}