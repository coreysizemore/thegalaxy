<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
	get_template_part( 'sidebars/sidebar' , 'footer' );
	
	if( get_field('copyright_bar_style', 'options') == 'fullwidth' ):
	
		echo '<div id="copyright" class="full_width"><div id="copyright_content"><p>';
					
		echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'thegalaxy' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); 
		
		echo ' | <a href="';
		
		echo home_url('wp-admin');
		
		echo '">Admin Login</a> | <span class="designedby">Designed by <a href="http://www.coreysizemore.com" target="_blank">CSDD</a></span></p></div><nav id="social_nav">';
		
		get_template_part( 'misc/sociallinks' );
			
		echo '</nav></div>';
	
	else :
	
		echo '<div id="copyright" class="container_width"><div class="container"><div class="row gutters"><div class="col_12"><div id="copyright_content"><p>';
					
		echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'thegalaxy' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); 
		
		echo ' | <a href="';
		
		echo home_url('wp-admin');
		
		echo '">Admin Login</a> | <span class="designedby">Designed by <a href="http://www.coreysizemore.com" target="_blank">CSDD</a></span></p></div><nav id="social_nav">';
		
		get_template_part( 'misc/sociallinks' );
			
		echo '</nav></div></div></div></div>';
	
	endif;

wp_footer() 
	
?>
	
</body>
</html>