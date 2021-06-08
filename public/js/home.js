document.getElementById("sub_menu1").addEventListener("click", toggleNav1);
document.getElementById("sub_menu2").addEventListener("click", toggleNav2);


function toggleNav1() {
    var subItems1 = document.getElementById("myDropdown1");

    if (subItems1.className === "dropdown-menu") {
        subItems1.className += "submenu";
        subItems1.classList.toggle("show");

    } else {
        subItems1.className = "dropdown-menu";
    }
}

function toggleNav2() {
    var subItems2 = document.getElementById("myDropdown2");

    if (subItems2.className === "dropdown-menu") {
        subItems2.className += "submenu";
        subItems2.classList.toggle("show");

    } else {
        subItems2.className = "dropdown-menu";
    }
}



var slideIndex = 1;
showSlides(slideIndex);


function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slide");

    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex - 1].style.display = "block";

}