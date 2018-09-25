<?php 
	
	if(get_field('parallax_feature') == 'custom'):
	
		echo '<div class="parallax">';
	
			if(get_field('parallax_content')):
					
				echo '<div class="filter"><div class="container"><div class="row gutters"><div class="col_12">' . get_field('parallax_content') . '</div></div></div></div>';
					
			endif;
			
		echo '</div>';
		
	elseif(get_field('parallax_feature') == 'default'):
	
		if(get_field('use_parallax_feature','options')):
	
			echo '<div class="parallax">';

			if(get_field('parallax','options')):
					
				echo '<div class="filter"><div class="container"><div class="row gutters"><div class="col_12">' . get_field('parallax','options') . '</div></div></div></div>';
					
			endif;
			
			echo '</div>';
					
		endif;

	endif;

?>