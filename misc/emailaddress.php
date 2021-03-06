<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	
	$email = get_field('email_address','options');

	if( $email ):
	
		echo '<ul>';
		
		foreach( $email as $em ):
		
			echo '<li><a href="mailto:';
										
			echo $em['link_email'];
								
			echo '" target="_blank">';
			
			if ($em['display_icon']) :
			
				echo '<i class="fas fa-';
				
				echo $em['display_icon'];
				
				echo '"></i>';
			
			endif;
								
			echo $em['display_email'];
								
			echo '</a></li>';
		
		endforeach;
		
		echo '</ul>';
			
	endif;	

?>