<div class="container">
	<div class="row espaciado-top"></div>
	<div class="row espaciado-a">
		<div class="col-md-4">
			<div class="container-fluid">
				<div class="row espaciado-a">
					<div class="col-md-12">
						<a href="<?php echo site_url('site/index');?>" class="texto-gris"> &lt; Regresar</a>
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
		<div class="col-md-4">
			<?php $rutaImg = base_url('assets/celmediachile/servicios') . '/' . $servicio->imagen; ?>
			<img src="<?php echo $rutaImg; ?>" alt="" class="img-responsive obj-centrar" />
		</div>
		<div class="col-md-4">
			<div class="container-fluid">
				<div class="row espaciado-a">
					<div class="col-md-12">
						<h3 class="titular-secc-caso" style="background-color: <?php echo $servicio->color; ?>;">Caso de éxito</h3>
					</div>
				</div>
				<div class="row espaciado-a">
					<?php $rutaImg = base_url('assets/celmediachile/proyectos') . '/' . $proyecto->imagen; ?>
					<div class="col-md-12">
						<img src="<?php echo $rutaImg; ?>" alt="" class="img-responsive obj-centrar" />
					</div>
				</div>
				<div class="row espaciado-a">
					<div class="col-md-12">
						<span class="s-subtitular"><?php echo $proyecto->nombre; ?></span>
					</div>
				</div>
				<div class="row espaciado-a">
					<div class="col-md-12">
						<a href="<?php echo site_url('site/proyecto'). '/' . $proyecto->id; ?>" class="link-celmedia titular-ver-caso" style="background-color: <?php echo $servicio->color; ?>;">
							Ver más de éste caso
						</a>
					</div>
				</div>
				<div class="row espaciado-a">
					<div class="col-md-12">
						<a href="<?php echo site_url('site/proyectos'); ?>" class="link-celmedia titular-ver-casos">
							Ver todos los casos
						</a>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>