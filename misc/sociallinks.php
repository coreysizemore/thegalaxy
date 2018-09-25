<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	
	$sm = get_field('social_media','options');

	if( $sm ):
	
		echo '<ul>';
		
		foreach( $sm as $s ):
		
			echo '<li><a href="';
										
			echo $s['social_media_link'];
								
			echo '" target="_blank"><span class="icon icon-';
								
			echo $s['social_media_icon'];
								
			echo '"></span></a></li>';
		
		endforeach;
		
		echo '</ul>';
			
	endif;	

?>