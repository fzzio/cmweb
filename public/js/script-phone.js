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

function mostrarPaises(elemento){
    $(".contenedor-formulario").hide();
    var idPais = $(elemento).val();
    //alert($(elemento).val() );

    //1 Ecuador
    //2 Chile
    //3 Colombia
    //4 Mexico
    //5 Peru
    //6 Argetina

    switch (idPais){
        case '1':
            $("#contacto-ecuador").show();
            break;
        case '2':
            $("#contacto-chile").show();
            break;
        case '3':
            $("#contacto-colombia").show();
            break;
        case '4':
            $("#contacto-mexico").show();
            break;
        case '5':
            $("#contacto-peru").show();
            break;
        case '6':
            $("#contacto-argentina").show();
            break;            
        default:
            $("#contacto-chile").show();
            break;
    }
}

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