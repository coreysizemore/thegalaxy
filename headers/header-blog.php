<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
	if( get_field('member_login_bar', 'options') ):
	
		get_template_part( 'misc/loggedin' );
	
	endif;

	echo '<header class="header_page header_page_home page_default_image ';
	
	basename(get_permalink());
	
	echo '" data-stellar-background-ratio="0.9">';
	
	get_template_part( 'sidebars/sidebar' , 'contact-information' );
	
	if( get_field('imageslideshow_overlay', 'options') ):
		
		echo '<div class="image_overlay"></div>';
		
	endif;

	get_template_part( 'headers/header' , 'nav' );
				
	echo '<div id="page_title" data-stellar-ratio="0.75"><h1 class="heading">Latest News</h1><h2 class="subheading">Below is our latest news entries.</h2></div>';	
	
	echo '</header>';

	echo '<header class="header_page header_page_mobile page_default_image blog ';
	
	basename(get_permalink());
	
	echo '">';
	
	get_template_part( 'navs/nav', 'mobile' );
	
	if( get_field('imageslideshow_overlay', 'options') ):
		
		echo '<div class="image_overlay"></div>';
		
	endif;
	
	echo '<div id="page_title"><h1 class="heading">Latest News</h1><h2 class="subheading">Below is our latest news entries.</h2></div>';
	
	echo '</header>';
	
?>