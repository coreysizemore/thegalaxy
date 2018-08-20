<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	
	if( get_field('display_search', 'options')):

		get_search_form();

	endif;
	
	if( get_field('member_login_bar', 'options') ):
	
		get_template_part( 'misc/loggedin' );
	
	endif;

	if( get_field('home_selection', 'options') == 'full' ):
	
		echo '<header data-stellar-background-ratio="0.9" class="header_home home_default_image">';	
			
	elseif( get_field('home_selection', 'options') == 'fixed' ):
		
		echo '<header data-stellar-background-ratio="0.9" class="header_home home_default_image fixed_height">';
		
	elseif( get_field('home_selection', 'options') == 'slide' ):
	
		echo '<header class="header_home home_default_image slideshow"><div id="slideshow_wrapper">';
		
		$slides = get_field('slideshow','options');
		
		$counter = 1;
		
		if( $slides ):
			
			foreach( $slides as $slide ):
			
				echo '<div data-stellar-background-ratio="0.9" class="image_slide slide_' . $counter . '">';
				
				if( $slide['caption'] ):
				
					echo '<div data-stellar-ratio="0.75" class="caption">';
				
					echo $slide['caption'];
					
					echo '</div>';
					
				endif;
				
				echo '</div>';
				
				$counter++;
			
			endforeach;
				
		endif;
		
		echo '</div>';
		
	elseif( get_field('home_selection', 'options') == 'slidefix' ):
	
		echo '<header class="header_home home_default_image slideshow slideshow_fixed"><div id="slideshow_wrapper">';
		
		$slides = get_field('slideshow','options');
		
		$counter = 1;
		
		if( $slides ):
			
			foreach( $slides as $slide ):
			
				echo '<div data-stellar-background-ratio="0.9" class="image_slide slide_' . $counter . '">';
				
				if( $slide['caption'] ):
				
					echo '<div data-stellar-ratio="0.75" class="caption">';
				
					echo $slide['caption'];
					
					echo '</div>';
					
				endif;
				
				echo '</div>';
				
				$counter++;
			
			endforeach;
				
		endif;
		
		echo '</div>';
			
	endif;
	
	if( get_field('imageslideshow_overlay', 'options') ):
	
		echo '<div class="image_overlay"></div>';
	
	endif;
	
	get_template_part( 'sidebars/sidebar' , 'contact-information' );
		
	get_template_part( 'headers/header' , 'nav' );
	
	if( get_field('home_logo','options') != 'none'):
	
		if( get_field('home_logo_location', 'options') == 'left' ):
		
			echo '<div id="home_logo" class="home_logo_left" data-stellar-ratio="0.75">';
			
		endif;
		
		if( get_field('home_logo_location', 'options') == 'center' ):
		
			echo '<div id="home_logo" class="home_logo_center" data-stellar-ratio="0.75">';
			
		endif;
		
		if( get_field('home_logo_location', 'options') == 'right' ):
		
			echo '<div id="home_logo" class="home_logo_right" data-stellar-ratio="0.75">';
			
		endif;
			
		get_template_part( 'logos/logo', 'home' );
			
		echo '<div id="home_page_nav">';
				
		wp_nav_menu( array( 'theme_location' => 'home_page_nav' ) );
				
		echo '</div></div>';
		
	else :
			
		if ( has_nav_menu( 'home_page_nav' ) ):
		
			if( get_field('home_logo_location', 'options') == 'left' ):
		
				echo '<div id="home_logo" class="home_logo_left" data-stellar-ratio="0.75">';
				
			endif;
			
			if( get_field('home_logo_location', 'options') == 'center' ):
			
				echo '<div id="home_logo" class="home_logo_center" data-stellar-ratio="0.75">';
				
			endif;
			
			if( get_field('home_logo_location', 'options') == 'right' ):
			
				echo '<div id="home_logo" class="home_logo_right" data-stellar-ratio="0.75">';
				
			endif;
			
			echo '<div id="home_page_nav">';
					
				wp_nav_menu( array( 'theme_location' => 'home_page_nav' ) );
					
			echo '</div></div>';
			     
		endif;

	endif;

	echo '</header><header class="header_mobile_home home_default_image">';
	
	get_template_part( 'navs/nav', 'mobile' );
	
	if( get_field('imageslideshow_overlay', 'options') ):
		
		echo '<div class="image_overlay"></div>';
		
	endif;
	
	if( get_field('home_logo','options') != 'none'):
	
		echo '<div id="home_logo">';
			
		get_template_part( 'logos/logo', 'home' );
			
		echo '<div id="home_page_nav">';
				
			wp_nav_menu( array( 'theme_location' => 'home_page_nav' ) );
				
		echo '</div></div>';
	
	else :
	
		if ( has_nav_menu( 'home_page_nav' ) ):
		
			echo '<div id="home_logo"><div id="home_page_nav">';
			
				wp_nav_menu( array( 'theme_location' => 'home_page_nav' ) );
				
			echo '</div></div>';
		
		endif;
	
	endif;
	
	echo '</header>';
	
?>