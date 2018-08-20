<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
	if ( is_active_sidebar( 'announcement-sidebar' ) ) :
	
		echo '<div class="appointment"><div id="announcement_sidebar">';
				
			dynamic_sidebar( 'announcement-sidebar' );
				        
		echo '</div></div>';
		
	endif; 

?>
