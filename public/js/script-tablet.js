$(window).resize(function(){

});


$(window).bind('scroll', function() {
    if ($(window).scrollTop() > 50) {
        $('.navbar').addClass('navbar-bajar');
    }
    else {
        $('.navbar').removeClass('navbar-bajar');
    }
});

$(window).load(function(){
    $("#intro").fadeOut('slow');
});

$(document).ready(function() {
    //jQuery for page scrolling feature - requires jQuery Easing plugin
    $('.page-scroll a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});