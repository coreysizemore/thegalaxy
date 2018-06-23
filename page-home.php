<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
		Template Name: Page - Home
	*/
	
	get_header();

	get_template_part( 'headers/header', 'home' );
	
	get_template_part( 'mains/main', 'home' );
	
	get_footer(); 

?>