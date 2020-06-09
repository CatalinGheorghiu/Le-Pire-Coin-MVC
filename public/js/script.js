//* 
const alert = document.getElementById("msg-flash");
//If the alert message class is available..
if (alert) {
    //Remove the message after 7s
    setTimeout(() => {
        alert.remove();
    }, 7000);
}

//*PREVIEW IMAGES BEFORE SUBMIT
const inputFile = document.querySelector("#file");
const previewContainer = document.querySelector("#preview-container");
//If files added...
if (inputFile) {
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
}

//Instantiate the SwiperJS class
var swiper = new Swiper(".swiper-container", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    speed: 2500,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    slidesPerView: "auto",
    loop: true,
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
