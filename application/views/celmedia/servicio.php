<div class="container-fluid">
	<div class="row espaciado-top"></div>
	<div class="row espaciado-a" style="margin-bottom:0px !important">
		<div class="col-md-5 colores-<?php  echo $servicio->id; ?>" >
			<div class="container-fluid">
				<div class="row espaciado-a">
					<div class="col-md-12">
						<br/><a href="<?php echo site_url('site/index#servicios');?>" class="texto-gris"> &lt; Regresar </a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h1 class="s-titular-2">
							<?php echo $servicio->titulo; ?>
						</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h3 class="s-subtitular">
							<?php echo $servicio->subtitulo; ?>
						</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="servicio-parrafo">
							<?php echo $servicio->descripcion; ?>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="col-md-3" style="padding-left:0px; width: 22%;">
			<?php $rutaImg = base_url('assets/celmediachile/servicios') . '/' . $servicio->imagen; ?>
			<img src="<?php echo $rutaImg; ?>" alt="" class="img-responsive obj-centrar" style="height: 520px;" />
		</div>
		<div class="col-md-3" style="background-color:white; width: 24%;">
			<div class="container-fluid">
				<div class="row espaciado-a">
					<div class="col-md-12">
						<h3 class="titular-secc-caso" style="background-color: <?php echo $servicio->color; ?>;">Caso de éxito</h3>
						<img src="<?php echo base_url('public/img/indicador_casos.png'); ?>" alt="" class="img-responsive obj-centrar" style="background-color: <?php echo $servicio->color; ?>; position: relative; top: -10px;" />
					</div>
				</div>
				<div class="row espaciado-a ">
					<?php  if($proyecto){ $rutaImg = base_url('assets/celmediachile/proyectos') . '/' . $proyecto->imagen; }else{ $rutaImg = base_url('public/img/Imagen_ReferencialCasos.jpg'); }   ?>
					<div class="col-md-12">
						<img src="<?php echo $rutaImg; ?>" alt="" class="img-responsive" style="height:224px; width:350px;" />
					</div>
				</div>
				<div class="row espaciado-a">
					<div class="col-md-12">
						<span class="s-subtitular-p"><?php if($proyecto){ echo utf8_encode( substr($proyecto->descripcion, 0, 220)).'...';}else{ echo '';}  ?></span>
					</div>
				</div>
				<div class="row espaciado-a">
					<div class="col-md-12 efecto-link">
						<a href="<?php if($proyecto){echo site_url('site/proyecto'). '/' . $proyecto->id;}else{ echo '#';}  ?>" class="link-celmedia titular-ver-caso" style="background-color: <?php echo $servicio->color; ?>;">
							Ver más de éste caso
						</a>
					</div>
				</div>
				<div class="row espaciado-a">
					<div class="col-md-12 efecto-link">
						<a href="<?php echo site_url('site/proyecto'); ?>" class="link-celmedia titular-ver-caso" style="background-color: black">
							Ver todos los casos
						</a>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>