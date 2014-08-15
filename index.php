<?php
  include("lib/config.php");
  include('lib/MySql.Class.php');

  $db = array(
    'host'=>$cfg_host,
    'user'=>$cfg_user,
    'pass'=>$cfg_pass,
    'name'=>$cfg_base
  );

  $sliderPrincipal = array();
  try {
    $sqlImagen = "
      SELECT i.titulo, i.descripcion, i.urlimagen, i.link, i.textoboton
      FROM slider_home as i
      WHERE i.estado = '1'";

    $sliderPrincipal = @MySql::getInstance()->getResultSet($sqlImagen);

    $sqlPro = "
      SELECT p.id, p.nombre, p.descripcion, p.imagen, p.id_cliente, c.imagen as cliente
      FROM proyecto as p, cliente as c
      WHERE p.estado = '1' and p.prioridad = '1' and c.id=p.id_cliente";

    $proyectos = @MySql::getInstance()->getResultSet($sqlPro);

    $sqlNot = "
      SELECT n.id, n.titulo, n.descripcion, n.imagen, n.fecha
      FROM noticia as n
      WHERE n.estado = '1' ORDER BY n.fecha DESC";

    $noticias = @MySql::getInstance()->getResultSet($sqlNot);

    $sqlCli = "
      SELECT c.nombre, c.imagen, c.imagenhover, c.imagenbg
      FROM cliente as c
      WHERE c.estado = '1'";

    $clientes = @MySql::getInstance()->getResultSet($sqlCli);

   


  } catch (Exception $e) {

}?>


<!DOCTYPE html>
<html class="html">
 <head>

  <script src="scripts/museredirect.js?4101519497" type="text/javascript"></script>
  
  <script type="text/javascript">
   Muse.Redirect.redirect('desktop', 'tablet/index.html', 'phone/index.html', '');
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="7.4.30.244"/>
  <link rel="shortcut icon" href="images/favicon.ico?380174083"/>
  <title>inicio</title>
  <link media="only screen and (max-device-width: 370px)" rel="alternate" href="http://celmediaec.com/phone/index.html"/>
  <link media="only screen and (max-device-width: 960px)" rel="alternate" href="http://celmediaec.com/tablet/index.html"/>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?3903791173"/>
  <link rel="stylesheet" type="text/css" href="css/index.css?108868123" id="pagesheet"/>
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_index.css?191418672"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/open-sans:n3,n4,i3,n7:all;arimo:n4:all;open-sans-condensed:n7:all.js" type="text/javascript">\x3C/script>');
</script>
    <!--HTML Widget code-->
  
       <style>
        body {
    overflow: hidden;
}


#preloader {
    position:fixed;
    top:0;
    left:0;
    right:0;
    bottom:0;
    background-color:#ffffff; /* change if the mask should have another color then white */
    opacity:1;
    //z-index:99; /* makes sure it stays on top */
}

#u54553-1{
  text-align: left;
  line-height: 60px;
}

#status {
    width:200px;
    height:50px;
    position:absolute;
    left:50%; /* centers the loading animation horizontally one the screen */
    top:50%; /* centers the loading animation vertically one the screen */
    margin-left:-100px;
    margin-top:55px;
    font-size:12px;
    color:#000000;
    text-align:center;
    font-family:Verdana;
}
       </style>
       <style>
#floatingBarsG{
position:absolute;
    left:50%; /* centers the loading animation horizontally one the screen */
    top:50%; /* centers the loading animation vertically one the screen */
width:50px;
margin-left:-25px;
height:62px}

.blockG{
position:absolute;
background-color:#ffffff;
width:8px;
height:19px;
-moz-border-radius:7px 7px 0 0;
-moz-transform:scale(0.4);
-moz-animation-name:fadeG;
-moz-animation-duration:1.28s;
-moz-animation-iteration-count:infinite;
-moz-animation-direction:linear;
-webkit-border-radius:7px 7px 0 0;
-webkit-transform:scale(0.4);
-webkit-animation-name:fadeG;
-webkit-animation-duration:1.28s;
-webkit-animation-iteration-count:infinite;
-webkit-animation-direction:linear;
-ms-border-radius:7px 7px 0 0;
-ms-transform:scale(0.4);
-ms-animation-name:fadeG;
-ms-animation-duration:1.28s;
-ms-animation-iteration-count:infinite;
-ms-animation-direction:linear;
-o-border-radius:7px 7px 0 0;
-o-transform:scale(0.4);
-o-animation-name:fadeG;
-o-animation-duration:1.28s;
-o-animation-iteration-count:infinite;
-o-animation-direction:linear;
border-radius:7px 7px 0 0;
transform:scale(0.4);
animation-name:fadeG;
animation-duration:1.28s;
animation-iteration-count:infinite;
animation-direction:linear;
}

#rotateG_01{
left:0;
top:23px;
-moz-animation-delay:0.4800000000000001s;
-moz-transform:rotate(-90deg);
-webkit-animation-delay:0.4800000000000001s;
-webkit-transform:rotate(-90deg);
-ms-animation-delay:0.4800000000000001s;
-ms-transform:rotate(-90deg);
-o-animation-delay:0.4800000000000001s;
-o-transform:rotate(-90deg);
animation-delay:0.4800000000000001s;
transform:rotate(-90deg);
}

#rotateG_02{
left:6px;
top:8px;
-moz-animation-delay:0.64s;
-moz-transform:rotate(-45deg);
-webkit-animation-delay:0.64s;
-webkit-transform:rotate(-45deg);
-ms-animation-delay:0.64s;
-ms-transform:rotate(-45deg);
-o-animation-delay:0.64s;
-o-transform:rotate(-45deg);
animation-delay:0.64s;
transform:rotate(-45deg);
}

#rotateG_03{
left:21px;
top:2px;
-moz-animation-delay:0.8s;
-moz-transform:rotate(0deg);
-webkit-animation-delay:0.8s;
-webkit-transform:rotate(0deg);
-ms-animation-delay:0.8s;
-ms-transform:rotate(0deg);
-o-animation-delay:0.8s;
-o-transform:rotate(0deg);
animation-delay:0.8s;
transform:rotate(0deg);
}

#rotateG_04{
right:6px;
top:8px;
-moz-animation-delay:0.9600000000000002s;
-moz-transform:rotate(45deg);
-webkit-animation-delay:0.9600000000000002s;
-webkit-transform:rotate(45deg);
-ms-animation-delay:0.9600000000000002s;
-ms-transform:rotate(45deg);
-o-animation-delay:0.9600000000000002s;
-o-transform:rotate(45deg);
animation-delay:0.9600000000000002s;
transform:rotate(45deg);
}

#rotateG_05{
right:0;
top:23px;
-moz-animation-delay:1.12s;
-moz-transform:rotate(90deg);
-webkit-animation-delay:1.12s;
-webkit-transform:rotate(90deg);
-ms-animation-delay:1.12s;
-ms-transform:rotate(90deg);
-o-animation-delay:1.12s;
-o-transform:rotate(90deg);
animation-delay:1.12s;
transform:rotate(90deg);
}

#rotateG_06{
right:6px;
bottom:6px;
-moz-animation-delay:1.28s;
-moz-transform:rotate(135deg);
-webkit-animation-delay:1.28s;
-webkit-transform:rotate(135deg);
-ms-animation-delay:1.28s;
-ms-transform:rotate(135deg);
-o-animation-delay:1.28s;
-o-transform:rotate(135deg);
animation-delay:1.28s;
transform:rotate(135deg);
}

#rotateG_07{
bottom:0;
left:21px;
-moz-animation-delay:1.44s;
-moz-transform:rotate(180deg);
-webkit-animation-delay:1.44s;
-webkit-transform:rotate(180deg);
-ms-animation-delay:1.44s;
-ms-transform:rotate(180deg);
-o-animation-delay:1.44s;
-o-transform:rotate(180deg);
animation-delay:1.44s;
transform:rotate(180deg);
}

#rotateG_08{
left:6px;
bottom:6px;
-moz-animation-delay:1.6s;
-moz-transform:rotate(-135deg);
-webkit-animation-delay:1.6s;
-webkit-transform:rotate(-135deg);
-ms-animation-delay:1.6s;
-ms-transform:rotate(-135deg);
-o-animation-delay:1.6s;
-o-transform:rotate(-135deg);
animation-delay:1.6s;
transform:rotate(-135deg);
}

