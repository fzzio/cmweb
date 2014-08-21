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
					Noticias
				</h1>
				<h3 class="s-subtitular">
					Tendencias en un mundo cada día más Móvil.
				</h3>
			</div>
		</div>
		<div class="row espaciado-a row-sinborde">
			<?php foreach ($noticias as $noticia): ?>
				<a href="<?php echo site_url('site/noticiaT') . '/' . $noticia['id'];?>" class="">
					<div class="col-md-6 col-sm-6 col-xs-6 text-center espaciado-a">
						<div class="container-fluid">
							<div class="row fondoConchevino">
								<div class="col-md-12 espaciado-a text-left">
									<span class="texto-blanco">
										<?php echo $noticia["fecha"] ?>
									</span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 text-left row-sinborde">
									<h4 class="titulo-noticia">
										<?php
											if(strlen($noticia['titulo']) > 40){
												echo ( substr( $noticia['titulo'], 0, 45)) . "...";
											}else{
												echo ( $noticia['titulo']);
											}
										?>
									</h4>
								</div>
							</div>					
							<div class="row ">
								<?php $rutaImg = base_url('assets/celmediachile/noticias') . '/' . $noticia['imagen']; ?>
								<img src="<?php echo $rutaImg; ?>" alt="" class="img-responsive obj-centrar img-completo-x" />								
							</div>
							<div class="row espaciado-a">
								<div class="col-md-12 bg-titular-noticia text-left row-sinborde">
									<span class="texto-noticia">
										<?php echo utf8_encode( substr( strip_tags($noticia['descripcion']) , 0, 105)); ?> ...
									</span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 row-sinborde pull-right">
									<p class="link-leer-mas"><strong>Leer m&aacute;s </strong><img class="ajustar-boton" width="15" height="15" alt="" src="<?php echo base_url('public/img/flecha-scroll_arrowblack3.png') ?>"/></p>
								</div>
							</div>
						</div>
					</div>
				</a>
			<?php endforeach ?>
		</div>
	<?php else: ?>
		<div class="row espaciado-a">
			<div class="col-md-12">
				<h1 class="titulo-noticia-principal">
					<?php echo( $noticia->titulo ); ?>
				</h1><br/>
				<div class="container-fluid">
					<div class="row fondoConchevino">
						<div class="col-md-12 espaciado-a text-left">
							<span class="texto-blanco">
								<?php echo $noticia->fecha ?>
							</span>
						</div>
					</div>
					<div class="row fondoCrema">
						<div class="col-md-12 text-left">
							<h3 class="titulo-noticia">
								<?php echo( $noticia->subtitulo ); ?>
							</h3>
						</div>
					</div>
					<div class="row fondoCrema">
						<?php $rutaImg = base_url('assets/celmediachile/noticias') . '/' . $noticia->imagen_detalle; ?>
						<div class="col-md-12">
							<br />
							<img src="<?php echo $rutaImg; ?>" alt="" class="img-responsive obj-centrar img-completo-x" />
							<br />
						</div>
					</div>
					<div class="row fondoCrema">
						<div class="col-md-12 bg-titular-noticia text-left">
							<div class="texto-noticia-descripcion">
								<?php echo utf8_encode( $noticia->descripcion ); ?>
							</div>
						</div>
					</div>
					<div class="row espaciado-a fondoPlomo">
						<div class="col-md-12 barra-tags">
							<span class="label lbl-tecnologias" style="color:black">Tags: </span>
							<?php foreach ($tags as $tag): ?>
								<span class="label lbl-tecnologias lbl-tecnologias-2"><?php echo $tag["descripcion"]; ?></span>	
							<?php endforeach ?>
						</div>
					</div>

				</div>

			</div>
		</div>

		<div class="row espaciado-a">
			<div class="col-md-12">
				<h1 class="s-subtitular">
					Otras Noticias
				</h1>
			</div>
		</div>
		<div class="row espaciado-a">
			<?php foreach ($noticias as $noticia): ?>
				<a href="<?php echo site_url('site/noticiaT') . '/' . $noticia['id'];?>" class="">
					<div class="col-md-6 col-sm-6 col-xs-6 text-center espaciado-a">
						<div class="container-fluid">
							<div class="row fondoConchevino">
								<div class="col-md-12 espaciado-a text-left">
									<span class="texto-blanco">
										<?php echo $noticia["fecha"] ?>
									</span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 text-left row-sinborde">
									<h4 class="titulo-noticia">
										<?php
											if(strlen($noticia['titulo']) > 40){
												echo utf8_encode( substr( $noticia['titulo'], 0, 45)) . "...";
											}else{
												echo utf8_encode( $noticia['titulo']);
											}
										?>
									</h4>
								</div>
							</div>					
							<div class="row ">
								<?php $rutaImg = base_url('assets/celmediachile/noticias') . '/' . $noticia['imagen']; ?>
								<img src="<?php echo $rutaImg; ?>" alt="" class="img-responsive obj-centrar" />								
							</div>
							<div class="row espaciado-a">
								<div class="col-md-12 bg-titular-noticia text-left row-sinborde">
									<span class="texto-noticia">
										<?php echo utf8_encode( substr( strip_tags($noticia['descripcion']) , 0, 105)); ?> ...
									</span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 row-sinborde pull-right">
									<p class="link-leer-mas"><strong>Leer m&aacute;s </strong><img class="ajustar-boton" width="15" height="15" alt="" src="<?php echo base_url('public/img/flecha-scroll_arrowblack3.png') ?>"/></p>
								</div>
							</div>
						</div>
					</div>
				</a>
			<?php endforeach ?>
		</div>

	<?php endif ?>

	<div class="row espaciado-top"></div>
</div>