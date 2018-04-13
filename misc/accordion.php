<?php
	
	if( have_rows('accordion_content') ):
		
		echo '<div class="main"><div class="container"><div class="row gutters"><div class="col_12"><div id="accordion" class="content">';
					
		while ( have_rows('accordion_content') ) : the_row();
					        
			echo '<h3>';
					        
			the_sub_field('section_heading');
					
			echo '</h3>';
					
			echo '<div>';
					
			the_sub_field('section_content');
					        
			echo '</div>';
					
		endwhile;
				
		echo '</div></div></div></div></div>';
						
	else :
		
	endif;
	
?>