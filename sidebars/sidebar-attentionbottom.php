<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
	if ( is_active_sidebar( 'attention-sidebar-2' ) ) :
	
		if( get_field('attention_box_style', 'options') == 'vertical' ):
		
			echo '<div id="attention_bar" class="vertical_bar">';
		
		else :
		
			echo '<div id="attention_bar" class="horizontal_bar">';
		
		endif;
	
		echo '<div class="attention_bar_top">';
				
			dynamic_sidebar( 'attention-sidebar-2' );
				        
		echo '</div></div>';
	
	endif; 

?>
