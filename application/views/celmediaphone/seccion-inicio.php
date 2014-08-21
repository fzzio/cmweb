<div id="carousel-slider-home" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <?php foreach ($slideshome as $slide): ?>
      <?php $rutaImg = base_url('assets/celmediachile/sliderhome') . '/' . $slide['urlimagen']; ?>
      <div class="item fondo-completo <?php echo ( ($slide === reset($slideshome)) ? 'active' : '' ) ; ?>" style="background-image: url('<?php echo $rutaImg; ?>');">
        <div class="v-center-contenedor">
          <div class="v-center-contenido">
            <div class="container-fluid">
              <div class="row espaciado-a">
                <br /><br />
              </div>
              <div class="row espaciado-a">
                <br /><br />
              </div>
              <div class="row espaciado-a">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-11">
                    <div class="titular-slider">
                      <?php echo $slide["descripcion"]; ?>
                    </div>
                </div>
              </div>
              <div class="row espaciado-a">
                <br /><br />
              </div>
              <div class="row espaciado-a">
                <div class="col-md-2 col-md-offset-2 col-sm-5 col-sm-offset-1 col-xs-12">
                    <br/><a href="<?php echo $slide['link']; ?>" class="btn btn-slh link-celmedia"><?php echo $slide["textoboton"]; ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>      
      </div>
    <?php endforeach ?>
  </div>
</div>