<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
		Template Name: Page - Default
	*/
	
	get_header();
	 
	get_template_part( 'headers/header', 'page' );
	
	get_template_part( 'mains/main', 'page' );
	
	get_footer(); 

?>