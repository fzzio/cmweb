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
					Proyectos
				</h1>
			</div>
		</div>
		<?php foreach ($proyectos as $proyecto): ?>
			<div class="row espaciado-a">
				<div class="col-md-12">
					<?php if ($proyecto): ?>
						<a href="<?php echo site_url('site/proyectoM') . '/' . $proyecto['id'];?>" class="link-celmedia">
							<div class="fondoNegro">
								<?php $rutaImg = base_url('assets/celmediachile/proyectos') . '/' . $proyecto['imagen']; ?>
								<img src="<?php echo $rutaImg; ?>" alt="" class="img-responsive obj-centrar" />
								<h3 class="titulo-caso">
									<?php 
										if(strlen($proyecto['nombre']) > 40){
											echo ( substr( $proyecto['nombre'], 0, 40)) . "...";
										}else{
											echo ( $proyecto['nombre']);
										}
									?>
								</h3>
								<h4 class="texto-caso">
									<?php 
										if(strlen($proyecto['descripcion']) > 50){
											echo utf8_encode( substr( strip_tags($proyecto['descripcion']), 0, 50)) . "...";
										}else{
											echo utf8_encode( strip_tags($proyecto['descripcion']));
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

		<?php endforeach ?>

	<?php else: ?>
		<div class="row">
			<div class="col-md-12 espaciado-titulo">
				<h1 class="s-titular">
					<a href="<?php echo site_url('site/proyectoM'); ?>" class="link-celmedia link-titular">Proyecto</a><span class="glyphicon glyphicon-chevron-right bullet-pq"></span> <span class="s-titular-sub"><?php echo $clienteCaso->nombre; ?></span>
				</h1>
			</div>
		</div>
		<div class="row fondoBlanco">
			<div class="col-md-12 espaciado-a">
				<h4 class="txt-normal">
					<?php echo $proyecto->nombre ?>					
				</h4>
			</div>
		</div>
		<div class="row fondoBlanco">
			<div class="col-md-12 espaciado-a">
				<?php if (count( $sliderProyecto ) > 0): ?>
					<div id="carousel-proyecto" class="carousel slide" data-ride="carousel">

						<div class="carousel-inner">
							<?php foreach ($sliderProyecto as $slide): ?>
								<?php $rutaImg = base_url('assets/celmediachile/sliderproyectos') . '/' . $slide['imagen']; ?>
								<div class="item <?php echo ( ($slide === reset($sliderProyecto)) ? 'active' : '' ) ; ?>">
									<img src="<?php echo $rutaImg; ?>" class="img-responsive obj-centrar"  alt=""/>
								</div>							
							<?php endforeach ?>
						</div>
						<?php if (count( $sliderProyecto ) > 1): ?>
							<a class="left carousel-control" href="#carousel-proyecto" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
							</a>
							<a class="right carousel-control" href="#carousel-proyecto" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
							</a>
						<?php endif ?>
					</div>
				<?php else: ?>
					<span>No hay imágenes asignadas</span>
				<?php endif ?>
			</div>
		</div>
		<div class="row fondoBlanco">
			<div class="col-md-12 espaciado-a">
				<span class="txt-negrita">Tags:</span>
				<?php foreach ($tags as $tag): ?>
					<span class="label lbl-tecnologias lbl-tecnologias-2"><?php echo $tag["descripcion"]; ?></span>	
				<?php endforeach ?>
			</div>
		</div>
		<div class="row fondoBlanco">
			<div class="col-md-12">
				<hr />
			</div>
		</div>
		<div class="row fondoBlanco">
			<div class="col-md-12 espaciado-a">
				<?php echo utf8_encode( $proyecto->descripcion ); ?>
			</div>
		</div>
	<?php endif ?>

	<div class="row espaciado-top"></div>
</div>