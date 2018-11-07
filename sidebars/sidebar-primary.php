<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
	if ( is_active_sidebar( 'primary-sidebar' ) ) :
	
		echo '<div class="sidebar">';
				
			dynamic_sidebar( 'primary-sidebar' );
		
		echo '</div>';
	
	else :
	
		if( get_field('default_sidebar') == 'utilize'):
	
			echo '<div class="sidebar">';
							
			echo '<div class="business_information_wrapper">';
			
			if( get_field('sidebar_logo', 'options')):
			
				$image = get_field('sidebar_logo', 'options');
				
				echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
			
			endif;
			
			if( get_field('hours_title', 'options')):
			
				echo '<h3>';
					
				the_field('hours_title', 'options');
					        
				echo '</h3>';
				
			endif;
			
			echo '<ul class="business_hours">';
			
			if( get_field('monday_hours', 'options')):
			
				echo '<li><span>Monday:</span><span>';
					        
				the_field('monday_hours', 'options');
				
				echo '</li>';
			
			endif;
			
			if( get_field('tuesday_hours', 'options')):
				
				echo '<li><span>Tuesday:</span><span>';
					        
				the_field('tuesday_hours', 'options');
				
				echo '</li>';
			
			endif;
			
			if( get_field('wednesday_hours', 'options')):
				
				echo '<li><span>Wednesday:</span><span>';
					        
				the_field('wednesday_hours', 'options');
				
				echo '</li>';
			
			endif;
			
			if( get_field('thursday_hours', 'options')):
				
				echo '<li><span>Thursday:</span><span>';
					        
				the_field('thursday_hours', 'options');
				
				echo '</li>';
			
			endif;
			
			if( get_field('friday_hours', 'options')):
				
				echo '<li><span>Friday:</span><span>';
				
				the_field('friday_hours', 'options');
				
				echo '</li>';
			
			endif;
			
			if( get_field('saturday_hours', 'options')):
				
				echo '<li><span>Saturday:</span><span>';
					        
				the_field('saturday_hours', 'options');
				
				echo '</li>';
			
			endif;
			
			if( get_field('sunday_hours', 'options')):
				
				echo '<li><span>Sunday:</span><span>';
					        
				the_field('sunday_hours', 'options');
				        
				echo '</li>';
			
			endif;
			
			if( get_field('hours_note', 'options')):
			
				echo '<p>';
					
				the_field('hours_note', 'options');
					
				echo '</p>';
				
			endif;
			
			echo '</ul>';
			
			echo '<div class="contact_info">';
			
			if( get_field('business_address','options') ):
				
				get_template_part( 'misc/businessaddress' );
			
			endif;
			
			echo '</div>';
			
			echo '<nav class="contact_info">';
			
			if( get_field('phone_number','options') ):
				
				get_template_part( 'misc/phonenumber' );
			
			endif;
			
			if( get_field('fax_number','options') ):
				
				get_template_part( 'misc/faxnumber' );
			
			endif;
			
			if( get_field('email_address','options') ):
				
				get_template_part( 'misc/emailaddress' );
			
			endif;
				
			echo '</nav>';
			
			$sidebarlinks = get_field('sidebar_links','option');
							
			if( $sidebarlinks ):
			
				echo '<ul class="sidebar_links">';
						
				foreach( $sidebarlinks as $link ):
				
					echo '<li>';
				
					if( $link['link_type'] == 'internal' ):
					
						echo '<a href="' . $link['internal_link'] . '">';
					
					elseif( $link['link_type'] == 'external' ):
					
						echo '<a href="' . $link['external_link'] . '" target="_blank">';
					
					endif;
					
					if( $link['link_display_text'] ):
					
						echo $link['link_display_text'];
						
					else :
					
						echo 'Default Button';
					
					endif;
					
					echo '</a>';
					
					echo '</li>';
																				
				endforeach;
				
				echo '</ul>';
											
			endif;
			
			echo '</div>';			
			
			echo '</div>';
			
		endif;
		
	endif; 

?>
