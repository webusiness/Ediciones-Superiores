<?php
/**
 * The Template for displaying all single posts.
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
	if ( in_category( 'servicio' )) {
		// Si la categoria es "Servicio", Construye una pagina para mostrar los servicios
	    
	    $fotos      = get_group('imagen_de_portada');
	    foreach ($fotos as $foto) {
	        $lasfotos = $foto['imagen_de_portada_imagen'];
	        foreach ($lasfotos as $lafoto) {
	        }
	    }
	?>
		<div class="destacada">
			<img src="<?php echo $lafoto['original'] ?>">
		</div>

		<div class="row grid">
			<section class="col_12">
				<?php get_template_part( 'loop', 'single' ); ?>
				<?php
					echo '<hr class="alt1">';
					echo '<h3> Pedir Cotización </h3>';
					echo do_shortcode( '[contact-form-7 id="38" title="Cotizar"]' );
				?>
			</section>
			<div class="clearfix"></div>
		</div>

	<?php 
	} else { 
		// Si la categoria es distinta a "Servicio", Construye una pagina para mostrar un portafolio
	?>
		<div class="destacada">
			<img src="<?php echo $lafoto['original'] ?>">
		</div>

		<div class="row grid">
			<div id="galeria" class="col_7">
				<div id="sync1" class="owl-carousel">
				<?php
				    $fotos      = get_group('galeria_de_fotografias');
				    foreach ($fotos as $foto) {
				        $lasfotos = $foto['galeria_de_fotografias_foto'];
				        foreach ($lasfotos as $lafoto) {
				?>
					<div class="item">
		            	<img src="<?php echo $lafoto['original'] ?>">
		            </div>
				<?php
				        }
				    }
				?>
				</div>
				<div id="sync2" class="owl-carousel">
				<?php
				    $fotos      = get_group('galeria_de_fotografias');
				    foreach ($fotos as $foto) {
				        $lasfotos = $foto['galeria_de_fotografias_foto'];
				        foreach ($lasfotos as $lafoto) {
				?>
					<div class="item">
		            	<img src="<?php echo $lafoto['original'] ?>">
		            </div>
				<?php
				        }
				    }
				?>
				</div>
			</div>
			<section class="col_5">
				<?php get_template_part( 'loop', 'single' ); ?>
			</section>
			<div class="clearfix"></div>
		</div>

	<?php 
	} 
	?>

<?php get_footer(); ?>