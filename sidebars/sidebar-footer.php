<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
	if( get_field('footer_type', 'options') == 'standard'):
	
		echo '<footer><div class="container"><div class="row gutters"><div class="col_3 first"><div id="footer_sidebar_1" class="footer_sidebar">';
							
		if ( is_active_sidebar( 'footer-sidebar-1' ) ) : 
		
			dynamic_sidebar( 'footer-sidebar-1' ); 
						            
		else :
		
			echo '<p>You need to drag a widget into your sidebar in the WordPress Admin, test.</p>';
							
		endif;
							        
		echo '</div></div><div class="col_3"><div id="footer_sidebar_2" class="footer_sidebar">';
				
		if ( is_active_sidebar( 'footer-sidebar-2' ) ) : 
		
			dynamic_sidebar( 'footer-sidebar-2' );
						            
		else : 
		
			echo '<p>You need to drag a widget into your sidebar in the WordPress Admin, test.</p>';
							
		endif;
							        
		echo '</div></div><div class="col_3"><div id="footer_sidebar_3" class="footer_sidebar">';
				
		if ( is_active_sidebar( 'footer-sidebar-3' ) ) : 
		
			dynamic_sidebar( 'footer-sidebar-3' );
						            
		else : 
		
			echo '<p>You need to drag a widget into your sidebar in the WordPress Admin, test.</p>';
							
		endif;
							        
		echo '</div></div><div class="col_3 last"><div id="footer_sidebar_4" class="footer_sidebar">';
				
		if ( is_active_sidebar( 'footer-sidebar-4' ) ) : 
		
			dynamic_sidebar( 'footer-sidebar-4' ); 
						            
		else : 
		
			echo '<p>You need to drag a widget into your sidebar in the WordPress Admin, test.</p>';
							
		endif; 
							        
		echo '</div></div></div></div></footer>';
		
	elseif( get_field('footer_type', 'options') == 'simple'):
	
		echo '<footer><div class="container"><div class="row gutters"><div class="col_12">';
						
		get_template_part( 'misc/footerlogo' );
						
		echo '</div></div></div></footer>';
		
	elseif( get_field('footer_type', 'options') == 'none'):
	
	endif; 

?>
