<?php
    $is_home = ($this->router->fetch_class() === 'site' && $this->router->fetch_method() === 'index') ? true : false;
    $paginaActual = $this->router->fetch_method();
?>
<div class="container">
	<div class="row espaciado-top"></div>
	<div class="row espaciado-a">
		<div class="col-md-12">
			<h1 class="s-titular">
				Proyectos
			</h1>
		</div>
	</div>
	

	<?php if (!$this->uri->segment(3)): ?>

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
						<button type="submit" class="btn btn-primary boton-buscar" style="width: 103%;">Buscar</button>
					</div>
				</form>
			</div>
		</div>
	<?php else: ?>
		<div class="row espaciado-a">
			<div class="col-md-8 row-sinborde" style="width:70%;"><!-- <br/><br/> -->
				<?php if (count( $sliderProyecto ) > 0): ?>

					<!-- Jssor Slider Begin -->
					    <!-- You can move inline styles to css file or css block. -->
					    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 800px;
					        height: 585px; overflow: hidden;">

					        <!-- Loading Screen -->
					        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
					            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
					                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
					            </div>
					            <div class="leyendo-slider">
					            </div>
					        </div>

					        <!-- Slides Container -->
					        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 800px; height: 585px; overflow: hidden;">
					        <?php foreach ($sliderProyecto as $slide): ?>
					            <div>
					            	<?php $rutaImg = base_url('assets/celmediachile/sliderproyectos') . '/' . $slide['imagen']; ?>
<<<<<<< HEAD

									<img  u="image" src="<?php echo $rutaImg; ?>" class="img-responsive obj-centrar"  alt=""/>  
=======
									<img  u="image" src="<?php echo $rutaImg; ?>" class="img-responsive obj-centrar" style="height: auto !important; " alt=""/>  
>>>>>>> 8ebb0ea1abda01fef067ecf0639a886712024666
					                <img u="thumb" src="<?php echo $rutaImg; ?>" height="78px;" width="auto" />
					            </div>
		    
					        <?php endforeach ?> 

							<!-- Arrow Navigator Skin Begin -->
						     
						        <!-- Arrow Left -->
						        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 230px; left: 8px;">
						        </span>
						        <!-- Arrow Right -->
						        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 230px; right: 8px">
						        </span>
						        <!-- Arrow Navigator Skin End -->
						        
						        <!-- Thumbnail Navigator Skin Begin -->
						        <div u="thumbnavigator" class="jssort01" style="position: absolute; width: 800px; height: 100px; left:0px; bottom: 0px; background:black">
						            <!-- Thumbnail Item Skin Begin -->
						           
						            <div u="slides" style="cursor: move;">
						                <div u="prototype" class="p" style="position: absolute; width: 72px; height: 72px; top: 0; left: 0;">
						                    <div class="w">
						                    	<thumbnailtemplate style=" width: 100%; height: 100%; border: none; position:absolute; top: 0; left: 0;"></thumbnailtemplate>
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
					<img src="<?php echo base_url('public/img/Imagen_ReferencialCasosDetalle.jpg') ?>" class="img-responsive obj-centrar img-w" style="height: 585px;" alt="" />
				<?php endif ?>
			</div>
			<div class="col-md-4  fondoRosa row-sinborde" style="width:30%">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<?php if(strlen($proyecto->nombre)>=15){ ?>
								<h1 class="s-titular-3">
									<?php echo $proyecto->nombre; ?>
								</h1>
							<?php }else{ ?>
								<h1 class="s-titular-3" style="min-height: 45px;">
									<?php echo $proyecto->nombre; ?>
								</h1>
							<?php } ?>
							
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
						<div class="col-md-12">
							<?php if(strlen($proyecto->nombre)>=15){ ?>
								<div class="proyecto-parrafo">
									<?php echo utf8_encode($proyecto->descripcion); ?>
								</div>
							<?php }else{ ?>
								<div class="proyecto-parrafo" style="height: 370px;">
									<?php echo utf8_encode($proyecto->descripcion); ?>
								</div>
							<?php } ?>
							
						</div>				
					</div>
					
					<div class="row">
						<div class="col-md-12 fondoPlomo" >
							<?php $rutaImg = base_url('assets/celmediachile/clientes') . '/' . $clienteCaso->imagenhover; ?>
							<img src="<?php echo $rutaImg; ?>" class="img-responsive obj-centrar" alt="" style="width:85px; height:80px;">
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
					<a href="<?php echo site_url('site/proyecto'); ?>" class="btn btn-slh link-home">Ver a todos los proyectos</a>
				</div>
			</div>
			<div class="row espaciado-a">
				<div class="col-md-12" style="padding-left:0px;">
					<h1 class="s-titular">
						Otros proyectos
					</h1>			
				</div>
			</div>
		</div>
	<?php endif ?>
</div>

<div class="container">
	<div class="row espaciado-a">
		<?php if (count($proyectos) == 0 ): ?>
			<div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 text-center">
				<br /><br /><br /><br /><br />
				<img src="<?php echo base_url('public/img/icono_busqueda.png') ?>" alt="" class="img-responsive obj-centrar" />	
				<h1 class="titular-error">¡Lo sentimos!</h1>
				<h3 class="subtitular-error">No encontramos lo que estabas buscando</h3>
				<br /><br /><br /><br /><br />
			</div>
		<?php endif ?>
		<?php foreach ($proyectos as $proyecto): ?>
			<a href="<?php echo site_url('site/proyecto') . '/' . $proyecto['prid'];?>" class="">
				<div class="col-md-4 text-center espaciado-a">
					<div class="container-fluid">
						<div class="row hover-noticias">
							<?php $rutaImg = base_url('assets/celmediachile/proyectos') . '/' . $proyecto['primagen']; ?>
							<img src="<?php echo $rutaImg; ?>" alt="" class="img-responsive obj-centrar img-w" />							
						</div>
						<div class="row bg-cliente">
							<?php $rutaImgC = base_url('assets/celmediachile/clientes') . '/' . $proyecto['climagenhover'];	?>
							<div class="col-md-4">
								<img src="<?php echo $rutaImgC; ?>" alt="" class="img-responsive espaciado-b" />							
							</div>
							<div class="col-md-8 bg-titular-caso text-left">
								<h3 class="titulo-caso">
									<?php
										if(strlen($proyecto['prnombre']) > 20){
											echo ( substr( strip_tags($proyecto['prnombre']) , 0, 20) . "..." );
										}else{
											echo (  strip_tags($proyecto['prnombre']) );
										}
									?>

								</h3>
								<h4 class="texto-caso">
									<?php
										if(strlen($proyecto['prdescripcion']) > 55){
											echo ( substr( strip_tags($proyecto['prdescripcion']) , 0, 55) . "..." );
										}else{
											echo (  strip_tags($proyecto['prdescripcion']) );
										}
									?>
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