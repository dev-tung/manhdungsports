

document.getElementById('DownloadStringTable').addEventListener("click", function (e) {
    html2canvas(document.querySelector("#TableString")).then(canvas => {
        const base64img = canvas.toDataURL("img/png");
        var anchor = document.createElement('a');
        anchor.setAttribute("href", base64img);
        anchor.setAttribute("download", "Bảng giá căng cước.png");
        anchor.click();
        anchor.remove();
    });
});