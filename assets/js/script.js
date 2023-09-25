const menuIcon = document.querySelector(".menu-icon");
const navList = document.querySelector(".container");

menuIcon.addEventListener("click", () => {
    navList.classList.toggle("active");
});