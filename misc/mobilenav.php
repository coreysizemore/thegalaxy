<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	
	if( get_field('mobile_header_bar', 'options') == 'advanced' ):
	
		echo '<div class="mobile_navigation_bar">';
		
		get_template_part( 'misc/mobilelogo' );
	
	else :
	
		echo '<div class="mobile_navigation_button">';
	
	endif;
	
?>

	<a href="#" id="mobileopen"><span class="icon icon-menu"></span></a>

</div>

<nav id="mobile_nav">
	
	<div class="mobile_nav_wrapper">
	
		<a href="#" id="mobileclose"><span class="icon icon-close"></span></a>
		
		<nav id="main_nav">
		
			<?php wp_nav_menu( array( 'theme_location' => 'primary_nav' ) ); ?>
			
		</nav>
		
		<div id="mobile_search">
			
			<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
						
				<input placeholder="Search the website." class="text" type="text" name="s" id="s" />
					
				<input type="submit" class="submit button" name="submit" value="<?php _e('Search');?>" />
				
			</form>
				
		</div>
		
		<?php
		
			if( get_field('social_media','options') ):
		
				echo '<nav id="social_nav">';
				
				get_template_part( 'misc/sociallinks' );
				
				echo '</nav>';
			
			endif;	
			
		?>
		
		<div class="bottom_spacing"></div>
	
	</div>
	
</nav>