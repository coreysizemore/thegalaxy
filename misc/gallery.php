<?php
			
	echo '<div id="gallery">';
				
	while ( have_rows('gallery_content') ) : the_row();
					        
		echo '<div class="gallery_wrapper"><a href="';
					        
		the_sub_field('gallery_image');
				
		echo '" class="fancybox" rel="group"><div class="filter"><span class="fas fa-expand-arrows-alt"></span></div><img src="';
				
		the_sub_field('gallery_image');
					
		echo '" alt="gallery image" /></a></div>';
					
	endwhile;
				
	echo '</div>';
	
?>