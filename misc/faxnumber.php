<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	
	$fax = get_field('fax_number','options');

	if( $fax ):
	
		echo '<ul>';
		
		foreach( $fax as $fx ):
		
			echo '<li><a href="tel:';
										
			echo $fx['link_number'];
								
			echo '" target="_blank">';
			
			if ($fx['display_icon']) :
			
				echo '<i class="fas fa-';
				
				echo $fx['display_icon'];
				
				echo '"></i>';
			
			endif;
								
			echo $fx['display_number'];
								
			echo '</a></li>';
		
		endforeach;
		
		echo '</ul>';
			
	endif;	

?>