<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	
	$promo_image = get_field('promotion_pop_up','options');

	if( $promo_image ):
	
		echo '<a href="' . $promo_image['url'] . '" alt="' . $promo_image['alt'] . '" class="fancybox" id="promo"></a>';
			
	endif;	

?>