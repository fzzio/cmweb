<?php
  include("lib/config.php");
  include('lib/MySql.Class.php');

  $db = array(
    'host'=>$cfg_host,
    'user'=>$cfg_user,
    'pass'=>$cfg_pass,
    'name'=>$cfg_base
  );

  $id_proyecto = $_GET["pry"];


  $proyectoRecibido = array();
  $tags = array();
  try {

    $sqlPry = "
      SELECT p.nombre, p.descripcion, p.imagen, p.imagen_detalle, p.fecha
      FROM proyecto as p
      WHERE
      p.id=$id_proyecto";
    $proyectoRecibido = @MySql::getInstance()->getSingleRow($sqlPry);



    $sqlTag = "
      SELECT t.descripcion
      FROM tags as t, tags_proyectos as p
      WHERE p.id_proyecto=$id_proyecto and t.id=p.id_tags";
    $tags = @MySql::getInstance()->getResultSet($sqlTag);
    $lista_tags = '';
    foreach ($tags as $tag) {
      $lista_tags.=$tag['descripcion'].' - ';
    }

    $sqlPro = "
      SELECT p.id, p.nombre, p.descripcion, p.imagen, p.id_cliente, c.imagen as imagen_cliente
      FROM proyecto as p, cliente as c
      WHERE p.estado = '1' and c.id=p.id_cliente and p.id!=$id_proyecto
      ORDER BY p.fecha DESC
      LIMIT 3";

    $listaProyectos = @MySql::getInstance()->getResultSet($sqlPro);


  } catch (Exception $e) {

  }
