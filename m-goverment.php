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
      WHERE estado = '1' and titulo = 'M-Goverment'";

    $servicios = @MySql::getInstance()->getResultSet($sqlImagen);

    $sqlPro = "
      SELECT p.id, p.nombre, p.descripcion, p.imagen
      FROM proyecto as p, servicio as s
      WHERE p.estado = '1' and p.prioridad = '1' and titulo = 'M-Goverment' and p.id_servicio=s.id";

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
  <title>M&#45;Goverment</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4245872416"/>
  <link rel="stylesheet" type="text/css" href="css/m-goverment.css?341282813" id="pagesheet"/>
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_m-goverment.css?4062869610"/>
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
    <div class="clearfix colelem" id="pu55326"><!-- group -->
     <div class="clearfix mse_pre_init" id="u55326"><!-- group -->
      <a class="nonblock nontext clearfix grpelem" id="u55333-4" href="index.php#noticias"><!-- content --><p>NOTICIAS</p></a>
      <a class="nonblock nontext clearfix grpelem" id="u55329-4" href="index.php#clientes"><!-- content --><p>CLIENTES</p></a>
      <a class="nonblock nontext clearfix grpelem" id="u55332-4" href="index.php"><!-- content --><p id="u55332-2"><span class="Links-Menu" id="u55332">INICIO</span></p></a>
      <div class="grpelem" id="pu55331"><!-- inclusion -->
       <div class="shadow" id="u55331"><!-- simple frame --></div>
       <div class="clearfix" id="pu55327-4"><!-- group -->
        <a class="nonblock nontext clearfix grpelem" id="u55327-4" href="index.php#servicios"><!-- content --><p>SERVICIOS</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55334-4" href="index.php#porquecelmedia"><!-- content --><p>¿POR QUÉ CELMEDIA?</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55330-4" href="index.php#proyectos"><!-- content --><p>CASOS</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55328-4" href="index.php#clientes"><!-- content --><p id="u55328-2"><span class="Links-Menu" id="u55328">CONTACTOS</span></p></a>
       </div>
      </div>
     </div>
     <div class="clip_frame mse_pre_init" id="u55335"><!-- image -->
      <img class="block" id="u55335_img" src="images/celmedia_logo_menu.png" alt="" width="170" height="62"/>
     </div>
    </div>
    <div class="mse_pre_init" id="u50912"><!-- simple frame --></div>
    <div class="clip_frame clearfix mse_pre_init" id="u50151"><!-- image -->
     <div id="u50151_clip">
      <img class="position_content" id="u50151_img" src="images/<?php echo $servicios[0]['imagen']; ?>" alt="" width="525" height="525"/>
     </div>
    </div>
    <a class="nonblock nontext Cuerpo-de-Texto1 clearfix colelem" id="u50116-4" href="index.php#servicios"><!-- content --><h2>&lt; Regresar</h2></a>
    <div class="clearfix colelem" id="pu50107"><!-- group -->
     <div class="clip_frame grpelem" id="u50107"><!-- image -->
      <img class="block" id="u50107_img" src="images/titulo_caso_mgovermetn.png" alt="" width="350" height="50"/>
     </div>
     <div class="Titulares clearfix grpelem" id="u50139-4"><!-- content -->
      <h1><?php echo $servicios[0]['titulo']; ?></h1>
     </div>
     <div class="Titulares clearfix grpelem" id="u50136-4"><!-- content -->
      <h1>Caso de éxito</h1>
     </div>
    </div>
    <div class="clearfix colelem" id="ppu50109-6"><!-- group -->
     <div class="clearfix grpelem" id="pu50109-6"><!-- column -->
      <div class="Cuerpo-de-Texto1 clearfix colelem" id="u50109-6"><!-- content -->
       <h2 id="u50109-2"><?php echo utf8_encode($servicios[0]['subtitulo']); ?></h2>
       
      </div>
      <div class="Cuerpo-de-Texto1 clearfix colelem" id="u50113-4"><!-- content -->
       <h2><?php echo utf8_encode($servicios[0]['descripcion']); ?></h2>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu50914"><!-- column -->
      <div class="colelem" id="u50914"><img src="images/<?php echo $proyectos[0]['imagen'];?>" alt="" width="350" height="145"/></div>
      <div class="Cuerpo-de-Texto1 clearfix colelem" id="u50913-4"><!-- content -->
       <h2><?php echo utf8_encode( substr($proyectos[0]['descripcion'], 0, 195)); ?>...</h2>
      </div>
      <a class="nonblock nontext clearfix colelem" id="u50146-6" href="proyecto-detalle.html"><!-- content --><p id="u50146-4"><span class="Links-Menu" id="u50146">&nbsp;Ver más de este caso&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u50147"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u50148"><!-- image --><img id="u50148_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u50146-3"></span></p></a>
      <a class="nonblock nontext clearfix colelem" id="u50129-6" href="proyectos.html"><!-- content --><p id="u50129-4"><span class="Links-Menu" id="u50129">&nbsp;Ver todos los casos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u50130"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u50131"><!-- image --><img id="u50131_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u50129-3"></span></p></a>
     </div>
    </div>
    <div class="clearfix colelem" id="pu50127-4"><!-- group -->
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u50127-4"><!-- content -->
      <h3>© 2014 CELMEDIA, Todos los derechos reservados</h3>
     </div>
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u50128-4"><!-- content -->
      <h3>Suscríbete</h3>
     </div>
    </div>
    <div class="clearfix colelem" id="ppu50112-4"><!-- group -->
     <div class="clearfix grpelem" id="pu50112-4"><!-- column -->
      <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u50112-4" href="proyectos.html"><!-- content --><h3>Proyectos</h3></a>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50138-4"><!-- content -->
       <h3>Clientes</h3>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu50104-4"><!-- column -->
      <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u50104-4" href="mobile-marketing.html"><!-- content --><h3>Mobile Marketing</h3></a>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50150-4"><!-- content -->
       <h3>TV Interactiva</h3>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu50133-4"><!-- column -->
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50133-4"><!-- content -->
       <h3>Virtual Graphics</h3>
      </div>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50110-4"><!-- content -->
       <h3>M&#45;Goverment</h3>
      </div>
     </div>
     <div class="rounded-corners clearfix grpelem" id="u50137-4"><!-- content -->
      <p id="u50137-2"><span class="Links-Menu" id="u50137">&nbsp;&nbsp; E&#45;mail</span></p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu50111-4"><!-- group -->
     <a class="nonblock nontext Cuerpo-de-texto-2 clearfix grpelem" id="u50111-4" href="noticias.html"><!-- content --><h3>Noticias</h3></a>
     <div class="clearfix grpelem" id="pu50117-4"><!-- column -->
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50117-4"><!-- content -->
       <h3>Gateway</h3>
      </div>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50153-4"><!-- content -->
       <h3>Fidelización</h3>
      </div>
     </div>
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u50141-4"><!-- content -->
      <h3>Social Media</h3>
     </div>
     <div class="clearfix grpelem" id="u50142-7"><!-- content -->
      <p id="u50142-5"><span class="Links-Menu" id="u50142">Enviar</span><span class="Links-Menu" id="u50142-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u50143"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u50144"><!-- image --><img id="u50144_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u50142-4"></span></p>
     </div>
    </div>
    <div class="verticalspacer"></div>
    <div class="mse_pre_init" id="u50106"><!-- simple frame --></div>
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
$('#u55326').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,-0.48]},{"speed":[0,0],"in":[-0.48,Infinity]}]);/* scroll effect */
$('#u55335').registerPositionScrollEffect([{"speed":[10,0],"in":[-Infinity,-0.02]},{"speed":[0,0],"in":[-0.02,Infinity]}]);/* scroll effect */
$('#u50912').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,-20.05]},{"speed":[0,1],"in":[-20.05,Infinity]}]);/* scroll effect */
$('#u50151').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,-20.5]},{"speed":[0,1],"in":[-20.5,Infinity]}]);/* scroll effect */
$('#u50106').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,484.21]},{"speed":[0,1],"in":[484.21,Infinity]}]);/* scroll effect */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
