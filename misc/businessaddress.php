<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	
	$address = get_field('business_address','options');

	if( $address ):
	
		echo '<ul>';
		
		foreach( $address as $ad ):
		
			if ($ad['street_address'] || $ad['street_address_cont']):
		
				echo '<li>';
				
				if ($ad['street_address']):
											
					echo $ad['street_address'];
					
				endif;
									
				if ($ad['street_address_cont']):
											
					echo ', ' . $ad['street_address_cont'];
					
				endif;
									
				echo '</li>';
			
			endif;
			
			if ($ad['city'] || $ad['state'] || $ad['zip']):
		
				echo '<li>';
				
				if ($ad['city']):
											
					echo $ad['city'];
					
				endif;
									
				if ($ad['state']):
											
					echo ', ' . $ad['state'];
					
				endif;
				
				if ($ad['zip']):
											
					echo ' ' . $ad['zip'];
					
				endif;
									
				echo '</li>';
			
			endif;
		
		endforeach;
		
		echo '</ul>';
			
	endif;	

?>