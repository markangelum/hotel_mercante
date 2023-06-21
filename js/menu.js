const menuBtn = document.querySelector(".menu-btn");
const mainNav = document.querySelector(".main-nav");

menuBtn.addEventListener("click", () => {
    mainNav.classList.toggle("show");
});
