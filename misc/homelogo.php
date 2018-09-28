<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	
	if( get_field('home_logo', 'options') == 'image'):
	
		if( get_field('home_logo_location', 'options') == 'left' ):
		
			echo '<div id="home_logo" class="home_logo_left">';
	
		elseif( get_field('home_logo_location', 'options') == 'center' ):
		
			echo '<div id="home_logo" class="home_logo_center">';
		
		elseif( get_field('home_logo_location', 'options') == 'right' ):
		
			echo '<div id="home_logo" class="home_logo_right">';
		
		endif;
					                
		if ( get_theme_mod( 'themeslug_logo_3' ) ) :
				
			echo '<img src="';
			
			echo esc_url( get_theme_mod( 'themeslug_logo_3' ) );
			
			echo '" alt="';
			
			echo esc_attr( get_bloginfo( 'name', 'display' ) );
			
			echo '">';
			
		endif;
		
		if ( has_nav_menu( 'home_page_nav' ) ):
		
			echo '<div id="home_page_nav">';
					
			wp_nav_menu( array( 'theme_location' => 'home_page_nav' ) );
					
			echo '</div>';
		
		endif;
		
		echo '</div>';
		
	elseif( get_field('home_logo', 'options') == 'imagetext'):
	
		if( get_field('home_logo_location', 'options') == 'left' ):
		
			echo '<div id="home_logo" class="home_logo_left">';
	
		elseif( get_field('home_logo_location', 'options') == 'center' ):
		
			echo '<div id="home_logo" class="home_logo_center">';
		
		elseif( get_field('home_logo_location', 'options') == 'right' ):
		
			echo '<div id="home_logo" class="home_logo_right">';
		
		endif;
	
		if ( get_theme_mod( 'themeslug_logo_3' ) ) :
				
			echo '<img src="';
			
			echo esc_url( get_theme_mod( 'themeslug_logo_3' ) );
			
			echo '" alt="';
			
			echo esc_attr( get_bloginfo( 'name', 'display' ) );
			
			echo '">';
			
		endif;
		
		if( get_field('home_logo_text', 'options')):
		
			echo '<div id="home_logo_text_wrapper">';
		
				echo the_field('home_logo_text', 'options');
			
			echo '</div>';
			
		endif;
		
		if ( has_nav_menu( 'home_page_nav' ) ):
		
			echo '<nav id="home_page_nav">';
					
			wp_nav_menu( array( 'theme_location' => 'home_page_nav' ) );
					
			echo '</nav>';
		
		endif;
		
		echo '</div>';
	
	elseif( get_field('home_logo', 'options') == 'text'):
	
		if( get_field('home_logo_location', 'options') == 'left' ):
		
			echo '<div id="home_logo" class="home_logo_left">';
	
		elseif( get_field('home_logo_location', 'options') == 'center' ):
		
			echo '<div id="home_logo" class="home_logo_center">';
		
		elseif( get_field('home_logo_location', 'options') == 'right' ):
		
			echo '<div id="home_logo" class="home_logo_right">';
		
		endif;
	
		if( get_field('home_logo_text', 'options')):
		
			echo '<div id="home_logo_text_wrapper">';
		
				echo the_field('home_logo_text', 'options');
			
			echo '</div>';
			
		endif;
		
		if ( has_nav_menu( 'home_page_nav' ) ):
		
			echo '<div id="home_page_nav">';
					
			wp_nav_menu( array( 'theme_location' => 'home_page_nav' ) );
					
			echo '</div>';
		
		endif;
		
		echo '</div>';
		
	else :
	
		if( get_field('home_logo_location', 'options') == 'left' ):
		
			echo '<div id="home_logo" class="home_logo_left">';
	
		elseif( get_field('home_logo_location', 'options') == 'center' ):
		
			echo '<div id="home_logo" class="home_logo_center">';
		
		elseif( get_field('home_logo_location', 'options') == 'right' ):
		
			echo '<div id="home_logo" class="home_logo_right">';
		
		endif;
	
		if ( has_nav_menu( 'home_page_nav' ) ):
		
			echo '<div id="home_page_nav">';
					
			wp_nav_menu( array( 'theme_location' => 'home_page_nav' ) );
					
			echo '</div>';
		
		endif;
		
		echo '</div>';
	
	endif;
	
?>