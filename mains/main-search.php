<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/

	echo '<div id="main" class="search_results">';
	
	if ( function_exists('yoast_breadcrumb') ):
		
		yoast_breadcrumb('<div class="container"><div class="row gutters"><div class="col_12"><div class="breadcrumb_wrapper"><span class="breadcrumbs">','</span></div></div></div></div>');
			
	endif;
	
	echo '<div class="container"><div class="row gutters"><div class="col_12"><div class="content">';
	
	get_template_part( 'loops/loop', 'search' );
					
	echo '</div></div></div></div></div>';
				
?>
	
	