<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php
 
    global $page, $paged;
 
    wp_title( '|', true, 'right' );
 
    bloginfo( 'name' );
 
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";
 
    if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'starkers' ), max( $paged, $page ) );
 
    ?></title>

<!-- Links -->
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
<!-- /Links -->

<!-- CSS -->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/kickstart.css" media="all" /> <!-- KICKSTART -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.theme.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.transitions.css">
<!-- /CSS -->

<?php wp_head(); ?>

<!-- Javascripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-1.6.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/kickstart.js"></script> <!-- KICKSTART -->
<script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.js"></script>

</head>
 
<body <?php body_class(); ?>>
<?php
    $args                   = array('post_type' => 'footer');
    query_posts( $args );
    while ( have_posts() ) : the_post();
        $footer_fb              = get_field('cabecera_facebook');
        $footer_tw              = get_field('cabecera_twitter');
        $footer_yt              = get_field('cabecera_youtube');
    endwhile;
    wp_reset_query();
?>
    <header>
        <div class="row grid">
            <div class="col_12">
                <div id="ico-sociales">
                    <div><a href="<?php echo $footer_fb[1]; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/fb.png"></a></div>
                    <div><a href="<?php echo $footer_tw[1]; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/tw.png"></a></div>
                    <div><a href="<?php echo $footer_yt[1]; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/yt.png"></a></div>
                </div>        
            </div>
            <div class="clearfix"></div>
        </div>

        <div id="cabecera">
            <div class="row grid">
                <div id="logo" class="col_4">
                    <figure>
                        <a href=""><img src="<?php bloginfo('template_directory'); ?>/images/logo.png"></a>
                    </figure>
                </div>
                <div id="nav-menu" class="col_8">
                    <nav>
                        <?php wp_nav_menu( 
                        array( 
                        'container' => 'nav', 
                        'fallback_cb' => 
                        'starkers_menu',
                        'menu_class' => 'menu',
                        'theme_location' => 'primary'
                        ) ); ?>
                    </nav>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
       
        <div id="telefono">
            <div class="row grid">
                <div class="col_12">
                    <div class="telefono">
                        Tel. (502) 2381-3300
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </header>