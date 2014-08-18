<?php
  include("lib/config.php");
  include('lib/MySql.Class.php');

  $db = array(
    'host'=>$cfg_host,
    'user'=>$cfg_user,
    'pass'=>$cfg_pass,
    'name'=>$cfg_base
  );

  $noticias = array();
  try {
   
    $sqlNot = "
      SELECT n.id, n.titulo, n.descripcion, n.imagen, n.fecha
      FROM noticia as n
      WHERE n.estado = '1' ORDER BY n.fecha DESC";

    $noticias = @MySql::getInstance()->getResultSet($sqlNot);


  } catch (Exception $e) {

} ?>

<!DOCTYPE html>
<html class="html">
 <head>

  <script src="scripts/museredirect.js?4101519497" type="text/javascript"></script>
  
  <script type="text/javascript">
   Muse.Redirect.redirect('desktop', 'tablet/noticias.html', '', '');
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="7.4.30.244"/>
  <link rel="shortcut icon" href="images/favicon.ico?380174083"/>
  <title>Noticias</title>
  <link media="only screen and (max-device-width: 960px)" rel="alternate" href="http://celmediaec.com/tablet/noticias.html"/>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?3903791173"/>
  <link rel="stylesheet" type="text/css" href="css/noticias.css?3800622235" id="pagesheet"/>
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_noticias.css?4247524337"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/open-sans-condensed:n7:all;open-sans:n3,i3,n7,n4:all.js" type="text/javascript">\x3C/script>');
</script>
   </head>
 <body>

  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu51273"><!-- group -->
     <div class="clip_frame mse_pre_init" id="u51273"><!-- image -->
      <img class="block" id="u51273_img" src="images/bg_noticias2.jpg" alt="" width="1796" height="1347"/>
     </div>
     <div class="clearfix mse_pre_init" id="u55289"><!-- group -->
      <a class="nonblock nontext MuseLinkActive clearfix grpelem" id="u55296-4" href="index.php#noticias"><!-- content --><p>NOTICIAS</p></a>
      <a class="nonblock nontext clearfix grpelem" id="u55292-4" href="index.php#clientes"><!-- content --><p>CLIENTES</p></a>
      <a class="nonblock nontext clearfix grpelem" id="u55295-4" href="index.php"><!-- content --><p id="u55295-2"><span class="Links-Menu" id="u55295">INICIO</span></p></a>
      <div class="grpelem" id="pu55294"><!-- inclusion -->
       <div class="shadow" id="u55294"><!-- simple frame --></div>
       <div class="clearfix" id="pu55290-4"><!-- group -->
        <a class="nonblock nontext clearfix grpelem" id="u55290-4" href="index.php#servicios"><!-- content --><p>SERVICIOS</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55297-4" href="index.php#porquecelmedia"><!-- content --><p>¿POR QUÉ CELMEDIA?</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55293-4" href="index.php#proyectos"><!-- content --><p>CASOS</p></a>
        <a class="nonblock nontext clearfix grpelem" id="u55291-4" href="index.php#contactos"><!-- content --><p id="u55291-2"><span class="Links-Menu" id="u55291">CONTACTOS</span></p></a>
       </div>
      </div>
     </div>
     <div class="clip_frame mse_pre_init" id="u55298"><!-- image -->
      <a class="nonblock nontext MuseLinkActive clearfix grpelem" href="index.php"><img class="block" id="u55298_img" src="images/celmedia_logo_menu.png" alt="" width="170" height="62"/></a>
     </div>
    </div>
    <div class="clearfix colelem" id="pu51275-4"><!-- group -->
     <div class="Titulares clearfix grpelem" id="u51275-4"><!-- content -->
      <h1>Noticias</h1>
     </div>
     <!-- Aqui tiene que ir el buscador -->
    </div>
    <div class="clearfix colelem" id="pu51424"><!-- group -->
       <div class="accordion_wrapper grpelem" id="accordionu51280wrapper"><!-- vertical box -->
        <ul class="AccordionWidget clearfix" id="accordionu51280"><!-- column -->
         <li class="AccordionPanel clearfix colelem" id="u51294"><!-- vertical box -->
          <div class="AccordionPanelTab clearfix colelem" id="u51302-6"><!-- content -->
           <p>País&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span><span class="actAsInlineDiv normal_text" id="u51303" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0,M12=-1,M21=1,M22=0,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-2" data-mu-ie-matrix-dy="3"><!-- content --><span class="actAsDiv clip_frame clearfix excludeFromNormalFlow" id="u51304"><!-- image --><span class="actAsDiv" id="u51304_clip"><img class="position_content" id="u51304_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span></span><span></span></p>
          </div>
          <div class="AccordionPanelContent disn clearfix colelem" id="u51295"><!-- column -->
           <div class="clearfix colelem" id="u51299-4"><!-- content -->
            <p>Chile</p>
           </div>
           <div class="clearfix colelem" id="u51296-4"><!-- content -->
            <p>Argentina</p>
           </div>
           <div class="clearfix colelem" id="u51300-4"><!-- content -->
            <p>Perú</p>
           </div>
           <div class="clearfix colelem" id="u51298-4"><!-- content -->
            <p>Ecuador</p>
           </div>
           <div class="clearfix colelem" id="u51301-4"><!-- content -->
            <p>Colombia</p>
           </div>
           <div class="clearfix colelem" id="u51297-4"><!-- content -->
            <p>México</p>
           </div>
          </div>
         </li>
        </ul>
       </div>
       <div class="accordion_wrapper grpelem" id="accordionu51306wrapper"><!-- vertical box -->
        <ul class="AccordionWidget clearfix" id="accordionu51306"><!-- column -->
         <li class="AccordionPanel clearfix colelem" id="u51320"><!-- vertical box -->
          <div class="AccordionPanelTab clearfix colelem" id="u51321-6"><!-- content -->
           <p>Tags&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span><span class="actAsInlineDiv normal_text" id="u51322" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0,M12=-1,M21=1,M22=0,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-2" data-mu-ie-matrix-dy="3"><!-- content --><span class="actAsDiv clip_frame clearfix excludeFromNormalFlow" id="u51323"><!-- image --><span class="actAsDiv" id="u51323_clip"><img class="position_content" id="u51323_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span></span><span></span></p>
          </div>
          <div class="AccordionPanelContent disn clearfix colelem" id="u51325"><!-- column -->
           <div class="clearfix colelem" id="u51327-4"><!-- content -->
            <p>HTML 5</p>
           </div>
           <div class="clearfix colelem" id="u51326-4"><!-- content -->
            <p>Responsive</p>
           </div>
           <div class="clearfix colelem" id="u51331-4"><!-- content -->
            <p>Parallax</p>
           </div>
           <div class="clearfix colelem" id="u51330-4"><!-- content -->
            <p>Realidad aumentada</p>
           </div>
           <div class="clearfix colelem" id="u51328-4"><!-- content -->
            <p>SMS</p>
           </div>
           <div class="clearfix colelem" id="u51329-4"><!-- content -->
            <p>CLOP</p>
           </div>
          </div>
         </li>
        </ul>
       </div>
       <div class="accordion_wrapper grpelem" id="accordionu51332wrapper"><!-- vertical box -->
        <ul class="AccordionWidget clearfix" id="accordionu51332"><!-- column -->
         <li class="AccordionPanel clearfix colelem" id="u51333"><!-- vertical box -->
          <div class="AccordionPanelTab clearfix colelem" id="u51334-6"><!-- content -->
           <p>Año&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span><span class="actAsInlineDiv normal_text" id="u51335" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0,M12=-1,M21=1,M22=0,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-2" data-mu-ie-matrix-dy="3"><!-- content --><span class="actAsDiv clip_frame clearfix excludeFromNormalFlow" id="u51336"><!-- image --><span class="actAsDiv" id="u51336_clip"><img class="position_content" id="u51336_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span></span><span></span></p>
          </div>
          <div class="AccordionPanelContent disn clearfix colelem" id="u51338"><!-- column -->
           <div class="clearfix colelem" id="u51345-4"><!-- content -->
            <p>2008</p>
           </div>
           <div class="clearfix colelem" id="u51343-4"><!-- content -->
            <p>2009</p>
           </div>
           <div class="clearfix colelem" id="u51339-4"><!-- content -->
            <p>2010</p>
           </div>
           <div class="clearfix colelem" id="u51340-4"><!-- content -->
            <p>2011</p>
           </div>
           <div class="clearfix colelem" id="u51342-4"><!-- content -->
            <p>2012</p>
           </div>
           <div class="clearfix colelem" id="u51341-4"><!-- content -->
            <p>2013</p>
           </div>
           <div class="clearfix colelem" id="u51344-4"><!-- content -->
            <p>2014</p>
           </div>
          </div>
         </li>
        </ul>
       </div>
       <div class="grpelem" id="u51541"></div>

     <?php  $id1 = 51424;
            $top = 0;
            $i = 0;
                     
      foreach ($noticias as $noticia) { 
       if( fmod($i,3) == 0 && $i!=0) {
            $top = $top + 527;
            $id1 = 51502;
        } ?>
       <div class="clearfix grpelem" id="u<?php echo $id1 ?>" style="top:<?php echo $top ?>px; position: relative; margin-top: 73px;"><!-- column -->
        <div class="clearfix colelem" id="u51425"><!-- group -->
         <div class="pointer_cursor clearfix grpelem" id="u51510"><!-- group -->
          <a class="block" href="noticia-detalle.php?id=<?php echo $noticia['id']; ?>"></a>
          <a class="nonblock nontext Cuerpo-de-texto-2 clearfix grpelem" id="u51512-4" href="noticia-detalle.php?id=<?php echo $noticia['id']; ?>"><!-- content --><h3><?php echo $noticia['fecha']; ?></h3></a>
        
         </div>
        </div>
        <a class="nonblock nontext Cuerpo-de-Texto1 clearfix colelem" id="u51508-4" style="height:70px; overflow:hidden" href="noticia-detalle.php?id=<?php echo $noticia['id']; ?>"><!-- content --><h2><?php echo utf8_encode($noticia['titulo']); ?></h2></a>
        <a class="nonblock nontext colelem" id="u51503" href="noticia-detalle.php?id=<?php echo $noticia['id']; ?>"><img src="admin/assets/celmediachile/noticias/<?php echo $noticia['imagen'];?>" alt="" width="350" height="255"/></a>
        <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u51513-4" style="height:80px; overflow:hidden" href="noticia-detalle.php?id=<?php echo $noticia['id']; ?>"><!-- content --><h3><?php echo utf8_encode(substr($noticia['descripcion'], 0, 100)); ?>...</h3></a>
        <div class="clearfix colelem" id="u51504"><!-- group -->
         <a class="nonblock nontext Cuerpo-de-texto-2 clearfix grpelem" id="u51507-5" href="noticia-detalle.php?id=<?php echo $noticia['id']; ?>"><!-- content --><h3><span id="u51507">Leer más</span></h3></a>
         <a class="nonblock nontext clip_frame grpelem" id="u51505" href="noticia-detalle.php?id=<?php echo $noticia['id']; ?>" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0,M12=1,M21=-1,M22=0,SizingMethod='auto expand')" data-mu-ie-matrix-dx="0" data-mu-ie-matrix-dy="0"><!-- image --><img class="block" id="u51505_img" src="images/scroll_arrowblack.png" alt="" width="15" height="15"/></a>
        </div>
       </div>
     <?php if($i<3){
         $id1=$id1+12;
      }else{
         $id1=$id1+13;
        }  $i++; } ?>

    
    </div>



    <a class="nonblock nontext clearfix colelem" id="u51276-6" href="proyectos.php"><!-- content --><p id="u51276-4"><span class="Links-Menu" id="u51276">&nbsp;Ver más noticias&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u51277" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0,M12=-1,M21=1,M22=0,SizingMethod='auto expand')" data-mu-ie-matrix-dx="0" data-mu-ie-matrix-dy="0"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u51278"><!-- image --><img id="u51278_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u51276-3"></span></p></a>
    <div class="clearfix colelem" id="pu50428-4"><!-- group -->
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u50428-4"><!-- content -->
      <h3>© 2014 CELMEDIA, Todos los derechos reservados</h3>
     </div>
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u50429-4"><!-- content -->
      <h3>Suscríbete</h3>
     </div>
    </div>
    <div class="clearfix colelem" id="ppu50430-4"><!-- group -->
     <div class="clearfix grpelem" id="pu50430-4"><!-- column -->
      <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u50430-4" href="proyectos.php"><!-- content --><h3>Proyectos</h3></a>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50432-4"><!-- content -->
       <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u50430-4" href="index.php#clientes"><h3>Clientes</h3></a>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu50431-4"><!-- column -->
      <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u50431-4" href="servicios.php?srv=1"><!-- content --><h3>Mobile Marketing</h3></a>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50433-4"><!-- content -->
       <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u50431-4" href="servicios.php?srv=2"><h3>TV Interactiva</h3></a>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu50434-4"><!-- column -->
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50434-4"><!-- content -->
       <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u50431-4" href="servicios.php?srv=5"><h3>Virtual Graphics</h3></a>
      </div>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50437-4"><!-- content -->
       <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u50431-4" href="servicios.php?srv=6"><h3>M&#45;Goverment</h3></a>
      </div>
     </div>
     <div class="rounded-corners clearfix grpelem" id="u50440-4"><!-- content -->
      <p id="u50440-2"><span class="Links-Menu" id="u50440">&nbsp;&nbsp; E&#45;mail</span></p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu50435-4"><!-- group -->
     <a class="nonblock nontext MuseLinkActive Cuerpo-de-texto-2 clearfix grpelem" id="u50435-4" href="noticias.php"><!-- content --><h3>Noticias</h3></a>
     <div class="clearfix grpelem" id="pu50436-4"><!-- column -->
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50436-4"><!-- content -->
       <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u50431-4" href="servicios.php?srv=3"><h3>Gateway</h3></a>
      </div>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u50438-4"><!-- content -->
       <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u50431-4" href="servicios.php?srv=4"><h3>Fidelización</h3></a>
      </div>
     </div>
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u50439-4"><!-- content -->
      <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u50431-4" href="servicios.php?srv=7"><h3>Social Media</h3></a>
     </div>
     <div class="clearfix grpelem" id="u50441-7"><!-- content -->
      <p id="u50441-5"><span class="Links-Menu" id="u50441">Enviar</span><span class="Links-Menu" id="u50441-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u50442"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u50443"><!-- image --><img id="u50443_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u50441-4"></span></p>
     </div>
    </div>
    <div class="verticalspacer"></div>
    <div class="mse_pre_init" id="u50427"><!-- simple frame --></div>
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
  <script src="scripts/musewpdisclosure.js?4285748861" type="text/javascript"></script>
  <script src="scripts/jquery.watch.js?4068933136" type="text/javascript"></script>
  <!-- Other scripts -->
  <script type="text/javascript">
   $(document).ready(function() { try {
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
$('#u51273').registerPositionScrollEffect([{"in":[-Infinity,-100.05],"speed":[0,1]},{"in":[-100.05,Infinity],"speed":[0,1]}]);/* scroll effect */
$('#u55289').registerPositionScrollEffect([{"in":[-Infinity,-0.48],"speed":[0,1]},{"in":[-0.48,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u55298').registerPositionScrollEffect([{"in":[-Infinity,-0.02],"speed":[10,0]},{"in":[-0.02,Infinity],"speed":[0,0]}]);/* scroll effect */
Muse.Utils.initWidget('#accordionu51280', function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:true,defaultIndex:-1}); });/* #accordionu51280 */
Muse.Utils.initWidget('#accordionu51306', function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:true,defaultIndex:-1}); });/* #accordionu51306 */
Muse.Utils.initWidget('#accordionu51332', function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:true,defaultIndex:-1}); });/* #accordionu51332 */
$('#u50427').registerPositionScrollEffect([{"in":[-Infinity,1406.94],"speed":[0,1]},{"in":[1406.94,Infinity],"speed":[0,1]}]);/* scroll effect */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
