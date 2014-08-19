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


    $(".link-img-cliente").hover(function(){
        $(this).find(".img-c-normal").stop(true, true).hide();
        $(this).find(".img-c-hover").stop(true, true).show();
    },function(){
        $(this).find(".img-c-normal").stop(true, true).show();
        $(this).find(".img-c-hover").stop(true, true).hide();
    });
    //$("#carousel-slider-home .carousel-inner .item:first").addClass("active");

	/*$("#form-contacto").validate({
        debug: true,
        submitHandler: function(form) {
            
            alert("verificado");
            //window.location.href = "#deley-final";
        }
        ,
        rules: {
            nombreInput:  {
                required:true
            },
            apellidoInput:  {
                required:true
            },
            telefonoInput:  {
                required:true,
                minlength:7,
                maxlength:15,
                number:true
            },
            emailInput:{
                required:true,
                email: true
            },
            celularInput:  {
                required:true,
                minlength:10,
                maxlength:10,
                number:true
            },
            cedulaInput:  {
                required:true,
                minlength:10,
                maxlength:10,
                number:true
            },
            comentariosInput: {
                required:true
            }
        },
        showErrors: function(errorMap, errorList) {
            // Clean up any tooltips for valid elements
            $.each(this.validElements(), function (index, element) {
                var $element = $(element);

                $element.data("title", "") // Clear the title - there is no error associated anymore
                    .removeClass("error")
                    .tooltip("destroy");
            });

            // Create new tooltips for invalid elements
            $.each(errorList, function (index, error) {
                var $element = $(error.element);

                $element.tooltip("destroy") // Destroy any pre-existing tooltip so we can repopulate with new tooltip content
                    .data("title", error.message)
                    .addClass("error")
                    .tooltip(); // Create a new tooltip based on the error messsage we just set in the title
                });
        }
    });
    */
    

    


});