<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/

	echo '<div id="logo_footer">';
					                
	if ( get_theme_mod( 'themeslug_logo_4' ) ) :
			
		echo '<a href="';
		
		echo esc_url( home_url( '/' ) );
		
		echo '" title="';
		
		echo esc_attr( get_bloginfo( 'name', 'display' ) );
		
		echo '" rel="home"><img src="';
		
		echo esc_url( get_theme_mod( 'themeslug_logo_4' ) );
		
		echo '" alt="';
		
		echo esc_attr( get_bloginfo( 'name', 'display' ) );
		
		echo '"></a>';
		
		if ( get_bloginfo( 'description' ) ) :
		
			echo '<h2 class="site-description">';
			
			bloginfo( 'description' );
			
			echo '</h2>';
		
		endif;
			    
	else :
			
		echo '<h1 class="site-title"><a href="';
		
		echo esc_url( home_url( '/' ) );
		
		echo '" title="';
		
		echo esc_attr( get_bloginfo( 'name', 'display' ) );
		
		echo '" rel="home">';
		
		bloginfo( 'name' );
		
		echo '</a></h1>';
			        
		if ( get_bloginfo( 'description' ) ) :
		
			echo '<h2 class="site-description">';
			
			bloginfo( 'description' );
			
			echo '</h2>';
		
		endif;
			    
	endif;
				
	echo '</div>';
	
?>