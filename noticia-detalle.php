<?php
  include("lib/config.php");
  include('lib/MySql.Class.php');

  $db = array(
    'host'=>$cfg_host,
    'user'=>$cfg_user,
    'pass'=>$cfg_pass,
    'name'=>$cfg_base
  );

  $id_noticia = $_GET["id"];


  $noticias = array();
  $tags = array();
  try {

    $sqlNot = "
      SELECT  n.titulo, n.subtitulo, n.descripcion, n.imagen, n.fecha
      FROM noticia as n
      WHERE n.id=$id_noticia";

    $noticias = @MySql::getInstance()->getResultSet($sqlNot);

    $sqlTag = "
      SELECT t.descripcion
      FROM tags as t, tags_noticias as n
      WHERE n.id_noticia=$id_noticia and t.id=n.id_tags";

    $tags = @MySql::getInstance()->getResultSet($sqlTag);
    $lista_tags = '';
    
    foreach ($tags as $tag) {
      $lista_tags.=$tag['descripcion'].' - ';
    }

    $sqlNoti = "
      SELECT n.id, n.titulo, n.descripcion, n.imagen, n.fecha
      FROM noticia as n
      WHERE n.estado = '1' and n.id!=$id_noticia ORDER BY n.fecha DESC";

    $listaNoticias = @MySql::getInstance()->getResultSet($sqlNoti);


  } catch (Exception $e) {

}?>

