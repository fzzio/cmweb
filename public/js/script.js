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

	 // $("#form_chile").validate({
  //         debug: true,
  //         submitHandler: function (form) {
  //             var parametros = {
  //                 nombre: $("#nombreC").val(),
  //                 empresa: $("#empresaC").val(),
  //                 asunto: $("#asuntoC").val(),
  //                 email: $("#emailC").val(),
  //                 telefono: $("#telefonoC").val(),
  //                 mensaje: $("#mensajeC").val()
  //             }

  //             $.ajax({
  //                 url: 'envio.php?form=chile',
  //                 type: 'POST',
  //                 async: true,
  //                 data: parametros,
  //                 success: function (respuesta) {
  //                     // alert(respuesta);
  //                     if (respuesta == 1 ) {
  //                         // alert("Su pedido de informacion fue enviado exitosamente");
  //                         alert('Su pedido de informaci\u00F3n fu\u00E9 enviado con \u00E9xito');
  //                         document.getElementById("form-contacto-chile").reset();
  //                         // window.location = Routing.generate('pirelli_mensaje');
  //                     } else {
  //                         // error
  //                     }

  //                 }, 
  //                 error: function (error) {
  //                   console.log("ERROR: " + error);
  //                 }
  //             });

  //         },
  //         rules: {
  //             nombreC: {
  //                 required: true
  //             },
  //             asuntoC: {
  //                 required: true
  //             },
  //             emailC: {
  //                 required: true,
  //                 email: true
  //             },
  //             empresaC: {
  //                 required: true
  //             },
  //             telefonoC: {
  //                 required:true,
  //                 minlength:7,
  //                 maxlength:15,
  //                 number:true
  //             },
  //             mensajeC: {
  //                 required: true
  //             }

  //         },
  //         showErrors: function (errorMap, errorList) {
  //              // Clean up any tooltips for valid elements
  //             $.each(this.validElements(), function (index, element) {
  //                 var $element = $(element);

  //                 $element.data("title", "") // Clear the title - there is no error associated anymore
  //                     .removeClass("error")
  //                     .tooltip("destroy");
  //             });

  //             // Create new tooltips for invalid elements
  //             $.each(errorList, function (index, error) {
  //                 var $element = $(error.element);

  //                 $element.tooltip("destroy") // Destroy any pre-existing tooltip so we can repopulate with new tooltip content
  //                     .data("title", error.message)
  //                     .addClass("error")
  //                     .tooltip(); // Create a new tooltip based on the error messsage we just set in the title
  //                 });

  //         }
  //   });
    
    
    
    $("#form-contacto-peru").validate({
          debug: true,
          submitHandler: function (form) {
              var parametros = {
                  nombre: $("#nombreC").val(),
                  empresa: $("#empresaC").val(),
                  asunto: $("#asuntoC").val(),
                  email: $("#emailC").val(),
                  telefono: $("#telefonoC").val(),
                  mensaje: $("#mensajeC").val()
              }

              $.ajax({
                  url: 'envio-datos.php?form=chile',
                  type: 'POST',
                  async: true,
                  data: parametros,
                  success: function (respuesta) {
                      // alert(respuesta);
                      if (respuesta == 1 ) {
                          // alert("Su pedido de informacion fue enviado exitosamente");
                          alert('Su pedido de informaci\u00F3n fu\u00E9 enviado con \u00E9xito');
                          document.getElementById("form-contacto-chile").reset();
                          // window.location = Routing.generate('pirelli_mensaje');
                      } else {
                          // error
                      }

                  }, 
                  error: function (error) {
                    console.log("ERROR: " + error);
                  }
              });

          },
          rules: {
              nombre: {
                  required: true
              },
              asunto: {
                  required: true
              },
              email: {
                  required: true,
                  email: true
              },
              empresa: {
                  required: true
              },
              telefono: {
                  required:true,
                  minlength:7,
                  maxlength:15,
                  number:true
              },
              mensaje: {
                  required: true
              }

          },
          showErrors: function (errorMap, errorList) {
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
$("#form-contacto-mexico").validate({
          debug: true,
          submitHandler: function (form) {
              var parametros = {
                  nombre: $("#nombreC").val(),
                  empresa: $("#empresaC").val(),
                  asunto: $("#asuntoC").val(),
                  email: $("#emailC").val(),
                  telefono: $("#telefonoC").val(),
                  mensaje: $("#mensajeC").val()
              }

              $.ajax({
                  url: 'envio-datos.php?form=chile',
                  type: 'POST',
                  async: true,
                  data: parametros,
                  success: function (respuesta) {
                      // alert(respuesta);
                      if (respuesta == 1 ) {
                          // alert("Su pedido de informacion fue enviado exitosamente");
                          alert('Su pedido de informaci\u00F3n fu\u00E9 enviado con \u00E9xito');
                          document.getElementById("form-contacto-chile").reset();
                          // window.location = Routing.generate('pirelli_mensaje');
                      } else {
                          // error
                      }

                  }, 
                  error: function (error) {
                    console.log("ERROR: " + error);
                  }
              });

          },
          rules: {
              nombre: {
                  required: true
              },
              asunto: {
                  required: true
              },
              email: {
                  required: true,
                  email: true
              },
              empresa: {
                  required: true
              },
              telefono: {
                  required:true,
                  minlength:7,
                  maxlength:15,
                  number:true
              },
              mensaje: {
                  required: true
              }

          },
          showErrors: function (errorMap, errorList) {
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

$("#form-contacto-colombia").validate({
          debug: true,
          submitHandler: function (form) {
              var parametros = {
                  nombre: $("#nombreC").val(),
                  empresa: $("#empresaC").val(),
                  asunto: $("#asuntoC").val(),
                  email: $("#emailC").val(),
                  telefono: $("#telefonoC").val(),
                  mensaje: $("#mensajeC").val()
              }

              $.ajax({
                  url: 'envio-datos.php?form=chile',
                  type: 'POST',
                  async: true,
                  data: parametros,
                  success: function (respuesta) {
                      // alert(respuesta);
                      if (respuesta == 1 ) {
                          // alert("Su pedido de informacion fue enviado exitosamente");
                          alert('Su pedido de informaci\u00F3n fu\u00E9 enviado con \u00E9xito');
                          document.getElementById("form-contacto-chile").reset();
                          // window.location = Routing.generate('pirelli_mensaje');
                      } else {
                          // error
                      }

                  }, 
                  error: function (error) {
                    console.log("ERROR: " + error);
                  }
              });

          },
          rules: {
              nombre: {
                  required: true
              },
              asunto: {
                  required: true
              },
              email: {
                  required: true,
                  email: true
              },
              empresa: {
                  required: true
              },
              telefono: {
                  required:true,
                  minlength:7,
                  maxlength:15,
                  number:true
              },
              mensaje: {
                  required: true
              }

          },
          showErrors: function (errorMap, errorList) {
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
    

    $("#form-contacto-ecuador").validate({
          debug: true,
          submitHandler: function (form) {
              var parametros = {
                  nombre: $("#nombreC").val(),
                  empresa: $("#empresaC").val(),
                  asunto: $("#asuntoC").val(),
                  email: $("#emailC").val(),
                  telefono: $("#telefonoC").val(),
                  mensaje: $("#mensajeC").val()
              }

              $.ajax({
                  url: 'envio-datos.php?form=chile',
                  type: 'POST',
                  async: true,
                  data: parametros,
                  success: function (respuesta) {
                      // alert(respuesta);
                      if (respuesta == 1 ) {
                          // alert("Su pedido de informacion fue enviado exitosamente");
                          alert('Su pedido de informaci\u00F3n fu\u00E9 enviado con \u00E9xito');
                          document.getElementById("form-contacto-chile").reset();
                          // window.location = Routing.generate('pirelli_mensaje');
                      } else {
                          // error
                      }

                  }, 
                  error: function (error) {
                    console.log("ERROR: " + error);
                  }
              });

          },
          rules: {
              nombre: {
                  required: true
              },
              asunto: {
                  required: true
              },
              email: {
                  required: true,
                  email: true
              },
              empresa: {
                  required: true
              },
              telefono: {
                  required:true,
                  minlength:7,
                  maxlength:15,
                  number:true
              },
              mensaje: {
                  required: true
              }

          },
          showErrors: function (errorMap, errorList) {
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

    $("#form-contacto-argentina").validate({
          debug: true,
          submitHandler: function (form) {
              var parametros = {
                  nombre: $("#nombreC").val(),
                  empresa: $("#empresaC").val(),
                  asunto: $("#asuntoC").val(),
                  email: $("#emailC").val(),
                  telefono: $("#telefonoC").val(),
                  mensaje: $("#mensajeC").val()
              }

              $.ajax({
                  url: 'envio-datos.php?form=chile',
                  type: 'POST',
                  async: true,
                  data: parametros,
                  success: function (respuesta) {
                      // alert(respuesta);
                      if (respuesta == 1 ) {
                          // alert("Su pedido de informacion fue enviado exitosamente");
                          alert('Su pedido de informaci\u00F3n fu\u00E9 enviado con \u00E9xito');
                          document.getElementById("form-contacto-chile").reset();
                          // window.location = Routing.generate('pirelli_mensaje');
                      } else {
                          // error
                      }

                  }, 
                  error: function (error) {
                    console.log("ERROR: " + error);
                  }
              });

          },
          rules: {
              nombre: {
                  required: true
              },
              asunto: {
                  required: true
              },
              email: {
                  required: true,
                  email: true
              },
              empresa: {
                  required: true
              },
              telefono: {
                  required:true,
                  minlength:7,
                  maxlength:15,
                  number:true
              },
              mensaje: {
                  required: true
              }

          },
          showErrors: function (errorMap, errorList) {
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

});