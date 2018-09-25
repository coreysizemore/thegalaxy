<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	
	$phone = get_field('phone_number','options');

	if( $phone ):
	
		echo '<ul>';
		
		foreach( $phone as $ph ):
		
			echo '<li><a href="tel:';
										
			echo $ph['link_number'];
								
			echo '" target="_blank">';
			
			if ($ph['display_icon']) :
			
				echo '<span class="icon icon-';
				
				echo $ph['display_icon'];
				
				echo '"></span>';
			
			endif;
								
			echo $ph['display_number'];
								
			echo '</a></li>';
		
		endforeach;
		
		echo '</ul>';
			
	endif;	

?>