<!DOCTYPE html>
<html class="html">
 <head>

  <script src="scripts/museredirect.js?4101519497" type="text/javascript"></script>
  
  <script type="text/javascript">
   Muse.Redirect.redirect('desktop', 'tablet/noticia-detalle.html', '', '');
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="7.4.30.244"/>
  <link rel="shortcut icon" href="images/favicon.ico?380174083"/>
  <title>Noticia Detalle</title>
  <link media="only screen and (max-device-width: 960px)" rel="alternate" href="http://celmediaec.com/tablet/noticia-detalle.php?id=<?php echo $listaNoticias[0]['id']; ?>"/>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?3903791173"/>
  <link rel="stylesheet" type="text/css" href="css/noticia-detalle.css?66202878" id="pagesheet"/>
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_noticia-detalle.css?4267141575"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/open-sans:n3,i3,n4,n7:all;open-sans-condensed:n7:all.js" type="text/javascript">\x3C/script>');
</script>
   </head>
 <body>

  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu51701"><!-- group -->
     <div class="clip_frame mse_pre_init" id="u51701"><!-- image -->
      <img class="block" id="u51701_img" src="images/bg_noticias2.jpg" alt="" width="1796" height="1347"/>
     </div>
     <div class="clearfix mse_pre_init" id="u55301"><!-- group -->
      <a class="nonblock nontext clearfix grpelem" id="u55308-4" href="index.php#noticias"><!-- content --><p>NOTICIAS</p></a>
      <a class="nonblock nontext clearfix grpelem" id="u55304-4" href="index.php#clientes"><!-- content --><p>CLIENTES</p></a>
      <a class="nonblock nontext clearfix grpelem" id="u55307-4" href="index.php"><!-- content --><p id="u55307-2"><span class="Links-Menu" id="u55307">INICIO</span></p></a>
      <div class="grpelem" id="pu55306"><!-- inclusion -->
       <div class="shadow" id="u55306"><!-- simple frame --></div>
       <div class="clearfix" id="pu55302-4"><!-- group -->
        <a class="nonblock nontext clearfix grpelem" id="u55302-4" href="index.php#servicios"><!-- content --><p>SERVICIOS</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55309-4" href="index.php#porquecelmedia"><!-- content --><p>¿POR QUÉ CELMEDIA?</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55305-4" href="index.php#proyectos"><!-- content --><p>CASOS</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55303-4" href="index.php#clientes"><!-- content --><p id="u55303-2"><span class="Links-Menu" id="u55303">CONTACTOS</span></p></a>
       </div>
      </div>
     </div>
     <div class="clip_frame mse_pre_init" id="u55310"><!-- image -->
      <img class="block" id="u55310_img" src="images/celmedia_logo_menu.png" alt="" width="170" height="62"/>
     </div>
    </div>
    <div class="clearfix colelem" id="pu51703-4"><!-- group -->
     <div class="Titulares clearfix grpelem" id="u51703-4"><!-- content -->
      <h1>Noticias</h1>
     </div>
     
    </div>
    <a class="nonblock nontext  Cuerpo-de-Texto1 clearfix colelem" id="u51846-4" ><!-- content --><h2><?php echo utf8_encode($noticias[0]['titulo']); ?></h2></a>
    <div class="clearfix colelem" id="pu51877"><!-- group -->
     
     <div class="clearfix grpelem" id="u51845"><!-- column -->
      <div class="position_content" id="u51845_position_content">
       <div class="clearfix colelem" id="u51833"><!-- group -->
        <div class="clearfix grpelem" id="u51835"><!-- group -->
        <!--  <a class="block" href="noticia-detalle.php?id=<?php echo $listaNoticias[0]['id']; ?>"></a> -->
         <a class="nonblock nontext MuseLinkActive Cuerpo-de-texto-2 clearfix grpelem" id="u51834-4" ><!-- content --><h3><?php echo $noticias[0]['fecha']; ?></h3></a>
         <!-- <a class="nonblock nontext MuseLinkActive Cuerpo-de-texto-2 clearfix grpelem" id="u51836-4" href="noticia-detalle.php?id=<?php echo $listaNoticias[0]['id']; ?>"><h3>Tags</h3></a> -->
        </div>
       </div>
       <a class="nonblock nontext MuseLinkActive Cuerpo-de-Texto1 clearfix colelem" id="u51837-4" ><!-- content --><h2><?php echo utf8_encode($noticias[0]['subtitulo']); ?></h2></a>
       <a class="nonblock nontext MuseLinkActive colelem" id="u51843" ><img src="admin/assets/celmediachile/noticias/<?php echo $noticias[0]['imagen']; ?>"  alt="" width="1019" height="451"/></a>
       <a class="nonblock nontext MuseLinkActive Cuerpo-de-texto-2 clearfix colelem" id="u51838-4" ><!-- content --><h3><?php echo utf8_encode($noticias[0]['descripcion']); ?></h3></a>
      </div>
     </div>
    
    </div>
    <div class="clearfix colelem" id="u51847-6"><!-- content -->
     <p><span id="u51847">Temas:</span>&nbsp;<span id="u51847-3"><?php echo $lista_tags ?></span></p>
    </div>
    <a class="nonblock nontext clearfix colelem" id="u51851-6" href="noticias.php"><!-- content --><p id="u51851-4"><span class="Links-Menu" id="u51851">&nbsp;Volver a todos las noticias&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u51852"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u51853"><!-- image --><img id="u51853_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u51851-3"></span></p></a>
    <div class="Titulares clearfix colelem" id="u51856-4"><!-- content -->
     <h1>Otras Noticias</h1>
    </div>
    <div class="clearfix colelem" id="pu51708"><!-- group -->
     <div class="clearfix grpelem" id="u51708"><!-- column -->
      <div class="clearfix colelem" id="u51716"><!-- group -->
       <div class="pointer_cursor MuseLinkActive clearfix grpelem" id="u51717"><!-- group -->
        <a class="block" href="noticia-detalle.php?id=<?php echo $listaNoticias[0]['id']; ?>"></a>
        <a class="nonblock nontext MuseLinkActive Cuerpo-de-texto-2 clearfix grpelem" id="u51719-4" href="noticia-detalle.php?id=<?php echo $listaNoticias[0]['id']; ?>"><!-- content --><h3><?php echo $listaNoticias[0]['fecha']; ?></h3></a>
        
       </div>
      </div>
      <a class="nonblock nontext MuseLinkActive Cuerpo-de-Texto1 clearfix colelem" id="u51714-4" href="noticia-detalle.php?id=<?php echo $listaNoticias[0]['id']; ?>"><!-- content --><h2><?php echo utf8_encode($listaNoticias[0]['titulo']); ?></h2></a>
      <a class="nonblock nontext MuseLinkActive colelem" id="u51713" href="noticia-detalle.php?id=<?php echo $listaNoticias[0]['id']; ?>"><img src="admin/assets/celmediachile/noticias/<?php echo $listaNoticias[0]['imagen'];?>" alt="" width="350" height="255"/></a>
      <a class="nonblock nontext MuseLinkActive Cuerpo-de-texto-2 clearfix colelem" id="u51715-4" href="noticia-detalle.php?id=<?php echo $listaNoticias[0]['id']; ?>"><!-- content --><h3><?php echo utf8_encode( substr($listaNoticias[0]['descripcion'], 0, 100)); ?>...</h3></a>
      <div class="clearfix colelem" id="u51709"><!-- group -->
       <a class="nonblock nontext MuseLinkActive Cuerpo-de-texto-2 clearfix grpelem" id="u51712-5" href="noticia-detalle.php?id=<?php echo $listaNoticias[0]['id']; ?>"><!-- content --><h3><span id="u51712">Leer más</span></h3></a>
       <a class="nonblock nontext MuseLinkActive clip_frame grpelem" id="u51710" href="noticia-detalle.php?id=<?php echo $listaNoticias[0]['id']; ?>" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0,M12=1,M21=-1,M22=0,SizingMethod='auto expand')" data-mu-ie-matrix-dx="0" data-mu-ie-matrix-dy="0"><!-- image --><img class="block" id="u51710_img" src="images/scroll_arrowblack3.png" alt="" width="15" height="15"/></a>
      </div>
     </div>

     <div class="clearfix grpelem" id="u51720"><!-- column -->
      <div class="clearfix colelem" id="u51724"><!-- group -->
       <div class="pointer_cursor MuseLinkActive clearfix grpelem" id="u51726"><!-- group -->
        <a class="block" href="noticia-detalle.php?id=<?php echo $listaNoticias[0]['id']; ?>"></a>
        <a class="nonblock nontext MuseLinkActive Cuerpo-de-texto-2 clearfix grpelem" id="u51725-4" href="noticia-detalle.php?id=<?php echo $listaNoticias[0]['id']; ?>"><!-- content --><h3><?php echo $listaNoticias[0]['fecha']; ?></h3></a>
        
       </div>
      </div>
      <a class="nonblock nontext MuseLinkActive Cuerpo-de-Texto1 clearfix colelem" id="u51722-4" href="noticia-detalle.php?id=<?php echo $listaNoticias[0]['id']; ?>"><!-- content --><h2><?php echo utf8_encode($listaNoticias[0]['titulo']); ?></h2></a>
      <a class="nonblock nontext MuseLinkActive colelem" id="u51723" href="noticia-detalle.php?id=<?php echo $listaNoticias[0]['id']; ?>"><img src="admin/assets/celmediachile/noticias/<?php echo $listaNoticias[0]['imagen'];?>" alt="" width="350" height="255"/></a>
      <a class="nonblock nontext MuseLinkActive Cuerpo-de-texto-2 clearfix colelem" id="u51721-4" href="noticia-detalle.php?id=<?php echo $listaNoticias[0]['id']; ?>"><!-- content --><h3><?php echo utf8_encode( substr($listaNoticias[0]['descripcion'], 0, 100)); ?>...</h3></a>
      <div class="clearfix colelem" id="u51728"><!-- group -->
       <a class="nonblock nontext MuseLinkActive Cuerpo-de-texto-2 clearfix grpelem" id="u51729-5" href="noticia-detalle.php?id=<?php echo $listaNoticias[0]['id']; ?>"><!-- content --><h3><span id="u51729">Leer más</span></h3></a>
       <a class="nonblock nontext MuseLinkActive clip_frame grpelem" id="u51730" href="noticia-detalle.php?id=<?php echo $listaNoticias[0]['id']; ?>" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0,M12=1,M21=-1,M22=0,SizingMethod='auto expand')" data-mu-ie-matrix-dx="0" data-mu-ie-matrix-dy="0"><!-- image --><img class="block" id="u51730_img" src="images/scroll_arrowblack3.png" alt="" width="15" height="15"/></a>
      </div>
     </div>

     <div class="clearfix grpelem" id="u51732"><!-- column -->
      <div class="clearfix colelem" id="u51734"><!-- group -->
       <div class="pointer_cursor MuseLinkActive clearfix grpelem" id="u51737"><!-- group -->
        <a class="block" href="noticia-detalle.php?id=<?php echo $listaNoticias[0]['id']; ?>"></a>
        <a class="nonblock nontext MuseLinkActive Cuerpo-de-texto-2 clearfix grpelem" id="u51735-4" href="noticia-detalle.php?id=<?php echo $listaNoticias[0]['id']; ?>"><!-- content --><h3><?php echo $listaNoticias[0]['fecha']; ?></h3></a>
        
       </div>
      </div>
      <a class="nonblock nontext MuseLinkActive Cuerpo-de-Texto1 clearfix colelem" id="u51743-4" href="noticia-detalle.php?id=<?php echo $listaNoticias[0]['id']; ?>"><!-- content --><h2><?php echo utf8_encode($listaNoticias[0]['titulo']); ?></h2></a>
      <a class="nonblock nontext MuseLinkActive colelem" id="u51742" href="noticia-detalle.php?id=<?php echo $listaNoticias[0]['id']; ?>"><img src="admin/assets/celmediachile/noticias/<?php echo $listaNoticias[0]['imagen'];?>" alt="" width="350" height="255"/></a>
      <a class="nonblock nontext MuseLinkActive Cuerpo-de-texto-2 clearfix colelem" id="u51733-4" href="noticia-detalle.php?id=<?php echo $listaNoticias[0]['id']; ?>"><!-- content --><h3><?php echo utf8_encode( substr($listaNoticias[0]['descripcion'], 0, 100)); ?>...</h3></a>
      <div class="clearfix colelem" id="u51738"><!-- group -->
       <a class="nonblock nontext MuseLinkActive Cuerpo-de-texto-2 clearfix grpelem" id="u51741-5" href="noticia-detalle.php?id=<?php echo $listaNoticias[0]['id']; ?>"><!-- content --><h3><span id="u51741">Leer más</span></h3></a>
       <a class="nonblock nontext MuseLinkActive clip_frame grpelem" id="u51739" href="noticia-detalle.php?id=<?php echo $listaNoticias[0]['id']; ?>" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0,M12=1,M21=-1,M22=0,SizingMethod='auto expand')" data-mu-ie-matrix-dx="0" data-mu-ie-matrix-dy="0"><!-- image --><img class="block" id="u51739_img" src="images/scroll_arrowblack3.png" alt="" width="15" height="15"/></a>
      </div>
     </div>
    </div>
    <div class="clearfix colelem" id="pu50467-4"><!-- group -->
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u50467-4"><!-- content -->
      <h3>© 2014 CELMEDIA, Todos los derechos reservados</h3>
     </div>
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u50468-4"><!-- content -->
      <h3>Suscríbete</h3>
     </div>
    </div>
    <div class="clearfix colelem" id="ppu50469-4"><!-- group -->
     <div class="clearfix grpelem" id="pu50469-4"><!-- column -->
      <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u50469-4" href="proyectos.php"><!-- content --><h3>Proyectos</h3></a>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50471-4"><!-- content -->
       <h3>Clientes</h3>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu50470-4"><!-- column -->
      <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u50470-4" href="mobile-marketing.php"><!-- content --><h3>Mobile Marketing</h3></a>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50472-4"><!-- content -->
       <h3>TV Interactiva</h3>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu50473-4"><!-- column -->
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50473-4"><!-- content -->
       <h3>Virtual Graphics</h3>
      </div>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50476-4"><!-- content -->
       <h3>M&#45;Goverment</h3>
      </div>
     </div>
     <div class="rounded-corners clearfix grpelem" id="u50479-4"><!-- content -->
      <p id="u50479-2"><span class="Links-Menu" id="u50479">&nbsp;&nbsp; E&#45;mail</span></p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu50474-4"><!-- group -->
     <a class="nonblock nontext Cuerpo-de-texto-2 clearfix grpelem" id="u50474-4" href="noticias.php"><!-- content --><h3>Noticias</h3></a>
     <div class="clearfix grpelem" id="pu50475-4"><!-- column -->
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50475-4"><!-- content -->
       <h3>Gateway</h3>
      </div>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50477-4"><!-- content -->
       <h3>Fidelización</h3>
      </div>
     </div>
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u50478-4"><!-- content -->
      <h3>Social Media</h3>
     </div>
     <div class="clearfix grpelem" id="u50480-7"><!-- content -->
      <p id="u50480-5"><span class="Links-Menu" id="u50480">Enviar</span><span class="Links-Menu" id="u50480-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u50481"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u50482"><!-- image --><img id="u50482_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u50480-4"></span></p>
     </div>
    </div>
    <div class="verticalspacer"></div>
    <div class="mse_pre_init" id="u50487"><!-- simple frame --></div>
   </div>
  </div>
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn2.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
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
$('#u51701').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,-100.05]},{"speed":[0,1],"in":[-100.05,Infinity]}]);/* scroll effect */
$('#u55301').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,-0.48]},{"speed":[0,0],"in":[-0.48,Infinity]}]);/* scroll effect */
$('#u55310').registerPositionScrollEffect([{"speed":[10,0],"in":[-Infinity,-0.02]},{"speed":[0,0],"in":[-0.02,Infinity]}]);/* scroll effect */
$('#u50487').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,1889.85]},{"speed":[0,1],"in":[1889.85,Infinity]}]);/* scroll effect */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
