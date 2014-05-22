<?php
/**
 * The template for displaying all pages.
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
	
	<?php $thumb = get_post_thumbnail_id(); $img_url = wp_get_attachment_url( $thumb,'full' ); ?>
	<div class="destacada">
		<img src="<?php echo $img_url; ?>">
	</div>
	
	<div class="row grid">
		<section class="col_12">
			<?php get_template_part( 'loop', 'page' ); ?>
		</section>
		<div class="clearfix"></div>
	</div>
	
<?php get_footer(); ?>
