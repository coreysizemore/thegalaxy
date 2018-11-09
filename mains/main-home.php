<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	
	if( get_field('secondary_navigation') == 'display' ):
	
		if ( has_nav_menu( 'secondary_nav' ) ):
		
	    	echo get_template_part( 'misc/secondarynav' );
	    	    	
	    endif;
    
    endif;
    
    if ( is_active_sidebar( 'attention-sidebar-1' ) ):
	 
		get_template_part( 'sidebars/sidebar' , 'attentiontop' );
	
	endif;

	if( get_field('display_call_out_boxes') == 'display' ):
	
		get_template_part( 'misc/calloutboxes' );
	
	endif;

	echo '<div id="main" class="';
	
	echo basename(get_permalink());
	
	echo '">';
	
	if( get_field('select_a_custom_element') != 'none' && get_field('custom_element_location') == 'above' ):
			
		get_template_part( 'custom/customelements' );
	
	elseif( get_field('select_a_custom_element_2') != 'none' && get_field('custom_element_location_2') == 'above' ):
		
		get_template_part( 'custom/customelements2' );
		
	elseif( get_field('select_a_custom_element_3') != 'none' && get_field('custom_element_location_3') == 'above' ):
		
		get_template_part( 'custom/customelements3' );
				
	endif;
	
	if( get_field('default_editor') == 'display'):
	
		echo '<div class="default_editor"><div class="container"><div class="row gutters">';
	
		if( get_field('sidebar_selection') == 'right' ):
	
			echo '<div class="col_8"><div class="content">';
	
			get_template_part( 'loops/loop', 'page' );
			
			if( get_field('select_a_custom_element') != 'none' && get_field('custom_element_location') == 'inside' ):
			
				get_template_part( 'custom/customelements' );
			
			elseif( get_field('select_a_custom_element_2') != 'none' && get_field('custom_element_location_2') == 'inside' ):
				
				get_template_part( 'custom/customelements2' );
				
			elseif( get_field('select_a_custom_element_3') != 'none' && get_field('custom_element_location_3') == 'inside' ):
				
				get_template_part( 'custom/customelements3' );
						
			endif;

			if( have_rows('gallery_content') ):
			
				get_template_part( 'misc/gallery' );
				
			endif;

			if( have_rows('accordion_content') ):
			
				get_template_part( 'misc/accordion' );
				
			endif;

			if( have_rows('tabs_content') ):
			
				get_template_part( 'misc/tabs' );
				
			endif;

			echo '</div></div><div class="col_4">';
			
			get_template_part( 'sidebars/sidebar' , 'primary' );
			
			if( get_field('select_a_custom_element') != 'none' && get_field('custom_element_location') == 'sidebar' ):
			
				get_template_part( 'custom/customelements' );
			
			elseif( get_field('select_a_custom_element_2') != 'none' && get_field('custom_element_location_2') == 'sidebar' ):
				
				get_template_part( 'custom/customelements2' );
				
			elseif( get_field('select_a_custom_element_3') != 'none' && get_field('custom_element_location_3') == 'sidebar' ):
				
				get_template_part( 'custom/customelements3' );
						
			endif;
			
			echo '</div>';
		
		endif;
	
		if( get_field('sidebar_selection') == 'none' ):
		
			echo '<div class="col_12"><div class="content">';
			
			get_template_part( 'loops/loop', 'page' );
			
			if( get_field('select_a_custom_element') != 'none' && get_field('custom_element_location') == 'inside' ):
			
				get_template_part( 'custom/customelements' );
			
			elseif( get_field('select_a_custom_element_2') != 'none' && get_field('custom_element_location_2') == 'inside' ):
				
				get_template_part( 'custom/customelements2' );
				
			elseif( get_field('select_a_custom_element_3') != 'none' && get_field('custom_element_location_3') == 'inside' ):
				
				get_template_part( 'custom/customelements3' );
						
			endif;
			
			if( have_rows('gallery_content') ):
			
				get_template_part( 'misc/gallery' );
				
			endif;

			if( have_rows('accordion_content') ):
			
				get_template_part( 'misc/accordion' );
				
			endif;

			if( have_rows('tabs_content') ):
			
				get_template_part( 'misc/tabs' );
				
			endif;
		
			echo '</div></div>';
		
		endif;
		
		if( get_field('sidebar_selection') == 'left' ):
		
			echo '<div class="col_4">';
			
			get_template_part( 'sidebars/sidebar' , 'primary' );
			
			if( get_field('select_a_custom_element') != 'none' && get_field('custom_element_location') == 'sidebar' ):
			
				get_template_part( 'custom/customelements' );
			
			elseif( get_field('select_a_custom_element_2') != 'none' && get_field('custom_element_location_2') == 'sidebar' ):
				
				get_template_part( 'custom/customelements2' );
				
			elseif( get_field('select_a_custom_element_3') != 'none' && get_field('custom_element_location_3') == 'sidebar' ):
				
				get_template_part( 'custom/customelements3' );
						
			endif;
			
			echo '</div><div class="col_8"><div class="content">';
			
			get_template_part( 'loops/loop', 'page' );
			
			if( get_field('select_a_custom_element') != 'none' && get_field('custom_element_location') == 'inside' ):
			
				get_template_part( 'custom/customelements' );
			
			elseif( get_field('select_a_custom_element_2') != 'none' && get_field('custom_element_location_2') == 'inside' ):
				
				get_template_part( 'custom/customelements2' );
				
			elseif( get_field('select_a_custom_element_3') != 'none' && get_field('custom_element_location_3') == 'inside' ):
				
				get_template_part( 'custom/customelements3' );
						
			endif;
		
			if( have_rows('gallery_content') ):
			
				get_template_part( 'misc/gallery' );
				
			endif;

			if( have_rows('accordion_content') ):
			
				get_template_part( 'misc/accordion' );
				
			endif;

			if( have_rows('tabs_content') ):
			
				get_template_part( 'misc/tabs' );
				
			endif;
			
			echo '</div></div>';
		
		endif;
		
		echo '</div></div></div>';
	
	endif;
	
	if( get_field('select_a_custom_element') != 'none' && get_field('custom_element_location') == 'below' ):
			
		get_template_part( 'custom/customelements' );
	
	elseif( get_field('select_a_custom_element_2') != 'none' && get_field('custom_element_location_2') == 'below' ):
		
		get_template_part( 'custom/customelements2' );
		
	elseif( get_field('select_a_custom_element_3') != 'none' && get_field('custom_element_location_3') == 'below' ):
		
		get_template_part( 'custom/customelements3' );
				
	endif;
	
	if(is_user_logged_in()):
	
		echo '<div class="edit_button"><span class="edit">';
		
		edit_post_link();
		
		echo '</span></div>';
	
	endif;
	
	echo '</div>';
	
	get_template_part( 'misc/parallax' );

	if( get_field('attention_bottom' ) == 'display'):
	
		if ( is_active_sidebar( 'attention-sidebar-2' ) ):
	 
			get_template_part( 'sidebars/sidebar' , 'attentionbottom' );
		
		endif;
		
	endif;
	
	if( get_field('promotion_pop_up','options') ):
	
		get_template_part( 'misc/promopopup' );
	
	endif;
?>