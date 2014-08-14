<?php
  include("lib/config.php");
  include('lib/MySql.Class.php');

  $db = array(
    'host'=>$cfg_host,
    'user'=>$cfg_user,
    'pass'=>$cfg_pass,
    'name'=>$cfg_base
  );

  $servicios = array();
  $proyectos = array();
  try {
    $sqlImagen = "
      SELECT *
      FROM servicio
      WHERE estado = '1' and titulo = 'Social Media'";

    $servicios = @MySql::getInstance()->getResultSet($sqlImagen);

    $sqlPro = "
      SELECT p.id, p.nombre, p.descripcion, p.imagen
      FROM proyecto as p, servicio as s
      WHERE p.estado = '1' and p.prioridad = '1' and titulo = 'Social Media' and p.id_servicio=s.id";

    $proyectos = @MySql::getInstance()->getResultSet($sqlPro);

  } catch (Exception $e) {

  }

?>
<!DOCTYPE html>
<html class="html">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="7.4.30.244"/>
  <link rel="shortcut icon" href="images/favicon.ico?380174083"/>
  <title>Social Media</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4245872416"/>
  <link rel="stylesheet" type="text/css" href="css/social-media.css?3983201973" id="pagesheet"/>
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_social-media.css?199391083"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/open-sans:n3,n4:all.js" type="text/javascript">\x3C/script>');
</script>
   </head>
 <body>

  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu55313"><!-- group -->
     <div class="clearfix mse_pre_init" id="u55313"><!-- group -->
      <a class="nonblock nontext clearfix grpelem" id="u55320-4" href="index.php#noticias"><!-- content --><p>NOTICIAS</p></a>
      <a class="nonblock nontext clearfix grpelem" id="u55316-4" href="index.php#clientes"><!-- content --><p>CLIENTES</p></a>
      <a class="nonblock nontext clearfix grpelem" id="u55319-4" href="index.php"><!-- content --><p id="u55319-2"><span class="Links-Menu" id="u55319">INICIO</span></p></a>
      <div class="grpelem" id="pu55318"><!-- inclusion -->
       <div class="shadow" id="u55318"><!-- simple frame --></div>
       <div class="clearfix" id="pu55314-4"><!-- group -->
        <a class="nonblock nontext clearfix grpelem" id="u55314-4" href="index.php#servicios"><!-- content --><p>SERVICIOS</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55321-4" href="index.php#porquecelmedia"><!-- content --><p>¿POR QUÉ CELMEDIA?</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55317-4" href="index.php#proyectos"><!-- content --><p>CASOS</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55315-4" href="index.php#clientes"><!-- content --><p id="u55315-2"><span class="Links-Menu" id="u55315">CONTACTOS</span></p></a>
       </div>
      </div>
     </div>
     <div class="clip_frame mse_pre_init" id="u55322"><!-- image -->
      <img class="block" id="u55322_img" src="images/celmedia_logo_menu.png" alt="" width="170" height="62"/>
     </div>
    </div>
    <div class="mse_pre_init" id="u50916"><!-- simple frame --></div>
    <div class="clip_frame clearfix mse_pre_init" id="u50191"><!-- image -->
     <div id="u50191_clip">
      <img class="position_content" id="u50191_img" src="admin/assets/celmediachile/servicios/<?php echo $servicios[0]['imagen']; ?>" alt="" width="525" height="525"/>
     </div>
    </div>
    <a class="nonblock nontext Cuerpo-de-Texto1 clearfix colelem" id="u50208-4" href="index.php#servicios"><!-- content --><h2>&lt; Regresar</h2></a>
    <div class="clearfix colelem" id="pu50233"><!-- group -->
     <div class="clip_frame grpelem" id="u50233"><!-- image -->
      <img class="block" id="u50233_img" src="images/titulo_caso_socialm.png" alt="" width="350" height="50"/>
     </div>
     <div class="Titulares clearfix grpelem" id="u50206-4"><!-- content -->
      <h1><?php echo $servicios[0]['titulo']; ?></h1>
     </div>
     <div class="Titulares clearfix grpelem" id="u50204-4"><!-- content -->
      <h1>Caso de éxito</h1>
     </div>
    </div>
    <div class="clearfix colelem" id="ppu50199-10"><!-- group -->
     <div class="clearfix grpelem" id="pu50199-10"><!-- column -->
      <div class="Cuerpo-de-Texto1 clearfix colelem" id="u50199-10"><!-- content -->
       <h2><?php echo utf8_encode($servicios[0]['subtitulo']); ?></h2>
      </div>
      <div class="Cuerpo-de-Texto1 clearfix colelem" id="u50195-7"><!-- content -->
       <h2><?php echo utf8_encode($servicios[0]['descripcion']); ?></h2>
       <h2>&nbsp;</h2>
       
      </div>
     </div>
     <div class="clearfix grpelem" id="pu50918"><!-- column -->
      <div class="colelem" id="u50918"><img src="admin/assets/celmediachile/proyectos/<?php echo $proyectos[0]['imagen'];?>" alt="" width="350" height="145"/></div>
      <div class="Cuerpo-de-Texto1 clearfix colelem" id="u50917-4"><!-- content -->
       <h2><?php echo utf8_encode( $proyectos[0]['nombre']).''.utf8_encode( substr($proyectos[0]['descripcion'], 0, 180)); ?>...</h2>
      </div>
      <a class="nonblock nontext clearfix colelem" id="u50228-6" href="proyecto-detalle.html"><!-- content --><p id="u50228-4"><span class="Links-Menu" id="u50228">&nbsp;Ver más de este caso&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u50229"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u50230"><!-- image --><img id="u50230_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u50228-3"></span></p></a>
      <a class="nonblock nontext clearfix colelem" id="u50187-6" href="proyectos.html"><!-- content --><p id="u50187-4"><span class="Links-Menu" id="u50187">&nbsp;Ver todos los casos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u50188"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u50189"><!-- image --><img id="u50189_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u50187-3"></span></p></a>
     </div>
    </div>
    <div class="clearfix colelem" id="pu50202-4"><!-- group -->
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u50202-4"><!-- content -->
      <h3>© 2014 CELMEDIA, Todos los derechos reservados</h3>
     </div>
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u50193-4"><!-- content -->
      <h3>Suscríbete</h3>
     </div>
    </div>
    <div class="clearfix colelem" id="ppu50196-4"><!-- group -->
     <div class="clearfix grpelem" id="pu50196-4"><!-- column -->
      <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u50196-4" href="proyectos.php"><!-- content --><h3>Proyectos</h3></a>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50200-4"><!-- content -->
       <h3>Clientes</h3>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu50203-4"><!-- column -->
      <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u50203-4" href="mobile-marketing.php"><!-- content --><h3>Mobile Marketing</h3></a>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50197-4"><!-- content -->
       <h3>TV Interactiva</h3>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu50232-4"><!-- column -->
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50232-4"><!-- content -->
       <h3>Virtual Graphics</h3>
      </div>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50205-4"><!-- content -->
       <h3>M&#45;Goverment</h3>
      </div>
     </div>
     <div class="rounded-corners clearfix grpelem" id="u50198-4"><!-- content -->
      <p id="u50198-2"><span class="Links-Menu" id="u50198">&nbsp;&nbsp; E&#45;mail</span></p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu50194-4"><!-- group -->
     <a class="nonblock nontext Cuerpo-de-texto-2 clearfix grpelem" id="u50194-4" href="noticias.php"><!-- content --><h3>Noticias</h3></a>
     <div class="clearfix grpelem" id="pu50225-4"><!-- column -->
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50225-4"><!-- content -->
       <h3>Gateway</h3>
      </div>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50209-4"><!-- content -->
       <h3>Fidelización</h3>
      </div>
     </div>
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u50186-4"><!-- content -->
      <h3>Social Media</h3>
     </div>
     <div class="clearfix grpelem" id="u50212-7"><!-- content -->
      <p id="u50212-5"><span class="Links-Menu" id="u50212">Enviar</span><span class="Links-Menu" id="u50212-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u50213"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u50214"><!-- image --><img id="u50214_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u50212-4"></span></p>
     </div>
    </div>
    <div class="verticalspacer"></div>
    <div class="mse_pre_init" id="u50207"><!-- simple frame --></div>
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
  <script src="scripts/jquery.watch.js?4068933136" type="text/javascript"></script>
  <!-- Other scripts -->
  <script type="text/javascript">
   $(document).ready(function() { try {
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
$('#u55313').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,-0.48]},{"speed":[0,0],"in":[-0.48,Infinity]}]);/* scroll effect */
$('#u55322').registerPositionScrollEffect([{"speed":[10,0],"in":[-Infinity,-0.02]},{"speed":[0,0],"in":[-0.02,Infinity]}]);/* scroll effect */
$('#u50916').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,-20.05]},{"speed":[0,1],"in":[-20.05,Infinity]}]);/* scroll effect */
$('#u50191').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,-20.5]},{"speed":[0,1],"in":[-20.5,Infinity]}]);/* scroll effect */
$('#u50207').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,484]},{"speed":[0,1],"in":[484,Infinity]}]);/* scroll effect */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>