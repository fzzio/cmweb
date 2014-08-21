<?php
    $is_home = ($this->router->fetch_class() === 'site' && $this->router->fetch_method() === 'index') ? true : false;
    $paginaActual = $this->router->fetch_method();
?>
<div class="container">
	<div class="row espaciado-top"></div>
	<?php if (!$this->uri->segment(3)): ?>

		<div class="row espaciado-a">
			<div class="col-md-12">
				<h1 class="s-titular">
					Servicios
				</h1>
			</div>
		</div>
		<?php foreach ($servicios as $servicio): ?>
			<a href="<?php echo site_url('site/servicioM') . '/' . $servicio['id'];?>" class="btn btn-servicio-m" style="background-color: <?php echo $servicio['color']; ?>;">
				<?php echo $servicio['titulo']; ?> <span class="pull-right glyphicon glyphicon-chevron-right white"></span>
			</a>
		<?php endforeach ?>

	<?php else: ?>
		<div class="row" style="background-color: <?php echo $servicio->color; ?> ;">
			<div class="col-md-12 espaciado-titulo">
				<h1 class="s-titular">
					Servicios <span class="glyphicon glyphicon-chevron-right white bullet-pq"></span> <span class="s-titular-sub"><?php echo $servicio->titulo; ?></span>
				</h1>
			</div>
		</div>
		<div class="row fondoBlanco">
			<div class="col-md-12 espaciado-a">
				<?php echo $servicio->descripcion ?>
			</div>
		</div>
		<div class="row espaciado-a">
			<div class="col-md-12">
				<h1 class="s-titular-2">
					Caso de éxito
				</h1>
			</div>
		</div>
		<div class="row espaciado-a">
			<div class="col-md-12">
				<?php if ($proyecto): ?>
					<a href="<?php echo site_url('site/proyectoM') . '/' . $proyecto->id;?>" class="link-celmedia">
						<div class="fondoNegro">
							<?php $rutaImg = base_url('assets/celmediachile/proyectos') . '/' . $proyecto->imagen; ?>
							<img src="<?php echo $rutaImg; ?>" alt="" class="img-responsive obj-centrar" />
							<h3 class="titulo-caso">
								<?php 
									if(strlen($proyecto->nombre) > 40){
										echo utf8_encode( substr( $proyecto->nombre, 0, 40)) . "...";
									}else{
										echo utf8_encode( $proyecto->nombre);
									}
								?>
							</h3>
							<h4 class="texto-caso">
								<?php 
									if(strlen($proyecto->descripcion) > 50){
										echo utf8_encode( substr( strip_tags($proyecto->descripcion), 0, 50)) . "...";
									}else{
										echo utf8_encode( strip_tags($proyecto->descripcion));
									}
								?>
							</h4>
						</div>
					</a>
				<?php else: ?>
					<span>No existe información de caso</span>
				<?php endif ?>
			</div>
		</div>
	<?php endif ?>

	<div class="row espaciado-top"></div>
</div>