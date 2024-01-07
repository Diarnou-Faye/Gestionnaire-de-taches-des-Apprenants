// Scroll Events
const navbg = document.querySelector("nav");

window.addEventListener("scroll", () => {
    console.log(window.screenY);

    if (window.scrollY > 100) {
        navbg.style.background = " #007FC8";
    } else {
        navbg.style.background = "transparent";
    }
});
