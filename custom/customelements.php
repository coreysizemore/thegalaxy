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
	
	endif;
	
?>