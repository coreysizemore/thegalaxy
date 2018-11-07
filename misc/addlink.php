<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	
	$addlink = get_field('additional_link','options');

	if( $addlink ):
	
		echo '<ul>';
		
		foreach( $addlink as $em ):
		
			echo '<li><a href="';
										
			echo $em['link_add'];
								
			echo '" target="_blank">';
			
			if ($em['display_icon']) :
			
				echo '<i class="fas fa-';
				
				echo $em['display_icon'];
				
				echo '"></i>';
			
			endif;
								
			echo $em['display_add'];
								
			echo '</a></li>';
		
		endforeach;
		
		echo '</ul>';
			
	endif;	

?>