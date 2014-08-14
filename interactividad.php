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
      WHERE estado = '1' and titulo = 'Tv Interactiva'";

    $servicios = @MySql::getInstance()->getResultSet($sqlImagen);

    $sqlPro = "
      SELECT p.id, p.nombre, p.descripcion, p.imagen
      FROM proyecto as p, servicio as s
      WHERE p.estado = '1' and p.prioridad = '1' and titulo = 'Tv Interactiva' and p.id_servicio=s.id";

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
  <title>Interactividad</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4245872416"/>
  <link rel="stylesheet" type="text/css" href="css/interactividad.css?4225243728" id="pagesheet"/>
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_interactividad.css?3921085542"/>
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
    <div class="clearfix colelem" id="pu55378"><!-- group -->
     <div class="clearfix mse_pre_init" id="u55378"><!-- group -->
      <a class="nonblock nontext clearfix grpelem" id="u55385-4" href="noticias.php"><!-- content --><p>NOTICIAS</p></a>
      <a class="nonblock nontext clearfix grpelem" id="u55381-4" href="index.php#clientes"><!-- content --><p>CLIENTES</p></a>
      <a class="nonblock nontext clearfix grpelem" id="u55384-4" href="index.php"><!-- content --><p id="u55384-2"><span class="Links-Menu" id="u55384">INICIO</span></p></a>
      <div class="grpelem" id="pu55383"><!-- inclusion -->
       <div class="shadow" id="u55383"><!-- simple frame --></div>
       <div class="clearfix" id="pu55379-4"><!-- group -->
        <a class="nonblock nontext clearfix grpelem" id="u55379-4" href="index.php#servicios"><!-- content --><p>SERVICIOS</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55386-4" href="index.php#porquecelmedia"><!-- content --><p>¿POR QUÉ CELMEDIA?</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55382-4" href="index.php#proyectos"><!-- content --><p>CASOS</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55380-4" href="index.php#clientes"><!-- content --><p id="u55380-2"><span class="Links-Menu" id="u55380">CONTACTOS</span></p></a>
       </div>
      </div>
     </div>
     <div class="clip_frame mse_pre_init" id="u55387"><!-- image -->
      <img class="block" id="u55387_img" src="images/celmedia_logo_menu.png" alt="" width="170" height="62"/>
     </div>
    </div>
    <div class="mse_pre_init" id="u50493"><!-- simple frame --></div>
    <div class="clip_frame clearfix mse_pre_init" id="u49768"><!-- image -->
     <div id="u49768_clip">
      <img class="position_content" id="u49768_img" src="admin/assets/celmediachile/servicios/<?php echo $servicios[0]['imagen']; ?>" alt="" width="525" height="525"/>
     </div>
    </div>
    <a class="nonblock nontext Cuerpo-de-Texto1 clearfix colelem" id="u49807-4" href="index.php#servicios"><!-- content --><h2>&lt; Regresar</h2></a>
    <div class="clearfix colelem" id="pu49773"><!-- group -->
     <div class="clip_frame grpelem" id="u49773"><!-- image -->
      <img class="block" id="u49773_img" src="images/titulo_caso_tvinter.png" alt="" width="350" height="50"/>
     </div>
     <div class="Titulares clearfix grpelem" id="u49765-4"><!-- content -->
      <h1><?php echo $servicios[0]['titulo']; ?></h1>
     </div>
     <div class="Titulares clearfix grpelem" id="u49785-4"><!-- content -->
      <h1>Caso de éxito</h1>
     </div>
    </div>
    <div class="clearfix colelem" id="ppu49789-7"><!-- group -->
     <div class="clearfix grpelem" id="pu49789-7"><!-- column -->
      <div class="Cuerpo-de-Texto1 clearfix colelem" id="u49789-7"><!-- content -->
       <h2 id="u49789-2"><?php echo utf8_encode($servicios[0]['subtitulo']); ?></h2>
       
       <h2 id="u49789-5">&nbsp;</h2>
      </div>
      <div class="Cuerpo-de-Texto1 clearfix colelem" id="u49797-9"><!-- content -->
       <h2><?php echo utf8_encode($servicios[0]['descripcion']); ?></h2>
       <h2>&nbsp;</h2>
       <h2>&nbsp;</h2>
       <h2>&nbsp;</h2>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu50495"><!-- column -->
      <div class="colelem" id="u50495"><img src="admin/assets/celmediachile/proyectos/<?php echo $proyectos[0]['imagen'];?>" alt="" width="350" height="145"/></div>
      <div class="Cuerpo-de-Texto1 clearfix colelem" id="u50494-4"><!-- content -->
       <h2><?php echo utf8_encode( $proyectos[0]['nombre']).''.utf8_encode( substr($proyectos[0]['descripcion'], 0, 180)); ?>...</h2>
      </div>
      <a class="nonblock nontext clearfix colelem" id="u49792-6" href="proyecto-detalle.html"><!-- content --><p id="u49792-4"><span class="Links-Menu" id="u49792">&nbsp;Ver más de este caso&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u49793"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u49794"><!-- image --><img id="u49794_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u49792-3"></span></p></a>
      <a class="nonblock nontext clearfix colelem" id="u49810-6" href="proyectos.html"><!-- content --><p id="u49810-4"><span class="Links-Menu" id="u49810">&nbsp;Ver todos los casos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u49811"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u49812"><!-- image --><img id="u49812_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u49810-3"></span></p></a>
     </div>
    </div>
    <div class="clearfix colelem" id="pu49764-4"><!-- group -->
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u49764-4"><!-- content -->
      <h3>© 2014 CELMEDIA, Todos los derechos reservados</h3>
     </div>
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u49796-4"><!-- content -->
      <h3>Suscríbete</h3>
     </div>
    </div>
    <div class="clearfix colelem" id="ppu49788-4"><!-- group -->
     <div class="clearfix grpelem" id="pu49788-4"><!-- column -->
      <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u49788-4" href="proyectos.html"><!-- content --><h3>Proyectos</h3></a>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u49808-4"><!-- content -->
       <h3>Clientes</h3>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu49772-4"><!-- column -->
      <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u49772-4" href="mobile-marketing.html"><!-- content --><h3>Mobile Marketing</h3></a>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u49806-4"><!-- content -->
       <h3>TV Interactiva</h3>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu49798-4"><!-- column -->
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u49798-4"><!-- content -->
       <h3>Virtual Graphics</h3>
      </div>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u49786-4"><!-- content -->
       <h3>M&#45;Goverment</h3>
      </div>
     </div>
     <div class="rounded-corners clearfix grpelem" id="u49787-4"><!-- content -->
      <p id="u49787-2"><span class="Links-Menu" id="u49787">&nbsp;&nbsp; E&#45;mail</span></p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu49784-4"><!-- group -->
     <a class="nonblock nontext Cuerpo-de-texto-2 clearfix grpelem" id="u49784-4" href="noticias.html"><!-- content --><h3>Noticias</h3></a>
     <div class="clearfix grpelem" id="pu49771-4"><!-- column -->
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u49771-4"><!-- content -->
       <h3>Gateway</h3>
      </div>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u49805-4"><!-- content -->
       <h3>Fidelización</h3>
      </div>
     </div>
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u49767-4"><!-- content -->
      <h3>Social Media</h3>
     </div>
     <div class="clearfix grpelem" id="u49799-7"><!-- content -->
      <p id="u49799-5"><span class="Links-Menu" id="u49799">Enviar</span><span class="Links-Menu" id="u49799-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u49800"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u49801"><!-- image --><img id="u49801_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u49799-4"></span></p>
     </div>
    </div>
    <div class="verticalspacer"></div>
    <div class="mse_pre_init" id="u49766"><!-- simple frame --></div>
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
$('#u55378').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,-0.48]},{"speed":[0,0],"in":[-0.48,Infinity]}]);/* scroll effect */
$('#u55387').registerPositionScrollEffect([{"speed":[10,0],"in":[-Infinity,-0.02]},{"speed":[0,0],"in":[-0.02,Infinity]}]);/* scroll effect */
$('#u50493').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,-19.8]},{"speed":[0,1],"in":[-19.8,Infinity]}]);/* scroll effect */
$('#u49768').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,-19.5]},{"speed":[0,1],"in":[-19.5,Infinity]}]);/* scroll effect */
$('#u49766').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,484.21]},{"speed":[0,1],"in":[484.21,Infinity]}]);/* scroll effect */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>