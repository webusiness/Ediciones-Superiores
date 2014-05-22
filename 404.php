<?php
/**
 * The template for displaying 404 pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

	<div class="row grid">
		<div class="col_12 error center">
			<h2><?php _e( 'Error 404 - No se encontró la página', 'starkers' ); ?></h2>
			<p><?php _e( 'Puede que la página solicitada ya no exista, haya cambiado de nombre o no este disponible temporalmente.', 'starkers' ); ?></p>		
			<p><?php _e( 'Haga clic en el boton "Atras" para intentar con otro vínculo.', 'starkers' ); ?></p>		
		</div>
		<div class="clearfix"></div>
	</div>

<?php get_footer(); ?>