<?php
	
	if( get_field('navigation_location', 'options') == 'top' ):
	
		echo '<div id="nav_bar" class="top_navigation"><div class="container"><div class="row gutters"><div class="col_2">';
		
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
	
	elseif( get_field('navigation_location', 'options') == 'bottom' ):
	
		echo '<div id="nav_bar" class="bottom_navigation"><div class="container"><div class="row gutters"><div class="col_2">';
		
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
	
	elseif( get_field('navigation_location', 'options') == 'full' ):
	
		echo '<div id="nav_bar" class="full_navigation"><div class="container"><div class="row gutters"><div class="col_12">';
		
		if( get_field('navigation_logo_location', 'options') == 'left' ):
		
			echo '<div class="nav_logo_location_left">';
		
		elseif( get_field('navigation_logo_location', 'options') == 'center' ):
		
			echo '<div class="nav_logo_location_center">';
		
		elseif( get_field('navigation_logo_location', 'options') == 'right' ):
		
			echo '<div class="nav_logo_location_right">';
		
		endif;
		
		get_template_part( 'logos/logo', 'main' );
		
		echo '</div></div></div>';
		
		if( get_field('header_social_location', 'options') == 'both' ):
	
			echo '<div class="row gutters"><div class="col_10">';
			
			echo get_template_part( 'navs/nav', 'main' );
			
			echo '</div><div class="col_2">';
			
			echo get_template_part( 'navs/nav', 'social' );
			
			echo '</div></div>';
		
		elseif( get_field('header_social_location', 'options') == 'topbar' ):
		
			echo '<div class="row gutters"><div class="col_12">';
			
			echo get_template_part( 'navs/nav', 'main' );
			
			echo '</div></div>';
		
		elseif( get_field('header_social_location', 'options') == 'mainbar' ):
		
			echo '<div class="row gutters"><div class="col_10">';
			
			echo get_template_part( 'navs/nav', 'main' );
			
			echo '</div><div class="col_2">';
			
			echo get_template_part( 'navs/nav', 'social' );
			
			echo '</div></div>';
		
		elseif( get_field('header_social_location', 'options') == 'none' ):
		
			echo '<div class="row gutters"><div class="col_12">';
			
			echo get_template_part( 'navs/nav', 'main' );
			
			echo '</div></div>';
		
		endif;
		
		echo '</div></div>';
	
	endif;
		
?>