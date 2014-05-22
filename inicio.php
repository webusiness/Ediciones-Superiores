<?php
/*
Template Name: Inicio
*/
get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

  <div id="owl-inicio" class="owl-carousel owl-theme">
    <?php  query_posts(array('post_type' => 'slide', 'showposts' => 6));
      if (have_posts()) : while (have_posts()) : the_post(); 
      $thumb = get_post_thumbnail_id();
      $img_url = wp_get_attachment_url( $thumb,'full' ); 
    ?>
      <div class="item">
        <img src="<?php echo $img_url ?>">
      </div>
    <?php 
    endwhile;
    endif;
    wp_reset_query();
    ?>
  </div>

  <div id="valores" class="grid row">
    <div class="col_4">
      <div><a href="javascript:void(0);"><img src="<?php bloginfo('template_directory'); ?>/images/puntualidad.png"></a></div>
    </div>
    <div class="col_4">
      <div><a href="javascript:void(0);"><img src="<?php bloginfo('template_directory'); ?>/images/calidad.png"></a></div>
    </div>
    <div class="col_4">
      <div><a href="javascript:void(0);"><img src="<?php bloginfo('template_directory'); ?>/images/servicio.png"></a></div>
    </div> 
    <div class="clearfix"></div>
  </div>

  <div id="fondo">
    <div class="row grid">
      <div class="col_6">
        <div class="img-inicio">
          <img src="<?php bloginfo('template_directory'); ?>/images/casa.png">
        </div>
        <div class="txt-inicio">
          <div class="direccion-inicio">Ave. del Ferrocarril 19-97 zona 12, El Cortijo Empresarial Ofibodega 706, Guatemala.</div>
        </div>
      </div>
      <div class="col_6">
        <div class="img-inicio">
          <img src="<?php bloginfo('template_directory'); ?>/images/correo.png">
        </div>
        <div class="txt-inicio">
          <div class="correo-inicio">gerencia@edicionessuperiores.com</div>
          <div class="tel-inicio">Tel. (502) 2381-3300</div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>

<?php endwhile; ?>

<?php get_footer();?>