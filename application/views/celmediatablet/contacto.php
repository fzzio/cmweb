<?php
    $is_home = ($this->router->fetch_class() === 'site' && $this->router->fetch_method() === 'index') ? true : false;
    $paginaActual = $this->router->fetch_method();
?>
<div class="container">
	<div class="row espaciado-top"></div>
	
	<div class="row espaciado-a">
		<div class="col-md-12">
			<h1 class="s-titular">
				Contáctanos
			</h1>
			<h3 class="s-subtitular">
				Las marcas no crean necesidades, solo deseos.<br/>
				Lo importante son las experiencias de nuestros usuarios.
			</h3>
		</div>
	</div>
	
	<div class="row espaciado-a">
		<div class="col-md-6 col-sm-6 col-xs-6">
			<select class="btn-slh form-control" name="spais" onchange="mostrarPaises(this)">
				<option class="txt-negrita" value="">Seleccione un país</option>
				<?php foreach ($paises as $pais): ?>
					<option class="txt-negrita" value="<?php echo $pais["id"] ?>"><?php echo $pais["nombre"] ?></option>
				<?php endforeach ?>
			</select>
		</div>
	</div>

	<div class="row espaciado-a contenedor-formulario" id="contacto-chile">
		<div class="col-md-6 col-sm-6 col-xs-6">
			<br/><br/><h4><strong>CHILE - CASA CENTRAL</strong></h4><br/><br/>
  			<ul class="media-list">
                <li class="media">
                    <div class="pull-left">
                        <img id="u54741_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_direccion.png'); ?>">
                    </div>
                    <div class="media-body">
                        Barros Errázuriz N° 1960, piso 4° Providencia<br/>
                        Santiago, Chile
                    </div>
                </li>
                <li class="media">
                    <div class="pull-left">
                        <img id="u54745_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_telefonos.png'); ?>">
                    </div>
                    <div class="media-body">
                        Tel: + 56 2 2585 8777<br/>
                        Fax: +56 2 2223 1276<br/>
                    </div>
                </li>
            </ul>

		</div>
		<div class="col-md-6 col-sm-6 col-xs-6">
			<form method="post" class="form-horizontal formulario-contacto" role="form"  >
				<div class="row">
					<div class="col-md-6 form-group">
						<span class="help-block"><?php echo form_error('nombreC'); ?></span>
						<input type="text" class="form-control" name="nombreC" id="nombreC" placeholder="Nombre">
						<span class="help-block"><?php echo form_error('empresaC'); ?></span>
						<input type="text" class="form-control" name="empresaC" id="empresaC" placeholder="Empresa">
						<span class="help-block"><?php echo form_error('asuntoC'); ?></span>
						<input type="text" class="form-control" name="asuntoC" id="asuntoC" placeholder="Asunto">
					</div>
					<div class="col-md-6 form-group" style=" margin-right: -16px;">
						<span class="help-block"><?php echo form_error('telefonoC'); ?></span>
						<input type="text" class="form-control" name="telefonoC" id="telefonoC" placeholder="Tel&eacute;fono">
						<span class="help-block"><?php echo form_error('emailC'); ?></span>
						<input type="email" class="form-control" name="emailC"  id="emailC"  placeholder="Email">
						<span class="help-block"><?php echo form_error('mensajeC'); ?></span>
						<textarea class="form-control" name="mensajeC" id="mensajeC" placeholder="Comentario" rows="2"></textarea>
						<br/><button type="submit" class="btn btn-slh"  >Enviar</button>
					</div>
				</div>
			   	<input type="hidden" name="tipo" id="tipo" value="1">
			</form>
		</div>
	</div>

	<div class="row espaciado-a contenedor-formulario" id="contacto-argentina" style="display: none;">
		<div class="col-md-6 col-sm-6 col-xs-6">
			<br/><br/><h4><strong>ARGENTINA</strong></h4><br/><br/>
  			<ul class="media-list">
                <li class="media">
                    <div class="pull-left">
                        <img id="u54741_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_direccion.png'); ?>">
                    </div>
                    <div class="media-body">
                        Reconquista 336, piso 11, depto. “X” (C1003ABH)<br/>
                        Ciudad Autónoma de Buenos Aires - Argentina
                    </div>
                </li>
                <li class="media">
                    <div class="pull-left">
                        <img id="u54745_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_telefonos.png'); ?>">
                    </div>
                    <div class="media-body">
                        Tel: +54 9 11 5514 8608<br/>
                    </div>
                </li>
            </ul>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-6">
			<form method="post" class="form-horizontal formulario-contacto" role="form"  >
				<div class="row">
					<div class="col-md-6 form-group">
						<span class="help-block"><?php echo form_error('nombreC'); ?></span>
						<input type="text" class="form-control" name="nombreC" id="nombreC" placeholder="Nombre">
						<span class="help-block"><?php echo form_error('empresaC'); ?></span>
						<input type="text" class="form-control" name="empresaC" id="empresaC" placeholder="Empresa">
						<span class="help-block"><?php echo form_error('asuntoC'); ?></span>
						<input type="text" class="form-control" name="asuntoC" id="asuntoC" placeholder="Asunto">
					</div>
					<div class="col-md-6 form-group" style=" margin-right: -16px;">
						<span class="help-block"><?php echo form_error('telefonoC'); ?></span>
						<input type="text" class="form-control" name="telefonoC" id="telefonoC" placeholder="Tel&eacute;fono">
						<span class="help-block"><?php echo form_error('emailC'); ?></span>
						<input type="email" class="form-control" name="emailC"  id="emailC"  placeholder="Email">
						<span class="help-block"><?php echo form_error('mensajeC'); ?></span>
						<textarea class="form-control" name="mensajeC" id="mensajeC" placeholder="Comentario" rows="2"></textarea>
						<br/><button type="submit" class="btn btn-slh"  >Enviar</button>
					</div>
				</div>
			   	<input type="hidden" name="tipo" id="tipo" value="1">
			</form>
		</div>
	</div>

	<div class="row espaciado-a contenedor-formulario" id="contacto-peru" style="display: none;">
		<div class="col-md-6 col-sm-6 col-xs-6">
			<br/><br/><h4><strong>PER&Uacute;</strong></h4><br/><br/>
  			<ul class="media-list">
                <li class="media">
                    <div class="pull-left">
                        <img id="u54741_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_direccion.png'); ?>">
                    </div>
                    <div class="media-body">
                        Victor Andrés Belaúnde 147, vía principal 150<br/>
                        Edificio Real Seis - piso6 <br/>
                        Lima 27- Perú<br/>
                    </div>
                </li>
                <li class="media">
                    <div class="pull-left">
                        <img id="u54745_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_telefonos.png'); ?>">
                    </div>
                    <div class="media-body">
                        Fax: +511 211 2526<br/>
                    </div>
                </li>
            </ul>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-6">
			<form method="post" class="form-horizontal formulario-contacto" role="form"  >
				<div class="row">
					<div class="col-md-6 form-group">
						<span class="help-block"><?php echo form_error('nombreC'); ?></span>
						<input type="text" class="form-control" name="nombreC" id="nombreC" placeholder="Nombre">
						<span class="help-block"><?php echo form_error('empresaC'); ?></span>
						<input type="text" class="form-control" name="empresaC" id="empresaC" placeholder="Empresa">
						<span class="help-block"><?php echo form_error('asuntoC'); ?></span>
						<input type="text" class="form-control" name="asuntoC" id="asuntoC" placeholder="Asunto">
					</div>
					<div class="col-md-6 form-group" style=" margin-right: -16px;">
						<span class="help-block"><?php echo form_error('telefonoC'); ?></span>
						<input type="text" class="form-control" name="telefonoC" id="telefonoC" placeholder="Tel&eacute;fono">
						<span class="help-block"><?php echo form_error('emailC'); ?></span>
						<input type="email" class="form-control" name="emailC"  id="emailC"  placeholder="Email">
						<span class="help-block"><?php echo form_error('mensajeC'); ?></span>
						<textarea class="form-control" name="mensajeC" id="mensajeC" placeholder="Comentario" rows="2"></textarea>
						<br/><button type="submit" class="btn btn-slh"  >Enviar</button>
					</div>
				</div>
			   	<input type="hidden" name="tipo" id="tipo" value="1">
			</form>
		</div>
	</div>

	<div class="row espaciado-a contenedor-formulario" id="contacto-colombia" style="display: none;">
		<div class="col-md-6 col-sm-6 col-xs-6">
			<br/><br/><h4><strong>COLOMBIA</strong></h4><br/><br/>
  			<ul class="media-list">
                <li class="media">
                    <div class="pull-left">
                        <img id="u54741_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_direccion.png'); ?>">
                    </div>
                    <div class="media-body">
                        Celmedia MKT S.A.<br/>
                        Cra 11b # 98-08 of 304<br/>
                        Bogotá - Colombia<br/>
                    </div>
                </li>
                <li class="media">
                    <div class="pull-left">
                        <img id="u54745_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_telefonos.png'); ?>">
                    </div>
                    <div class="media-body">
                        Tel: +571 6431002<br/>
                        Tel: +54 9 11 5514 8608<br/>
                    </div>
                </li>
            </ul>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-6">
			<form method="post" class="form-horizontal formulario-contacto" role="form"  >
				<div class="row">
					<div class="col-md-6 form-group">
						<span class="help-block"><?php echo form_error('nombreC'); ?></span>
						<input type="text" class="form-control" name="nombreC" id="nombreC" placeholder="Nombre">
						<span class="help-block"><?php echo form_error('empresaC'); ?></span>
						<input type="text" class="form-control" name="empresaC" id="empresaC" placeholder="Empresa">
						<span class="help-block"><?php echo form_error('asuntoC'); ?></span>
						<input type="text" class="form-control" name="asuntoC" id="asuntoC" placeholder="Asunto">
					</div>
					<div class="col-md-6 form-group" style=" margin-right: -16px;">
						<span class="help-block"><?php echo form_error('telefonoC'); ?></span>
						<input type="text" class="form-control" name="telefonoC" id="telefonoC" placeholder="Tel&eacute;fono">
						<span class="help-block"><?php echo form_error('emailC'); ?></span>
						<input type="email" class="form-control" name="emailC"  id="emailC"  placeholder="Email">
						<span class="help-block"><?php echo form_error('mensajeC'); ?></span>
						<textarea class="form-control" name="mensajeC" id="mensajeC" placeholder="Comentario" rows="2"></textarea>
						<br/><button type="submit" class="btn btn-slh"  >Enviar</button>
					</div>
				</div>
			   	<input type="hidden" name="tipo" id="tipo" value="1">
			</form>
		</div>
	</div>

	<div class="row espaciado-a contenedor-formulario" id="contacto-ecuador" style="display: none;">
		<div class="col-md-6 col-sm-6 col-xs-6">
			<br/><br/><h4><strong>ECUADOR</strong></h4><br/><br/>
  			 <ul class="media-list">
                <li class="media">
                    <div class="pull-left">
                        <img id="u54741_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_direccion.png'); ?>">
                    </div>
                    <div class="media-body">
                        Av. Rodrigo Chávez y Av. Juan Tanca Marengo s # 3 y 4<br/> 
                        Edificio Grafehi Piso 2 Guayaquil - Ecuador<br/>
                    </div>
                </li>
                <li class="media">
                    <div class="pull-left">
                        <img id="u54745_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_telefonos.png'); ?>">
                    </div>
                    <div class="media-body">
                        Tel: (+5934) 5019091<br/>
                    </div>
                </li>

                <li class="media">
                    <div class="pull-left">
                        <img id="u54741_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_direccion.png'); ?>">
                    </div>
                    <div class="media-body">
                        Atahualpa 955 y Av. República Ed. Digicom 5to. piso<br/>
                        Quito - Ecuador<br/>
                    </div>
                </li>
                <li class="media">
                    <div class="pull-left">
                        <img id="u54745_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_telefonos.png'); ?>">
                    </div>
                    <div class="media-body">
                        Tel:  +593 2 2460284<br/>
                        +593 2 2460285<br/>
                        Fax: +593 2 2460284<br/>
                    </div>
                </li>
            </ul>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-6">
			<form method="post" class="form-horizontal formulario-contacto" role="form"  >
				<div class="row">
					<div class="col-md-6 form-group">
						<span class="help-block"><?php echo form_error('nombreC'); ?></span>
						<input type="text" class="form-control" name="nombreC" id="nombreC" placeholder="Nombre">
						<span class="help-block"><?php echo form_error('empresaC'); ?></span>
						<input type="text" class="form-control" name="empresaC" id="empresaC" placeholder="Empresa">
						<span class="help-block"><?php echo form_error('asuntoC'); ?></span>
						<input type="text" class="form-control" name="asuntoC" id="asuntoC" placeholder="Asunto">
					</div>
					<div class="col-md-6 form-group" style=" margin-right: -16px;">
						<span class="help-block"><?php echo form_error('telefonoC'); ?></span>
						<input type="text" class="form-control" name="telefonoC" id="telefonoC" placeholder="Tel&eacute;fono">
						<span class="help-block"><?php echo form_error('emailC'); ?></span>
						<input type="email" class="form-control" name="emailC"  id="emailC"  placeholder="Email">
						<span class="help-block"><?php echo form_error('mensajeC'); ?></span>
						<textarea class="form-control" name="mensajeC" id="mensajeC" placeholder="Comentario" rows="2"></textarea>
						<br/><button type="submit" class="btn btn-slh"  >Enviar</button>
					</div>
				</div>
			   	<input type="hidden" name="tipo" id="tipo" value="1">
			</form>
		</div>
	</div>

	<div class="row espaciado-a contenedor-formulario" id="contacto-mexico" style="display: none;">
		<div class="col-md-6 col-sm-6 col-xs-6">
			<br/><br/><h4><strong>M&Eacute;XICO</strong></h4><br/><br/>
  			<ul class="media-list">
                <li class="media">
                    <div class="pull-left">
                        <img id="u54741_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_direccion.png'); ?>">
                    </div>
                    <div class="media-body">
                        Av. Paseo de las Palmas 215 Piso 5 Despacho 502 Col.<br/>
                        Lomas de Chapultepec. Del. Miguel Hidalgo C.P. 11000 México D.F<br/>
                        Bogotá - Colombia<br/>
                    </div>
                </li>
                <li class="media">
                    <div class="pull-left">
                        <img id="u54745_img" class="block" width="20" height="20" alt="" src="<?php echo base_url('public/img/icono_telefonos.png'); ?>">
                    </div>
                    <div class="media-body">
                        Tel: +52 55 36202068<br/>
                    </div>
                </li>
            </ul>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-6">
			<form method="post" class="form-horizontal formulario-contacto" role="form"  >
				<div class="row">
					<div class="col-md-6 form-group">
						<span class="help-block"><?php echo form_error('nombreC'); ?></span>
						<input type="text" class="form-control" name="nombreC" id="nombreC" placeholder="Nombre">
						<span class="help-block"><?php echo form_error('empresaC'); ?></span>
						<input type="text" class="form-control" name="empresaC" id="empresaC" placeholder="Empresa">
						<span class="help-block"><?php echo form_error('asuntoC'); ?></span>
						<input type="text" class="form-control" name="asuntoC" id="asuntoC" placeholder="Asunto">
					</div>
					<div class="col-md-6 form-group" style=" margin-right: -16px;">
						<span class="help-block"><?php echo form_error('telefonoC'); ?></span>
						<input type="text" class="form-control" name="telefonoC" id="telefonoC" placeholder="Tel&eacute;fono">
						<span class="help-block"><?php echo form_error('emailC'); ?></span>
						<input type="email" class="form-control" name="emailC"  id="emailC"  placeholder="Email">
						<span class="help-block"><?php echo form_error('mensajeC'); ?></span>
						<textarea class="form-control" name="mensajeC" id="mensajeC" placeholder="Comentario" rows="2"></textarea>
						<br/><button type="submit" class="btn btn-slh"  >Enviar</button>
					</div>
				</div>
			   	<input type="hidden" name="tipo" id="tipo" value="1">
			</form>
		</div>
	</div>

	<div class="row espaciado-top"></div>
</div>