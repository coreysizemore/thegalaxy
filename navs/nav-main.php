<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/

	echo '<nav id="main_nav">';
		
		wp_nav_menu( array( 'theme_location' => 'primary_nav' ) );
		
	echo '</nav>';

?>