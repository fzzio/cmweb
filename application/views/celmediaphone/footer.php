    <?php $is_home = ($this->router->fetch_class() === 'site' && $this->router->fetch_method() === 'index') ? true : false; ?>
    <?php if ($is_home): ?>

    <?php else: ?>
        
    <?php endif ?>

        <div class="navbar navbar-fixed-bottom navbar-contacto">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="btn btn-contacto-toggle navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-foo-celmedia">
                       Contactos
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="nav-foo-celmedia">
                    <div class="container-fluid">
                        
                        <div class="row espaciado-a">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <select class="btn-slh form-control" name="spais" onchange="mostrarPaises(this)">
                                    <option class="txt-negrita" value="">Seleccione un país</option>
                                    <?php foreach ($paises as $pais): ?>
                                        <option class="txt-negrita" value="<?php echo $pais["id"] ?>"><?php echo $pais["nombre"] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>

                        
                        <div class="row espaciado-a contenedor-formulario" id="contacto-chile">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <br/><br/><h4><strong>CHILE - CASA CENTRAL</strong></h4><br/><br/>
                                <p><img id="u54741_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_direccion2.png'); ?>"> Barros Errázuriz N° 1960, piso 4° Providencia<br/>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Santiago, Chile<br/>
                                    <img id="u54745_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_telefonos2.png'); ?>"> Tel: + 56 2 2585 8777<br/>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fax: +56 2 2223 1276<br/>
                                    <img id="u54743_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_mail.png'); ?>"> contacto@celmedia.com
                                </p>

                            </div>
                        </div>

                        <div class="row espaciado-a contenedor-formulario" id="contacto-argentina" style="display: none;">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <br/><br/><h4><strong>ARGENTINA</strong></h4><br/><br/>
                                <p><img id="u54741_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_direccion2.png'); ?>"> Reconquista 336, piso 11, depto. “X” (C1003ABH)<br/>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ciudad Autónoma de Buenos Aires - Argentina<br/>
                                    <img id="u54745_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_telefonos2.png'); ?>"> Tel:     +54 9 11 5514 8608<br/>
                                    <img id="u54743_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_mail.png'); ?>"> contacto@celmedia.cl<br/>
                                </p>
                            </div>
                        </div>

                        <div class="row espaciado-a contenedor-formulario" id="contacto-peru" style="display: none;">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <br/><br/><h4><strong>PER&Uacute;</strong></h4><br/><br/>
                                <p><img id="u54741_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_direccion2.png'); ?>"> Victor Andrés Belaúnde 147, vía principal 150<br/>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edificio Real Seis - piso6 <br/>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lima 27- Perú<br/>
                                    <img id="u54745_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_telefonos2.png'); ?>"> Tel: +511 211 2679<br/>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fax:    +511 211 2526<br/>
                                    <img id="u54743_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_mail.png'); ?>"> contacto@celmedia.cl

                                </p>
                            </div>
                        </div>

                        <div class="row espaciado-a contenedor-formulario" id="contacto-colombia" style="display: none;">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <br/><br/><h4><strong>COLOMBIA</strong></h4><br/><br/>
                                <p><img id="u54741_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_direccion2.png'); ?>"> Celmedia MKT S.A.<br/>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cra 11b # 98-08 of 304<br/>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bogotá - Colombia<br/>
                                    <img id="u54745_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_telefonos2.png'); ?>"> Tel: +571 6431002<br/>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tel:    +54 9 11 5514 8608<br/>
                                    <img id="u54743_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_mail.png'); ?>"> contacto@celmedia.cl
                                </p>
                            </div>
                        </div>

                        <div class="row espaciado-a contenedor-formulario" id="contacto-ecuador" style="display: none;">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <br/><br/><h4><strong>ECUADOR</strong></h4><br/><br/>
                                <p><img id="u54741_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_direccion2.png'); ?>"> Av. Rodrigo Chávez y Av. Juan Tanca Marengo s # 3 y 4<br/> 
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Edificio Grafehi Piso 2 Guayaquil - Ecuador<br/>
                                    <img id="u54745_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_telefonos2.png'); ?>"> Tel: (+5934) 5019091<br/><br/>
                                    <img id="u54741_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_direccion2.png'); ?>"> Atahualpa 955 y Av. República Ed. Digicom 5to. piso<br/>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quito - Ecuador<br/>
                                    <img id="u54745_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_telefonos2.png'); ?>"> Tel:  +593 2 2460284<br/>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+593 2 2460285<br/>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fax: +593 2 2460284<br/>
                                    <img id="u54743_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_mail.png'); ?>"> contacto@celmedia.cl
                                </p>
                            </div>
                        </div>

                        <div class="row espaciado-a contenedor-formulario" id="contacto-mexico" style="display: none;">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <br/><br/><h4><strong>M&Eacute;XICO</strong></h4><br/><br/>
                                <p><img id="u54741_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_direccion2.png'); ?>"> Av. Paseo de las Palmas 215 Piso 5 Despacho 502 Col.<br/>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lomas de Chapultepec. Del. Miguel Hidalgo C.P. 11000 México D.F<br/>
                                    <img id="u54741_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_direccion2.png'); ?>"> Tel: +52 55 36202068<br/>
                                    <img id="u54743_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_mail.png'); ?>"> xperez@celmedia.com

                                </p>
                            </div>
                        </div>


                    </div>
                </div><!--/.nav-collapse -->
            </div>
        </div>


        <script type="text/javascript" src="<?php echo base_url('public/js/jquery-1.9.1.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/js/bootstrap.min.js'); ?>"></script>
        
        <script type="text/javascript" src="<?php echo base_url('public/js/jquery.easing.min.js'); ?>"></script>
        
        <!-- VALIDATE FORM -->
        <script type="text/javascript" src="<?php echo base_url('public/js/jquery.validate.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/js/additional-methods.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/js/messages_es.js'); ?>"></script>

        <script type="text/javascript" src="<?php echo base_url('public/js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/js/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/js/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7'); ?>"></script>

        <script type="text/javascript" src="<?php echo base_url('public/js/lionbars/lionbars03min.js'); ?>"></script>

        <script type="text/javascript" src="<?php echo base_url('public/js/script-phone.js'); ?>"></script>
    </body>
</html>