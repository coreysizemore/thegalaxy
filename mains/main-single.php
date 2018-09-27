<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/

	echo '<div id="main" class="blog_single">';
	
	if ( function_exists('yoast_breadcrumb') ):
		
		yoast_breadcrumb('<div class="container"><div class="row gutters"><div class="col_12"><div class="breadcrumb_wrapper"><span class="breadcrumbs">','</span></div></div></div></div>');
			
	endif;
	
	echo '<div class="container"><div class="row gutters"><div class="col_12"><div class="content">';
	
	get_template_part( 'loops/loop', 'single' );
					
	echo '</div></div></div></div><div class="edit_button"><span class="edit">';
	
	edit_post_link();
	
	echo '</span></div></div>';
	
?>

	
	