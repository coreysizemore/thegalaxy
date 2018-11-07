<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	
	if( get_field('top_bar_features', 'options') == 'both' ):
	
		if( get_field('top_bar_style', 'options') == 'fullwidth' ):
	
			echo '<div id="top_bar" class="fullwidth include_both">';
		
			if( get_field('phone_number','options') || get_field('email_address','options') || get_field('additional_link','options')):
			
				echo '<div class="phone_email_wrapper">';
			
				if( get_field('phone_number','options') ):
				
					echo '<nav id="phone_number">';
					
					get_template_part( 'misc/phonenumber' );
					
					echo '</nav>';
				
				endif;
				
				if( get_field('email_address','options') ):
				
					echo '<nav id="email_address">';
					
					get_template_part( 'misc/emailaddress' );
					
					echo '</nav>';
				
				endif;
				
				if( get_field('additional_link','options') ):
				
					echo '<nav id="add_link">';
					
					get_template_part( 'misc/addlink' );
					
					echo '</nav>';
				
				endif;
				
				echo '</div>';
			
			endif;
			
			if( get_field('social_media','options') ):
			
				echo '<nav id="social_nav">';
				
				get_template_part( 'misc/sociallinks' );
				
				echo '</nav>';
			
			endif;
			
			echo '</div>';
			
		elseif( get_field('top_bar_style', 'options') == 'containerwidth' ):
		
			echo '<div id="top_bar" class="containerwidth include_both"><div class="container"><div class="row gutters"><div class="col_12">';
		
			if( get_field('phone_number','options') || get_field('email_address','options') || get_field('additional_link','options')):
			
				echo '<div class="phone_email_wrapper">';
			
				if( get_field('phone_number','options') ):
				
					echo '<nav id="phone_number">';
					
					get_template_part( 'misc/phonenumber' );
					
					echo '</nav>';
				
				endif;
				
				if( get_field('email_address','options') ):
				
					echo '<nav id="email_address">';
					
					get_template_part( 'misc/emailaddress' );
					
					echo '</nav>';
				
				endif;
				
				if( get_field('additional_link','options') ):
				
					echo '<nav id="add_link">';
					
					get_template_part( 'misc/addlink' );
					
					echo '</nav>';
				
				endif;
				
				echo '</div>';
			
			endif;
			
			if( get_field('social_media','options') ):
			
				echo '<nav id="social_nav">';
				
				get_template_part( 'misc/sociallinks' );
				
				echo '</nav>';
			
			endif;
			
			echo '</div></div></div></div>';
		
		endif;
			
	elseif( get_field('top_bar_features', 'options') == 'phoneemail' ):
	
		if( get_field('top_bar_style', 'options') == 'fullwidth' ):
	
			echo '<div id="top_bar" class="fullwidth include_phoneemail">';
		
			if( get_field('phone_number','options') || get_field('email_address','options') || get_field('additional_link','options')):
			
				echo '<div class="phone_email_wrapper">';
			
				if( get_field('phone_number','options') ):
				
					echo '<nav id="phone_number">';
					
					get_template_part( 'misc/phonenumber' );
					
					echo '</nav>';
				
				endif;
				
				if( get_field('email_address','options') ):
				
					echo '<nav id="email_address">';
					
					get_template_part( 'misc/emailaddress' );
					
					echo '</nav>';
				
				endif;
				
				if( get_field('additional_link','options') ):
				
					echo '<nav id="add_link">';
					
					get_template_part( 'misc/addlink' );
					
					echo '</nav>';
				
				endif;
				
				echo '</div>';
			
			endif;
			
			echo '</div>';
			
		elseif( get_field('top_bar_style', 'options') == 'containerwidth' ):
		
			echo '<div id="top_bar" class="containerwidth include_phoneemail"><div class="container"><div class="row gutters"><div class="col_12">';
		
			if( get_field('phone_number','options') || get_field('email_address','options') || get_field('additional_link','options')):
			
				echo '<div class="phone_email_wrapper">';
			
				if( get_field('phone_number','options') ):
				
					echo '<nav id="phone_number">';
					
					get_template_part( 'misc/phonenumber' );
					
					echo '</nav>';
				
				endif;
				
				if( get_field('email_address','options') ):
				
					echo '<nav id="email_address">';
					
					get_template_part( 'misc/emailaddress' );
					
					echo '</nav>';
				
				endif;
				
				if( get_field('additional_link','options') ):
				
					echo '<nav id="add_link">';
					
					get_template_part( 'misc/addlink' );
					
					echo '</nav>';
				
				endif;
				
				echo '</div>';
			
			endif;
			
			echo '</div></div></div></div>';
		
		endif;
	
	elseif( get_field('top_bar_features', 'options') == 'socialmedia' ):
	
		if( get_field('top_bar_style', 'options') == 'fullwidth' ):
	
			echo '<div id="top_bar" class="fullwidth include_sm">';

			if( get_field('social_media','options') ):
			
				echo '<nav id="social_nav">';
				
				get_template_part( 'misc/sociallinks' );
				
				echo '</nav>';
			
			endif;
			
			echo '</div>';
			
		elseif( get_field('top_bar_style', 'options') == 'containerwidth' ):
		
			echo '<div id="top_bar" class="containerwidth include_sm"><div class="container"><div class="row gutters"><div class="col_12">';

			if( get_field('social_media','options') ):
			
				echo '<nav id="social_nav">';
				
				get_template_part( 'misc/sociallinks' );
				
				echo '</nav>';
			
			endif;
			
			echo '</div></div></div></div>';
		
		endif;
		
	elseif( get_field('top_bar_features', 'options') == 'custom' ):
	
		echo '<div id="top_bar">';
		
		if( get_field('select_a_custom_element') != 'none' && get_field('custom_element_location') == 'topbar' ):
			
			get_template_part( 'custom/customelements' );
		
		elseif( get_field('select_a_custom_element_2') != 'none' && get_field('custom_element_location_2') == 'topbar' ):
			
			get_template_part( 'custom/customelements2' );
			
		elseif( get_field('select_a_custom_element_3') != 'none' && get_field('custom_element_location_3') == 'topbar' ):
			
			get_template_part( 'custom/customelements3' );
					
		endif;
		
		echo '</div>';
	
	endif;

?>