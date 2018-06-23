<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/

	echo '<div id="logo_home">';
	
	if( get_field('home_logo', 'options') == 'image'):
					                
		if ( get_theme_mod( 'themeslug_logo_3' ) ) :
				
			echo '<a href="';
			
			echo esc_url( home_url( '/' ) );
			
			echo '" title="';
			
			echo esc_attr( get_bloginfo( 'name', 'display' ) );
			
			echo '" rel="home"><img src="';
			
			echo esc_url( get_theme_mod( 'themeslug_logo_3' ) );
			
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
	
	elseif( get_field('home_logo', 'options') == 'text'):
	
		if( get_field('home_logo_text', 'options')):
		
			echo '<div class="home_logo_text_wrapper">';
		
				echo the_field('home_logo_text', 'options');
			
			echo '</div>';
		
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
	
	endif;
				
	echo '</div>';
	
?>