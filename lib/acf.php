<?php
	
	/*
		Generated ACF Pages
	*/


	if( function_exists('acf_add_options_page') ) {
		
		acf_add_options_page(array(
			'page_title' => 'Theme Settings',
			'menu_title' => 'Theme Settings',
			'menu_slug' => 'theme-settings',
			'capability' => 'edit_posts',
			'parent_slug' => '',
			'position' => false,
			'icon_url' => false,
			'redirect' => false
		));
		
		acf_add_options_page(array(
			'page_title' => 'Website Content',
			'menu_title' => 'Website Content',
			'menu_slug' => 'website-content',
			'capability' => 'edit_posts',
			'parent_slug' => '',
			'position' => false,
			'icon_url' => false,
			'redirect' => false
		));
	
	}
	
?>