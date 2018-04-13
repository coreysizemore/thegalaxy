<?php 
	
	if(get_field('parallax_feature') == 'custom'):
	
		echo '<div class="parallax parallax-home parallax_default_image" data-stellar-background-ratio="0.15">';
	
			if(get_field('parallax_content')):
					
				echo '<div class="filter">' . get_field('parallax_content') . '</div>';
					
			else :
					
				// no parallax feature
					
			endif;
			
		echo '</div>';
		
	elseif(get_field('parallax_feature') == 'default'):
	
		if(get_field('use_parallax_feature','options')):
	
			echo '<div class="parallax parallax-home parallax_default_image" data-stellar-background-ratio="0.15">';

			if(get_field('parallax','options')):
					
				echo '<div class="filter">' . get_field('parallax','options') . '</div>';
					
			else :
				
				// no parallax feature
					
			endif;
			
			echo '</div>';
										
		else :
					
			// no parallax feature
					
		endif;

	endif;

?>