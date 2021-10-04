<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/

	require_once locate_template('/lib/wordpress.php');
	require_once locate_template('/lib/sidebar.php');
	require_once locate_template('/lib/logo.php');
	require_once locate_template('/lib/acf.php');
	
	require 'plugin-update-checker/plugin-update-checker.php';
	$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
		'https://github.com/coreysizemore/thegalaxy/',
		__FILE__,
		'thegalaxy'
	);
	
	//Set the branch that contains the stable release.
	$myUpdateChecker->setBranch('master');
	
	//Optional: If you're using a private repository, specify the access token like this:
	//$myUpdateChecker->setAuthentication('your-token-here');

?>