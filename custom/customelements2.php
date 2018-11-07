<?php
	
	if( get_field('select_a_custom_element_2') == 'ce1' ):
	
		get_template_part( 'custom/customelement1' );
	
	elseif( get_field('select_a_custom_element_2') == 'ce2' ):
	
		get_template_part( 'custom/customelement2' );
	
	elseif( get_field('select_a_custom_element_2') == 'ce3' ):
	
		get_template_part( 'custom/customelement3' );
	
	elseif( get_field('select_a_custom_element_2') == 'ce4' ):
	
		get_template_part( 'custom/customelement4' );
	
	elseif( get_field('select_a_custom_element_2') == 'ce5' ):
	
		get_template_part( 'custom/customelement5' );
		
	elseif( get_field('select_a_custom_element_2') == 'ce6' ):
	
		get_template_part( 'custom/customelement6' );
		
	elseif( get_field('select_a_custom_element_2') == 'ce7' ):
	
		get_template_part( 'custom/customelement7' );
		
	elseif( get_field('select_a_custom_element_2') == 'ce8' ):
	
		get_template_part( 'custom/customelement8' );
	
	endif;
	
?>