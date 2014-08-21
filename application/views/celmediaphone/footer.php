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
                    <ul class="nav navbar-nav page-scroll">
                        <li class="active">
                            <a href="<?php echo site_url('site');?>">
                                inicio
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('serviciosM');?>">
                                servicios
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('casosM');?>">
                                Casos
                            </a>
                        </li>
                    </ul>
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