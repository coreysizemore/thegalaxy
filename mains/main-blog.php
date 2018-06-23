<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/

	echo '<div class="main blog_home ';
	
	echo basename(get_permalink());
	
	echo '">';
		
	if ( function_exists('yoast_breadcrumb') ):
	
		yoast_breadcrumb('<div class="container"><div class="row gutters"><div class="col_12"><div class="breadcrumb_wrapper"><span class="breadcrumbs">','</span></div></div></div></div>');
	
	endif;
	
	echo '<div class="container"><div class="row gutters"><div class="col_12"><div class="content">';
		
	get_template_part( 'loops/loop', 'blog' );
						
	echo '</div></div></div></div></div>';
	
	get_template_part( 'sidebars/sidebar' , 'blog' );

?>
	
	