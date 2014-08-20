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