@-moz-keyframes fadeG{
0%{
background-color:#000000}

100%{
background-color:#FFFFFF}

}

@-webkit-keyframes fadeG{
0%{
background-color:#000000}

100%{
background-color:#ffffff}

}

@-ms-keyframes fadeG{
0%{
background-color:#000000}

100%{
background-color:#ffffff}

}

@-o-keyframes fadeG{
0%{
background-color:#000000}

100%{
background-color:#ffffff}

}

@keyframes fadeG{
0%{
background-color:#000000}

100%{
background-color:#ffffff}

}

</style>

 </head>
 <body>

  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pslideshowu54497"><!-- group -->

     <!-- Slider Principal -->
      <div class="SlideShowWidget clearfix mse_pre_init" id="slideshowu54497"><!-- none box -->
        
        <div class="popup_anchor" id="u54529popup">
         <div class="SlideShowContentPanel clearfix" id="u54529"><!-- stack box -->
         <?php foreach ($sliderPrincipal as $imagen ) { ?>
            <div class="SSSlide clip_frame clearfix grpelem" id="u54530"><!-- image -->
             <div id="u54530_clip">
              <img class="ImageInclude position_content" id="u54530_img" data-src="admin/assets/celmediachile/sliderhome/<?php echo $imagen['urlimagen']; ?>" src="images/blank.gif" alt="" data-width="1800" data-height="900"/>
             </div>
            </div>

         <?php } ?>
         </div>
        </div>

        <div class="popup_anchor" id="u54538popup">
         <div class="SlideShowCaptionPanel clearfix" id="u54538"><!-- stack box -->
          <?php $a=1; foreach ($sliderPrincipal as $imagen ) { ?>
            <div class="SSSlideCaption Titulares clearfix grpelem" id="u45886-24"><!-- content -->
             <h1 id="u54553-1" style="width:80%"><?php echo utf8_encode($imagen['descripcion']);?></h1>
             <h1 id="u54553-9">&nbsp;</h1>
             <h1 id="u54553-13"><span id="u54553-10">​</span><span><span class="actAsInlineDiv normal_text" id="u54554"><!-- content --><span class="actAsDiv clearfix excludeFromNormalFlow" id="u54555"><!-- group --><span class="pointer_cursor actAsDiv clearfix grpelem" id="u54557"><!-- group --><a class="block anim_swing" href="index.php#servicios"></a><a class="nonblock nontext actAsDiv anim_swing clearfix grpelem" id="u54556-4" href="<?php echo utf8_encode($imagen['link']);?>"><!-- content --><span class="actAsPara" id="u54556-2"><span class="Links-Botones-Grandes" id="u54556"><?php echo utf8_encode($imagen['textoboton']);?></span></span></a></span></span></span></span><span></span></h1>
             <h1 id="u54553-14">&nbsp;</h1>
             <h1 id="u54553-15">&nbsp;</h1>
             <h1 id="u54553-17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SCROLL PARA CONTINUAR</h1>
             <h1 id="u54553-18">&nbsp;</h1>
             <h1 id="u54553-22">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="actAsInlineDiv normal_text" id="u54558"><!-- content --><a class="nonblock nontext actAsDiv anim_swing museBGSize excludeFromNormalFlow" id="u54559" href="index.php#servicios"><!-- simple frame --></a></span></h1>
            </div>
          <?php $a++; } ?>
         </div>
        </div>

      </div><!-- Fin del slider principal -->

     <div class="clearfix mse_pre_init" id="u26429"><!-- group -->
      <a class="nonblock nontext anim_swing clearfix grpelem" id="u48605-4" href="index.php#noticias"><!-- content --><p>NOTICIAS</p></a>
      <a class="nonblock nontext anim_swing clearfix grpelem" id="u26432-4" href="index.php#clientes"><!-- content --><p>CLIENTES</p></a>
      <a class="nonblock nontext anim_swing clearfix grpelem" id="u26431-4" href="index.php#home"><!-- content --><p id="u26431-2"><span class="Links-Menu" id="u26431">INICIO</span></p></a>
      <div class="grpelem" id="pu26434"><!-- inclusion -->
       <div class="shadow" id="u26434"><!-- simple frame --></div>
       <div class="clearfix" id="pu26430-4"><!-- group -->
        <a class="nonblock nontext anim_swing clearfix grpelem" id="u26430-4" href="index.php#servicios"><!-- content --><p>SERVICIOS</p></a>
        <a class="nonblock nontext anim_swing clearfix grpelem" id="u48593-4" href="index.php#porquecelmedia"><!-- content --><p>¿POR QUÉ CELMEDIA?</p></a>
        <a class="nonblock nontext anim_swing clearfix grpelem" id="u26433-4" href="index.php#proyectos"><!-- content --><p>CASOS</p></a>
        <a class="nonblock nontext anim_swing clearfix grpelem" id="u45947-4" href="index.php#contactos"><!-- content --><p id="u45947-2"><span class="Links-Menu" id="u45947">CONTACTOS</span></p></a>
       </div>
      </div>
     </div>
     <a class="nonblock nontext anim_swing clip_frame mse_pre_init" id="u26435" href="index.html#home"><!-- image --><img class="block" id="u26435_img" src="images/celmedia_logo_menu.png" alt="" width="170" height="62"/></a>
    </div>
    <a class="anchor_item colelem" id="home"></a>
    <div class="colelem" id="u32538"><!-- custom html -->
      <div id="preloader">
          <div id="floatingBarsG">
          <div class="blockG" id="rotateG_01">
          </div>
          <div class="blockG" id="rotateG_02">
          </div>
          <div class="blockG" id="rotateG_03">
          </div>
          <div class="blockG" id="rotateG_04">
          </div>
          <div class="blockG" id="rotateG_05">
          </div>
          <div class="blockG" id="rotateG_06">
          </div>
          <div class="blockG" id="rotateG_07">
          </div>
          <div class="blockG" id="rotateG_08">
          </div>
          </div>
          <div id="status">Conectándonos…</div>
      </div>
    </div>

     <!-- Inicio de Servicios -->
    <a class="anchor_item colelem" id="servicios"></a>
    <div class="clip_frame mse_pre_init" id="u46112"><!-- image -->
     <img class="block" id="u46112_img" src="images/bg_servicios.jpg" alt="" width="1800" height="1001"/>
    </div>
    <div class="Titulares clearfix colelem" id="u46429-4"><!-- content -->
     <h1>Estratégia y desarrollo mobile</h1>
    </div>
    <div class="clearfix mse_pre_init" id="u26449-6"><!-- content -->
     <h3 class="Cuerpo-de-texto-2" id="u26449-2">Las marcas no crean necesidades, solo deseos.</h3>
     <h1 class="Titulares" id="u26449-4">Lo importante son las experiencias de nuestros usuarios.</h1>
    </div>
    <div class="clearfix colelem" id="pu46174"><!-- group -->
     <div class="clip_frame grpelem" id="u46174"><!-- image -->
      <img class="block" id="u46174_img" src="images/titulares_bg.png" alt="" width="425" height="50"/>
     </div>
     <div class="Cuerpo-de-Texto1 clearfix grpelem" id="u46176-4"><!-- content -->
      <h2>NUESTRAS ÁREAS DE SERVICIO</h2>
     </div>
    </div>
    <div class="PamphletWidget clearfix colelem" id="pamphletu41272"><!-- none box -->
     <div class="ThumbGroup clearfix grpelem" id="u41381"><!-- none box -->
      <div class="popup_anchor">
       <a class="nonblock nontext Thumb popup_element rgba-background clearfix" id="u41384" href="mobile-marketing.php"><!-- column --><div class="clip_frame colelem" id="u46124"><!-- image --><img class="block" id="u46124_img" src="images/servicios_mobilemarketing.png" alt="" width="70" height="100"/></div><div class="Cuerpo-de-Texto1 clearfix colelem" id="u41385-4"><!-- content --><h2>Mobile Marketing</h2></div></a>
      </div>
      <div class="popup_anchor">
       <a class="nonblock nontext Thumb popup_element rgba-background clearfix" id="u41386" href="gateway.php"><!-- column --><div class="clip_frame colelem" id="u46138"><!-- image --><img class="block" id="u46138_img" src="images/servicios_gateway.png" alt="" width="70" height="100"/></div><div class="Cuerpo-de-Texto1 clearfix colelem" id="u41387-4"><!-- content --><h2>Gateway</h2></div></a>
      </div>
      <div class="popup_anchor">
       <a class="nonblock nontext Thumb popup_element rgba-background clearfix" id="u41382" href="interactividad.php"><!-- column --><div class="clip_frame colelem" id="u46132"><!-- image --><img class="block" id="u46132_img" src="images/servicios_tvinteractiva.png" alt="" width="70" height="100"/></div><div class="Cuerpo-de-Texto1 clearfix colelem" id="u41383-4"><!-- content --><h2>Interactividad</h2></div></a>
      </div>
     </div>
     <div class="popup_anchor" id="u41277popup">
      <div class="ContainerGroup clearfix" id="u41277"><!-- none box -->
       <a class="nonblock nontext Container invi clearfix grpelem" id="u41348" href="mobile-marketing.php"><!-- column --><div class="clip_frame colelem" id="u48607"><!-- image --><img class="block" id="u48607_img" src="images/servicios_mobilemarketing.png" alt="" width="70" height="100"/></div><div class="Cuerpo-de-Texto1 clearfix colelem" id="u48606-4"><!-- content --><h2>Mobile Marketing</h2></div></a>
       <a class="nonblock nontext Container invi clearfix grpelem" id="u41354" href="gateway.php"><!-- column --><div class="clip_frame colelem" id="u48645"><!-- image --><img class="block" id="u48645_img" src="images/servicios_gateway.png" alt="" width="70" height="100"/></div><div class="Cuerpo-de-Texto1 clearfix colelem" id="u48644-4"><!-- content --><h2>Gateway</h2></div></a>
       <a class="nonblock nontext Container invi clearfix grpelem" id="u41278" href="interactividad.php"><!-- column --><div class="clip_frame colelem" id="u48611"><!-- image --><img class="block" id="u48611_img" src="images/servicios_tvinteractiva.png" alt="" width="70" height="100"/></div><div class="Cuerpo-de-Texto1 clearfix colelem" id="u48610-4"><!-- content --><h2>Interactividad</h2></div></a>
      </div>
     </div>
    </div>
    <div class="PamphletWidget clearfix colelem" id="pamphletu41673"><!-- none box -->
     <div class="ThumbGroup clearfix grpelem" id="u41784"><!-- none box -->
      <div class="popup_anchor">
       <a class="nonblock nontext Thumb popup_element rgba-background clearfix" id="u41787" href="social-media.php"><!-- column --><div class="clip_frame colelem" id="u46164"><!-- image --><img class="block" id="u46164_img" src="images/servicios_socialmedia.png" alt="" width="70" height="100"/></div><div class="Cuerpo-de-Texto1 clearfix colelem" id="u41788-4"><!-- content --><h2>Social Media</h2></div></a>
      </div>
      <div class="popup_anchor">
       <a class="nonblock nontext Thumb popup_element rgba-background clearfix" id="u41789" href="virtual-graphics.php"><!-- column --><div class="clip_frame clearfix colelem" id="u46158"><!-- image --><div id="u46158_clip"><img class="position_content" id="u46158_img" src="images/servicios_virtualgraphics.png" alt="" width="70" height="100"/></div></div><div class="Cuerpo-de-Texto1 clearfix colelem" id="u41790-4"><!-- content --><h2>Virtual Graphics</h2></div></a>
      </div>
      <div class="popup_anchor">
       <a class="nonblock nontext Thumb popup_element rgba-background clearfix" id="u41785" href="fidelizacion.php"><!-- column --><div class="clip_frame colelem" id="u46145"><!-- image --><img class="block" id="u46145_img" src="images/servicios_fidelizacion.png" alt="" width="70" height="100"/></div><div class="Cuerpo-de-Texto1 clearfix colelem" id="u41786-4"><!-- content --><h2>Fidelización</h2></div></a>
      </div>
     </div>
     <div class="popup_anchor" id="u41678popup">
      <div class="ContainerGroup clearfix" id="u41678"><!-- none box -->
       <a class="nonblock nontext Container invi clearfix grpelem" id="u41679" href="social-media.php"><!-- column --><div class="clip_frame colelem" id="u48669"><!-- image --><img class="block" id="u48669_img" src="images/servicios_socialmedia.png" alt="" width="70" height="100"/></div><div class="Cuerpo-de-Texto1 clearfix colelem" id="u48668-4"><!-- content --><h2>Social Media</h2></div></a>
       <a class="nonblock nontext Container invi clearfix grpelem" id="u41752" href="virtual-graphics.php"><!-- column --><div class="clip_frame clearfix colelem" id="u48653"><!-- image --><div id="u48653_clip"><img class="position_content" id="u48653_img" src="images/servicios_virtualgraphics.png" alt="" width="70" height="100"/></div></div><div class="Cuerpo-de-Texto1 clearfix colelem" id="u48652-4"><!-- content --><h2>Virtual Graphics</h2></div></a>
       <a class="nonblock nontext Container invi clearfix grpelem" id="u41721" href="fidelizacion.php"><!-- column --><div class="clip_frame colelem" id="u48649"><!-- image --><img class="block" id="u48649_img" src="images/servicios_fidelizacion.png" alt="" width="70" height="100"/></div><div class="Cuerpo-de-Texto1 clearfix colelem" id="u48648-4"><!-- content --><h2>Fidelización</h2></div></a>
      </div>
     </div>
    </div>
    <div class="PamphletWidget clearfix colelem" id="pamphletu46180"><!-- none box -->
     <div class="ThumbGroup clearfix grpelem" id="u46183"><!-- none box -->
      <div class="popup_anchor">
       <a class="nonblock nontext Thumb popup_element rgba-background clearfix" id="u46184" href="m-goverment.php"><!-- column --><div class="clip_frame colelem" id="u46186"><!-- image --><img class="block" id="u46186_img" src="images/servicios_mgoverment.png" alt="" width="70" height="100"/></div><div class="Cuerpo-de-Texto1 clearfix colelem" id="u46185-4"><!-- content --><h2>M&#45;Goverment</h2></div></a>
      </div>
     </div>
     <div class="popup_anchor" id="u46196popup">
      <div class="ContainerGroup clearfix" id="u46196"><!-- none box -->
       <a class="nonblock nontext Container invi clearfix grpelem" id="u46267" href="m-goverment.php"><!-- column --><div class="clip_frame colelem" id="u48665"><!-- image --><img class="block" id="u48665_img" src="images/servicios_mgoverment.png" alt="" width="70" height="100"/></div><div class="Cuerpo-de-Texto1 clearfix colelem" id="u48664-4"><!-- content --><h2>M&#45;Goverment</h2></div></a>
      </div>
     </div>
    </div>
    <div class="clearfix colelem" id="pu46346"><!-- group -->
     <div class="clip_frame grpelem" id="u46346"><!-- image -->
      <img class="block" id="u46346_img" src="images/titulares2_bg.png" alt="" width="614" height="50"/>
     </div>
     <div class="Cuerpo-de-Texto1 clearfix grpelem" id="u46354-4"><!-- content -->
      <h2>NUESTRAS PLATAFORMAS Y HERRAMIENTAS</h2>
     </div>
    </div>
    <div class="clearfix colelem" id="pu46386"><!-- group -->
     <div class="clip_frame grpelem" id="u46386"><!-- image -->
      <img class="block" id="u46386_img" src="images/herramientas_sms.png" alt="" width="70" height="70"/>
     </div>
     <div class="clip_frame grpelem" id="u46371"><!-- image -->
      <img class="block" id="u46371_img" src="images/herramientas_mms.png" alt="" width="70" height="70"/>
     </div>
     <div class="clip_frame grpelem" id="u46401"><!-- image -->
      <img class="block" id="u46401_img" src="images/herramientas_web.png" alt="" width="70" height="70"/>
     </div>
     <div class="clip_frame grpelem" id="u46376"><!-- image -->
      <img class="block" id="u46376_img" src="images/herramientas_portalesmoviles.png" alt="" width="70" height="70"/>
     </div>
     <div class="clip_frame grpelem" id="u46381"><!-- image -->
      <img class="block" id="u46381_img" src="images/herramientas_qr.png" alt="" width="70" height="70"/>
     </div>
     <div class="clip_frame grpelem" id="u46361"><!-- image -->
      <img class="block" id="u46361_img" src="images/herramientas_app.png" alt="" width="70" height="70"/>
     </div>
     <div class="clip_frame grpelem" id="u46356"><!-- image -->
      <img class="block" id="u46356_img" src="images/herramientas_ad.png" alt="" width="70" height="70"/>
     </div>
     <div class="clip_frame grpelem" id="u46396"><!-- image -->
      <img class="block" id="u46396_img" src="images/herramientas_virtual.png" alt="" width="70" height="70"/>
     </div>
     <div class="clip_frame grpelem" id="u46366"><!-- image -->
      <img class="block" id="u46366_img" src="images/herramientas_crm.png" alt="" width="70" height="70"/>
     </div>
     <div class="clip_frame grpelem" id="u46391"><!-- image -->
      <img class="block" id="u46391_img" src="images/herramientas_text.png" alt="" width="70" height="70"/>
     </div>
    </div>
    <div class="clearfix colelem" id="pu46416-4"><!-- group -->
     <div class="Cuerpo-de-Texto1 clearfix grpelem" id="u46416-4"><!-- content -->
      <h2>SMS</h2>
     </div>
     <div class="Cuerpo-de-Texto1 clearfix grpelem" id="u46417-4"><!-- content -->
      <h2>MMS</h2>
     </div>
     <div class="Cuerpo-de-Texto1 clearfix grpelem" id="u46419-4"><!-- content -->
      <h2>Web</h2>
     </div>
     <div class="Cuerpo-de-Texto1 clearfix grpelem" id="u46421-6"><!-- content -->
      <h2>Portales</h2>
      <h2>móviles</h2>
     </div>
     <div class="Cuerpo-de-Texto1 clearfix grpelem" id="u46422-4"><!-- content -->
      <h2>Scaneables</h2>
     </div>
     <div class="Cuerpo-de-Texto1 clearfix grpelem" id="u46423-4"><!-- content -->
      <h2>Apps</h2>
     </div>
     <div class="Cuerpo-de-Texto1 clearfix grpelem" id="u46424-4"><!-- content -->
      <h2>Ad Server</h2>
     </div>
     <div class="Cuerpo-de-Texto1 clearfix grpelem" id="u46425-4"><!-- content -->
      <h2>Virtuales</h2>
     </div>
     <div class="Cuerpo-de-Texto1 clearfix grpelem" id="u46426-4"><!-- content -->
      <h2>C.L.O.P.</h2>
     </div>
     <div class="Cuerpo-de-Texto1 clearfix grpelem" id="u46428-4"><!-- content -->
      <h2>Text center</h2>
     </div>
    </div>
    <!-- Fin de servicios -->

    <!-- Inicio de Por que Celmedia -->
    <a class="anchor_item colelem" id="porquecelmedia"></a>
    <div class="clip_frame clearfix mse_pre_init" id="u46441"><!-- image -->
     <div id="u46441_clip">
      <img class="position_content" id="u46441_img" src="images/bg_porquecelmedia.jpg" alt="" width="1800" height="944"/>
     </div>
    </div>
    <div class="Titulares clearfix mse_pre_init" id="u46460-4"><!-- content -->
     <h1>¿Por qué invertir en Celmedia?</h1>
    </div>
    <div class="Titulares clearfix mse_pre_init" id="u46440-4"><!-- content -->
     <h1>Maximizamos el cumplimiento de los objetivos, desarrollando estrategias especificas a cada necesidad y con un seguimiento exhaustivo desde la pre hasta la post venta.</h1>
    </div>
    <div class="clearfix colelem" id="pu46453"><!-- group -->
     <div class="clip_frame grpelem" id="u46453"><!-- image -->
      <img class="block" id="u46453_img" src="images/tecnologias_negocio.png" alt="" width="804" height="600"/>
     </div>
     <a class="nonblock nontext anim_swing clearfix grpelem" id="u46466-6" href="index.html#contactos"><!-- content --><p id="u46466-4"><span class="Links-Menu" id="u46466">¿Cómo hacer esto parte de mi negocio?&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u46597"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u46592"><!-- image --><img id="u46592_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u46466-3"></span></p></a>
    </div>

    <!-- Fin de Celmedia -->


     <!-- Inicio de Proyectos -->
    <a class="anchor_item colelem" id="proyectos"></a>
    <div class="clip_frame mse_pre_init" id="u46470"><!-- image -->
     <img class="block" id="u46470_img" src="images/bg_proyectos-u46470.jpg" alt="" width="1792" height="942"/>
    </div>
    <div class="Titulares clearfix colelem" id="u46479-4"><!-- content -->
     <h1>Casos de Éxito en Latinoamérica</h1>
    </div>
    <div class="clearfix colelem" id="pu46565"><!-- group -->
     <div class="clearfix grpelem" id="u46565"><!-- column -->
      <a class="nonblock nontext colelem" id="u46558" href="proyecto-detalle.php"><img src="admin/assets/celmediachile/proyectos/<?php echo $proyectos[0]['imagen'];?>" alt="" width="350" height="270"/></a>
      <div class="pointer_cursor clearfix colelem" id="u46560"><!-- group -->
       <a class="block" href="proyecto-detalle.php"></a>
       <a class="nonblock nontext grpelem" id="u46561" href="proyecto-detalle.php"><img src="admin/assets/celmediachile/clientes/<?php echo $proyectos[0]['cliente'];?>" alt="" width="100" height="100"/></a>
       <a class="nonblock nontext clearfix grpelem" id="u46562-6" href="proyecto-detalle.php"><!-- content --><h2 class="Cuerpo-de-Texto1" id="u46562-2"><?php echo utf8_encode($proyectos[0]['nombre']); ?></h2><h3 class="Cuerpo-de-texto-2" id="u46562-4"><?php echo utf8_encode( substr($proyectos[0]['descripcion'], 0, 45)); ?>...</h3></a>
      </div>
     </div>
     <div class="clearfix grpelem" id="u50497"><!-- column -->
      <a class="nonblock nontext colelem" id="u50499" href="proyecto-detalle.php"><img src="admin/assets/celmediachile/proyectos/<?php echo $proyectos[0]['imagen'];?>" alt="" width="350" height="270"/></a>
      <div class="pointer_cursor clearfix colelem" id="u50498"><!-- group -->
       <a class="block" href="proyecto-detalle.php"></a>
       <a class="nonblock nontext grpelem" id="u50501" href="proyecto-detalle.php"><img src="admin/assets/celmediachile/clientes/<?php echo $proyectos[0]['cliente'];?>" alt="" width="100" height="100"/></a>
       <a class="nonblock nontext clearfix grpelem" id="u50500-6" href="proyecto-detalle.php"><!-- content --><h2 class="Cuerpo-de-Texto1" id="u50500-2"><?php echo utf8_encode($proyectos[0]['nombre']); ?></h2><h3 class="Cuerpo-de-texto-2" id="u50500-4"><?php echo utf8_encode( substr($proyectos[0]['descripcion'], 0, 45)); ?>...</h3></a>
      </div>
     </div>
     <div class="clearfix grpelem" id="u50507"><!-- column -->
      <a class="nonblock nontext colelem" id="u50511" href="proyecto-detalle.php"><img src="admin/assets/celmediachile/proyectos/<?php echo $proyectos[0]['imagen'];?>" alt="" width="350" height="270"/></a>
      <div class="pointer_cursor clearfix colelem" id="u50510"><!-- group -->
       <a class="block" href="proyecto-detalle.php"></a>
       <a class="nonblock nontext grpelem" id="u50508" href="proyecto-detalle.php"><img src="admin/assets/celmediachile/clientes/<?php echo $proyectos[0]['cliente'];?>" alt="" width="100" height="100"/></a>
       <a class="nonblock nontext clearfix grpelem" id="u50509-6" href="proyecto-detalle.php"><!-- content --><h2 class="Cuerpo-de-Texto1" id="u50509-2"><?php echo utf8_encode($proyectos[0]['nombre']); ?></h2><h3 class="Cuerpo-de-texto-2" id="u50509-4"><?php echo utf8_encode( substr($proyectos[0]['descripcion'], 0, 45)); ?>...</h3></a>
      </div>
     </div>
    </div>
    <a class="nonblock nontext clearfix colelem" id="u46603-6" href="proyectos.php"><!-- content --><p id="u46603-4"><span class="Links-Menu" id="u46603">&nbsp;Ver todos los casos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u46604"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u46605"><!-- image --><img id="u46605_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u46603-3"></span></p></a>
    <!-- fin de proyectos -->
    

    <!-- Inicio de Noticias -->
    <a class="anchor_item colelem" id="noticias"></a>
    <div class="clip_frame mse_pre_init" id="u46481"><!-- image -->
     <img class="block" id="u46481_img" src="images/bg_noticias.jpg" alt="" width="1800" height="909"/>
    </div>
    <div class="Titulares clearfix mse_pre_init" id="u46484-4"><!-- content -->
     <h1>Noticias</h1>
    </div>
    <div class="Titulares clearfix mse_pre_init" id="u54615-4"><!-- content -->
     <h1>Tendencias en un mundo cada día más Móvil.</h1>
    </div>
    <div class="clearfix colelem" id="pu48700"><!-- group -->

     <div class="clearfix grpelem" id="u48700"><!-- column -->     
      <div class="clearfix colelem" id="u46752"><!-- group -->
       <div class="pointer_cursor clearfix grpelem" id="u46723"><!-- group -->
        <a class="block" href="noticia-detalle.php?id=<?php echo $noticias[0]['id']; ?>"></a>
        <a class="nonblock nontext Cuerpo-de-texto-2 clearfix grpelem" id="u46729-4" href="noticia-detalle.php?id=<?php echo $noticias[0]['id']; ?>"><!-- content --><h3><?php echo $noticias[0]['fecha']; ?></h3></a>
        <!-- <a class="nonblock nontext Cuerpo-de-texto-2 clearfix grpelem" id="u46731-4" href="noticia-detalle.html"><h3>Tags</h3></a> -->
       </div>
      </div>
      <a class="nonblock nontext Cuerpo-de-Texto1 clearfix colelem" id="u46725-4" href="noticia-detalle.php?id=<?php echo $noticias[0]['id']; ?>"><!-- content --><h2><?php echo utf8_encode($noticias[0]['titulo']); ?></h2></a>
      <a class="nonblock nontext colelem" id="u46724" href="noticia-detalle.php?id=<?php echo $noticias[0]['id']; ?>"><img src="admin/assets/celmediachile/noticias/<?php echo $noticias[0]['imagen'];?>" alt="" width="350" height="255"/></a>
      <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u46726-4" href="noticia-detalle.php?id=<?php echo $noticias[0]['id']; ?>"><!-- content --><h3><?php echo utf8_encode( substr($noticias[0]['descripcion'], 0, 100)); ?>...</h3></a>
      <div class="clearfix colelem" id="u48699"><!-- group -->
       <a class="nonblock nontext Cuerpo-de-texto-2 clearfix grpelem" id="u46733-5" href="noticia-detalle.php?id=<?php echo $noticias[0]['id']; ?>"><!-- content --><h3><span id="u46733">Leer más</span></h3></a>
       <a class="nonblock nontext clip_frame grpelem" id="u48696" href="noticia-detalle.html" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0,M12=1,M21=-1,M22=0,SizingMethod='auto expand')" data-mu-ie-matrix-dx="0" data-mu-ie-matrix-dy="0"><!-- image --><img class="block" id="u48696_img" src="images/scroll_arrowblack3.png" alt="" width="15" height="15"/></a>
      </div>
     </div>

     <div class="clearfix grpelem" id="u48714"><!-- column -->
      <div class="clearfix colelem" id="u48715"><!-- group -->
       <div class="pointer_cursor clearfix grpelem" id="u48716"><!-- group -->
        <a class="block" href="noticia-detalle.php?id=<?php echo $noticias[1]['id']; ?>"></a>
        <a class="nonblock nontext Cuerpo-de-texto-2 clearfix grpelem" id="u48718-4" href="noticia-detalle.php?id=<?php echo $noticias[1]['id']; ?>"><!-- content --><h3><?php echo $noticias[1]['fecha']; ?></h3></h3></a>
       <!--  <a class="nonblock nontext Cuerpo-de-texto-2 clearfix grpelem" id="u48717-4" href="noticia-detalle.html"><h3>Tags</h3></a> -->
       </div>
      </div>
      <a class="nonblock nontext Cuerpo-de-Texto1 clearfix colelem" id="u48724-4" href="noticia-detalle.php?id=<?php echo $noticias[1]['id']; ?>"><!-- content --><h2><?php echo utf8_encode($noticias[1]['titulo']); ?></h2></a>
      <a class="nonblock nontext colelem" id="u48723" href="noticia-detalle.php?id=<?php echo $noticias[1]['id']; ?>"><img src="admin/assets/celmediachile/noticias/<?php echo $noticias[1]['imagen'];?>" alt="" width="350" height="255"/></a>
      <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u48725-4" href="noticia-detalle.php?id=<?php echo $noticias[1]['id']; ?>"><!-- content --><h3><?php echo utf8_encode( substr($noticias[1]['descripcion'], 0, 100)); ?>...</h3></a>
      <div class="clearfix colelem" id="u48719"><!-- group -->
       <a class="nonblock nontext Cuerpo-de-texto-2 clearfix grpelem" id="u48720-5" href="noticia-detalle.php?id=<?php echo $noticias[1]['id']; ?>"><!-- content --><h3><span id="u48720">Leer más</span></h3></a>
       <a class="nonblock nontext clip_frame grpelem" id="u48721" href="noticia-detalle.html" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0,M12=1,M21=-1,M22=0,SizingMethod='auto expand')" data-mu-ie-matrix-dx="0" data-mu-ie-matrix-dy="0"><!-- image --><img class="block" id="u48721_img" src="images/scroll_arrowblack3.png" alt="" width="15" height="15"/></a>
      </div>
     </div>
     <div class="clearfix grpelem" id="u48740"><!-- column -->
      <div class="clearfix colelem" id="u48742"><!-- group -->
       <div class="pointer_cursor clearfix grpelem" id="u48744"><!-- group -->
        <a class="block" href="noticia-detalle.php?id=<?php echo $noticias[0]['id']; ?>"></a>
        <a class="nonblock nontext Cuerpo-de-texto-2 clearfix grpelem" id="u48743-4" href="noticia-detalle.php?id=<?php echo $noticias[0]['id']; ?>"><!-- content --><h3><?php echo $noticias[0]['fecha']; ?></h3></h3></a>
       <!--  <a class="nonblock nontext Cuerpo-de-texto-2 clearfix grpelem" id="u48745-4" href="noticia-detalle.html"><h3>Tags</h3></a> -->
       </div>
      </div>
      <a class="nonblock nontext Cuerpo-de-Texto1 clearfix colelem" id="u48751-4" href="noticia-detalle.php?id=<?php echo $noticias[0]['id']; ?>"><!-- content --><h2><?php echo utf8_encode($noticias[0]['titulo']); ?></h2></a>
      <a class="nonblock nontext colelem" id="u48750" href="noticia-detalle.php?id=<?php echo $noticias[0]['id']; ?>"><img src="admin/assets/celmediachile/noticias/<?php echo $noticias[0]['imagen'];?>" alt="" width="350" height="255"/></a></a>
      <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u48741-4" href="noticia-detalle.php?id=<?php echo $noticias[0]['id']; ?>"><!-- content --><h3><?php echo utf8_encode( substr($noticias[0]['descripcion'], 0, 100)); ?>...</h3></a>
      <div class="clearfix colelem" id="u48746"><!-- group -->
       <a class="nonblock nontext Cuerpo-de-texto-2 clearfix grpelem" id="u48747-5" href="noticia-detalle.php?id=<?php echo $noticias[0]['id']; ?>"><!-- content --><h3><span id="u48747">Leer más</span></h3></a>
       <a class="nonblock nontext clip_frame grpelem" id="u48748" href="noticia-detalle.php?id=<?php echo $noticias[0]['id']; ?>" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0,M12=1,M21=-1,M22=0,SizingMethod='auto expand')" data-mu-ie-matrix-dx="0" data-mu-ie-matrix-dy="0"><!-- image --><img class="block" id="u48748_img" src="images/scroll_arrowblack3.png" alt="" width="15" height="15"/></a>
      </div>
     </div>
    </div>
    <a class="nonblock nontext clearfix colelem" id="u46809-6" href="noticias.php"><!-- content --><p id="u46809-4"><span class="Links-Menu" id="u46809">&nbsp;Ver todas las noticias&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u46810"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u46811"><!-- image --><img id="u46811_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u46809-3"></span></p></a>
    <!-- Fin de Noticias -->

    <a class="anchor_item colelem" id="clientes"></a>
    <div class="clip_frame mse_pre_init" id="u46493"><!-- image -->
     <img class="block" id="u46493_img" src="images/bg_clientes-u46493.jpg" alt="" width="1800" height="842"/>
    </div>
    <div class="Titulares clearfix mse_pre_init" id="u46496-4"><!-- content -->
     <h1>Clientes</h1>
    </div>
    <div class="Titulares clearfix mse_pre_init" id="u54613-4"><!-- content -->
     <h1>La confianza no se gana se construye. Más de 120 clientes en toda la Región.</h1>
    </div>
    <div class="PamphletWidget clearfix widget_invisible colelem" id="pamphletu53997"><!-- none box -->
     <div class="ThumbGroup clearfix grpelem" id="u54008"><!-- none box -->
      <?php foreach ($clientes as $clienteitem): ?>
        <div class="popup_anchor">            
           <div class="Thumb popup_element clientecm"
              style="background-image: url('admin/assets/celmediachile/clientes/<?php echo $clienteitem['imagen']; ?>');"
              onMouseOver="this.style.backgroundImage='url(admin/assets/celmediachile/clientes/<?php echo $clienteitem['imagen']; ?>)'"
              onMouseOut="this.style.backgroundImage='url(admin/assets/celmediachile/clientes/<?php echo $clienteitem['imagenhover']; ?>)'"
            >
            <!-- simple frame -->
          </div>
        </div>
      <?php endforeach ?>
     </div>
     <div class="popup_anchor" id="u54012popup">
      <div class="ContainerGroup clearfix" id="u54012"><!-- stack box -->
        <?php foreach ($clientes as $clienteitem): ?>
          <div class="popup_anchor">            
             <div class="Thumb popup_element clientecm"
                style="background-image: url('admin/assets/celmediachile/clientes/<?php echo $clienteitem['imagenbg']; ?>');"
              >
              <!-- simple frame -->
            </div>
          </div>
        <?php endforeach ?>
       <div class="Container grpelem clientecmpopup" style="background-image: url('admin/assets/celmediachile/clientes/<?php echo $clientes[0]['imagenbg']; ?>');"><!-- simple frame --></div>
      </div>
     </div>
     <div class="popup_anchor">
      <div class="PamphletCloseButton PamphletLightboxPart popup_element clearfix" id="u54019"><!-- group -->
       <div class="clearfix grpelem" id="u54020-4"><!-- content -->
        <p>X</p>
       </div>
      </div>
     </div>
    </div>



    <a class="anchor_item colelem" id="contactos"></a>
    <div class="clip_frame clearfix mse_pre_init" id="u46502"><!-- image -->
     <div id="u46502_clip">
      <img class="position_content" id="u46502_img" src="images/bg_contacto.jpg" alt="" width="1800" height="1580"/>
     </div>
    </div>
    <div class="Titulares clearfix mse_pre_init" id="u27993-4"><!-- content -->
     <h1>Contáctanos</h1>
    </div>
    <div class="TabbedPanelsWidget clearfix colelem" id="tab-panelu54616"><!-- vertical box -->
     <div class="TabbedPanelsTabGroup clearfix colelem" id="u54617"><!-- horizontal box -->
      <div class="TabbedPanelsTab museBGSize clearfix grpelem" id="u54622"><!-- horizontal box -->
       <div class=" NoWrap clearfix grpelem" id="u54625-4"><!-- content -->
        <p id="u54625-2"><span class="Links-Botones-Grandes" id="u54625">CHILE</span></p>
       </div>
      </div>
      <div class="TabbedPanelsTab museBGSize clearfix grpelem" id="u54618"><!-- horizontal box -->
       <div class=" NoWrap clearfix grpelem" id="u54619-4"><!-- content -->
        <p id="u54619-2"><span class="Links-Botones-Grandes" id="u54619">ARGENTINA</span></p>
       </div>
      </div>
      <div class="TabbedPanelsTab museBGSize clearfix grpelem" id="u54626"><!-- horizontal box -->
       <div class=" NoWrap clearfix grpelem" id="u54627-4"><!-- content -->
        <p id="u54627-2"><span class="Links-Botones-Grandes" id="u54627">PERÚ</span></p>
       </div>
      </div>
      <div class="TabbedPanelsTab museBGSize clearfix grpelem" id="u54694"><!-- horizontal box -->
       <div class=" NoWrap clearfix grpelem" id="u54697-4"><!-- content -->
        <p id="u54697-2"><span class="Links-Botones-Grandes" id="u54697">COLOMBIA</span></p>
       </div>
      </div>
      <div class="TabbedPanelsTab museBGSize clearfix grpelem" id="u54699"><!-- horizontal box -->
       <div class=" NoWrap clearfix grpelem" id="u54700-4"><!-- content -->
        <p id="u54700-2"><span class="Links-Botones-Grandes" id="u54700">ECUADOR</span></p>
       </div>
      </div>
      <div class="TabbedPanelsTab museBGSize clearfix grpelem" id="u54704"><!-- horizontal box -->
       <div class=" NoWrap clearfix grpelem" id="u54707-4"><!-- content -->
        <p id="u54707-2"><span class="Links-Botones-Grandes" id="u54707">MÉXICO</span></p>
       </div>
      </div>
     </div>
     <div class="TabbedPanelsContentGroup clearfix colelem" id="u54630"><!-- stack box -->
      <div class="TabbedPanelsContent clearfix grpelem" id="u54639"><!-- column -->
       <div class="clearfix colelem" id="pu54738-4"><!-- group -->
        <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u54738-4"><!-- content -->
         <h3>CHILE &#45; CASA CENTRAL</h3>
        </div>
        <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u54739-4"><!-- content -->
         <h3>CONTÁCTANOS</h3>
        </div>
       </div>

       <form class="form-grp clearfix colelem" id="widgetu54747" method="post" enctype="multipart/form-data" action="scripts/form-u54747.php"><!-- none box -->
        <div class="fld-grp clearfix grpelem" id="widgetu54769" data-required="true"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u54770-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu54769_input" name="custom_U54769" tabindex="1"/><label class="wrapped-input fld-prompt" id="widgetu54769_prompt" for="widgetu54769_input"><span class="actAsPara">Nombre</span></label></span>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu54764" data-required="true" data-type="email"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u54768-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu54764_input" name="Email" tabindex="3"/><label class="wrapped-input fld-prompt" id="widgetu54764_prompt" for="widgetu54764_input"><span class="actAsPara">Empresa</span></label></span>
        </div>
        <div class="clearfix grpelem" id="u54780-4"><!-- content -->
         <p>Enviando formulario...</p>
        </div>
        <div class="clearfix grpelem" id="u54748-4"><!-- content -->
         <p>El servidor ha detectado un error.</p>
        </div>
        <div class="clearfix grpelem" id="u54774-4"><!-- content -->
         <p>Formulario recibido.</p>
        </div>
        <input class="submit-btn NoWrap grpelem" id="u54749-25" type="submit" value="" tabindex="7"/><!-- state-based BG images -->
        <div class="fld-grp clearfix grpelem" id="widgetu54786" data-required="false"><!-- none box -->
         <span class="fld-textarea actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u54789-4"><!-- content --><textarea class="wrapped-input" id="widgetu54786_input" name="custom_U54786" tabindex="6"></textarea><label class="wrapped-input fld-prompt" id="widgetu54786_prompt" for="widgetu54786_input"><span class="actAsPara">Comentario</span></label></span>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu54775" data-required="true"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u54777-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu54775_input" name="custom_U54775" tabindex="5"/><label class="wrapped-input fld-prompt" id="widgetu54775_prompt" for="widgetu54775_input"><span class="actAsPara">Asunto</span></label></span>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu54753" data-required="true"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u54755-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu54753_input" name="custom_U54753" tabindex="2"/><label class="wrapped-input fld-prompt" id="widgetu54753_prompt" for="widgetu54753_input"><span class="actAsPara">Teléfono</span></label></span>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu54781" data-required="true"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u54783-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu54781_input" name="custom_U54781" tabindex="4"/><label class="wrapped-input fld-prompt" id="widgetu54781_prompt" for="widgetu54781_input"><span class="actAsPara">E&#45;mail</span></label></span>
        </div>
       </form>

       <div class="clearfix colelem" id="ppu54741"><!-- group -->
        <div class="clearfix grpelem" id="pu54741"><!-- column -->
         <div class="clip_frame colelem" id="u54741"><!-- image -->
          <img class="block" id="u54741_img" src="images/icono_direccion2.png" alt="" width="20" height="20"/>
         </div>
         <div class="clip_frame colelem" id="u54745"><!-- image -->
          <img class="block" id="u54745_img" src="images/icono_telefonos2.png" alt="" width="20" height="20"/>
         </div>
         <div class="clip_frame colelem" id="u54743"><!-- image -->
          <img class="block" id="u54743_img" src="images/icono_mail.png" alt="" width="20" height="20"/>
         </div>
        </div>
        <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u54740-14"><!-- content -->
         <h3>Barros Errázuriz N° 1960, piso 4°</h3>
         <h3>Providencia</h3>
         <h3>Santiago, Chile</h3>
         <h3>Tel: + 56 2 2585 8777</h3>
         <h3>Fax: +56 2 2223 1276</h3>
         <h3>contacto@celmedia.com</h3>
        </div>
       </div>
      </div>
      <div class="TabbedPanelsContent invi clearfix grpelem" id="u54635"><!-- column -->
       <div class="clearfix colelem" id="pu54863-4"><!-- group -->
        <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u54863-4"><!-- content -->
         <h3>ARGENTINA</h3>
        </div>
        <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u54864-4"><!-- content -->
         <h3>CONTÁCTANOS</h3>
        </div>
       </div>
       <form class="form-grp clearfix colelem" id="widgetu54872" method="post" enctype="multipart/form-data" action="scripts/form-u54872.php"><!-- none box -->
        <div class="fld-grp clearfix grpelem" id="widgetu54883" data-required="true"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u54884-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu54883_input" name="custom_U54883" tabindex="8"/><label class="wrapped-input fld-prompt" id="widgetu54883_prompt" for="widgetu54883_input"><span class="actAsPara">Nombre</span></label></span>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu54899" data-required="true" data-type="email"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u54901-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu54899_input" name="Email" tabindex="10"/><label class="wrapped-input fld-prompt" id="widgetu54899_prompt" for="widgetu54899_input"><span class="actAsPara">Empresa</span></label></span>
        </div>
        <div class="clearfix grpelem" id="u54888-4"><!-- content -->
         <p>Enviando formulario...</p>
        </div>
        <div class="clearfix grpelem" id="u54882-4"><!-- content -->
         <p>El servidor ha detectado un error.</p>
        </div>
        <div class="clearfix grpelem" id="u54910-4"><!-- content -->
         <p>Formulario recibido.</p>
        </div>
        <input class="submit-btn NoWrap grpelem" id="u54878-25" type="submit" value="" tabindex="14"/><!-- state-based BG images -->
        <div class="fld-grp clearfix grpelem" id="widgetu54911" data-required="false"><!-- none box -->
         <span class="fld-textarea actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u54915-4"><!-- content --><textarea class="wrapped-input" id="widgetu54911_input" name="custom_U54911" tabindex="13"></textarea><label class="wrapped-input fld-prompt" id="widgetu54911_prompt" for="widgetu54911_input"><span class="actAsPara">Comentario</span></label></span>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu54873" data-required="true"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u54876-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu54873_input" name="custom_U54873" tabindex="12"/><label class="wrapped-input fld-prompt" id="widgetu54873_prompt" for="widgetu54873_input"><span class="actAsPara">Asunto</span></label></span>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu54889" data-required="true"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u54890-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu54889_input" name="custom_U54889" tabindex="9"/><label class="wrapped-input fld-prompt" id="widgetu54889_prompt" for="widgetu54889_input"><span class="actAsPara">Teléfono</span></label></span>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu54894" data-required="true"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u54895-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu54894_input" name="custom_U54894" tabindex="11"/><label class="wrapped-input fld-prompt" id="widgetu54894_prompt" for="widgetu54894_input"><span class="actAsPara">E&#45;mail</span></label></span>
        </div>
       </form>
       <div class="clearfix colelem" id="ppu54866"><!-- group -->
        <div class="clearfix grpelem" id="pu54866"><!-- column -->
         <div class="clip_frame colelem" id="u54866"><!-- image -->
          <img class="block" id="u54866_img" src="images/icono_direccion2.png" alt="" width="20" height="20"/>
         </div>
         <div class="clip_frame colelem" id="u54870"><!-- image -->
          <img class="block" id="u54870_img" src="images/icono_telefonos2.png" alt="" width="20" height="20"/>
         </div>
         <div class="clip_frame colelem" id="u54868"><!-- image -->
          <img class="block" id="u54868_img" src="images/icono_mail.png" alt="" width="20" height="20"/>
         </div>
        </div>
        <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u54865-14"><!-- content -->
         <h3>Barros Errázuriz N° 1960, piso 4°</h3>
         <h3>Providencia</h3>
         <h3>Santiago, Chile</h3>
         <h3>Tel: + 56 2 2585 8777</h3>
         <h3>Fax: +56 2 2223 1276</h3>
         <h3>contacto@celmedia.com</h3>
        </div>
       </div>
      </div>
      <div class="TabbedPanelsContent invi clearfix grpelem" id="u54631"><!-- column -->
       <div class="clearfix colelem" id="pu54920-4"><!-- group -->
        <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u54920-4"><!-- content -->
         <h3>PERÚ</h3>
        </div>
        <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u54921-4"><!-- content -->
         <h3>CONTÁCTANOS</h3>
        </div>
       </div>
       <form class="form-grp clearfix colelem" id="widgetu54929" method="post" enctype="multipart/form-data" action="scripts/form-u54929.php"><!-- none box -->
        <div class="fld-grp clearfix grpelem" id="widgetu54940" data-required="true"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u54941-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu54940_input" name="custom_U54940" tabindex="15"/><label class="wrapped-input fld-prompt" id="widgetu54940_prompt" for="widgetu54940_input"><span class="actAsPara">Nombre</span></label></span>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu54956" data-required="true" data-type="email"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u54958-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu54956_input" name="Email" tabindex="17"/><label class="wrapped-input fld-prompt" id="widgetu54956_prompt" for="widgetu54956_input"><span class="actAsPara">Empresa</span></label></span>
        </div>
        <div class="clearfix grpelem" id="u54945-4"><!-- content -->
         <p>Enviando formulario...</p>
        </div>
        <div class="clearfix grpelem" id="u54939-4"><!-- content -->
         <p>El servidor ha detectado un error.</p>
        </div>
        <div class="clearfix grpelem" id="u54967-4"><!-- content -->
         <p>Formulario recibido.</p>
        </div>
        <input class="submit-btn NoWrap grpelem" id="u54935-25" type="submit" value="" tabindex="21"/><!-- state-based BG images -->
        <div class="fld-grp clearfix grpelem" id="widgetu54968" data-required="false"><!-- none box -->
         <span class="fld-textarea actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u54972-4"><!-- content --><textarea class="wrapped-input" id="widgetu54968_input" name="custom_U54968" tabindex="20"></textarea><label class="wrapped-input fld-prompt" id="widgetu54968_prompt" for="widgetu54968_input"><span class="actAsPara">Comentario</span></label></span>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu54930" data-required="true"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u54933-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu54930_input" name="custom_U54930" tabindex="19"/><label class="wrapped-input fld-prompt" id="widgetu54930_prompt" for="widgetu54930_input"><span class="actAsPara">Asunto</span></label></span>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu54946" data-required="true"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u54947-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu54946_input" name="custom_U54946" tabindex="16"/><label class="wrapped-input fld-prompt" id="widgetu54946_prompt" for="widgetu54946_input"><span class="actAsPara">Teléfono</span></label></span>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu54951" data-required="true"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u54952-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu54951_input" name="custom_U54951" tabindex="18"/><label class="wrapped-input fld-prompt" id="widgetu54951_prompt" for="widgetu54951_input"><span class="actAsPara">E&#45;mail</span></label></span>
        </div>
       </form>
       <div class="clearfix colelem" id="ppu54923"><!-- group -->
        <div class="clearfix grpelem" id="pu54923"><!-- column -->
         <div class="clip_frame colelem" id="u54923"><!-- image -->
          <img class="block" id="u54923_img" src="images/icono_direccion2.png" alt="" width="20" height="20"/>
         </div>
         <div class="clip_frame colelem" id="u54927"><!-- image -->
          <img class="block" id="u54927_img" src="images/icono_telefonos2.png" alt="" width="20" height="20"/>
         </div>
         <div class="clip_frame colelem" id="u54925"><!-- image -->
          <img class="block" id="u54925_img" src="images/icono_mail.png" alt="" width="20" height="20"/>
         </div>
        </div>
        <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u54922-14"><!-- content -->
         <h3>Barros Errázuriz N° 1960, piso 4°</h3>
         <h3>Providencia</h3>
         <h3>Santiago, Chile</h3>
         <h3>Tel: + 56 2 2585 8777</h3>
         <h3>Fax: +56 2 2223 1276</h3>
         <h3>contacto@celmedia.com</h3>
        </div>
       </div>
      </div>
      <div class="TabbedPanelsContent invi clearfix grpelem" id="u54698"><!-- column -->
       <div class="clearfix colelem" id="pu54977-4"><!-- group -->
        <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u54977-4"><!-- content -->
         <h3>COLOMBIA</h3>
        </div>
        <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u54978-4"><!-- content -->
         <h3>CONTÁCTANOS</h3>
        </div>
       </div>
       <form class="form-grp clearfix colelem" id="widgetu54986" method="post" enctype="multipart/form-data" action="scripts/form-u54986.php"><!-- none box -->
        <div class="fld-grp clearfix grpelem" id="widgetu54997" data-required="true"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u54998-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu54997_input" name="custom_U54997" tabindex="22"/><label class="wrapped-input fld-prompt" id="widgetu54997_prompt" for="widgetu54997_input"><span class="actAsPara">Nombre</span></label></span>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu55013" data-required="true" data-type="email"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u55015-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu55013_input" name="Email" tabindex="24"/><label class="wrapped-input fld-prompt" id="widgetu55013_prompt" for="widgetu55013_input"><span class="actAsPara">Empresa</span></label></span>
        </div>
        <div class="clearfix grpelem" id="u55002-4"><!-- content -->
         <p>Enviando formulario...</p>
        </div>
        <div class="clearfix grpelem" id="u54996-4"><!-- content -->
         <p>El servidor ha detectado un error.</p>
        </div>
        <div class="clearfix grpelem" id="u55024-4"><!-- content -->
         <p>Formulario recibido.</p>
        </div>
        <input class="submit-btn NoWrap grpelem" id="u54992-25" type="submit" value="" tabindex="28"/><!-- state-based BG images -->
        <div class="fld-grp clearfix grpelem" id="widgetu55025" data-required="false"><!-- none box -->
         <span class="fld-textarea actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u55029-4"><!-- content --><textarea class="wrapped-input" id="widgetu55025_input" name="custom_U55025" tabindex="27"></textarea><label class="wrapped-input fld-prompt" id="widgetu55025_prompt" for="widgetu55025_input"><span class="actAsPara">Comentario</span></label></span>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu54987" data-required="true"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u54990-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu54987_input" name="custom_U54987" tabindex="26"/><label class="wrapped-input fld-prompt" id="widgetu54987_prompt" for="widgetu54987_input"><span class="actAsPara">Asunto</span></label></span>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu55003" data-required="true"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u55004-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu55003_input" name="custom_U55003" tabindex="23"/><label class="wrapped-input fld-prompt" id="widgetu55003_prompt" for="widgetu55003_input"><span class="actAsPara">Teléfono</span></label></span>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu55008" data-required="true"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u55009-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu55008_input" name="custom_U55008" tabindex="25"/><label class="wrapped-input fld-prompt" id="widgetu55008_prompt" for="widgetu55008_input"><span class="actAsPara">E&#45;mail</span></label></span>
        </div>
       </form>
       <div class="clearfix colelem" id="ppu54980"><!-- group -->
        <div class="clearfix grpelem" id="pu54980"><!-- column -->
         <div class="clip_frame colelem" id="u54980"><!-- image -->
          <img class="block" id="u54980_img" src="images/icono_direccion2.png" alt="" width="20" height="20"/>
         </div>
         <div class="clip_frame colelem" id="u54984"><!-- image -->
          <img class="block" id="u54984_img" src="images/icono_telefonos2.png" alt="" width="20" height="20"/>
         </div>
         <div class="clip_frame colelem" id="u54982"><!-- image -->
          <img class="block" id="u54982_img" src="images/icono_mail.png" alt="" width="20" height="20"/>
         </div>
        </div>
        <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u54979-14"><!-- content -->
         <h3>Barros Errázuriz N° 1960, piso 4°</h3>
         <h3>Providencia</h3>
         <h3>Santiago, Chile</h3>
         <h3>Tel: + 56 2 2585 8777</h3>
         <h3>Fax: +56 2 2223 1276</h3>
         <h3>contacto@celmedia.com</h3>
        </div>
       </div>
      </div>
      <div class="TabbedPanelsContent invi clearfix grpelem" id="u54703"><!-- column -->
       <div class="clearfix colelem" id="pu55034-4"><!-- group -->
        <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u55034-4"><!-- content -->
         <h3>ECUADOR</h3>
        </div>
        <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u55035-4"><!-- content -->
         <h3>CONTÁCTANOS</h3>
        </div>
       </div>
       <form class="form-grp clearfix colelem" id="widgetu55043" method="post" enctype="multipart/form-data" action="scripts/form-u55043.php"><!-- none box -->
        <div class="fld-grp clearfix grpelem" id="widgetu55054" data-required="true"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u55055-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu55054_input" name="custom_U55054" tabindex="29"/><label class="wrapped-input fld-prompt" id="widgetu55054_prompt" for="widgetu55054_input"><span class="actAsPara">Nombre</span></label></span>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu55070" data-required="true" data-type="email"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u55072-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu55070_input" name="Email" tabindex="31"/><label class="wrapped-input fld-prompt" id="widgetu55070_prompt" for="widgetu55070_input"><span class="actAsPara">Empresa</span></label></span>
        </div>
        <div class="clearfix grpelem" id="u55059-4"><!-- content -->
         <p>Enviando formulario...</p>
        </div>
        <div class="clearfix grpelem" id="u55053-4"><!-- content -->
         <p>El servidor ha detectado un error.</p>
        </div>
        <div class="clearfix grpelem" id="u55081-4"><!-- content -->
         <p>Formulario recibido.</p>
        </div>
        <input class="submit-btn NoWrap grpelem" id="u55049-25" type="submit" value="" tabindex="35"/><!-- state-based BG images -->
        <div class="fld-grp clearfix grpelem" id="widgetu55082" data-required="false"><!-- none box -->
         <span class="fld-textarea actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u55086-4"><!-- content --><textarea class="wrapped-input" id="widgetu55082_input" name="custom_U55082" tabindex="34"></textarea><label class="wrapped-input fld-prompt" id="widgetu55082_prompt" for="widgetu55082_input"><span class="actAsPara">Comentario</span></label></span>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu55044" data-required="true"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u55047-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu55044_input" name="custom_U55044" tabindex="33"/><label class="wrapped-input fld-prompt" id="widgetu55044_prompt" for="widgetu55044_input"><span class="actAsPara">Asunto</span></label></span>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu55060" data-required="true"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u55061-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu55060_input" name="custom_U55060" tabindex="30"/><label class="wrapped-input fld-prompt" id="widgetu55060_prompt" for="widgetu55060_input"><span class="actAsPara">Teléfono</span></label></span>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu55065" data-required="true"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u55066-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu55065_input" name="custom_U55065" tabindex="32"/><label class="wrapped-input fld-prompt" id="widgetu55065_prompt" for="widgetu55065_input"><span class="actAsPara">E&#45;mail</span></label></span>
        </div>
       </form>
       <div class="clearfix colelem" id="ppu55037"><!-- group -->
        <div class="clearfix grpelem" id="pu55037"><!-- column -->
         <div class="clip_frame colelem" id="u55037"><!-- image -->
          <img class="block" id="u55037_img" src="images/icono_direccion2.png" alt="" width="20" height="20"/>
         </div>
         <div class="clip_frame colelem" id="u55041"><!-- image -->
          <img class="block" id="u55041_img" src="images/icono_telefonos2.png" alt="" width="20" height="20"/>
         </div>
         <div class="clip_frame colelem" id="u55039"><!-- image -->
          <img class="block" id="u55039_img" src="images/icono_mail.png" alt="" width="20" height="20"/>
         </div>
        </div>
        <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u55036-14"><!-- content -->
         <h3>Barros Errázuriz N° 1960, piso 4°</h3>
         <h3>Providencia</h3>
         <h3>Santiago, Chile</h3>
         <h3>Tel: + 56 2 2585 8777</h3>
         <h3>Fax: +56 2 2223 1276</h3>
         <h3>contacto@celmedia.com</h3>
        </div>
       </div>
      </div>
      <div class="TabbedPanelsContent invi clearfix grpelem" id="u54708"><!-- column -->
       <div class="clearfix colelem" id="pu55091-4"><!-- group -->
        <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u55091-4"><!-- content -->
         <h3>MÉXICO</h3>
        </div>
        <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u55092-4"><!-- content -->
         <h3>CONTÁCTANOS</h3>
        </div>
       </div>
       <form class="form-grp clearfix colelem" id="widgetu55100" method="post" enctype="multipart/form-data" action="scripts/form-u55100.php"><!-- none box -->
        <div class="fld-grp clearfix grpelem" id="widgetu55111" data-required="true"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u55112-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu55111_input" name="custom_U55111" tabindex="36"/><label class="wrapped-input fld-prompt" id="widgetu55111_prompt" for="widgetu55111_input"><span class="actAsPara">Nombre</span></label></span>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu55127" data-required="true" data-type="email"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u55129-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu55127_input" name="Email" tabindex="38"/><label class="wrapped-input fld-prompt" id="widgetu55127_prompt" for="widgetu55127_input"><span class="actAsPara">Empresa</span></label></span>
        </div>
        <div class="clearfix grpelem" id="u55116-4"><!-- content -->
         <p>Enviando formulario...</p>
        </div>
        <div class="clearfix grpelem" id="u55110-4"><!-- content -->
         <p>El servidor ha detectado un error.</p>
        </div>
        <div class="clearfix grpelem" id="u55138-4"><!-- content -->
         <p>Formulario recibido.</p>
        </div>
        <input class="submit-btn NoWrap grpelem" id="u55106-25" type="submit" value="" tabindex="42"/><!-- state-based BG images -->
        <div class="fld-grp clearfix grpelem" id="widgetu55139" data-required="false"><!-- none box -->
         <span class="fld-textarea actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u55143-4"><!-- content --><textarea class="wrapped-input" id="widgetu55139_input" name="custom_U55139" tabindex="41"></textarea><label class="wrapped-input fld-prompt" id="widgetu55139_prompt" for="widgetu55139_input"><span class="actAsPara">Comentario</span></label></span>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu55101" data-required="true"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u55104-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu55101_input" name="custom_U55101" tabindex="40"/><label class="wrapped-input fld-prompt" id="widgetu55101_prompt" for="widgetu55101_input"><span class="actAsPara">Asunto</span></label></span>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu55117" data-required="true"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u55118-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu55117_input" name="custom_U55117" tabindex="37"/><label class="wrapped-input fld-prompt" id="widgetu55117_prompt" for="widgetu55117_input"><span class="actAsPara">Teléfono</span></label></span>
        </div>
        <div class="fld-grp clearfix grpelem" id="widgetu55122" data-required="true"><!-- none box -->
         <span class="fld-input NoWrap actAsDiv rounded-corners Cuerpo-de-texto-2 clearfix grpelem" id="u55123-4"><!-- content --><input class="wrapped-input" type="text" id="widgetu55122_input" name="custom_U55122" tabindex="39"/><label class="wrapped-input fld-prompt" id="widgetu55122_prompt" for="widgetu55122_input"><span class="actAsPara">E&#45;mail</span></label></span>
        </div>
       </form>
       <div class="clearfix colelem" id="ppu55094"><!-- group -->
        <div class="clearfix grpelem" id="pu55094"><!-- column -->
         <div class="clip_frame colelem" id="u55094"><!-- image -->
          <img class="block" id="u55094_img" src="images/icono_direccion2.png" alt="" width="20" height="20"/>
         </div>
         <div class="clip_frame colelem" id="u55098"><!-- image -->
          <img class="block" id="u55098_img" src="images/icono_telefonos2.png" alt="" width="20" height="20"/>
         </div>
         <div class="clip_frame colelem" id="u55096"><!-- image -->
          <img class="block" id="u55096_img" src="images/icono_mail.png" alt="" width="20" height="20"/>
         </div>
        </div>
        <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u55093-14"><!-- content -->
         <h3>Barros Errázuriz N° 1960, piso 4°</h3>
         <h3>Providencia</h3>
         <h3>Santiago, Chile</h3>
         <h3>Tel: + 56 2 2585 8777</h3>
         <h3>Fax: +56 2 2223 1276</h3>
         <h3>contacto@celmedia.com</h3>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="clearfix colelem" id="pu47939-4"><!-- group -->
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u47939-4"><!-- content -->
      <h3>© 2014 CELMEDIA, Todos los derechos reservados</h3>
     </div>
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u48026-4"><!-- content -->
      <h3>Suscríbete</h3>
     </div>
    </div>
    <div class="clearfix colelem" id="ppu47940-4"><!-- group -->
     <div class="clearfix grpelem" id="pu47940-4"><!-- column -->
      <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u47940-4" href="proyectos.html"><!-- content --><h3>Proyectos</h3></a>
      <a class="nonblock nontext anim_swing Cuerpo-de-texto-2 clearfix colelem" id="u47942-4" href="index.html#clientes"><!-- content --><h3>Clientes</h3></a>
     </div>
     <div class="clearfix grpelem" id="pu47954-4"><!-- column -->
      <a class="nonblock nontext Cuerpo-de-texto-2 clearfix colelem" id="u47954-4" href="mobile-marketing.html"><!-- content --><h3>Mobile Marketing</h3></a>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u47953-4"><!-- content -->
       <h3>TV Interactiva</h3>
      </div>
     </div>
     <div class="clearfix grpelem" id="pu47957-4"><!-- column -->
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u47957-4"><!-- content -->
       <h3>Virtual Graphics</h3>
      </div>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u47956-4"><!-- content -->
       <h3>M&#45;Goverment</h3>
      </div>
     </div>
     <div class="rounded-corners clearfix grpelem" id="u48020-4"><!-- content -->
      <p id="u48020-2"><span class="Links-Menu" id="u48020">&nbsp;&nbsp; E&#45;mail</span></p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu47944-4"><!-- group -->
     <a class="nonblock nontext Cuerpo-de-texto-2 clearfix grpelem" id="u47944-4" href="noticias.html"><!-- content --><h3>Noticias</h3></a>
     <div class="clearfix grpelem" id="pu47952-4"><!-- column -->
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u47952-4"><!-- content -->
       <h3>Gateway</h3>
      </div>
      <div class="Cuerpo-de-texto-2 clearfix colelem" id="u47951-4"><!-- content -->
       <h3>Fidelización</h3>
      </div>
     </div>
     <div class="Cuerpo-de-texto-2 clearfix grpelem" id="u47955-4"><!-- content -->
      <h3>Social Media</h3>
     </div>
     <div class="clearfix grpelem" id="u48027-7"><!-- content -->
      <p id="u48027-5"><span class="Links-Menu" id="u48027">Enviar</span><span class="Links-Menu" id="u48027-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="Links-Menu"><span class="actAsInlineDiv normal_text" id="u48028"><!-- content --><span class="actAsDiv clip_frame excludeFromNormalFlow" id="u48029"><!-- image --><img id="u48029_img" src="images/flecha_blanca.png" alt="" width="14" height="14"/></span></span></span><span class="Links-Menu" id="u48027-4"></span></p>
     </div>
    </div>
    <div class="verticalspacer"></div>
    <div class="mse_pre_init" id="u46510"><!-- simple frame --></div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/scroll_arrowblack2.png" alt=""/>
   <img class="preload" src="images/scroll_arrowwhite2.png" alt=""/>
   <img class="preload" src="images/logos_eluniversal_hover.png" alt=""/>
   <img class="preload" src="images/contactos_seleccion.png" alt=""/>
   <img class="preload" src="images/u54749-25-r.png" alt=""/>
   <img class="preload" src="images/u54749-25-m.png" alt=""/>
   <img class="preload" src="images/u54749-25-fs.png" alt=""/>
   <img class="preload" src="images/u54878-25-r.png" alt=""/>
   <img class="preload" src="images/u54878-25-m.png" alt=""/>
   <img class="preload" src="images/u54878-25-fs.png" alt=""/>
   <img class="preload" src="images/u54935-25-r.png" alt=""/>
   <img class="preload" src="images/u54935-25-m.png" alt=""/>
   <img class="preload" src="images/u54935-25-fs.png" alt=""/>
   <img class="preload" src="images/u54992-25-r.png" alt=""/>
   <img class="preload" src="images/u54992-25-m.png" alt=""/>
   <img class="preload" src="images/u54992-25-fs.png" alt=""/>
   <img class="preload" src="images/u55049-25-r.png" alt=""/>
   <img class="preload" src="images/u55049-25-m.png" alt=""/>
   <img class="preload" src="images/u55049-25-fs.png" alt=""/>
   <img class="preload" src="images/u55106-25-r.png" alt=""/>
   <img class="preload" src="images/u55106-25-m.png" alt=""/>
   <img class="preload" src="images/u55106-25-fs.png" alt=""/>
  </div>
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn2.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script src="scripts/museutils.js?4291592202" type="text/javascript"></script>
  <script src="scripts/jquery.musepolyfill.bgsize.js?291134478" type="text/javascript"></script>
  <script src="scripts/webpro.js?3903299128" type="text/javascript"></script>
  <script src="scripts/musewpslideshow.js?138381373" type="text/javascript"></script>
  <script src="scripts/jquery.museoverlay.js?4250894771" type="text/javascript"></script>
  <script src="scripts/touchswipe.js?4156838003" type="text/javascript"></script>
  <script src="scripts/jquery.scrolleffects.js?4006931061" type="text/javascript"></script>
  <script src="scripts/musewpdisclosure.js?4285748861" type="text/javascript"></script>
  <script src="scripts/jquery.watch.js?4068933136" type="text/javascript"></script>
  <!-- Other scripts -->
  <script type="text/javascript">
   $(document).ready(function() { try {
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.initWidget('#slideshowu54497', function(elem) { $(elem).data('widget', new WebPro.Widget.ContentSlideShow(elem, {autoPlay:true,displayInterval:5000,slideLinkStopsSlideShow:false,transitionStyle:'fading',lightboxEnabled_runtime:false,shuffle:false,transitionDuration:500,enableSwipe:true,fullScreen:false})); });/* #slideshowu54497 */
$('#slideshowu54497').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,-128.2]},{"speed":[0,1],"in":[-128.2,Infinity]}]);/* scroll effect */
$('#u26429').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,-0.48]},{"speed":[0,0],"in":[-0.48,Infinity]}]);/* scroll effect */
$('#u26435').registerPositionScrollEffect([{"speed":[10,0],"in":[-Infinity,-0.02]},{"speed":[0,0],"in":[-0.02,Infinity]}]);/* scroll effect */
$('#u46112').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,697.95]},{"speed":[0,1],"in":[697.95,Infinity]}]);/* scroll effect */
$('#u26449-6').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,756.2]},{"speed":[0,1],"in":[756.2,Infinity]}]);/* scroll effect */
Muse.Utils.initWidget('#pamphletu41272', function(elem) { new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'loose',event:'mouseover',deactivationEvent:'mouseout_both',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:400,hideAllContentsFirst:true,shuffle:false,enableSwipe:false}); });/* #pamphletu41272 */
Muse.Utils.initWidget('#pamphletu41673', function(elem) { new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'loose',event:'mouseover',deactivationEvent:'mouseout_both',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:400,hideAllContentsFirst:true,shuffle:false,enableSwipe:false}); });/* #pamphletu41673 */
Muse.Utils.initWidget('#pamphletu46180', function(elem) { new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'loose',event:'mouseover',deactivationEvent:'mouseout_both',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:true,shuffle:false,enableSwipe:false}); });/* #pamphletu46180 */
$('#u46441').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,1698.25]},{"speed":[0,1],"in":[1698.25,Infinity]}]);/* scroll effect */
$('#u46460-4').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,1727.45]},{"speed":[0,1],"in":[1727.45,Infinity]}]);/* scroll effect */
$('#u46440-4').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,1773.65]},{"speed":[0,1],"in":[1773.65,Infinity]}]);/* scroll effect */
$('#u46470').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,2640.25]},{"speed":[0,1],"in":[2640.25,Infinity]}]);/* scroll effect */
$('#u46481').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,3582.25]},{"speed":[0,1],"in":[3582.25,Infinity]}]);/* scroll effect */
$('#u46484-4').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,3623.85]},{"speed":[0,1],"in":[3623.85,Infinity]}]);/* scroll effect */
$('#u54615-4').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,3670.05]},{"speed":[0,1],"in":[3670.05,Infinity]}]);/* scroll effect */
$('#u46493').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,4491.55]},{"speed":[0,1],"in":[4491.55,Infinity]}]);/* scroll effect */
$('#u46496-4').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,4522.85]},{"speed":[0,1],"in":[4522.85,Infinity]}]);/* scroll effect */
$('#u54613-4').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,4575.9]},{"speed":[0,1],"in":[4575.9,Infinity]}]);/* scroll effect */
Muse.Utils.initWidget('#pamphletu53997', function(elem) { new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'lightbox',event:'click',deactivationEvent:'none',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:false,shuffle:false,enableSwipe:true}); });/* #pamphletu53997 */
$('#u46502').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,5333.5]},{"speed":[0,1],"in":[5333.5,Infinity]}]);/* scroll effect */
$('#u27993-4').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,5509.07]},{"speed":[0,1],"in":[5509.07,Infinity]}]);/* scroll effect */
Muse.Utils.initWidget('#widgetu54747', function(elem) { new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu54747 */
Muse.Utils.initWidget('#widgetu54872', function(elem) { new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu54872 */
Muse.Utils.initWidget('#widgetu54929', function(elem) { new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu54929 */
Muse.Utils.initWidget('#widgetu54986', function(elem) { new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu54986 */
Muse.Utils.initWidget('#widgetu55043', function(elem) { new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu55043 */
Muse.Utils.initWidget('#widgetu55100', function(elem) { new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu55100 */
Muse.Utils.initWidget('#tab-panelu54616', function(elem) { return new WebPro.Widget.TabbedPanels(elem, {event:'click',defaultIndex:0}); });/* #tab-panelu54616 */
$('#u46510').registerPositionScrollEffect([{"speed":[0,1],"in":[-Infinity,6236.95]},{"speed":[0,1],"in":[6236.95,Infinity]}]);/* scroll effect */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
  
  <!--HTML Widget code-->
  
       <script type="text/javascript">
    
        $(window).load(function() { // makes sure the whole site is loaded
            $('#status').fadeOut(); // will first fade out the loading animation
            $('#preloader').delay(200).fadeOut('slow'); // will fade out the white DIV that covers the website.
            $('body').delay(200).css({'overflow':'visible'});
        })
    
    </script>
    
   </body>
</html>
