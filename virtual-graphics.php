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
      WHERE estado = '1' and titulo = 'Virtual Graphics'";

    $servicios = @MySql::getInstance()->getResultSet($sqlImagen);

    $sqlPro = "
      SELECT p.id, p.nombre, p.descripcion, p.imagen
      FROM proyecto as p, servicio as s
      WHERE p.estado = '1' and p.prioridad = '1' and titulo = 'Virtual Graphics' and p.id_servicio=s.id";

    $proyectos = @MySql::getInstance()->getResultSet($sqlPro);

  } catch (Exception $e) {

}?>

<!DOCTYPE html>
<html class="html">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="7.4.30.244"/>
  <link rel="shortcut icon" href="images/favicon.ico?380174083"/>
  <title>Virtual Graphics</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4245872416"/>
  <link rel="stylesheet" type="text/css" href="css/virtual-graphics.css?175933460" id="pagesheet"/>
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_virtual-graphics.css?3826369477"/>
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
    <div class="clearfix colelem" id="pu55339"><!-- group -->
     <div class="clearfix mse_pre_init" id="u55339"><!-- group -->
      <a class="nonblock nontext clearfix grpelem" id="u55346-4" href="noticias.php"><!-- content --><p>NOTICIAS</p></a>
      <a class="nonblock nontext clearfix grpelem" id="u55342-4" href="index.php#clientes"><!-- content --><p>CLIENTES</p></a>
      <a class="nonblock nontext clearfix grpelem" id="u55345-4" href="index.php"><!-- content --><p id="u55345-2"><span class="Links-Menu" id="u55345">INICIO</span></p></a>
      <div class="grpelem" id="pu55344"><!-- inclusion -->
       <div class="shadow" id="u55344"><!-- simple frame --></div>
       <div class="clearfix" id="pu55340-4"><!-- group -->
        <a class="nonblock nontext clearfix grpelem" id="u55340-4" href="index.php#servicios"><!-- content --><p>SERVICIOS</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55347-4" href="index.php#porquecelmedia"><!-- content --><p>¿POR QUÉ CELMEDIA?</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55343-4" href="index.php#proyectos"><!-- content --><p>CASOS</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55341-4" href="index.php#clientes"><!-- content --><p id="u55341-2"><span class="Links-Menu" id="u55341">CONTACTOS</span></p></a>
       </div>
      </div>
     </div>
     <div class="clip_frame mse_pre_init" id="u55348"><!-- image -->
      <img class="block" id="u55348_img" src="images/celmedia_logo_menu.png" alt="" width="170" height="62"/>
     </div>
    </div>
    <div class="mse_pre_init" id="u50907"><!-- simple frame --></div>
    <div class="clip_frame clearfix mse_pre_init" id="u50022"><!-- image -->
     <div id="u50022_clip">
      <img class="position_content" id="u50022_img" src="images/img_referencial.jpg" alt="" width="525" height="525"/>
     </div>
    </div>
    <a class="nonblock nontext Cuerpo-de-Texto1 clearfix colelem" id="u50051-4" href="index.php#servicios"><!-- content --><h2>&lt; Regresar</h2></a>
    <div class="clearfix colelem" id="pu50044"><!-- group -->
     <div class="clip_frame grpelem" id="u50044"><!-- image -->
      <img class="block" id="u50044_img" src="images/titulo_caso_virtualg.png" alt="" width="350" height="50"/>
     </div>
     <div class="Titulares clearfix grpelem" id="u50025-4"><!-- content -->
      <h1><?php echo $servicios[0]['titulo']; ?></h1>
     </div>
     <div class="Titulares clearfix grpelem" id="u50010-4"><!-- content -->
      <h1>Caso de éxito</h1>
     </div>
    </div>
    <div class="clearfix colelem" id="ppu50050-4"><!-- group -->
     <div class="clearfix grpelem" id="pu50050-4"><!-- column -->
      <div class="Cuerpo-de-Texto1 clearfix colelem" id="u50050-4"><!-- content -->
       <h2><?php echo utf8_encode($servicios[0]['subtitulo']); ?></h2>
      </div>
      <div class="Cuerpo-de-Texto1 clearfix colelem" id="u50027-9"><!-- content -->
       <h2><?php echo utf8_encode($servicios[0]['descripcion']); ?></h2>
       <h2>&nbsp;</h2>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu50909"><!-- column -->
      <div class="colelem" id="u50909"><img src="images/<?php echo $proyectos[0]['imagen'];?>" alt="" width="350" height="145"/></div>
      <div class="Cuerpo-de-Texto1 clearfix colelem" id="u50908-4"><!-- content -->
       <h2><?php echo utf8_encode( substr($proyectos[0]['descripcion'], 0, 195)); ?>...</h2>
      </div>
      <a class="nonblock nontext clearfix colelem" id="u50006-6" href="proyecto-detalle.html"><!-- content --><p id="u50006-4"><span class="Links-Menu" id="u50006">&nbsp;Ver más de este caso&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u50007"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u50008"><!-- image --><img id="u50008_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u50006-3"></span></p></a>
     </div>
    </div>
    <a class="nonblock nontext clearfix colelem" id="u50046-6" href="proyectos.html"><!-- content --><p id="u50046-4"><span class="Links-Menu" id="u50046">&nbsp;Ver todos los casos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u50047"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u50048"><!-- image --><img id="u50048_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u50046-3"></span></p></a>
    <div class="clearfix colelem" id="pu50019-4"><!-- group -->
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u50019-4"><!-- content -->
      <h3>© 2014 CELMEDIA, Todos los derechos reservados</h3>
     </div>
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u50011-4"><!-- content -->
      <h3>Suscríbete</h3>
     </div>
    </div>
    <div class="clearfix colelem" id="ppu50042-4"><!-- group -->
     <div class="clearfix grpelem" id="pu50042-4"><!-- column -->
      <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u50042-4" href="proyectos.php"><!-- content --><h3>Proyectos</h3></a>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50017-4"><!-- content -->
       <h3>Clientes</h3>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu50030-4"><!-- column -->
      <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u50030-4" href="mobile-marketing.php"><!-- content --><h3>Mobile Marketing</h3></a>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50016-4"><!-- content -->
       <h3>TV Interactiva</h3>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu50020-4"><!-- column -->
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50020-4"><!-- content -->
       <h3>Virtual Graphics</h3>
      </div>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50021-4"><!-- content -->
       <h3>M&#45;Goverment</h3>
      </div>
     </div>
     <div class="rounded-corners clearfix grpelem" id="u50043-4"><!-- content -->
      <p id="u50043-2"><span class="Links-Menu" id="u50043">&nbsp;&nbsp; E&#45;mail</span></p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu50024-4"><!-- group -->
     <a class="nonblock nontext Cuerpo-de-texto-2 clearfix grpelem" id="u50024-4" href="noticias.php"><!-- content --><h3>Noticias</h3></a>
     <div class="clearfix grpelem" id="pu50029-4"><!-- column -->
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50029-4"><!-- content -->
       <h3>Gateway</h3>
      </div>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50026-4"><!-- content -->
       <h3>Fidelización</h3>
      </div>
     </div>
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u50015-4"><!-- content -->
      <h3>Social Media</h3>
     </div>
     <div class="clearfix grpelem" id="u50002-7"><!-- content -->
      <p id="u50002-5"><span class="Links-Menu" id="u50002">Enviar</span><span class="Links-Menu" id="u50002-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u50003"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u50004"><!-- image --><img id="u50004_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u50002-4"></span></p>
     </div>
    </div>
    <div class="verticalspacer"></div>
    <div class="mse_pre_init" id="u50028"><!-- simple frame --></div>
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
$('#u55339').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,-0.48]},{"speed":[0,0],"in":[-0.48,Infinity]}]);/* scroll effect */
$('#u55348').registerPositionScrollEffect([{"speed":[10,0],"in":[-Infinity,-0.02]},{"speed":[0,0],"in":[-0.02,Infinity]}]);/* scroll effect */
$('#u50907').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,-19.8]},{"speed":[0,1],"in":[-19.8,Infinity]}]);/* scroll effect */
$('#u50022').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,-19.5]},{"speed":[0,1],"in":[-19.5,Infinity]}]);/* scroll effect */
$('#u50028').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,484.21]},{"speed":[0,1],"in":[484.21,Infinity]}]);/* scroll effect */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
