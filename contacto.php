<?php
/**
 * Template Name: Contacto
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>
	<div class="breadcrumb">
		<div class="row grid">
			<div class="col_12 left titulo">
				<?php the_title(); ?>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<?php
	    $args                   = array('post_type' => 'footer');
	    query_posts( $args );
	    while ( have_posts() ) : the_post();
	        $footer_direccion       	= get_field('pie_de_pagina_direccion');
	        $footer_telefono    		= get_field('pie_de_pagina_telefono');
	        $footer_email				= get_field('pie_de_pagina_e_mail');
	    endwhile;
	    wp_reset_query();
	?>
	
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div class="row grid">
		<section class="col_12">
			
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="row grid">
					<div id="mapa" class="col_8">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7722.511359755921!2d-90.5411141046721!3d14.584501538828617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a164f7d7a6ed%3A0x61b7c0105cb11a26!2sCalzada+Atanasio+Tzul!5e0!3m2!1ses-419!2s!4v1400770036942" width="100%" height="300" frameborder="0" style="border:0"></iframe>
					</div>
					<div id="datos" class="col_4">
						<div class="titulo-contacto">
							<h3>Información</h3>
						</div>
						<div class="ico-contacto">
							<li class="icono-mail"><?php echo $footer_email[1]; ?></li>
						</div>
						<div class="ico-contacto">
							<li class="icono-tel"><?php echo $footer_telefono[1]; ?></li>
						</div>
						<div class="ico-contacto">
							<li class="icono-casa"><?php echo $footer_direccion[1]; ?></li>
						</div>
					</div>
				</div>

				<div class="clearflix"></div>
				
				<div class="row grid">
					<div class="col_12">
						<div class="contenido">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</article>

		</section>
		<div class="clearfix"></div>
	</div>


<?php endwhile; ?>

<?php get_footer(); ?>