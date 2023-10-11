window.addEventListener("scroll", function () {
    var header = document.querySelector(".header");
    if (window.pageYOffset > 0) {
        header.classList.add("background");
    } else {
        header.classList.remove("background");
    }
});
function handleMobileMenu() {
    var bodyElement = document.body;
    var htmlElement = document.documentElement;
    var mobileMenu = document.querySelector(".mobileMenu");
    var desktopMenu = document.getElementById("navbarSupportedContent")

    if (bodyElement.classList.contains("overflow")) {
        bodyElement.classList.remove("overflow");
        htmlElement.classList.remove("overflow");
        mobileMenu.classList.remove("right0");
        desktopMenu.classList.remove("menuOpen")

    } else {
        bodyElement.classList.add("overflow");
        htmlElement.classList.add("overflow");
        desktopMenu.classList.add("menuOpen")
        mobileMenu.classList.add("right0");

    }

}
function handleWindowResize() {
    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    var breakpoint = 768; // İstediğiniz genişlik değerini burada belirleyin
    var desktopMenu = document.getElementById("navbarSupportedContent")
    var logo = document.getElementById("logo")
    desktopMenu.classList.add("menuOpen")
    if (windowWidth < breakpoint) {
        desktopMenu.classList.add("menuOpen")
        logo.classList.add("mobile")
    } else {
        desktopMenu.classList.remove("menuOpen")
        logo.classList.remove("mobile")
    }
}

window.addEventListener("resize", handleWindowResize);

window.addEventListener("load", handleWindowResize);
