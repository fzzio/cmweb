
<style>
	.help-block, .help-inline {
	color: rgb(255, 0, 0);
	text-align: left;
	font-size:12px;
	}
    </style>

<div class="container">
	<div class="row espaciado-top"></div>
	<div class="row espaciado-a">
		<div class="col-md-12">
			<h1 class="s-titular">
				Contáctanos
			</h1>		
		</div>
	</div>
	<div class="row espaciado-a">
		<div class="col-md-12">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs contactos" role="tablist">
			  <li class="active"><a href="#chile" role="tab" data-toggle="tab">CHILE</a></li>
			  <li><a href="#argentina" role="tab" data-toggle="tab">ARGENTINA</a></li>
			  <li><a href="#peru" role="tab" data-toggle="tab">PER&Uacute;</a></li>
			  <li><a href="#colombia" role="tab" data-toggle="tab">COLOMBIA</a></li>
			  <li><a href="#ecuador" role="tab" data-toggle="tab">ECUADOR</a></li>
			  <li><a href="#mexico" role="tab" data-toggle="tab">M&Eacute;XICO</a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
			  <div class="tab-pane active" id="chile">
			  	<div class="row">
			  		<div class="col-md-4 col-md-offset-1">
			  			<br/><br/><h4><strong>CHILE - CASA CENTRAL</strong></h4><br/><br/>
			  			<p><img id="u54741_img" class="block" width="20" height="20" alt="" src="public/img/icono_direccion2.png"> Barros Errázuriz N° 1960, piso 4° Providencia<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Santiago, Chile<br/>
							<img id="u54745_img" class="block" width="20" height="20" alt="" src="public/img/icono_telefonos2.png"> Tel: + 56 2 2585 8777<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fax: +56 2 2223 1276<br/>
							<img id="u54743_img" class="block" width="20" height="20" alt="" src="public/img/icono_mail.png"> contacto@celmedia.com
						</p>
			  		</div>
			  		<div class="col-md-6 col-md-offset-1">
			  			<br/><br/><h4><strong>Cont&aacute;ctanos</strong></h4>
			  			<form method="post" class="form-horizontal" role="form"  >
				  			<div class="row">
				  				<div class="col-md-6 form-group">
				  					<span class="help-block"><?php echo form_error('nombreC'); ?></span>
				  					<input type="text" class="form-control" name="nombreC" id="nombreC" placeholder="Nombre">
				  					<span class="help-block"><?php echo form_error('empresaC'); ?></span>
				  					<input type="text" class="form-control" name="empresaC" id="empresaC" placeholder="Empresa">
				  					<span class="help-block"><?php echo form_error('asuntoC'); ?></span>
				  					<input type="text" class="form-control" name="asuntoC" id="asuntoC" placeholder="Asunto">
				  				</div>
				  				<div class="col-md-6 form-group">
				  					<span class="help-block"><?php echo form_error('telefonoC'); ?></span>
				  					<input type="text" class="form-control" name="telefonoC" id="telefonoC" placeholder="Tel&eacute;fono">
				  					<span class="help-block"><?php echo form_error('emailC'); ?></span>
				  					<input type="email" class="form-control" name="emailC"  id="emailC"  placeholder="Email">
				  					<span class="help-block"><?php echo form_error('mensajeC'); ?></span>
				  					<textarea class="form-control" name="mensajeC" id="mensajeC" placeholder="Comentario" rows="3"></textarea>
				  					<button type="submit" class="btn btn-default"  >Enviar</button>
				  				</div>
				  			</div>
						   	<input type="hidden" name="tipo" id="tipo" value="1">
						</form>
			  		</div>
			  	</div>
			  </div>
			   <div class="tab-pane" id="argentina">
			  	<div class="row">
			  		<div class="col-md-4 col-md-offset-1">
			  			<br/><br/><h4><strong>ARGENTINA</strong></h4><br/><br/>
			  			<p><img id="u54741_img" class="block" width="20" height="20" alt="" src="public/img/icono_direccion2.png"> Reconquista 336, piso 11, depto. “X” (C1003ABH)<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ciudad Autónoma de Buenos Aires - Argentina<br/>
							<img id="u54745_img" class="block" width="20" height="20" alt="" src="public/img/icono_telefonos2.png"> Tel: 	+54 9 11 5514 8608<br/>
							<img id="u54743_img" class="block" width="20" height="20" alt="" src="public/img/icono_mail.png"> contacto@celmedia.cl<br/>
						</p>
			  		</div>
			  		<div class="col-md-6 col-md-offset-1">
			  			<br/><br/><h4><strong>Cont&aacute;ctanos</strong></h4>
			  			<form method="post" class="form-horizontal" role="form"  >
				  			<div class="row">
				  				<div class="col-md-6 form-group">
				  					<span class="help-block"><?php echo form_error('nombreC'); ?></span>
				  					<input type="text" class="form-control" name="nombreC" id="nombreC" placeholder="Nombre">
				  					<span class="help-block"><?php echo form_error('empresaC'); ?></span>
				  					<input type="text" class="form-control" name="empresaC" id="empresaC" placeholder="Empresa">
				  					<span class="help-block"><?php echo form_error('asuntoC'); ?></span>
				  					<input type="text" class="form-control" name="asuntoC" id="asuntoC" placeholder="Asunto">
				  				</div>
				  				<div class="col-md-6 form-group">
				  					<span class="help-block"><?php echo form_error('telefonoC'); ?></span>
				  					<input type="text" class="form-control" name="telefonoC" id="telefonoC" placeholder="Tel&eacute;fono">
				  					<span class="help-block"><?php echo form_error('emailC'); ?></span>
				  					<input type="email" class="form-control" name="emailC"  id="emailC"  placeholder="Email">
				  					<span class="help-block"><?php echo form_error('mensajeC'); ?></span>
				  					<textarea class="form-control" name="mensajeC" id="mensajeC" placeholder="Comentario" rows="3"></textarea>
				  					<button type="submit" class="btn btn-default"  >Enviar</button>
				  				</div>
				  			</div>
						   	<input type="hidden" name="tipo" id="tipo" value="1">
						</form>
			  		</div>
			  	</div>
			  </div>
			  <div class="tab-pane" id="peru">
			  	<div class="row">
			  		<div class="col-md-4 col-md-offset-1">
			  			<br/><br/><h4><strong>PER&Uacute;</strong></h4><br/><br/>
			  			<p><img id="u54741_img" class="block" width="20" height="20" alt="" src="public/img/icono_direccion2.png"> Victor Andrés Belaúnde 147, vía principal 150<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edificio Real Seis - piso6 <br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lima 27- Perú<br/>
							<img id="u54745_img" class="block" width="20" height="20" alt="" src="public/img/icono_telefonos2.png"> Tel:	+511 211 2679<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fax: 	+511 211 2526<br/>
							<img id="u54743_img" class="block" width="20" height="20" alt="" src="public/img/icono_mail.png"> contacto@celmedia.cl

						</p>
			  		</div>
			  		<div class="col-md-6 col-md-offset-1">
			  			<br/><br/><h4><strong>Cont&aacute;ctanos</strong></h4>
			  			<form method="post" class="form-horizontal" role="form"  >
				  			<div class="row">
				  				<div class="col-md-6 form-group">
				  					<span class="help-block"><?php echo form_error('nombreC'); ?></span>
				  					<input type="text" class="form-control" name="nombreC" id="nombreC" placeholder="Nombre">
				  					<span class="help-block"><?php echo form_error('empresaC'); ?></span>
				  					<input type="text" class="form-control" name="empresaC" id="empresaC" placeholder="Empresa">
				  					<span class="help-block"><?php echo form_error('asuntoC'); ?></span>
				  					<input type="text" class="form-control" name="asuntoC" id="asuntoC" placeholder="Asunto">
				  				</div>
				  				<div class="col-md-6 form-group">
				  					<span class="help-block"><?php echo form_error('telefonoC'); ?></span>
				  					<input type="text" class="form-control" name="telefonoC" id="telefonoC" placeholder="Tel&eacute;fono">
				  					<span class="help-block"><?php echo form_error('emailC'); ?></span>
				  					<input type="email" class="form-control" name="emailC"  id="emailC"  placeholder="Email">
				  					<span class="help-block"><?php echo form_error('mensajeC'); ?></span>
				  					<textarea class="form-control" name="mensajeC" id="mensajeC" placeholder="Comentario" rows="3"></textarea>
				  					<button type="submit" class="btn btn-default"  >Enviar</button>
				  				</div>
				  			</div>
						   	<input type="hidden" name="tipo" id="tipo" value="3">
						</form>
			  		</div>
			  	</div>
			  </div>
			  <div class="tab-pane" id="colombia">
			  	<div class="row">
			  		<div class="col-md-4 col-md-offset-1">
			  			<br/><br/><h4><strong>COLOMBIA</strong></h4><br/><br/>
			  			<p><img id="u54741_img" class="block" width="20" height="20" alt="" src="public/img/icono_direccion2.png"> Celmedia MKT S.A.<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cra 11b # 98-08 of 304<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bogotá - Colombia<br/>
							<img id="u54745_img" class="block" width="20" height="20" alt="" src="public/img/icono_telefonos2.png"> Tel:	+571 6431002<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tel: 	+54 9 11 5514 8608<br/>
							<img id="u54743_img" class="block" width="20" height="20" alt="" src="public/img/icono_mail.png"> contacto@celmedia.cl
						</p>
			  		</div>
			  		<div class="col-md-6 col-md-offset-1">
			  			<br/><br/><h4><strong>Cont&aacute;ctanos</strong></h4>
			  			<form method="post" class="form-horizontal" role="form"  >
				  			<div class="row">
				  				<div class="col-md-6 form-group">
				  					<span class="help-block"><?php echo form_error('nombreC'); ?></span>
				  					<input type="text" class="form-control" name="nombreC" id="nombreC" placeholder="Nombre">
				  					<span class="help-block"><?php echo form_error('empresaC'); ?></span>
				  					<input type="text" class="form-control" name="empresaC" id="empresaC" placeholder="Empresa">
				  					<span class="help-block"><?php echo form_error('asuntoC'); ?></span>
				  					<input type="text" class="form-control" name="asuntoC" id="asuntoC" placeholder="Asunto">
				  				</div>
				  				<div class="col-md-6 form-group">
				  					<span class="help-block"><?php echo form_error('telefonoC'); ?></span>
				  					<input type="text" class="form-control" name="telefonoC" id="telefonoC" placeholder="Tel&eacute;fono">
				  					<span class="help-block"><?php echo form_error('emailC'); ?></span>
				  					<input type="email" class="form-control" name="emailC"  id="emailC"  placeholder="Email">
				  					<span class="help-block"><?php echo form_error('mensajeC'); ?></span>
				  					<textarea class="form-control" name="mensajeC" id="mensajeC" placeholder="Comentario" rows="3"></textarea>
				  					<button type="submit" class="btn btn-default"  >Enviar</button>
				  				</div>
				  			</div>
						    <input type="hidden" name="tipo" id="tipo" value="4">
						</form>
			  		</div>
			  	</div>
			  </div>
			  <div class="tab-pane" id="ecuador">
			  	<div class="row">
			  		<div class="col-md-4 col-md-offset-1">
			  			<br/><br/><h4><strong>ECUADOR</strong></h4><br/><br/>
			  			<p><img id="u54741_img" class="block" width="20" height="20" alt="" src="public/img/icono_direccion2.png"> Av. Rodrigo Chávez y Av. Juan Tanca Marengo s # 3 y 4<br/> 
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Edificio Grafehi Piso 2 Guayaquil - Ecuador<br/>
							<img id="u54745_img" class="block" width="20" height="20" alt="" src="public/img/icono_telefonos2.png"> Tel: (+5934) 5019091<br/><br/>
							<img id="u54741_img" class="block" width="20" height="20" alt="" src="public/img/icono_direccion2.png"> Atahualpa 955 y Av. República Ed. Digicom 5to. piso<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quito - Ecuador<br/>
							<img id="u54745_img" class="block" width="20" height="20" alt="" src="public/img/icono_telefonos2.png"> Tel:	 +593 2 2460284<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+593 2 2460285<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fax: +593 2 2460284<br/>
							<img id="u54743_img" class="block" width="20" height="20" alt="" src="public/img/icono_mail.png"> contacto@celmedia.cl
						</p>
			  		</div>
			  		<div class="col-md-6 col-md-offset-1">
			  			<br/><br/><h4><strong>Cont&aacute;ctanos</strong></h4>
			  			<form method="post" class="form-horizontal" role="form"  >
				  			<div class="row">
				  				<div class="col-md-6 form-group">
				  					<span class="help-block"><?php echo form_error('nombreC'); ?></span>
				  					<input type="text" class="form-control" name="nombreC" id="nombreC" placeholder="Nombre">
				  					<span class="help-block"><?php echo form_error('empresaC'); ?></span>
				  					<input type="text" class="form-control" name="empresaC" id="empresaC" placeholder="Empresa">
				  					<span class="help-block"><?php echo form_error('asuntoC'); ?></span>
				  					<input type="text" class="form-control" name="asuntoC" id="asuntoC" placeholder="Asunto">
				  				</div>
				  				<div class="col-md-6 form-group">
				  					<span class="help-block"><?php echo form_error('telefonoC'); ?></span>
				  					<input type="text" class="form-control" name="telefonoC" id="telefonoC" placeholder="Tel&eacute;fono">
				  					<span class="help-block"><?php echo form_error('emailC'); ?></span>
				  					<input type="email" class="form-control" name="emailC"  id="emailC"  placeholder="Email">
				  					<span class="help-block"><?php echo form_error('mensajeC'); ?></span>
				  					<textarea class="form-control" name="mensajeC" id="mensajeC" placeholder="Comentario" rows="3"></textarea>
				  					<button type="submit" class="btn btn-default"  >Enviar</button>
				  				</div>
				  			</div>
						  	<input type="hidden" name="tipo" id="tipo" value="5">
						</form>
			  		</div>
			  	</div>
			  </div>
			  <div class="tab-pane" id="mexico">
			  	<div class="row">
			  		<div class="col-md-4 col-md-offset-1">
			  			<br/><br/><h4><strong>M&Eacute;XICO</strong></h4><br/><br/>
			  			<p><img id="u54741_img" class="block" width="20" height="20" alt="" src="public/img/icono_direccion2.png"> Av. Paseo de las Palmas 215 Piso 5 Despacho 502 Col.<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lomas de Chapultepec. Del. Miguel Hidalgo C.P. 11000 México D.F<br/>
							<img id="u54741_img" class="block" width="20" height="20" alt="" src="public/img/icono_direccion2.png"> Tel:	+52 55 36202068<br/>
							<img id="u54743_img" class="block" width="20" height="20" alt="" src="public/img/icono_mail.png"> xperez@celmedia.com

						</p>
			  		</div>
			  		<div class="col-md-6 col-md-offset-1">
			  			<br/><br/><h4><strong>Cont&aacute;ctanos</strong></h4>
			  			<form method="post" class="form-horizontal" role="form"  >
				  			<div class="row">
				  				<div class="col-md-6 form-group">
				  					<span class="help-block"><?php echo form_error('nombreC'); ?></span>
				  					<input type="text" class="form-control" name="nombreC" id="nombreC" placeholder="Nombre">
				  					<span class="help-block"><?php echo form_error('empresaC'); ?></span>
				  					<input type="text" class="form-control" name="empresaC" id="empresaC" placeholder="Empresa">
				  					<span class="help-block"><?php echo form_error('asuntoC'); ?></span>
				  					<input type="text" class="form-control" name="asuntoC" id="asuntoC" placeholder="Asunto">
				  				</div>
				  				<div class="col-md-6 form-group">
				  					<span class="help-block"><?php echo form_error('telefonoC'); ?></span>
				  					<input type="text" class="form-control" name="telefonoC" id="telefonoC" placeholder="Tel&eacute;fono">
				  					<span class="help-block"><?php echo form_error('emailC'); ?></span>
				  					<input type="email" class="form-control" name="emailC"  id="emailC"  placeholder="Email">
				  					<span class="help-block"><?php echo form_error('mensajeC'); ?></span>
				  					<textarea class="form-control" name="mensajeC" id="mensajeC" placeholder="Comentario" rows="3"></textarea>
				  					<button type="submit" class="btn btn-default"  >Enviar</button>
				  				</div>
				  			</div>
						  	<input type="hidden" name="tipo" id="tipo" value="6">
						</form>
			  		</div>
			  	</div>
			  </div> 
			</div>
		</div>
	</div>
	<div class="row espaciado-a">&nbsp;</div>
</div>