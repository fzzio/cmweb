<div class="container">
	<div class="row espaciado-top"></div>
	<div class="row espaciado-a">
		<div class="col-md-12">
			<h1 class="s-titular">
				Clientes
			</h1>
			<h3 class="s-subtitular">
				La confianza no se gana se construye. Más de 120 clientes en toda la Región.
			</h3>		
		</div>
	</div>
	<div class="row espaciado-a">
		<?php foreach ($clientes as $cliente): ?>
			<div class="col-md-1 col-sm-2 col-xs-3">
				<a href="#modal-c<?php echo $cliente['id'] ?>" data-toggle="modal" class="link-celmedia link-img-cliente">
					<?php $rutaImg = base_url('assets/celmediachile/clientes') . '/' . $cliente['imagen']; ?>
					<?php $rutaImgHv = base_url('assets/celmediachile/clientes') . '/' . $cliente['imagenhover']; ?>
					<img src="<?php echo $rutaImg; ?>" alt="" class="img-c-normal img-responsive obj-centrar" />
					<img src="<?php echo $rutaImgHv; ?>" alt="" class="img-c-hover img-responsive obj-centrar" style="display:none;" />
				</a>
			</div>
			<div class="modal fade" id="modal-c<?php echo $cliente['id'] ?>" tabindex="-1" role="dialog">
	            <div class="modal-dialog">
	                <div class="modal-content">
	                    <div class="modal-header">
	                        <button type="button" class="close" data-dismiss="modal">
	                        	<span aria-hidden="true">&times;</span>
	                        	<span class="sr-only">Cerrar</span>
	                        </button>
	                    </div>
	                    <div class="modal-body">
	                		<?php $rutaImgBg = base_url('assets/celmediachile/clientes') . '/' . $cliente['imagenbg']; ?>
							<img src="<?php echo $rutaImgBg; ?>" alt="" class="img-responsive obj-centrar" />        
	                    </div>
	                </div>
	            </div>
	        </div> <!-- modal_seminuevo -->
		<?php endforeach ?>		
	</div>
	<div class="row espaciado-a">&nbsp;</div>
</div>