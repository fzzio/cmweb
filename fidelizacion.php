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
      WHERE estado = '1' and titulo = 'Fidelización'";

    $servicios = @MySql::getInstance()->getResultSet($sqlImagen);

    $sqlPro = "
      SELECT p.id, p.nombre, p.descripcion, p.imagen
      FROM proyecto as p, servicio as s
      WHERE p.estado = '1' and p.prioridad = '1' and titulo = 'Fidelización' and p.id_servicio=s.id";

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
  <title>Fidelización</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4245872416"/>
  <link rel="stylesheet" type="text/css" href="css/fidelizaci_n.css?44472181" id="pagesheet"/>
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_fidelizaci_n.css?495634053"/>
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
    <div class="clearfix colelem" id="pu55352"><!-- group -->
     <div class="clearfix mse_pre_init" id="u55352"><!-- group -->
      <a class="nonblock nontext clearfix grpelem" id="u55359-4" href="noticias.php"><!-- content --><p>NOTICIAS</p></a>
      <a class="nonblock nontext clearfix grpelem" id="u55355-4" href="index.php#clientes"><!-- content --><p>CLIENTES</p></a>
      <a class="nonblock nontext clearfix grpelem" id="u55358-4" href="index.php"><!-- content --><p id="u55358-2"><span class="Links-Menu" id="u55358">INICIO</span></p></a>
      <div class="grpelem" id="pu55357"><!-- inclusion -->
       <div class="shadow" id="u55357"><!-- simple frame --></div>
       <div class="clearfix" id="pu55353-4"><!-- group -->
        <a class="nonblock nontext clearfix grpelem" id="u55353-4" href="index.php#servicios"><!-- content --><p>SERVICIOS</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55360-4" href="index.php#porquecelmedia"><!-- content --><p>¿POR QUÉ CELMEDIA?</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55356-4" href="index.php#proyectos"><!-- content --><p>CASOS</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55354-4" href="index.php#clientes"><!-- content --><p id="u55354-2"><span class="Links-Menu" id="u55354">CONTACTOS</span></p></a>
       </div>
      </div>
     </div>
     <div class="clip_frame mse_pre_init" id="u55361"><!-- image -->
      <img class="block" id="u55361_img" src="images/celmedia_logo_menu.png" alt="" width="170" height="62"/>
     </div>
    </div>
    <div class="mse_pre_init" id="u50900"><!-- simple frame --></div>
    <div class="clip_frame clearfix mse_pre_init" id="u49945"><!-- image -->
     <div id="u49945_clip">
      <img class="position_content" id="u49945_img" src="admin/assets/celmediachile/servicios/<?php echo $servicios[0]['imagen']; ?>" alt="" width="525" height="525"/>
     </div>
    </div>
    <a class="nonblock nontext Cuerpo-de-Texto1 clearfix colelem" id="u49927-4" href="index.php#servicios"><!-- content --><h2>&lt; Regresar</h2></a>
    <div class="clearfix colelem" id="pu49964"><!-- group -->
     <div class="clip_frame grpelem" id="u49964"><!-- image -->
      <img class="block" id="u49964_img" src="images/titulo_caso_fidelizacion.png" alt="" width="350" height="50"/>
     </div>
     <div class="Titulares clearfix grpelem" id="u49944-4"><!-- content -->
      <h1><?php echo $servicios[0]['titulo']; ?></h1>
     </div>
     <div class="Titulares clearfix grpelem" id="u49963-4"><!-- content -->
      <h1>Caso de éxito</h1>
     </div>
    </div>
    <div class="clearfix colelem" id="ppu49952-8"><!-- group -->
     <div class="clearfix grpelem" id="pu49952-8"><!-- column -->
      <div class="Cuerpo-de-Texto1 clearfix colelem" id="u49952-8"><!-- content -->
       <h2 id="u49952-2"><?php echo utf8_encode($servicios[0]['subtitulo']); ?></h2>
       
      </div>
      <div class="Cuerpo-de-Texto1 clearfix colelem" id="u49951-7"><!-- content -->
       <h2><?php echo utf8_encode($servicios[0]['descripcion']); ?></h2>
       <h2>&nbsp;</h2>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu50902"><!-- column -->
      <div class="colelem" id="u50902"><img src="admin/assets/celmediachile/proyectos/<?php echo $proyectos[0]['imagen'];?>" alt="" width="350" height="145"/></div>
      <div class="Cuerpo-de-Texto1 clearfix colelem" id="u50901-4"><!-- content -->
       <h2><?php echo utf8_encode( $proyectos[0]['nombre']).''.utf8_encode( substr($proyectos[0]['descripcion'], 0, 180)); ?>...</h2>
      </div>
      <a class="nonblock nontext clearfix colelem" id="u49956-6" href="proyecto-detalle.html"><!-- content --><p id="u49956-4"><span class="Links-Menu" id="u49956">&nbsp;Ver más de este caso&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u49957"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u49958"><!-- image --><img id="u49958_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u49956-3"></span></p></a>
      <a class="nonblock nontext clearfix colelem" id="u49938-6" href="proyectos.html"><!-- content --><p id="u49938-4"><span class="Links-Menu" id="u49938">&nbsp;Ver todos los casos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u49939"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u49940"><!-- image --><img id="u49940_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u49938-3"></span></p></a>
     </div>
    </div>
    <div class="clearfix colelem" id="pu49961-4"><!-- group -->
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u49961-4"><!-- content -->
      <h3>© 2014 CELMEDIA, Todos los derechos reservados</h3>
     </div>
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u49966-4"><!-- content -->
      <h3>Suscríbete</h3>
     </div>
    </div>
    <div class="clearfix colelem" id="ppu49973-4"><!-- group -->
     <div class="clearfix grpelem" id="pu49973-4"><!-- column -->
      <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u49973-4" href="proyectos.php"><!-- content --><h3>Proyectos</h3></a>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u49960-4"><!-- content -->
       <h3>Clientes</h3>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu49950-4"><!-- column -->
      <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u49950-4" href="mobile-marketing.php"><!-- content --><h3>Mobile Marketing</h3></a>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u49955-4"><!-- content -->
       <h3>TV Interactiva</h3>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu49954-4"><!-- column -->
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u49954-4"><!-- content -->
       <h3>Virtual Graphics</h3>
      </div>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u49943-4"><!-- content -->
       <h3>M&#45;Goverment</h3>
      </div>
     </div>
     <div class="rounded-corners clearfix grpelem" id="u49972-4"><!-- content -->
      <p id="u49972-2"><span class="Links-Menu" id="u49972">&nbsp;&nbsp; E&#45;mail</span></p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu49937-4"><!-- group -->
     <a class="nonblock nontext Cuerpo-de-texto-2 clearfix grpelem" id="u49937-4" href="noticias.php"><!-- content --><h3>Noticias</h3></a>
     <div class="clearfix grpelem" id="pu49949-4"><!-- column -->
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u49949-4"><!-- content -->
       <h3>Gateway</h3>
      </div>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u49967-4"><!-- content -->
       <h3>Fidelización</h3>
      </div>
     </div>
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u49976-4"><!-- content -->
      <h3>Social Media</h3>
     </div>
     <div class="clearfix grpelem" id="u49968-7"><!-- content -->
      <p id="u49968-5"><span class="Links-Menu" id="u49968">Enviar</span><span class="Links-Menu" id="u49968-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u49969"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u49970"><!-- image --><img id="u49970_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u49968-4"></span></p>
     </div>
    </div>
    <div class="verticalspacer"></div>
    <div class="mse_pre_init" id="u49942"><!-- simple frame --></div>
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
$('#u55352').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,-0.48]},{"speed":[0,0],"in":[-0.48,Infinity]}]);/* scroll effect */
$('#u55361').registerPositionScrollEffect([{"speed":[10,0],"in":[-Infinity,-0.02]},{"speed":[0,0],"in":[-0.02,Infinity]}]);/* scroll effect */
$('#u50900').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,-20]},{"speed":[0,1],"in":[-20,Infinity]}]);/* scroll effect */
$('#u49945').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,-19.5]},{"speed":[0,1],"in":[-19.5,Infinity]}]);/* scroll effect */
$('#u49942').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,484.21]},{"speed":[0,1],"in":[484.21,Infinity]}]);/* scroll effect */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>