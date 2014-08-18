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
  $servicioid = 0;
  if (isset($_GET["srv"]) || !empty($_GET["srv"])) {
    $servicioid = $_GET["srv"];
    try {
      $sqlImagen = "
        SELECT *
        FROM servicio
        WHERE estado = '1' and id = $servicioid";

      $servicio = @MySql::getInstance()->getSingleRow($sqlImagen);

      $sqlPro = "
        SELECT p.id, p.nombre, p.descripcion, p.imagen
        FROM proyecto as p, servicio as s
        WHERE p.estado = '1' and p.prioridad = '1' and p.id_servicio = $servicioid";

      $proyectos = @MySql::getInstance()->getResultSet($sqlPro);

    } catch (Exception $e) {

    }
  }else{
    die();
  }
?>
<!DOCTYPE html>
<html class="html">
 <head>

  <script src="scripts/museredirect.js?4101519497" type="text/javascript"></script>
  
  <script type="text/javascript">
   Muse.Redirect.redirect('desktop', '', 'phone/mobile-marketing.html', '');
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="7.4.30.244"/>
  <link rel="shortcut icon" href="images/favicon.ico?380174083"/>
  <title>Mobile Marketing</title>
  <link media="only screen and (max-device-width: 370px)" rel="alternate" href="http://celmediaec.com/phone/mobile-marketing.html"/>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4245872416"/>
  <link rel="stylesheet" type="text/css" href="css/mobile-marketing.css?331178388" id="pagesheet"/>
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_mobile-marketing.css?311867290"/>
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
    <div class="clearfix colelem" id="pu55391"><!-- group -->
     <div class="clearfix mse_pre_init" id="u55391"><!-- group -->
      <a class="nonblock nontext clearfix grpelem" id="u55398-4" href="index.php#noticias"><!-- content --><p>NOTICIAS</p></a>
      <a class="nonblock nontext clearfix grpelem" id="u55394-4" href="index.php#clientes"><!-- content --><p>CLIENTES</p></a>
      <a class="nonblock nontext clearfix grpelem" id="u55397-4" href="index.php"><!-- content --><p id="u55397-2"><span class="Links-Menu" id="u55397">INICIO</span></p></a>
      <div class="grpelem" id="pu55396"><!-- inclusion -->
       <div class="shadow" id="u55396"><!-- simple frame --></div>
       <div class="clearfix" id="pu55392-4"><!-- group -->
        <a class="nonblock nontext clearfix grpelem" id="u55392-4" href="index.php#servicios"><!-- content --><p>SERVICIOS</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55399-4" href="index.php#porquecelmedia"><!-- content --><p>¿POR QUÉ CELMEDIA?</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55395-4" href="index.php#proyectos"><!-- content --><p>CASOS</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55393-4" href="index.php#clientes"><!-- content --><p id="u55393-2"><span class="Links-Menu" id="u55393">CONTACTOS</span></p></a>
       </div>
      </div>
     </div>
     <div class="clip_frame mse_pre_init" id="u55400"><!-- image -->
      <img class="block" id="u55400_img" src="images/celmedia_logo_menu.png" alt="" width="170" height="62"/>
     </div>
    </div>
    <div class="mse_pre_init" id="u50489"><!-- simple frame --></div>
    <div class="clip_frame clearfix mse_pre_init" id="u49712"><!-- image -->
     <div id="u49712_clip">
      <img class="position_content" id="u49712_img" src="admin/assets/celmediachile/servicios/<?php echo $servicio['imagen']; ?>" alt="" width="525" height="525"/>
     </div>
    </div>
    <a class="nonblock nontext Cuerpo-de-Texto1 clearfix colelem" id="u49754-4" href="index.php#servicios"><!-- content --><h2>&lt; Regresar</h2></a>
    <div class="clearfix colelem" id="ppu46615-4"><!-- group -->
     <div class="clearfix grpelem" id="pu46615-4"><!-- column -->
      <div class="Titulares clearfix colelem" id="u46615-4"><!-- content -->
       <h1><?php echo utf8_encode($servicio['titulo']); ?></h1>
      </div>
      <div class="Cuerpo-de-Texto1 clearfix colelem" id="u46618-8"><!-- content -->
       <h2><?php echo utf8_encode($servicio['subtitulo']); ?></h2>
       
      </div>
     </div>
     <div class="clearfix grpelem" id="ppu49729"><!-- column -->
      <div class="clearfix colelem" id="pu49729"><!-- group -->
       <div class="clip_frame grpelem" id="u49729"><!-- image -->
        <img class="block" id="u49729_img" src="images/titulo_caso_mobielm.png" alt="" width="350" height="50"/>
       </div>
       <div class="Titulares clearfix grpelem" id="u49734-4"><!-- content -->
        <h1>Caso de éxito</h1>
       </div>
      </div>
      <div class="colelem" id="u50490"><img src="admin/assets/celmediachile/proyectos/<?php echo $proyectos[0]['imagen'];?>" alt="" width="350" height="145"/></div> <!-- width="350" height="50" -->
     </div>
    </div>
    <div class="clearfix colelem" id="pu46617-7"><!-- group -->
     <div class="Cuerpo-de-Texto1 clearfix grpelem" id="u46617-7"><!-- content -->
      <h2><?php echo utf8_encode($servicio['descripcion']); ?></h2>
      <h2>&nbsp;</h2>
     
     </div>
     <div class="clearfix grpelem" id="pu49735-4"><!-- column -->
      <div class="Cuerpo-de-Texto1 clearfix colelem" id="u49735-4"><!-- content -->
       <h2><?php echo utf8_encode( $proyectos[0]['nombre']).''.utf8_encode( substr($proyectos[0]['descripcion'], 0, 180)); ?>...</h2>
      </div>
      <a class="nonblock nontext clearfix colelem" id="u49746-6" href="proyecto-detalle.php?id=<?php echo $proyectos[0]['id'] ?>"><!-- content --><p id="u49746-4"><span class="Links-Menu" id="u49746">&nbsp;Ver más de este caso&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u49747"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u49748"><!-- image --><img id="u49748_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u49746-3"></span></p></a>
      <a class="nonblock nontext clearfix colelem" id="u49736-6" href="proyectos.php"><!-- content --><p id="u49736-4"><span class="Links-Menu" id="u49736">&nbsp;Ver todos los casos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u49737"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u49738"><!-- image --><img id="u49738_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u49736-3"></span></p></a>
     </div>
    </div>
    <div class="clearfix colelem" id="pu49664-4"><!-- group -->
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u49664-4"><!-- content -->
      <h3>© 2014 CELMEDIA, Todos los derechos reservados</h3>
     </div>
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u49665-4"><!-- content -->
      <h3>Suscríbete</h3>
     </div>
    </div>
    <div class="clearfix colelem" id="ppu49666-4"><!-- group -->
     <div class="clearfix grpelem" id="pu49666-4"><!-- column -->
      <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u49666-4" href="proyectos.php"><!-- content --><h3>Proyectos</h3></a>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u49668-4"><!-- content -->
       <h3>Clientes</h3>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu49667-4"><!-- column -->
      <a class="nonblock nontext MuseLinkActive Cuerpo-de-texto-2 clearfix colelem" id="u49667-4" href="servicios.php?srv=1"><!-- content --><h3>Mobile Marketing</h3></a>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u49669-4"><!-- content -->
       <a class="nonblock nontext MuseLinkActive Cuerpo-de-texto-2 clearfix colelem" id="u49667-4" href="servicios.php?srv=2"><h3>TV Interactiva</h3></a>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu49670-4"><!-- column -->
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u49670-4"><!-- content -->
       <a class="nonblock nontext MuseLinkActive Cuerpo-de-texto-2 clearfix colelem" id="u49667-4" href="servicios.php?srv=5"><h3>Virtual Graphics</h3></a>
      </div>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u49673-4"><!-- content -->
       <a class="nonblock nontext MuseLinkActive Cuerpo-de-texto-2 clearfix colelem" id="u49667-4" href="servicios.php?srv=6"><h3>M&#45;Goverment</h3></a>
      </div>
     </div>
     <div class="rounded-corners clearfix grpelem" id="u49676-4"><!-- content -->
      <p id="u49676-2"><span class="Links-Menu" id="u49676">&nbsp;&nbsp; E&#45;mail</span></p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu49671-4"><!-- group -->
     <a class="nonblock nontext Cuerpo-de-texto-2 clearfix grpelem" id="u49671-4" href="noticias.php"><!-- content --><h3>Noticias</h3></a>
     <div class="clearfix grpelem" id="pu49672-4"><!-- column -->
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u49672-4"><!-- content -->
       <a class="nonblock nontext MuseLinkActive Cuerpo-de-texto-2 clearfix colelem" id="u49667-4" href="servicios.php?srv=3"><h3>Gateway</h3></a>
      </div>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u49674-4"><!-- content -->
       <a class="nonblock nontext MuseLinkActive Cuerpo-de-texto-2 clearfix colelem" id="u49667-4" href="servicios.php?srv=1"><h3>Fidelización</h3></a>
      </div>
     </div>
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u49675-4"><!-- content -->
      <a class="nonblock nontext MuseLinkActive Cuerpo-de-texto-2 clearfix colelem" id="u49667-4" href="servicios.php?srv=7"><h3>Social Media</h3></a>
     </div>
     <div class="clearfix grpelem" id="u49677-7"><!-- content -->
      <p id="u49677-5"><span class="Links-Menu" id="u49677">Enviar</span><span class="Links-Menu" id="u49677-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u49678"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u49679"><!-- image --><img id="u49679_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u49677-4"></span></p>
     </div>
    </div>
    <div class="verticalspacer"></div>
    <div class="mse_pre_init" id="u49663"><!-- simple frame --></div>
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
$('#u55391').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,-0.48]},{"speed":[0,0],"in":[-0.48,Infinity]}]);/* scroll effect */
$('#u55400').registerPositionScrollEffect([{"speed":[10,0],"in":[-Infinity,-0.02]},{"speed":[0,0],"in":[-0.02,Infinity]}]);/* scroll effect */
$('#u50489').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,-20.8]},{"speed":[0,1],"in":[-20.8,Infinity]}]);/* scroll effect */
$('#u49712').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,-20.5]},{"speed":[0,1],"in":[-20.5,Infinity]}]);/* scroll effect */
$('#u49663').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,484.21]},{"speed":[0,1],"in":[484.21,Infinity]}]);/* scroll effect */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
