
// Function
let Functions = {
    fileUpload : async function (element, folder, callback) {
        const formData = new FormData();
        formData.append("_token", document.querySelector("#CsrfToken").content);
        formData.append("file", element.files[0]);
        formData.append("folder", folder);

        try {
            const response = await fetch( document.querySelector("#api_file_upload").content,
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
        
    },
    fileMove : async function (oldPath, newPath, callback) {
        const formData = new FormData();
        formData.append("_token", document.querySelector("#CsrfToken").content);
        formData.append("oldPath", oldPath);
        formData.append("newPath", newPath);

        try {
            const response = await fetch( document.querySelector("#api_file_move").content,
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