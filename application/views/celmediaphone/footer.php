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
                <div class="navbar-collapse collapse row-sinborde" id="nav-foo-celmedia">
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

                        
                        <div class="row contenedor-formulario" id="contacto-chile">
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <h4><strong>CHILE - CASA CENTRAL</strong></h4>
                                <ul class="media-list">
                                    <li class="media">
                                        <div class="pull-left">
                                            <img id="u54741_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_direccion.png'); ?>">
                                        </div>
                                        <div class="media-body">
                                            Barros Errázuriz N° 1960, piso 4° Providencia<br/>
                                            Santiago, Chile
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="pull-left">
                                            <img id="u54745_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_telefonos.png'); ?>">
                                        </div>
                                        <div class="media-body">
                                            Tel: + 56 2 2585 8777<br/>
                                            Fax: +56 2 2223 1276<br/>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row espaciado-a contenedor-formulario" id="contacto-argentina" style="display: none;">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h4><strong>ARGENTINA</strong></h4>
                                <ul class="media-list">
                                    <li class="media">
                                        <div class="pull-left">
                                            <img id="u54741_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_direccion.png'); ?>">
                                        </div>
                                        <div class="media-body">
                                            Reconquista 336, piso 11, depto. “X” (C1003ABH)<br/>
                                            Ciudad Autónoma de Buenos Aires - Argentina
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="pull-left">
                                            <img id="u54745_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_telefonos.png'); ?>">
                                        </div>
                                        <div class="media-body">
                                            Tel: +54 9 11 5514 8608<br/>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row espaciado-a contenedor-formulario" id="contacto-peru" style="display: none;">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h4><strong>PER&Uacute;</strong></h4>
                                <ul class="media-list">
                                    <li class="media">
                                        <div class="pull-left">
                                            <img id="u54741_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_direccion.png'); ?>">
                                        </div>
                                        <div class="media-body">
                                            Victor Andrés Belaúnde 147, vía principal 150<br/>
                                            Edificio Real Seis - piso6 <br/>
                                            Lima 27- Perú<br/>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="pull-left">
                                            <img id="u54745_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_telefonos.png'); ?>">
                                        </div>
                                        <div class="media-body">
                                            Fax: +511 211 2526<br/>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row espaciado-a contenedor-formulario" id="contacto-colombia" style="display: none;">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h4><strong>COLOMBIA</strong></h4>
                                <ul class="media-list">
                                    <li class="media">
                                        <div class="pull-left">
                                            <img id="u54741_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_direccion.png'); ?>">
                                        </div>
                                        <div class="media-body">
                                            Celmedia MKT S.A.<br/>
                                            Cra 11b # 98-08 of 304<br/>
                                            Bogotá - Colombia<br/>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="pull-left">
                                            <img id="u54745_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_telefonos.png'); ?>">
                                        </div>
                                        <div class="media-body">
                                            Tel: +571 6431002<br/>
                                            Tel: +54 9 11 5514 8608<br/>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row espaciado-a contenedor-formulario" id="contacto-ecuador" style="display: none;">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h4><strong>ECUADOR</strong></h4>
                                <ul class="media-list">
                                    <li class="media">
                                        <div class="pull-left">
                                            <img id="u54741_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_direccion.png'); ?>">
                                        </div>
                                        <div class="media-body">
                                            Av. Rodrigo Chávez y Av. Juan Tanca Marengo s # 3 y 4<br/> 
                                            Edificio Grafehi Piso 2 Guayaquil - Ecuador<br/>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="pull-left">
                                            <img id="u54745_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_telefonos.png'); ?>">
                                        </div>
                                        <div class="media-body">
                                            Tel: (+5934) 5019091<br/>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="pull-left">
                                            <img id="u54741_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_direccion.png'); ?>">
                                        </div>
                                        <div class="media-body">
                                            Atahualpa 955 y Av. República Ed. Digicom 5to. piso<br/>
                                            Quito - Ecuador<br/>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="pull-left">
                                            <img id="u54745_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_telefonos.png'); ?>">
                                        </div>
                                        <div class="media-body">
                                            Tel:  +593 2 2460284<br/>
                                            +593 2 2460285<br/>
                                            Fax: +593 2 2460284<br/>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row espaciado-a contenedor-formulario" id="contacto-mexico" style="display: none;">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h4><strong>M&Eacute;XICO</strong></h4>
                                <ul class="media-list">
                                    <li class="media">
                                        <div class="pull-left">
                                            <img id="u54741_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_direccion.png'); ?>">
                                        </div>
                                        <div class="media-body">
                                            Av. Paseo de las Palmas 215 Piso 5 Despacho 502 Col.<br/>
                                            Lomas de Chapultepec. Del. Miguel Hidalgo C.P. 11000 México D.F<br/>
                                            Bogotá - Colombia<br/>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="pull-left">
                                            <img id="u54745_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_telefonos.png'); ?>">
                                        </div>
                                        <div class="media-body">
                                            Tel: +52 55 36202068<br/>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </div>

                    <div class="container-fluid row-sinborde">
                        <div class="row row-sinborde">
                            <a href="mailto:contacto@celmedia.com" class="btn btn-verde-mail row-sinborde">
                                <img class="block pull-left icono-left" width="30" height="30" alt="" src="<?php echo base_url('public/img/icono_mail_grande.png'); ?>"> contacto@celmedia.com
                            </a>
                        </div>
                        <div class="row row-sinborde">
                            <a href="#" class="btn btn-negro-llamar row-sinborde">
                                <img class="block pull-left icono-left" width="30" height="30" alt="" src="<?php echo base_url('public/img/icono_telefono.png'); ?>">Llamar a Celmedia
                            </a>
                        </div>
                        <div class="row row-sinborde">
                            <button type="button" class="btn btn-cerrar" data-toggle="collapse" data-target="#nav-foo-celmedia">
                               CERRAR
                            </button>
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