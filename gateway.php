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
      WHERE estado = '1' and titulo = 'Gateway'";

    $servicios = @MySql::getInstance()->getResultSet($sqlImagen);

    $sqlPro = "
      SELECT p.id, p.nombre, p.descripcion, p.imagen
      FROM proyecto as p, servicio as s
      WHERE p.estado = '1' and p.prioridad = '1' and titulo = 'Gateway' and p.id_servicio=s.id";

    $proyectos = @MySql::getInstance()->getResultSet($sqlPro);

  } catch (Exception $e) {

}?>

<!DOCTYPE html>
<html class="html">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="7.4.30.244"/>
  <link rel="shortcut icon" href="images/favicon.ico?380174083"/>
  <title>Gateway</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4245872416"/>
  <link rel="stylesheet" type="text/css" href="css/gateway.css?3802526928" id="pagesheet"/>
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_gateway.css?3900697038"/>
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
    <div class="clearfix colelem" id="pu55365"><!-- group -->
     <div class="clearfix mse_pre_init" id="u55365"><!-- group -->
      <a class="nonblock nontext clearfix grpelem" id="u55372-4" href="noticias.php"><!-- content --><p>NOTICIAS</p></a>
      <a class="nonblock nontext clearfix grpelem" id="u55368-4" href="index.php#clientes"><!-- content --><p>CLIENTES</p></a>
      <a class="nonblock nontext clearfix grpelem" id="u55371-4" href="index.php"><!-- content --><p id="u55371-2"><span class="Links-Menu" id="u55371">INICIO</span></p></a>
      <div class="grpelem" id="pu55370"><!-- inclusion -->
       <div class="shadow" id="u55370"><!-- simple frame --></div>
       <div class="clearfix" id="pu55366-4"><!-- group -->
        <a class="nonblock nontext clearfix grpelem" id="u55366-4" href="index.php#servicios"><!-- content --><p>SERVICIOS</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55373-4" href="index.php#porquecelmedia"><!-- content --><p>¿POR QUÉ CELMEDIA?</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55369-4" href="index.php#proyectos"><!-- content --><p>CASOS</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55367-4" href="index.php#clientes"><!-- content --><p id="u55367-2"><span class="Links-Menu" id="u55367">CONTACTOS</span></p></a>
       </div>
      </div>
     </div>
     <div class="clip_frame mse_pre_init" id="u55374"><!-- image -->
      <img class="block" id="u55374_img" src="images/celmedia_logo_menu.png" alt="" width="170" height="62"/>
     </div>
    </div>
    <div class="mse_pre_init" id="u50896"><!-- simple frame --></div>
    <div class="clip_frame clearfix mse_pre_init" id="u49876"><!-- image -->
     <div id="u49876_clip">
      <img class="position_content" id="u49876_img" src="images/img_referencial.jpg" alt="" width="525" height="525"/>
     </div>
    </div>
    <a class="nonblock nontext Cuerpo-de-Texto1 clearfix colelem" id="u49875-4" href="index.php#servicios"><!-- content --><h2>&lt; Regresar</h2></a>
    <div class="clearfix colelem" id="pu49891"><!-- group -->
     <div class="clip_frame grpelem" id="u49891"><!-- image -->
      <img class="block" id="u49891_img" src="images/titulo_caso_gateway.png" alt="" width="350" height="50"/>
     </div>
     <div class="Titulares clearfix grpelem" id="u49888-4"><!-- content -->
      <h1><?php echo $servicios[0]['titulo']; ?></h1>
     </div>
     <div class="Titulares clearfix grpelem" id="u49887-4"><!-- content -->
      <h1>Caso de éxito</h1>
     </div>
    </div>
    <div class="clearfix colelem" id="ppu49886-8"><!-- group -->
     <div class="clearfix grpelem" id="pu49886-8"><!-- column -->
      <div class="Cuerpo-de-Texto1 clearfix colelem" id="u49886-8"><!-- content -->
       <h2 id="u49886-2"><?php echo utf8_encode($servicios[0]['subtitulo']); ?></h2>
       
      </div>
      <div class="Cuerpo-de-Texto1 clearfix colelem" id="u49844-10"><!-- content -->
       <h2><?php echo utf8_encode($servicios[0]['descripcion']); ?></h2>
       <h2>&nbsp;</h2>
       <h2>&nbsp;</h2>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu50898"><!-- column -->
      <div class="colelem" id="u50898"><img src="images/<?php echo $proyectos[0]['imagen'];?>" alt="" width="350" height="145"/></div>
      <div class="Cuerpo-de-Texto1 clearfix colelem" id="u50897-4"><!-- content -->
       <h2><?php echo utf8_encode( substr($proyectos[0]['descripcion'], 0, 195)); ?>...</h2>
      </div>
      <a class="nonblock nontext clearfix colelem" id="u49871-6" href="proyecto-detalle.html"><!-- content --><p id="u49871-4"><span class="Links-Menu" id="u49871">&nbsp;Ver más de este caso&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u49872"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u49873"><!-- image --><img id="u49873_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u49871-3"></span></p></a>
      <a class="nonblock nontext clearfix colelem" id="u49880-6" href="proyectos.html"><!-- content --><p id="u49880-4"><span class="Links-Menu" id="u49880">&nbsp;Ver todos los casos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u49881"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u49882"><!-- image --><img id="u49882_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u49880-3"></span></p></a>
     </div>
    </div>
    <div class="clearfix colelem" id="pu49868-4"><!-- group -->
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u49868-4"><!-- content -->
      <h3>© 2014 CELMEDIA, Todos los derechos reservados</h3>
     </div>
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u49878-4"><!-- content -->
      <h3>Suscríbete</h3>
     </div>
    </div>
    <div class="clearfix colelem" id="ppu49879-4"><!-- group -->
     <div class="clearfix grpelem" id="pu49879-4"><!-- column -->
      <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u49879-4" href="proyectos.php"><!-- content --><h3>Proyectos</h3></a>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u49869-4"><!-- content -->
       <h3>Clientes</h3>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu49864-4"><!-- column -->
      <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u49864-4" href="mobile-marketing.php"><!-- content --><h3>Mobile Marketing</h3></a>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u49890-4"><!-- content -->
       <h3>TV Interactiva</h3>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu49884-4"><!-- column -->
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u49884-4"><!-- content -->
       <h3>Virtual Graphics</h3>
      </div>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u49885-4"><!-- content -->
       <h3>M&#45;Goverment</h3>
      </div>
     </div>
     <div class="rounded-corners clearfix grpelem" id="u49870-4"><!-- content -->
      <p id="u49870-2"><span class="Links-Menu" id="u49870">&nbsp;&nbsp; E&#45;mail</span></p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu49853-4"><!-- group -->
     <a class="nonblock nontext Cuerpo-de-texto-2 clearfix grpelem" id="u49853-4" href="noticias.php"><!-- content --><h3>Noticias</h3></a>
     <div class="clearfix grpelem" id="pu49867-4"><!-- column -->
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u49867-4"><!-- content -->
       <h3>Gateway</h3>
      </div>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u49863-4"><!-- content -->
       <h3>Fidelización</h3>
      </div>
     </div>
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u49889-4"><!-- content -->
      <h3>Social Media</h3>
     </div>
     <div class="clearfix grpelem" id="u49848-7"><!-- content -->
      <p id="u49848-5"><span class="Links-Menu" id="u49848">Enviar</span><span class="Links-Menu" id="u49848-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u49849"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u49850"><!-- image --><img id="u49850_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u49848-4"></span></p>
     </div>
    </div>
    <div class="verticalspacer"></div>
    <div class="mse_pre_init" id="u49847"><!-- simple frame --></div>
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
$('#u55365').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,-0.48]},{"speed":[0,0],"in":[-0.48,Infinity]}]);/* scroll effect */
$('#u55374').registerPositionScrollEffect([{"speed":[10,0],"in":[-Infinity,-0.02]},{"speed":[0,0],"in":[-0.02,Infinity]}]);/* scroll effect */
$('#u50896').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,-20]},{"speed":[0,1],"in":[-20,Infinity]}]);/* scroll effect */
$('#u49876').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,-19.5]},{"speed":[0,1],"in":[-19.5,Infinity]}]);/* scroll effect */
$('#u49847').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,484]},{"speed":[0,1],"in":[484,Infinity]}]);/* scroll effect */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
