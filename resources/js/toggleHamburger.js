const hamburger = document.getElementById("hamburger");
const mobileMenu = document.getElementById("mobile-menu");

hamburger.addEventListener("click", () => {
    // Toggle mobile menu slide-in and hamburger "X" effect
    mobileMenu.classList.toggle("translate-x-full");
    hamburger.classList.toggle("hamburger-open");
});
