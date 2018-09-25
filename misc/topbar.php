<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	
	if( get_field('top_bar_features', 'options') == 'both' ):
	
		if( get_field('top_bar_style', 'options') == 'fullwidth' ):
	
			echo '<div id="top_bar" class="fullwidth include_both">';
		
			if( get_field('phone_number','options') || get_field('email_address','options')):
			
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
		
			if( get_field('phone_number','options') || get_field('email_address','options')):
			
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
		
			if( get_field('phone_number','options') || get_field('email_address','options')):
			
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
				
				echo '</div>';
			
			endif;
			
			echo '</div>';
			
		elseif( get_field('top_bar_style', 'options') == 'containerwidth' ):
		
			echo '<div id="top_bar" class="containerwidth include_phoneemail"><div class="container"><div class="row gutters"><div class="col_12">';
		
			if( get_field('phone_number','options') || get_field('email_address','options')):
			
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
	
	endif;

?>