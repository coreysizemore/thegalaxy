<?php
		
	echo '<div id="tabs" class="content">';
			
	echo '<ul>';
			
	while ( have_rows('tabs_content') ) : the_row();
				
		echo '<li><a href="#tabs-';
				
		the_sub_field('section_number');
				
		echo '">';
				        
		the_sub_field('section_heading');
				
		echo '</a></li>';
				
	endwhile;
		
	echo '</ul>';
			
	while ( have_rows('tabs_content') ) : the_row();
				
		echo '<div id="tabs-';
				
		the_sub_field('section_number');
				
		echo '">';
				        
		the_sub_field('section_content');
				
		echo '</div>';
				
	endwhile;
			
	echo '</ul>';
			
	echo '</div>';
	
?>