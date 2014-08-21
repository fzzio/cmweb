<?php
    $is_home = ($this->router->fetch_class() === 'site' && $this->router->fetch_method() === 'index') ? true : false;
    $paginaActual = $this->router->fetch_method();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <title>Celmedia</title>
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/bootstrap.min.css'); ?>">
        <!--<link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css">-->    

        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/js/fancybox/source/jquery.fancybox.css?v=2.1.5'); ?>" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/js/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5'); ?>" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/js/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7'); ?>" media="screen" />

        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/js/lionbars/lionbars.css'); ?>" media="screen" />
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/fonts/fuentes.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/estilo-phone.css'); ?>">

        <link href="<?php echo base_url('public/img/favicon.ico'); ?>" rel="shortcut icon">
    </head>
    <body id="page-top" data-spy="scroll" data-target="#nav-celmedia" class="fondo<?php echo $paginaActual; ?>">
        <!-- Fixed navbar -->
        <div class="navbar navbar-fixed-top navbar-celmedia" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-celmedia">
                        <span class="sr-only">Cambiar Navegacion</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url('site');?>">
                        <img src="<?php echo base_url('public/img/celmedia_logo_Menu.png'); ?>" class="img-responsive">
                    </a>
                </div>
                <div class="navbar-collapse collapse" id="nav-celmedia">
                    <ul class="nav navbar-nav page-scroll">                        
                        <li class="<?php echo( ($paginaActual == 'index') ? 'active' : '') ; ?>">
                            <a href="<?php echo site_url('site');?>">
                                inicio
                            </a>
                        </li>
                        <li class="<?php echo( ($paginaActual == 'servicioM') ? 'active' : '') ; ?>">
                            <a href="<?php echo site_url('site/servicioM');?>">
                                servicios
                            </a>
                        </li>
                        <li class="<?php echo( ($paginaActual == 'proyectoM') ? 'active' : '') ; ?>">
                            <a href="<?php echo site_url('site/proyectoM');?>">
                                Casos
                            </a>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>