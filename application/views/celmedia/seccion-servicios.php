<div class="container">
	<div class="row espaciado-top"></div>
	<div class="row espaciado-a">
		<div class="col-md-12">
			<h1 class="s-titular">
				Estratégia y desarrollo mobile
			</h1>
			<h3 class="s-subtitular">
				Las marcas no crean necesidades, solo deseos.<br/>
				Lo importante son las experiencias de nuestros usuarios.
			</h3>			
		</div>
	</div>
	<div class="row espaciado-a">
		<div class="col-md-4 col-md-offset-4 text-center">
			<div class="ballon-titular">
				<span class="txt-mayus">NUESTRAS ÁREAS DE SERVICIO</span>
			</div>
		</div>
	</div>
	<div class="row espaciado-a c-acceso-serv">
		<?php foreach ($servicios as $servicio): ?>
			<a href="<?php echo site_url('site/servicios') . '/' . $servicio['id'];?>" class="link-celmedia col-md-srv text-center" style="background-color: <?php echo $servicio['color']; ?>">
				<div class="v-center-contenedor">
          			<div class="v-center-contenido">
            			<?php $rutaImg = base_url('assets/celmediachile/servicios') . '/' . $servicio['icono']; ?>
						<br />
						<img src="<?php echo $rutaImg; ?>" class="img-responsive obj-centrar" />
						<br />
						<span class="titular-servicio">
							<?php echo $servicio['titulo']; ?>
						</span>
						<br />
             		</div>
             	</div>
             </a>
		<?php endforeach ?>
	</div>
	<div class="row espaciado-a">
		<div class="col-md-6 col-md-offset-3 text-center">
			<div class="ballon-titular">
				<span class="txt-mayus">NUESTRAS PLATAFORMAS Y HERRAMIENTAS</span>
			</div>
		</div>
	</div>

	<div class="row espaciado-a">
		<div class="col-md-1 col-sm-2 col-md-offset-1 col-sm-offset-1 col-xs-3 text-center">
			<div class="v-center-contenedor">
				<div class="v-center-contenido">
					<img src="<?php echo base_url('public/img/herramientas_sms.png'); ?>" alt="" class="img-responsive obj-centrar" />
					<span class="texto-rojo">SMS</span>
				</div>
			</div>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-3 text-center">
			<div class="v-center-contenedor">
				<div class="v-center-contenido">
					<img src="<?php echo base_url('public/img/herramientas_mms.png'); ?>" alt="" class="img-responsive obj-centrar" />
					<span class="texto-rojo">MMS</span>
				</div>
			</div>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-3 text-center">
			<div class="v-center-contenedor">
				<div class="v-center-contenido">
					<img src="<?php echo base_url('public/img/herramientas_web.png'); ?>" alt="" class="img-responsive obj-centrar" />
					<span class="texto-rojo">Web</span>
				</div>
			</div>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-3 text-center">
			<div class="v-center-contenedor">
				<div class="v-center-contenido">
					<img src="<?php echo base_url('public/img/herramientas_portalesmoviles.png'); ?>" alt="" class="img-responsive obj-centrar" />
					<span class="texto-rojo">Portales Móviles</span>
				</div>
			</div>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-3 text-center">
			<div class="v-center-contenedor">
				<div class="v-center-contenido">
					<img src="<?php echo base_url('public/img/herramientas_qr.png'); ?>" alt="" class="img-responsive obj-centrar" />
					<span class="texto-rojo">Scaneables</span>
				</div>
			</div>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-3 text-center">
			<div class="v-center-contenedor">
				<div class="v-center-contenido">
					<img src="<?php echo base_url('public/img/herramientas_app.png'); ?>" alt="" class="img-responsive obj-centrar" />
					<span class="texto-rojo">Apps</span>
				</div>
			</div>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-3 text-center">
			<div class="v-center-contenedor">
				<div class="v-center-contenido">
					<img src="<?php echo base_url('public/img/herramientas_ad.png'); ?>" alt="" class="img-responsive obj-centrar" />
					<span class="texto-rojo">Ad Server</span>
				</div>
			</div>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-3 text-center">
			<div class="v-center-contenedor">
				<div class="v-center-contenido">
					<img src="<?php echo base_url('public/img/herramientas_virtual.png'); ?>" alt="" class="img-responsive obj-centrar" />
					<span class="texto-rojo">Virtuales</span>
				</div>
			</div>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-3 text-center">
			<div class="v-center-contenedor">
				<div class="v-center-contenido">
					<img src="<?php echo base_url('public/img/herramientas_crm.png'); ?>" alt="" class="img-responsive obj-centrar" />
					<span class="texto-rojo">C.L.O.P.</span>
				</div>
			</div>
		</div>
		<div class="col-md-1 col-sm-2 col-xs-3 text-center">
			<div class="v-center-contenedor">
				<div class="v-center-contenido">
					<img src="<?php echo base_url('public/img/herramientas_text.png'); ?>" alt="" class="img-responsive obj-centrar" />
					<span class="texto-rojo">Text Center</span>
				</div>
			</div>
		</div>
	</div>
</div>