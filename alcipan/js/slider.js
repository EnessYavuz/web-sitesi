const slides = [
    "slideLogo",
    "slide1",
    "slide2",
    "slide3",
    "slide4",
    "slide5",
    "slide6",
    "slide7",
    "slide8",
    "slide9",
    "slide10",
];
let currentSlide = 0;
function changeSlide() {
    console.log("çalıştı");
    console.log(slides[currentSlide]);
    const anasayfa = document.querySelector('.Anasayfa');
    console.log(currentSlide);
    anasayfa.classList.remove(slides[currentSlide].toString())
    currentSlide + 1 >= slides.length ?
        anasayfa.classList.add(slides[0].toString()) :
        anasayfa.classList.add(slides[currentSlide + 1].toString())
    currentSlide + 1 >= slides.length ? currentSlide = 0 : currentSlide++;
}
setInterval(changeSlide, 3000);