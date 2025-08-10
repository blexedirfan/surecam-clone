$(document).ready(function () {
    $('.sc-slider-list').slick({
        dots: true, // Show dots for navigation
        infinite: true, // Infinite looping
        speed: 300, // Transition speed
        slidesToShow: 1, // Number of slides to show
        slidesToScroll: 1, // Number of slides to scroll
        prevArrow: '<button type="button" class="slick-prev">❮</button>', // Custom previous arrow
        nextArrow: '<button type="button" class="slick-next">❯</button>' // Custom next arrow
    });
});
