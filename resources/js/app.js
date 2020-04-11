require("./bootstrap");
const slides = document.querySelectorAll(".slide");
const nextBtn = document.querySelector("#next");
const prevBtn = document.querySelector("#prev");
const auto = true;
const intervalTime = 5000;
let slideInterVal;

const nextSlide = () => {
    //Get current class from the slide
    const current = document.querySelector(".current");

    //Remove current class from  the slide
    current.classList.remove("current");

    if (current.nextElementSibling) {
        current.nextElementSibling.classList.add("current");
    } else {
        slides[0].classList.add("current");
    }
    setTimeout(() => current.classList.remove("current"), intervalTime);
};
const prevSlide = () => {
    //Get current class from the slide
    const current = document.querySelector(".current");

    //Remove current class from  the slide
    current.classList.remove("current");

    if (current.previousElementSibling) {
        current.previousElementSibling.classList.add("current");
    } else {
        slides[slides.length - 1].classList.add("current");
    }
    setTimeout(() => current.classList.remove("current"), intervalTime);
};

//Event Listeners
if (nextBtn != null) {
    nextBtn.addEventListener("click", e => {
        nextSlide();
        if (auto) {
            clearInterval(slideInterVal);
            slideInterVal = setInterval(nextSlide, intervalTime);
        }
    });
    //Auto Sliding
    if (auto) {
        slideInterVal = setInterval(nextSlide, intervalTime);
    }
}
if (prevBtn != null) {
    prevBtn.addEventListener("click", e => {
        prevSlide();
        if (auto) {
            clearInterval(slideInterVal);
            slideInterVal = setInterval(nextSlide, intervalTime);
        }
    });
}

// When the user scrolls the page, execute myFunction
window.onscroll = function() {
    myFunction();
};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky-nav");
    } else {
        navbar.classList.remove("sticky-nav");
    }
}
