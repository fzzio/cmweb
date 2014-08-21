<div class="container">
	<div class="row espaciado-top"></div>
	<div class="row espaciado-a">
		<div class="col-md-12">
			<h1 class="s-titular">
				Servicios
			</h1>
		</div>
	</div>

	<?php foreach ($servicios as $servicio): ?>
		<a href="<?php echo site_url('site/servicioM') . '/' . $servicio['id'];?>" class="btn btn-servicio-m" style="background-color: <?php echo $servicio['color']; ?>;">
			<?php echo $servicio['titulo']; ?> <span class="pull-right glyphicon glyphicon-chevron-right white"></span>
		</a>
	<?php endforeach ?>


</div>