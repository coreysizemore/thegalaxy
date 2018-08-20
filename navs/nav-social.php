<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/

	echo '<nav id="social_nav">';
						
		if( have_rows('business_information', 'options') ):
							
		echo '<ul class="social_info">';
					
			while ( have_rows('business_information', 'options') ) : the_row();
								
				while ( have_rows('social_accounts', 'options') ) : the_row();
							
					if( get_sub_field('social_url', 'options')):
										
						echo '<li><a href="';
											
						the_sub_field('social_url', 'options');
											
						echo '" target="_blank">';
											
						the_sub_field('social_url', 'options');
											
						echo '</a></li>';
											
					endif;
										
				endwhile;
									
			endwhile;
								
			echo '</ul>';
							
		else :
									
		endif;				
	
	echo '</nav>';

?>