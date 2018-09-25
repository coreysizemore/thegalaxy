<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	
	if( get_field('home_logo', 'options') == 'image'):
	
		echo '<div id="home_logo" class="home_logo_mobile">';
					                
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
	
		echo '<div id="home_logo" class="home_logo_mobile">';
	
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
		
			echo '<div id="home_page_nav">';
					
			wp_nav_menu( array( 'theme_location' => 'home_page_nav' ) );
					
			echo '</div>';
		
		endif;
		
		echo '</div>';
	
	elseif( get_field('home_logo', 'options') == 'text'):
	
		echo '<div id="home_logo" class="home_logo_mobile">';
	
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
	
		echo '<div id="home_logo" class="home_logo_mobile">';
	
		if ( has_nav_menu( 'home_page_nav' ) ):
		
			echo '<div id="home_page_nav">';
					
			wp_nav_menu( array( 'theme_location' => 'home_page_nav' ) );
					
			echo '</div>';
		
		endif;
		
		echo '</div>';
	
	endif;
	
?>