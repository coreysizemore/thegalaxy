<?php
	
	if( get_field('select_a_custom_element') == 'ce1' ):
	
		get_template_part( 'custom/customelement1' );
	
	elseif( get_field('select_a_custom_element') == 'ce2' ):
	
		get_template_part( 'custom/customelement2' );
	
	elseif( get_field('select_a_custom_element') == 'ce3' ):
	
		get_template_part( 'custom/customelement3' );
	
	elseif( get_field('select_a_custom_element') == 'ce4' ):
	
		get_template_part( 'custom/customelement4' );
	
	elseif( get_field('select_a_custom_element') == 'ce5' ):
	
		get_template_part( 'custom/customelement5' );
		
	elseif( get_field('select_a_custom_element') == 'ce6' ):
	
		get_template_part( 'custom/customelement6' );
		
	elseif( get_field('select_a_custom_element') == 'ce7' ):
	
		get_template_part( 'custom/customelement7' );
		
	elseif( get_field('select_a_custom_element') == 'ce8' ):
	
		get_template_part( 'custom/customelement8' );
	
	endif;
	
?>