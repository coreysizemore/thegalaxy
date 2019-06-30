<?php
	
	/*
		Default wordpress functions
	*/
	
	//Enqueue scripts and styles.
	function galaxy_scripts() 
	{	
		wp_enqueue_style( 'google-font-one', 'https://fonts.googleapis.com/css?family=Hind:400,600,700' );
		
		wp_enqueue_style( 'google-font-two', 'https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700' );
		
		wp_enqueue_style( 'google-font-three', 'https://fonts.googleapis.com/css?family=Merriweather:300,400,400i,700' );
		
		wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );
		
		wp_enqueue_style( 'galaxy-style', get_stylesheet_uri() );
		
		wp_enqueue_style( 'galaxy-styles', get_template_directory_uri() . '/css/styles.css' );
		
		wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/fancybox/fancybox.css' );
		
		wp_enqueue_script( 'latest-jquery', 'https://code.jquery.com/jquery-latest.min.js' );
		
		wp_enqueue_script( 'latest-jquery-add', 'https://code.jquery.com/ui/1.12.1/jquery-ui.min.js' );
		
		wp_enqueue_script( 'scroll-fix', get_template_directory_uri() . '/js/scrollfix.min.js' );
		
		wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/fancybox/fancybox.min.js' );
	
		wp_enqueue_script( 'galaxy-scripts', get_template_directory_uri() . '/js/scripts.min.js' );
	}
	
	add_action( 'wp_enqueue_scripts', 'galaxy_scripts' );

	// register menus
	function register_my_menus() {
	  register_nav_menus(
	    array(
	      'primary_nav' => __( 'Primary' ),
	      'secondary_nav' => __( 'Secondary' ),
	      'home_page_nav' => __( 'Home/Slideshow' )
	    )
	  );
	}
	add_action( 'init', 'register_my_menus' );
	
	// Changing excerpt length
	function new_excerpt_length($length) {
		return 20;
	}
	add_filter('excerpt_length', 'new_excerpt_length');
	
	// Changing excerpt more
	function new_excerpt_more($more) {
	return '...';
	}
	add_filter('excerpt_more', 'new_excerpt_more');
	
	//This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );
	
	//Apply do_shortcode() to widgets so that shortcodes will be executed in widgets
	add_filter('widget_text', 'do_shortcode');
	
	//remove admin bar for anyone not an admin
	function remove_admin_bar() {

		if (!current_user_can('administrator') && !is_admin()) {
			show_admin_bar(false);
		}
	}
	add_action('after_setup_theme', 'remove_admin_bar');
	
	add_action( 'wp_enqueue_scripts', 'myphpinformation_scripts' );
	
	function remove_toolbar_items($wp_adminbar) {
		$wp_adminbar->remove_node('wpseo-menu');
		$wp_adminbar->remove_node('comments');
		$wp_adminbar->remove_node('wp-logo');
	}
	
	add_action('admin_bar_menu', 'remove_toolbar_items', 999);
	
	function add_toolbar_items($wp_admin_bar) {
		$wp_admin_bar->add_node( array(
			'id'		=> 'themesettings',
			'title' => 'Theme Settings',
			'href' => get_site_url() . '/wp-admin/admin.php?page=theme-settings',
		) );
		
		$wp_admin_bar->add_node( array(
			'id'		=> 'websitecontent',
			'title' => 'Website Content',
			'href' => get_site_url() . '/wp-admin/admin.php?page=website-content',
		) );
	}
	
	add_action('admin_bar_menu', 'add_toolbar_items', 999);
	
?>