<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 


	echo '<div class="blog_sidebar"><div class="container"><div class="row gutters"><div class="col_6 first"><div id="blog_sidebar_1" class="blog_sidebars">';
			
	if ( is_active_sidebar( 'blog-sidebar-1' ) ) : 
	
		dynamic_sidebar( 'blog-sidebar-1' );
					            
	endif; 
						
	echo '</div></div><div class="col_6 last"><div id="blog_sidebar_2" class="blog_sidebars">';
						
	if ( is_active_sidebar( 'blog-sidebar-2' ) ) : 
	
		dynamic_sidebar( 'blog-sidebar-2' ); 
	
	endif;
						
	echo '</div></div></div></div></div>';

?>
