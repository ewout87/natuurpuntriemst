$(document).ready(function () {
    new WOW().init();
    plyr.setup();

    var activeSlide = $('.projects .carousel-item.active').attr('id');
});    

$('.container').on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
