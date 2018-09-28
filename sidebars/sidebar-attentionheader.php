<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	
	if( get_field('attention_header_style', 'options') == 'fullwidth' ):
	
		echo '<div id="attention_bar_header" class="full_width">';
		
		echo '<div class="attention_bar_header_content">';
			
			dynamic_sidebar( 'attention-sidebar-3' );
				        
		echo '</div></div>';
	
	else :
	
		echo '<div id="attention_bar_header" class="container_width">';
		
		echo '<div class="container"><div class="row gutters"><div class="col_12">';
		
		echo '<div class="attention_bar_header_content">';
			
			dynamic_sidebar( 'attention-sidebar-3' );
				        
		echo '</div></div></div></div></div>';
	
	endif;

?>
