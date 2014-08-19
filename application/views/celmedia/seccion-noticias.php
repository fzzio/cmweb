<div class="container">
	<div class="row espaciado-top"></div>
	<div class="row espaciado-a">
		<div class="col-md-12">
			<h1 class="s-titular">
				Noticias
			</h1>
			<h3 class="s-subtitular">
				Tendencias en un mundo cada día más Móvil.
			</h3>		
		</div>
	</div>
	<div class="row espaciado-a">
		<?php foreach ($noticias as $noticia): ?>
			<a href="<?php echo site_url('site/noticia') . '/' . $noticia['id'];?>" class="">
				<div class="col-md-4 text-center espaciado-a">
					<div class="container-fluid">
						<div class="row fondoConchevino">
							<div class="col-md-12 espaciado-a text-left">
								<span class="texto-blanco">
									<?php echo $noticia["fecha"] ?>
								</span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 text-left">
								<h3 class="titulo-noticia">
									<?php
										if(strlen($noticia['titulo']) > 40){
											echo utf8_encode( substr( $noticia['titulo'], 0, 40)) . "...";
										}else{
											echo utf8_encode( $noticia['titulo']);
										}
									?>
								</h3>
							</div>
						</div>					
						<div class="row">
							<?php $rutaImg = base_url('assets/celmediachile/noticias') . '/' . $noticia['imagen']; ?>
							<div class="col-md-12">
								<img src="<?php echo $rutaImg; ?>" alt="" class="img-responsive obj-centrar" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 bg-titular-noticia text-left">
								<h4 class="texto-noticia">
									<?php echo utf8_encode( substr( strip_tags($noticia['descripcion']) , 0, 55)); ?> ...
								</h4>
							</div>
						</div>
					</div>
				</div>
			</a>
		<?php endforeach ?>
	</div>
	<div class="row espaciado-a">
		<div class="col-md-4 col-md-offset-8 col-sm-5 col-sm-offset-7 text-center page-scroll">
			<a href="<?php echo site_url('site/noticia'); ?>" class="btn btn-slh">Ver todas las noticias</a>
		</div>
	</div>
	<div class="row espaciado-a">&nbsp;</div>
</div>