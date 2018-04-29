<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
?>

<?php if ( is_active_sidebar( 'contact-information-sidebar' ) ) : ?>

	<div id="contact_information">
		
		<div class="container">
			
			<div class="row gutters">
				
				<div class="col_12">
		
					<?php dynamic_sidebar( 'contact-information-sidebar' ); ?>
					
				</div>
				
			</div>
			
		</div>
	
	</div>
	
<?php elseif ( get_field('display_top_bar', 'options') ): ?>

	<?php
		
		if( get_field('navigation_location', 'options') == 'top' ):
		
		echo '<div id="contact_information" class="top_navigation">';
		
		elseif( get_field('navigation_location', 'options') == 'bottom' ):
		
		echo '<div id="contact_information" class="bottom_navigation">';
		
		elseif( get_field('navigation_location', 'options') == 'left' ):
		
		echo '<div id="contact_information" class="left_navigation">';
		
		elseif( get_field('navigation_location', 'options') == 'right' ):
		
		echo '<div id="contact_information" class="right_navigation">';
		
		endif;
		
	?>
		
		<div class="container">
			
			<div class="row gutters">
				
				<?php
		
					if( get_field('header_social_location', 'options') == 'both' ):
					
					echo '<div class="col_9">';
					
					elseif( get_field('header_social_location', 'options') == 'topbar' ):
					
					echo '<div class="col_9">';
					
					elseif( get_field('header_social_location', 'options') == 'mainbar' ):
					
					echo '<div class="col_12">';
					
					elseif( get_field('header_social_location', 'options') == 'none' ):
					
					echo '<div class="col_12">';
					
					endif;
					
				?>
					
					<div>
					
						<?php
						
							if( get_field('display_top_bar', 'options')):
							
								if( have_rows('business_information', 'options') ):
								
									echo '<ul class="contact_info">';
									
									if(	count( get_field('business_information', 'options') ) == 1 ):
						
										while ( have_rows('business_information', 'options') ) : the_row();
								
											if( get_sub_field('office_phone', 'options')):
											
												echo '<li><a href="tel:';
												
												the_sub_field('office_phone', 'options');
												
												echo '" target="_blank">';
												
												the_sub_field('office_phone', 'options');
												
												echo '</a></li>';
												
											endif;
											
											if( get_sub_field('office_email', 'options')):
									
												echo '<li><a href="mailto:';
											
												the_sub_field('office_email', 'options');
											
												echo '" target="_blank">';
											
												the_sub_field('office_email', 'options');
											
												echo '</a></li>';
												
											endif;
											
										endwhile;
										
									else :
									
										while ( have_rows('business_information', 'options') ) : the_row();
								
											if( get_sub_field('office_phone', 'options')):
											
												echo '<li><a href="tel:';
												
												the_sub_field('office_phone', 'options');
												
												echo '" target="_blank">';
												
												the_sub_field('office_phone', 'options');
												
												echo '</a></li>';
												
											endif;
											
										endwhile;
										
									endif;
									
									echo '</ul>';
								
								else :
										
								endif;
							
							endif;
							
						?>
						
					</div>
				
				</div>
				
				<?php
					
					if( get_field('display_top_bar', 'options')):
		
						if( get_field('header_social_location', 'options') == 'both' ):
						
						echo '<div class="col_3">';
						
						echo get_template_part( 'navs/nav', 'social' );
						
						echo '</div>';
						
						elseif( get_field('header_social_location', 'options') == 'topbar' ):
						
						echo '<div class="col_3">';
						
						echo get_template_part( 'navs/nav', 'social' );
						
						echo '</div>';
						
						elseif( get_field('header_social_location', 'options') == 'mainbar' ):
						
						// output nothing
						
						elseif( get_field('header_social_location', 'options') == 'none' ):
						
						// output nothing
						
						endif;
					
					endif;
					
				?>
				
			</div>
			
		</div>
		
	</div>

<?php else : ?>

	<!-- You need to drag a widget into your sidebar in the WordPress Admin -->
	
<?php endif; ?>
