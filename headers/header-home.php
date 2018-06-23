<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	
	if( get_field('display_search', 'options')):

		get_search_form();

	endif;
	
	if( get_field('member_login_bar', 'options') ):
	
		if(is_user_logged_in()):
		
			$current_user = wp_get_current_user();
			$display_name = $current_user->display_name;
			$username = $current_user->user_login;
				 
			if($display_name):
				 
				echo '<div id="loginbar"><div class="container"><div class="row gutters"><div class="col_12"><div class="username"><span>Logged in as <span>';
				 
				echo $display_name;
				 	
				echo '</span><a href="';
				
				echo wp_logout_url( home_url() );
				
				echo '">Logout</a><span></div></div></div></div></div>';
				 	
			elseif($username):
				 
				echo '<div id="loginbar"><div class="container"><div class="row gutters"><div class="col_12"><div class="username"><span>';
				 
				echo $username;
				 	
				echo '<span></div></div></div></div></div>';
				 
			else:	
				 	
			endif;
		
		else:
		
			echo '<div id="loginbar"><div class="container"><div class="row gutters"><div class="col_12"><div class="username"><span><a href="';
			
			echo home_url('wp-admin');
				
			echo '">Member Login</a><span></div></div></div></div></div>';
			
		endif;
	
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
		
	if( get_field('navigation_location', 'options') == 'top' ):
	
		echo '<div id="nav_bar" class="top_navigation">';
	
	elseif( get_field('navigation_location', 'options') == 'bottom' ):
	
		echo '<div id="nav_bar" class="bottom_navigation">';
	
	elseif( get_field('navigation_location', 'options') == 'left' ):
	
		echo '<div id="nav_bar" class="left_navigation">';
	
	elseif( get_field('navigation_location', 'options') == 'right' ):
	
		echo '<div id="nav_bar" class="right_navigation">';
	
	endif;

	echo '<div class="container"><div class="row gutters"><div class="col_2">';
		
	get_template_part( 'logos/logo', 'main' );
	
	echo '</div>';

	if( get_field('header_social_location', 'options') == 'both' ):
	
		echo '<div class="col_8">';
		
		echo get_template_part( 'navs/nav', 'main' );
		
		echo '</div><div class="col_2">';
		
		echo get_template_part( 'navs/nav', 'social' );
		
		echo '</div>';
	
	elseif( get_field('header_social_location', 'options') == 'topbar' ):
	
		echo '<div class="col_10">';
		
		echo get_template_part( 'navs/nav', 'main' );
		
		echo '</div>';
	
	elseif( get_field('header_social_location', 'options') == 'mainbar' ):
	
		echo '<div class="col_8">';
		
		echo get_template_part( 'navs/nav', 'main' );
		
		echo '</div><div class="col_2">';
		
		echo get_template_part( 'navs/nav', 'social' );
		
		echo '</div>';
	
	elseif( get_field('header_social_location', 'options') == 'none' ):
	
		echo '<div class="col_10">';
		
		echo get_template_part( 'navs/nav', 'main' );
		
		echo '</div>';
	
	endif;
				
	echo '</div></div></div>';
	
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