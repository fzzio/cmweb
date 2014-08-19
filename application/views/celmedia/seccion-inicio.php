<div id="carousel-slider-home" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <?php foreach ($slideshome as $slide): ?>
      <?php $rutaImg = base_url('assets/celmediachile/sliderhome') . '/' . $slide['urlimagen']; ?>
      <div class="item fondo-completo <?php echo ( ($slide === reset($slideshome)) ? 'active' : '' ) ; ?>" style="background-image: url('<?php echo $rutaImg; ?>');">
        <div class="v-center-contenedor">
          <div class="v-center-contenido">
            <div class="container-fluid">
              <div class="row espaciado-top visible-sm visible-xs hidden-md hidden-lg"></div>
              <div class="row espaciado-top visible-sm visible-xs hidden-md hidden-lg"></div>
              <div class="row espaciado-a">
                <div class="col-md-5 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                    <div class="titular-slider">
                      <?php echo $slide["descripcion"]; ?>
                    </div>
                </div>
              </div>
              <div class="row espaciado-a">
                <div class="col-md-3 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-12">
                    <a href="<?php echo $slide['link']; ?>" class="btn btn-slh link-celmedia"><?php echo $slide["textoboton"]; ?></a>
                </div>
              </div>
              <div class="row espaciado-a">
                <br /><br /><br />
                <div class="col-md-12 text-center page-scroll">
                  <h4 class="txt-mayus txt-normal">scroll para continuar</h4>
                  <a href="#servicios" class="link-celmedia link-scroll-sld"></a>
                </div>
              </div>
            </div>
          </div>
        </div>      
      </div>
    <?php endforeach ?>
  </div>
</div>