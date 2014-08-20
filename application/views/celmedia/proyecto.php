<div class="container">
	<div class="row espaciado-top"></div>
	<div class="row espaciado-a">
		<div class="col-md-12">
			<h1 class="s-titular">
				Proyectos
			</h1>
		</div>
	</div>
	

	<?php if ($pagina == '0'): ?>

		<div class="row espaciado-a">
			
				<form method="post" accept-charset="utf-8" action=""  class="form-horizontal" >
					<span class="help-block"><?php echo validation_errors(); ?></span>
					<div class="col-md-2 col-md-offset-1" style="padding-left: 2px; padding-right: 2px;">						
						<select class="form-control" name="spais">
							<option selected="selected" disabled="disabled"> Paises</option>
							<?php foreach ($paises as $pais): ?>						
								<option value="<?php echo $pais["id"] ?>"><?php echo $pais["nombre"] ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="col-md-2 " style="padding-left: 2px; padding-right: 2px;">
						<select class="form-control" name="ssector">
							<option selected="selected" disabled="disabled"> Sector</option>
							<?php foreach ($sectores as $sector): ?>						
								
								<option value="<?php echo $sector["id"] ?>"><?php echo $sector["nombre"] ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="col-md-2 " style="padding-left: 2px; padding-right: 2px;">
						<select class="form-control" name="sservicio">
							<option selected="selected" disabled="disabled"> Servicios</option>
							<?php foreach ($servicios as $servicio): ?>						
								<option value="<?php echo $servicio["id"] ?>"><?php echo $servicio["titulo"] ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="col-md-2 " style="padding-left: 2px; padding-right: 2px;">
						<select class="form-control" name="stags">
							<option selected="selected" disabled="disabled"> Tags</option>
							<?php foreach ($tags as $tag): ?>						
								<option value="<?php echo $tag["id"] ?>"><?php echo $tag["descripcion"] ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="col-md-2" style="padding-left: 2px; padding-right: 2px;">
						<button type="submit" class="btn btn-primary">Buscar</button>
					</div>
				</form>
			</div>
		</div>
	<?php elseif ($pagina == '1'): ?>
		<div class="row espaciado-a">
			<div class="col-md-8">
				<?php if (count( $sliderProyecto ) > 0): ?>
				<div id="carousel-proyectos" class="carousel slide" data-ride="carousel">

					<ol class="carousel-indicators">
						<?php $i=0; ?>
						<?php foreach ($sliderProyecto as $slide): ?>
							<li data-target="#carousel-proyectos" data-slide-to="<?php echo $i; ?>" class="<?php echo ( ($slide === reset($sliderProyecto)) ? 'active' : '' ) ; ?>"></li>	
							<?php $i= $i++; ?>
						<?php endforeach ?>
					</ol>

					<div class="carousel-inner">
						<?php foreach ($sliderProyecto as $slide): ?>
							<div class="item <?php echo ( ($slide === reset($sliderProyecto)) ? 'active' : '' ) ; ?>">
								<?php $rutaImg = base_url('assets/celmediachile/sliderproyectos') . '/' . $slide['imagen']; ?>
								<img src="<?php echo $rutaImg; ?>" class="img-responsive obj-centrar" alt="">
							</div>
						<?php endforeach ?>
					</div>
				
					<a class="left carousel-control" href="#carousel-proyectos" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel-proyectos" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
				<?php endif ?>
			</div>
			<div class="col-md-4 fondoRosa">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<h1 class="s-titular-3">
								<?php echo $proyecto->nombre; ?>
							</h1>
						</div>
					</div>
					<div class="row fondoPlomo">
						<div class="col-md-12">
							<h3 class="s-subtitular-3">
								Servicio: <strong><?php echo $servicio->titulo; ?></strong>
							</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="servicio-parrafo">
								<?php echo $proyecto->descripcion; ?>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="row espaciado-a">
			<div class="col-md-8">
				
			</div>
			<div class="col-md-4 fondoRosa">
				<?php $rutaImg = base_url('assets/celmediachile/clientes') . '/' . $clienteCaso->imagenhover; ?>
				<img src="<?php echo $rutaImg; ?>" class="img-responsive obj-centrar" alt="">
			</div>
		</div>
		<div class="row espaciado-a">
			<div class="col-md-12 barra-tags">
				<span class="label lbl-tecnologias">Tags: </span>
				<?php foreach ($tags as $tag): ?>
					<span class="label lbl-tecnologias lbl-tecnologias-2"><?php echo $tag["descripcion"]; ?></span>	
				<?php endforeach ?>
			</div>
		</div>
		
		<div class="container">
			<div class="row espaciado-a">
				<div class="col-md-4 col-md-offset-8 col-sm-5 col-sm-offset-7 text-center page-scroll">
					<a href="<?php echo site_url('site/proyecto'); ?>" class="btn btn-slh">Ver todos los casos</a>
				</div>
			</div>
			<div class="row espaciado-a">
				<div class="col-md-12">
					<h1 class="s-titular">
						Otros casos
					</h1>			
				</div>
			</div>
		</div>
	<?php endif ?>
</div>

<div class="container">
	<div class="row espaciado-a">
		<?php foreach ($proyectos as $proyecto): ?>
			<a href="<?php echo site_url('site/proyecto') . '/' . $proyecto['prid'];?>" class="">
				<div class="col-md-4 text-center espaciado-a">
					<div class="container-fluid">
						<div class="row">
							<?php $rutaImg = base_url('assets/celmediachile/proyectos') . '/' . $proyecto['primagen_detalle']; ?>
							<img src="<?php echo $rutaImg; ?>" alt="" class="img-responsive obj-centrar" />							
						</div>
						<div class="row bg-cliente">
							<?php $rutaImgC = base_url('assets/celmediachile/clientes') . '/' . $proyecto['climagenhover'];	?>
							<div class="col-md-4">
								<img src="<?php echo $rutaImgC; ?>" alt="" class="img-responsive espaciado-b" />							
							</div>
							<div class="col-md-8 bg-titular-caso text-left">
								<h3 class="titulo-caso">
									<?php echo ( substr( $proyecto['prnombre'], 0, 20)) ;?>...
								</h3>
								<h4 class="texto-caso">
									<?php echo utf8_encode( substr( strip_tags($proyecto['prdescripcion']) , 0, 61)); ?> ...
								</h4>
							</div>
						</div>
					</div>
				</div>
			</a>
		<?php endforeach ?>
	</div>
	<div class="row espaciado-a">&nbsp;</div>
</div>