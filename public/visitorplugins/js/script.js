window.addEventListener('load', function () {
    // Hide the loading overlay
    document.getElementById('loading-overlay').style.display = 'none';
});

const navbar = document.querySelector('.navbar');
let isNavbarSticky = false;

window.addEventListener('scroll', () => {
    if (window.scrollY > 100) {
        if (!isNavbarSticky) {
            navbar.classList.add('sticky');
            isNavbarSticky = true;
        }
    } else {
        if (isNavbarSticky) {
            navbar.classList.remove('sticky');
            isNavbarSticky = false;
        }
    }
});

// Get the main image and thumbnail images
const mainImage = document.getElementById('mainImage');
const thumbnails = document.querySelectorAll('.thumbnail');

// Add a click event listener to each thumbnail image
thumbnails.forEach((thumbnail) => {
    thumbnail.addEventListener('click', function () {
        // Set the main image's src to the clicked thumbnail's src
        mainImage.src = this.src;
    });
});

// Get the main image and thumbnail images
const mainImage2 = document.getElementById('mainImage2');
const thumbnails2 = document.querySelectorAll('.thumbnail2');

// Add a click event listener to each thumbnail image
thumbnails2.forEach((thumbnail) => {
    thumbnail.addEventListener('click', function () {
        // Set the main image's src to the clicked thumbnail's src
        mainImage2.src = this.src;
    });
});

$(document).ready(() => {
    $(".owl-carousel").owlCarousel({
        rtl: true,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 3000,
        items: 3,
        nav: true,
        loop: true,
        margin: 5,
        padding: 5,
        stagePadding: 5,
    });
	
	$(".values-carousel").owlCarousel({
        items: 5,
    });
});
