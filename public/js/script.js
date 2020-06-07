const alert = document.getElementById("msg-flash");

if (alert) {
    setTimeout(() => {
        alert.remove();
    }, 7000);
}

/* ************************************************** */
const inputFile = document.querySelector("#file");
const previewContainer = document.querySelector("#preview-container");
// const previewImage = previewContainer.querySelector(".img-prev");

inputFile.addEventListener("change", function () {
    const filesList = this.files;
    if (filesList) {
        for (let i = 0; i < filesList.length; i++) {
            // console.log(filesList[i]);
            const reader = new FileReader();

            const previewImageDiv = document.createElement("div");
            previewImageDiv.classList.add("inline");

            const previewImage = document.createElement("img");
            previewImage.classList.add(
                "h-24",
                "mr-3",
                "inline",
                "w-32",
                "mb-3"
            );
            previewImageDiv.append(previewImage);

            reader.addEventListener("load", function (e) {
                e.preventDefault();
                previewContainer.append(previewImageDiv);
                previewImage.setAttribute("src", this.result);
            });

            reader.readAsDataURL(filesList[i]);
        }
    } else {
        previewImage.style.display = null;
    }
});
