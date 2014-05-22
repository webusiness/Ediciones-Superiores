<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>
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
<footer>
	<div class="grid row">
		<div class="col_4">
			<div class="titulo-footer">Menú</div>
		</div>
		
		<div class="col_4">
			<div class="titulo-footer">Servicios de Impresión</div>
			<div>Material Promocional</div>
			<div>Libros Folletos y Revistas</div>
			<div>Material de Presentación</div>
			<div>Formas Comerciales</div>
		</div>
		
		<div class="col_4">
			<div class="titulo-footer">Contáctenos</div>
			<div><?php echo $footer_direccion[1]; ?></div>
			<div><?php echo $footer_telefono[1]; ?></div>
			<div><?php echo $footer_email[1]; ?></div>
		</div>

		<div class="clearfix"></div>
	</div>
</footer>

<?php wp_footer(); ?>

<script type="text/javascript">
$.noConflict();
jQuery( document ).ready(function( $ ) { /* Inicio de todas las funciones Javascript y jQuery */
	function random(owlSelector){
		owlSelector.children().sort(function(){
		    return Math.round(Math.random()) - 0.5;
		}).each(function(){
		  $(this).appendTo(owlSelector);
		});
	}
	$("#owl-inicio").owlCarousel({
		autoPlay : true,
		autoPlay : 5000,
		items : 1,
		singleItem:true,
		slideSpeed : 300,
		pagination:true,
		navigation: false,
		navigationText: [
		  "<i class='flecha-left'></i>",
		  "<i class='flecha-right'></i>"
		  ]
	});
	var sync1 = $("#sync1");
	  var sync2 = $("#sync2");
	 
	  sync1.owlCarousel({
	    singleItem : true,
	    slideSpeed : 1000,
	    navigation: false,
	    pagination:false,
	    autoPlay:3000,
	    afterAction : syncPosition,
	    responsiveRefreshRate : 200,
	  });
	 
	  sync2.owlCarousel({
	    items : 4,
	    itemsDesktop      : [1199,10],
	    itemsMobile       : [479,4],
	    pagination:false,
	    responsiveRefreshRate : 100,
	    afterInit : function(el){
	      el.find(".owl-item").eq(0).addClass("synced");
	    }
	  });
	 
	  function syncPosition(el){
	    var current = this.currentItem;
	    $("#sync2")
	      .find(".owl-item")
	      .removeClass("synced")
	      .eq(current)
	      .addClass("synced")
	    if($("#sync2").data("owlCarousel") !== undefined){
	      center(current)
	    }
	  }
	 
	  $("#sync2").on("click", ".owl-item", function(e){
	    e.preventDefault();
	    var number = $(this).data("owlItem");
	    sync1.trigger("owl.goTo",number);
	  });
	 
	  function center(number){
	    var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
	    var num = number;
	    var found = false;
	    for(var i in sync2visible){
	      if(num === sync2visible[i]){
	        var found = true;
	      }
	    }
	 
	    if(found===false){
	      if(num>sync2visible[sync2visible.length-1]){
	        sync2.trigger("owl.goTo", num - sync2visible.length+2)
	      }else{
	        if(num - 1 === -1){
	          num = 0;
	        }
	        sync2.trigger("owl.goTo", num);
	      }
	    } else if(num === sync2visible[sync2visible.length-1]){
	      sync2.trigger("owl.goTo", sync2visible[1])
	    } else if(num === sync2visible[0]){
	      sync2.trigger("owl.goTo", num-1)
	    }
	    
	  }
})
</script>
</body>
</html>