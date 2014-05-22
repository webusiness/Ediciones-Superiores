<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

	<div class="breadcrumb">
		<div class="row grid">
			<div class="col_12 left titulo">
				<?php echo single_cat_title("", false); ?>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="row grid">
	    <?php            
		    if (have_posts()) : while (have_posts()) : the_post();  
		    $thumb = get_post_thumbnail_id(); 
		    $img_url = wp_get_attachment_url( $thumb,'thumbnail' );  
	    ?>
		<div class="contenedor-items">
			<div class="img-item">
	            <?php
	            if ( has_post_thumbnail() ) {
	            ?>
				  <a href="<?php echo the_permalink(); ?>"><img src="<?php echo $img_url ?>"></a>
	            <?php
	            }
	            else { ?>
	              <a href="<?php echo the_permalink(); ?>">
	              	<img src="<?php bloginfo('template_directory'); ?>/images/thumbnail-default.jpg">
	              </a> 
	            <?php
	            }
	            ?>
			</div>
			<div class="titulo-item">
				<?php the_title(); ?>
			</div>
			<div class="des-item">
		        <?php
		          $excerpt = get_the_excerpt();
		          echo string_limit_words($excerpt,20);
		        ?>
			</div>
	        <div class="ver-mas">
	          <a href="<?php echo the_permalink(); ?>">Ver más</a>
	        </div>
		</div>
	    <?php 
			endwhile;
			endif;
			wp_reset_query();
	    ?>
		<div class="clearfix"></div>
	    
	    <div class="grid center">
	        <div class="col_12">
	            <div class="pagination">
	                <ul>
	                    <?php pagination(); ?>
	                </ul>
	            </div>
	        </div>        
	    </div>

	</div>
<?php get_footer(); ?>