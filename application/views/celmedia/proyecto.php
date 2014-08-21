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
					<div class="col-md-2 " style="padding-right: 2px; width: 19.667%;">						
						<select class="form-control" name="spais">
							<option selected="selected" disabled="disabled"> Paises</option>
							<?php foreach ($paises as $pais): ?>						
								<option value="<?php echo $pais["id"] ?>"><?php echo $pais["nombre"] ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="col-md-2 " style="padding-left: 2px; padding-right: 2px; width: 19.667%;">
						<select class="form-control" name="ssector">
							<option selected="selected" disabled="disabled"> Sector</option>
							<?php foreach ($sectores as $sector): ?>						
								
								<option value="<?php echo $sector["id"] ?>"><?php echo $sector["nombre"] ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="col-md-2 " style="padding-left: 2px; padding-right: 2px; width: 19.667%;">
						<select class="form-control" name="sservicio">
							<option selected="selected" disabled="disabled"> Servicios</option>
							<?php foreach ($servicios as $servicio): ?>						
								<option value="<?php echo $servicio["id"] ?>"><?php echo $servicio["titulo"] ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="col-md-2 " style="padding-left: 2px; padding-right: 2px; width: 19.667%;">
						<select class="form-control" name="stags">
							<option selected="selected" disabled="disabled"> Tags</option>
							<?php foreach ($tags as $tag): ?>						
								<option value="<?php echo $tag["id"] ?>"><?php echo $tag["descripcion"] ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="col-md-2" style="padding-left: 2px; padding-right: 2px; width: 19.667%; ">
						<button type="submit" class="btn btn-primary" style="width: 103%;">Buscar</button>
					</div>
				</form>
			</div>
		</div>
	<?php elseif ($pagina == '1'): ?>
		<div class="row espaciado-a">
			<div class="col-md-8" style="width:70%"><!-- <br/><br/> -->
				<?php if (count( $sliderProyecto ) > 0): ?>

					<!-- Jssor Slider Begin -->
					    <!-- You can move inline styles to css file or css block. -->
					    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 800px;
					        height: 540px; overflow: hidden;">

					        <!-- Loading Screen -->
					        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
					            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
					                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
					            </div>
					            <div class="leyendo-slider">
					            </div>
					        </div>

					        <!-- Slides Container -->
					        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 800px; height: 540px; overflow: hidden;">
						        <div>

					                <img u="image" src="<?php echo base_url('public/img/img-slider/alila/01.jpg') ?>" />
					                <img u="thumb" src="<?php echo base_url('public/img/img-slider/alila/thumb-01.jpg') ?>" />
					            </div>
					            <div>
					                <img u="image" src="<?php echo base_url('public/img/img-slider/alila/02.jpg') ?>" />
					                <img u="thumb" src="<?php echo base_url('public/img/img-slider/alila/thumb-02.jpg') ?>" />
					            </div>
					            <div>
					                <img u="image" src="<?php echo base_url('public/img/img-slider/alila/02.jpg') ?>" />
					                <img u="thumb" src="<?php echo base_url('public/img/img-slider/alila/thumb-02.jpg') ?>" />
					            </div>
					            <div>
					                <img u="image" src="<?php echo base_url('public/img/img-slider/alila/03.jpg') ?>" />
					                <img u="thumb" src="<?php echo base_url('public/img/img-slider/alila/thumb-03.jpg') ?>" />
					            </div>
					        <?php foreach ($sliderProyecto as $slide): ?>
					            <div>
					            	<?php $rutaImg = base_url('assets/celmediachile/sliderproyectos') . '/' . $slide['imagen']; ?>
									<img  u="image" src="<?php echo $rutaImg; ?>" class="img-responsive obj-centrar"  height="356px !important;" alt=""/>  
					                <img u="thumb" src="<?php echo $rutaImg; ?>" height="78px;" width="auto" />
					            </div>
		    
					        <?php endforeach ?> 

							<!-- Arrow Navigator Skin Begin -->
						     
						        <!-- Arrow Left -->
						        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 158px; left: 8px;">
						        </span>
						        <!-- Arrow Right -->
						        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 158px; right: 8px">
						        </span>
						        <!-- Arrow Navigator Skin End -->
						        
						        <!-- Thumbnail Navigator Skin Begin -->
						        <div u="thumbnavigator" class="jssort01" style="position: absolute; width: 800px; height: 100px; left:0px; bottom: 0px; background:black">
						            <!-- Thumbnail Item Skin Begin -->
						           
						            <div u="slides" style="cursor: move;">
						                <div u="prototype" class="p" style="position: absolute; width: 72px; height: 72px; top: 0; left: 0;">
						                    <div class=w><thumbnailtemplate style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></thumbnailtemplate></div>
						                    <div class=c>
						                    </div>
						                </div>
						            </div>
						            <!-- Thumbnail Item Skin End -->
						        </div>
						        <!-- Thumbnail Navigator Skin End -->
						       
						    </div>

						    <!-- Jssor Slider End -->
						 </div>

				
				<?php else: ?>
					<img src="<?php echo base_url('public/img/Imagen_ReferencialCasosDetalle.jpg') ?>" class="img-responsive obj-centrar" alt="" />
				<?php endif ?>
			</div>
			<div class="col-md-4  fondoRosa" style="width:30%">
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
								<strong>Servicio:</strong><br/> <?php echo $servicio->titulo; ?>
							</h3>
						</div>
					</div>
					<div class="row">
						<div class="row">
							<div class="col-md-12">
								<div class="proyecto-parrafo">
									<?php echo utf8_encode($proyecto->descripcion); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 fondoPlomo" >
								<?php $rutaImg = base_url('assets/celmediachile/clientes') . '/' . $clienteCaso->imagenhover; ?>
								<img src="<?php echo $rutaImg; ?>" class="img-responsive obj-centrar" alt="">
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		
		<div class="row espaciado-a">
			<div class="col-md-12 barra-tags">
				<span class="label lbl-tecnologias" style="color:black">Tags: </span>
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
						<div class="row hover-noticias">
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