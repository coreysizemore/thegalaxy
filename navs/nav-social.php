<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
?>

<nav id="social_nav">
	
	<?php
					
		if( get_field('display_top_bar', 'options')):
						
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
						
		endif;
						
	?>
	
</nav>