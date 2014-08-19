<div class="container">
	<div class="row espaciado-top"></div>
	<div class="row espaciado-a">
		<div class="col-md-12">
			<h1 class="s-titular">
				Proyectos
			</h1>
		</div>
	</div>
	<div class="row espaciado-a">
		<div class="col-md-12">
			<a href="<?php echo site_url('site/index');?>" class="texto-gris"> &lt; Regresar</a>
		</div>
	</div>

	<?php if ($pagina == '0'): ?>

	<?php elseif ($pagina == '1'): ?>
		<div class="row espaciado-a">
			<div class="col-md-8">
				lala
			</div>
			<div class="col-md-4">
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
					<a href="<?php echo site_url('site/proyectos'); ?>" class="btn btn-slh">Ver todos los casos</a>
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
		<?php foreach ($noticias as $noticia): ?>
			<a href="<?php echo site_url('site/noticia') . '/' . $noticia['id'];?>" class="">
				<div class="col-md-4 text-center espaciado-a">
					<div class="container-fluid">
						<div class="row">
							<?php $rutaImg = base_url('assets/celmediachile/proyectos') . '/' . $proyecto['primagen_detalle']; ?>
							<img src="<?php echo $rutaImg; ?>" alt="" class="img-responsive obj-centrar" />							
						</div>
						<div class="row bg-cliente">
							<?php $rutaImgC = base_url('assets/celmediachile/clientes') . '/' . $proyecto['climagen'];	?>
							<div class="col-md-4">
								<img src="<?php echo $rutaImgC; ?>" alt="" class="img-responsive obj-centrar" />							
							</div>
							<div class="col-md-8 bg-titular-caso text-left">
								<h3 class="titulo-caso">
									<?php echo ( substr( $proyecto['prnombre'], 0, 14)) ;?>...
								</h3>
								<h4 class="texto-caso">
									<?php echo utf8_encode( substr( strip_tags($proyecto['prdescripcion']) , 0, 45)); ?> ...
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