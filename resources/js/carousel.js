const carousel = document.getElementById("carousel");
const carouselTrack = document.getElementById("carousel-track");
let intervalId;

function moveCarousel() {
    intervalId = setInterval(() => {
        carouselTrack.style.transition = "transform 1s ease";
        carouselTrack.style.transform = "translateX(-100%)";

        setTimeout(() => {
            carouselTrack.appendChild(carouselTrack.firstElementChild);
            carouselTrack.style.transition = "none"
            carouselTrack.style.transform = "translateX(0)";
        }, 1000);
    }, 5000);
}

function stopCarousel() {
    clearInterval(intervalId);
}

moveCarousel();

carouselTrack.addEventListener("mouseover", stopCarousel);
carouselTrack.addEventListener("mouseout", moveCarousel);
