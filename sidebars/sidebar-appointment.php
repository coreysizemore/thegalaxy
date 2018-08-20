<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
	if ( is_active_sidebar( 'appointment-sidebar' ) ) :
	
		echo '<div class="appointment"><div id="appointment_sidebar">';
				
			dynamic_sidebar( 'appointment-sidebar' );
				        
		echo '</div></div>';
	
	endif; 

?>