?>
<!DOCTYPE html>
<html class="html">
 <head>

  <script src="scripts/museredirect.js?4101519497" type="text/javascript"></script>
  
  <script type="text/javascript">
   Muse.Redirect.redirect('desktop', 'tablet/proyecto-detalle.html', 'phone/proyecto-detalle.html', '');
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="7.4.30.244"/>
  <link rel="shortcut icon" href="images/favicon.ico?380174083"/>
  <title>Proyecto Detalle</title>
  <link media="only screen and (max-device-width: 370px)" rel="alternate" href="http://celmediaec.com/phone/proyecto-detalle.html"/>
  <link media="only screen and (max-device-width: 960px)" rel="alternate" href="http://celmediaec.com/tablet/proyecto-detalle.html"/>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?3903791173"/>
  <link rel="stylesheet" type="text/css" href="css/proyecto-detalle.css?4028705204" id="pagesheet"/>
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_proyecto-detalle.css?424022757"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/open-sans:n3,i3,n4,n7:all.js" type="text/javascript">\x3C/script>');
</script>
   </head>
 <body>

  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu51420"><!-- group -->
     <div class="clip_frame clearfix mse_pre_init" id="u51420"><!-- image -->
      <div id="u51420_clip">
       <img class="position_content" id="u51420_img" src="images/bg_proyectos2.jpg" alt="" width="1800" height="1550"/>
      </div>
     </div>
     <div class="clearfix mse_pre_init" id="u55277"><!-- group -->
      <a class="nonblock nontext clearfix grpelem" id="u55284-4" href="noticias.html"><!-- content --><p>NOTICIAS</p></a>
      <a class="nonblock nontext clearfix grpelem" id="u55280-4" href="index.html#clientes"><!-- content --><p>CLIENTES</p></a>
      <a class="nonblock nontext clearfix grpelem" id="u55283-4" href="index.html"><!-- content --><p id="u55283-2"><span class="Links-Menu" id="u55283">INICIO</span></p></a>
      <div class="grpelem" id="pu55282"><!-- inclusion -->
       <div class="shadow" id="u55282"><!-- simple frame --></div>
       <div class="clearfix" id="pu55278-4"><!-- group -->
        <a class="nonblock nontext clearfix grpelem" id="u55278-4" href="index.html#servicios"><!-- content --><p>SERVICIOS</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55285-4" href="index.html#porquecelmedia"><!-- content --><p>¿POR QUÉ CELMEDIA?</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55281-4" href="index.html#proyectos"><!-- content --><p>CASOS</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55279-4" href="index.html#clientes"><!-- content --><p id="u55279-2"><span class="Links-Menu" id="u55279">CONTACTOS</span></p></a>
       </div>
      </div>
     </div>
     <div class="clip_frame mse_pre_init" id="u55286"><!-- image -->
      <img class="block" id="u55286_img" src="images/celmedia_logo_menu.png" alt="" width="170" height="62"/>
     </div>
    </div>
    <div class="clearfix colelem" id="pu51162-4"><!-- group -->
     <div class="Titulares clearfix grpelem" id="u51162-4"><!-- content -->
      <h1>Proyectos</h1>
     </div>
     <div class="rounded-corners clearfix grpelem" id="u50972-7"><!-- content -->
      <p id="u50972-5"><span class="Links-Menu" id="u50972">&nbsp;&nbsp; </span><span class="Links-Menu" id="u50972-2">Buscar…&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu" id="u50972-3"><span class="actAsInlineDiv normal_text" id="u50973"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u50974"><!-- image --><img id="u50974_img" src="images/icono_lupa.png" alt="" width="20" height="20"/></span></span></span><span class="Links-Menu" id="u50972-4"></span></p>
     </div>
    </div>
    <div class="SlideShowWidget clearfix colelem" id="slideshowu50982"><!-- none box -->
     <div class="popup_anchor" id="u51016popup">
      <div class="SlideShowContentPanel clearfix" id="u51016"><!-- stack box -->
       <div class="SSSlide clip_frame clearfix grpelem" id="u51019"><!-- image -->
        <div id="u51019_clip">
         <img class="ImageInclude position_content" id="u51019_img" data-src="images/1-celmedia_caso_club-45-a%c3%b1os.jpg" src="images/blank.gif" alt="" data-width="758" data-height="430"/>
        </div>
       </div>
       <div class="SSSlide invi clip_frame clearfix grpelem" id="u51186"><!-- image -->
        <div id="u51186_clip">
         <img class="ImageInclude position_content" id="u51186_img" data-src="images/2-celmedia_caso_club-45-a%c3%b1os.jpg" src="images/blank.gif" alt="" data-width="758" data-height="430"/>
        </div>
       </div>
       <div class="SSSlide invi clip_frame clearfix grpelem" id="u51195"><!-- image -->
        <div id="u51195_clip">
         <img class="ImageInclude position_content" id="u51195_img" data-src="images/4-celmedia_caso_club-45-a%c3%b1os.jpg" src="images/blank.gif" alt="" data-width="758" data-height="430"/>
        </div>
       </div>
       <div class="SSSlide invi clip_frame clearfix grpelem" id="u51204"><!-- image -->
        <div id="u51204_clip">
         <img class="ImageInclude position_content" id="u51204_img" data-src="images/5-celmedia_caso_club-45-a%c3%b1os.jpg" src="images/blank.gif" alt="" data-width="758" data-height="430"/>
        </div>
       </div>
      </div>
     </div>
     <div class="popup_anchor" id="u51009popup">
      <div class="SSSlideLinks clearfix" id="u51009"><!-- horizontal-rows box -->
       <div class="SSSlideLink clip_frame clearfix grpelem" id="u51014"><!-- image -->
        <div id="u51014_clip">
         <img class="position_content" id="u51014_img" src="images/1-celmedia_caso_club-45-a%c3%b1os133x75.jpg" alt="" width="132" height="75"/>
        </div>
       </div>
       <div class="SSSlideLink clip_frame clearfix grpelem" id="u51189"><!-- image -->
        <div id="u51189_clip">
         <img class="position_content" id="u51189_img" src="images/2-celmedia_caso_club-45-a%c3%b1os133x75.jpg" alt="" width="132" height="75"/>
        </div>
       </div>
       <div class="SSSlideLink clip_frame clearfix grpelem" id="u51198"><!-- image -->
        <div id="u51198_clip">
         <img class="position_content" id="u51198_img" src="images/4-celmedia_caso_club-45-a%c3%b1os133x75.jpg" alt="" width="132" height="75"/>
        </div>
       </div>
       <div class="SSSlideLink clip_frame clearfix grpelem" id="u51207"><!-- image -->
        <div id="u51207_clip">
         <img class="position_content" id="u51207_img" src="images/5-celmedia_caso_club-45-a%c3%b1os133x75.jpg" alt="" width="132" height="75"/>
        </div>
       </div>
      </div>
     </div>
     <div class="popup_anchor" id="u51029-6popup">
      <div class="SSPreviousButton clearfix" id="u51029-6"><!-- content -->
       <p><span id="u51029">​</span><span id="u51029-2"><span class="actAsInlineDiv normal_text" id="u51147"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u51142"><!-- image --><img id="u51142_img" src="images/left_arrowblack.png" alt="" width="35" height="35"/></span></span></span><span id="u51029-3"></span></p>
      </div>
     </div>
     <div class="popup_anchor" id="u50984-6popup">
      <div class="SSNextButton clearfix" id="u50984-6"><!-- content -->
       <p><span id="u50984">​</span><span><span class="actAsInlineDiv normal_text" id="u51158"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u51153"><!-- image --><img id="u51153_img" src="images/right_arrowblack.png" alt="" width="35" height="35"/></span></span></span><span></span></p>
      </div>
     </div>
    </div>
    <div class="clearfix colelem" id="pu51213"><!-- group -->
     <div class="clearfix grpelem" id="u51213"><!-- column -->
      <div class="Titulares clearfix colelem" id="u51220-4"><!-- content -->
       <h1>Campaña 45 años</h1>
      </div>
      <div class="Cuerpo-de-Texto1 clearfix colelem" id="u51221-7"><!-- content -->
       <h2>El equipo de Celmedia Mobile Marketing y sus capacidades tecnológicas le pueden ayudar a crear e implementar campañas creativas y estratégicas de Mobile Marketing de gran efectividad y medición.</h2>
       <h2>&nbsp;</h2>
       <h2>Celmedia Mobile marketing ha ayudado a cientos de empresas en américa latina a comunicarse eficientemente con sus consumidores. El equipo posee una gran experiencia satisfaciendo la necesidad de los operadores móviles, las marcas y los consumidores desarrollando portales y contenidos para enriquecer la experiencia de navegación.</h2>
      </div>
     </div>
     <div class="Cuerpo-de-Texto1 clearfix grpelem" id="u51223-8"><!-- content -->
      <h2 id="u51223-2">Categorías:</h2>
      <h2 id="u51223-4">Mobile Marketing &#45; Social Media &#45; 360 &#45; Radio primario &#45;</h2>
      <h2 id="u51223-6">Fidelización &#45; Gateway</h2>
     </div>
     <?php
     /*
     <div class="clip_frame grpelem" id="u51865"><!-- image -->
      <img class="block" id="u51865_img" src="images/left_arrowblack.png" alt="" width="35" height="35"/>
     </div>
     <div class="clip_frame grpelem" id="u51857"><!-- image -->
      <img class="block" id="u51857_img" src="images/right_arrowblack.png" alt="" width="35" height="35"/>
     </div>
     */
     ?>
    </div>
    <div class="colelem" id="u51215"><!-- simple frame --></div>
    <div class="clearfix colelem" id="pu51226-4"><!-- group -->
     <div class="clearfix grpelem" id="u51226-4"><!-- content -->
      <p>Tecnologías:</p>
     </div>
     <div class="clearfix grpelem pry-contenedor-tags"><!-- content -->
      <?php foreach ($tags as $tag): ?>
        <p class="tag-proyecto">
          <?php echo utf8_encode($tag["descripcion"]); ?>  
        </p>
      <?php endforeach ?>
     </div>
    </div>
    <a class="nonblock nontext clearfix colelem" id="u51261-6" href="proyectos.html"><!-- content --><p id="u51261-4"><span class="Links-Menu" id="u51261">&nbsp;Volver a todos los proyectos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u51262"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u51263"><!-- image --><img id="u51263_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u51261-3"></span></p></a>
    <div class="Titulares clearfix colelem" id="u51229-4"><!-- content -->
     <h1>Otros proyectos</h1>
    </div>
    <div class="clearfix colelem" id="pu51246"><!-- group -->
     <div class="clearfix grpelem" id="u51246"><!-- column -->
      <a class="nonblock nontext MuseLinkActive colelem" id="u51247" href="proyecto-detalle.html"><!-- simple frame --></a>
      <div class="pointer_cursor MuseLinkActive clearfix colelem" id="u51249"><!-- group -->
       <a class="block" href="proyecto-detalle.html"></a>
       <a class="nonblock nontext MuseLinkActive grpelem" id="u51250" href="proyecto-detalle.html"><!-- simple frame --></a>
       <a class="nonblock nontext MuseLinkActive clearfix grpelem" id="u51248-6" href="proyecto-detalle.html"><!-- content --><h2 class="Cuerpo-de-Texto1" id="u51248-2">Título de proyecto</h2><h3 class="Cuerpo-de-texto-2" id="u51248-4">Breve descripción no más de dos lineas…</h3></a>
      </div>
     </div>
     <div class="clearfix grpelem" id="u51251"><!-- column -->
      <a class="nonblock nontext MuseLinkActive colelem" id="u51252" href="proyecto-detalle.html"><!-- simple frame --></a>
      <div class="pointer_cursor MuseLinkActive clearfix colelem" id="u51254"><!-- group -->
       <a class="block" href="proyecto-detalle.html"></a>
       <a class="nonblock nontext MuseLinkActive grpelem" id="u51253" href="proyecto-detalle.html"><!-- simple frame --></a>
       <a class="nonblock nontext MuseLinkActive clearfix grpelem" id="u51255-6" href="proyecto-detalle.html"><!-- content --><h2 class="Cuerpo-de-Texto1" id="u51255-2">Título de proyecto</h2><h3 class="Cuerpo-de-texto-2" id="u51255-4">Breve descripción no más de dos lineas…</h3></a>
      </div>
     </div>
     <div class="clearfix grpelem" id="u51256"><!-- column -->
      <a class="nonblock nontext MuseLinkActive colelem" id="u51259" href="proyecto-detalle.html"><!-- simple frame --></a>
      <div class="pointer_cursor MuseLinkActive clearfix colelem" id="u51258"><!-- group -->
       <a class="block" href="proyecto-detalle.html"></a>
       <a class="nonblock nontext MuseLinkActive grpelem" id="u51260" href="proyecto-detalle.html"><!-- simple frame --></a>
       <a class="nonblock nontext MuseLinkActive clearfix grpelem" id="u51257-6" href="proyecto-detalle.html"><!-- content --><h2 class="Cuerpo-de-Texto1" id="u51257-2">Título de proyecto</h2><h3 class="Cuerpo-de-texto-2" id="u51257-4">Breve descripción no más de dos lineas…</h3></a>
      </div>
     </div>
    </div>
    <div class="clearfix colelem" id="pu50384-4"><!-- group -->
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u50384-4"><!-- content -->
      <h3>© 2014 CELMEDIA, Todos los derechos reservados</h3>
     </div>
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u50385-4"><!-- content -->
      <h3>Suscríbete</h3>
     </div>
    </div>
    <div class="clearfix colelem" id="ppu50386-4"><!-- group -->
     <div class="clearfix grpelem" id="pu50386-4"><!-- column -->
      <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u50386-4" href="proyectos.html"><!-- content --><h3>Proyectos</h3></a>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50388-4"><!-- content -->
       <h3>Clientes</h3>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu50387-4"><!-- column -->
      <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u50387-4" href="mobile-marketing.html"><!-- content --><h3>Mobile Marketing</h3></a>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50389-4"><!-- content -->
       <h3>TV Interactiva</h3>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu50390-4"><!-- column -->
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50390-4"><!-- content -->
       <h3>Virtual Graphics</h3>
      </div>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50393-4"><!-- content -->
       <h3>M&#45;Goverment</h3>
      </div>
     </div>
     <div class="rounded-corners clearfix grpelem" id="u50396-4"><!-- content -->
      <p id="u50396-2"><span class="Links-Menu" id="u50396">&nbsp;&nbsp; E&#45;mail</span></p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu50391-4"><!-- group -->
     <a class="nonblock nontext Cuerpo-de-texto-2 clearfix grpelem" id="u50391-4" href="noticias.html"><!-- content --><h3>Noticias</h3></a>
     <div class="clearfix grpelem" id="pu50392-4"><!-- column -->
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50392-4"><!-- content -->
       <h3>Gateway</h3>
      </div>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50394-4"><!-- content -->
       <h3>Fidelización</h3>
      </div>
     </div>
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u50395-4"><!-- content -->
      <h3>Social Media</h3>
     </div>
     <div class="clearfix grpelem" id="u50397-7"><!-- content -->
      <p id="u50397-5"><span class="Links-Menu" id="u50397">Enviar</span><span class="Links-Menu" id="u50397-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u50398"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u50399"><!-- image --><img id="u50399_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u50397-4"></span></p>
     </div>
    </div>
    <div class="verticalspacer"></div>
    <div class="mse_pre_init" id="u50383"><!-- simple frame --></div>
   </div>
  </div>
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script src="scripts/museutils.js?4291592202" type="text/javascript"></script>
  <script src="scripts/jquery.scrolleffects.js?4006931061" type="text/javascript"></script>
  <script src="scripts/webpro.js?3903299128" type="text/javascript"></script>
  <script src="scripts/musewpslideshow.js?138381373" type="text/javascript"></script>
  <script src="scripts/jquery.museoverlay.js?4250894771" type="text/javascript"></script>
  <script src="scripts/touchswipe.js?4156838003" type="text/javascript"></script>
  <script src="scripts/jquery.watch.js?4068933136" type="text/javascript"></script>
  <!-- Other scripts -->
  <script type="text/javascript">
   $(document).ready(function() { try {
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
$('#u51420').registerPositionScrollEffect([{"in":[-Infinity,-99.05],"speed":[0,1]},{"in":[-99.05,Infinity],"speed":[0,1]}]);/* scroll effect */
$('#u55277').registerPositionScrollEffect([{"in":[-Infinity,-0.48],"speed":[0,1]},{"in":[-0.48,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u55286').registerPositionScrollEffect([{"in":[-Infinity,-0.02],"speed":[10,0]},{"in":[-0.02,Infinity],"speed":[0,0]}]);/* scroll effect */
Muse.Utils.initWidget('#slideshowu50982', function(elem) { $(elem).data('widget', new WebPro.Widget.ContentSlideShow(elem, {autoPlay:true,displayInterval:3500,slideLinkStopsSlideShow:false,transitionStyle:'fading',lightboxEnabled_runtime:false,shuffle:false,transitionDuration:500,enableSwipe:true,fullScreen:false})); });/* #slideshowu50982 */
$('#u50383').registerPositionScrollEffect([{"in":[-Infinity,1413.05],"speed":[0,1]},{"in":[1413.05,Infinity],"speed":[0,1]}]);/* scroll effect */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>