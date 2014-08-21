    <?php $is_home = ($this->router->fetch_class() === 'site' && $this->router->fetch_method() === 'index') ? true : false; ?>
    <?php if ($is_home): ?>

    <?php else: ?>
        
    <?php endif ?>

        <div id="footer" >
            <div class="container">
                <div class="row expaciado-a">&nbsp;</div>
                <div class="row">
                    <div class="col-md-8">
                        <span class="copy-footer" style="font-family: open-sans,sans-serif; font-size: 14px;">&copy; 2014 CELMEDIA, Todos los derechos reservados</span>
                    </div>
                    <div class="col-md-4" style="padding-left:0px;">
                        <span class="copy-footer" style="font-family: open-sans,sans-serif; font-size: 14px;">Suscríbete</span>
                    </div>
                </div>
                <div class="row text-left">
                    <div class="col-md-2"><br/>
                        <p class="links-footer" style="line-height: 20px; font-size: 14px;">
                            <a href="<?php echo site_url('site/proyecto'); ?>">Proyectos</a><br/>
                            <a href="<?php echo site_url('site');?>#clientes">Clientes</a><br />
                            <a href="<?php echo site_url('site/noticia'); ?>">Noticias</a><br />
                        </p>
                    </div>
                    <div class="col-md-2"><br/>
                        <p class="links-footer" style="line-height: 20px; font-size: 14px;">
                            <a href="<?php echo site_url('site/servicios') . '/1'; ?>">Mobile Marketing</a><br />
                            <a href="<?php echo site_url('site/servicios') . '/2'; ?>">TV Interactiva</a><br />
                            <a href="<?php echo site_url('site/servicios') . '/3'; ?>">Gateway</a><br />
                            <a href="<?php echo site_url('site/servicios') . '/4'; ?>">Fidelización</a><br />
                        </p>
                    </div>
                    <div class="col-md-2"><br/>
                        <p class="links-footer" style="line-height: 20px; font-size: 14px;">
                            <a href="<?php echo site_url('site/servicios') . '/5'; ?>">Virtual Graphics</a><br />
                            <a href="<?php echo site_url('site/servicios') . '/6'; ?>">M-Goverment</a><br />
                            <a href="<?php echo site_url('site/servicios') . '/7'; ?>">Social Media</a><br />
                        </p>
                    </div>

                    <div class="col-md-4 col-md-offset-2"><br/>
                        <form  class="form-horizontal formulario-contacto-a" role="form">
                            <div class="row">
                                <div class="col-md-11 col-md-offset-1 form-group">
                                    <span class="help-block"><?php echo form_error('emailS'); ?></span>
                                    <input type="email" class="form-control" name="emailS"  id="emailC"  placeholder="Email">
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 col-md-offset-5" style="padding-right:0px">
                                    <button  class="btn btn-slh link-home" style="padding:5px;" >Enviar</button><br/><br/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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

         <script type="text/javascript" src="<?php echo base_url('public/js/js-slider/jssor.core.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('public/js/js-slider/jssor.utils.js'); ?>"></script>
     <script type="text/javascript" src="<?php echo base_url('public/js/js-slider/jssor.slider.js'); ?>"></script>

        <script type="text/javascript" src="<?php echo base_url('public/js/script.js'); ?>"></script>
    </body>
</html>