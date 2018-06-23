<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
	get_template_part( 'sidebars/sidebar' , 'announcement' );

	if( get_field('display_call_out_boxes') ):
	
		get_template_part( 'misc/calloutboxes' );
	
	endif;

	echo '<div class="main ';
	
	echo basename(get_permalink());
	
	echo '">';
	
	if( get_field('default_editor')):
	
		echo '<div class="default_editor"><div class="container"><div class="row gutters">';
	
		if( get_field('sidebar_selection') == 'right' ):
	
			echo '<div class="col_9"><div class="content">';
	
			get_template_part( 'loops/loop', 'page' );

			if( get_field('gallery') ):
			
				get_template_part( 'misc/gallery' );
				
			endif;

			if( get_field('accordion') ):
			
				get_template_part( 'misc/accordion' );
				
			endif;

			if( get_field('tabs') ):
			
				get_template_part( 'misc/tabs' );
				
			endif;

			echo '</div></div><div class="col_3">';
			
			get_template_part( 'sidebars/sidebar' , 'primary' );
			
			echo '</div>';
		
		endif;
	
		if( get_field('sidebar_selection') == 'none' ):
		
			echo '<div class="col_12"><div class="content">';
			
			get_template_part( 'loops/loop', 'page' );
			
			if( get_field('gallery') ):
			
				get_template_part( 'misc/gallery' );
				
			endif;
			
			if( get_field('accordion') ):
			
				get_template_part( 'misc/accordion' );
				
			endif;
		
			if( get_field('tabs') ):
			
				get_template_part( 'misc/tabs' );
				
			endif;
		
			echo '</div></div>';
		
		endif;
		
		if( get_field('sidebar_selection') == 'left' ):
		
			echo '<div class="col_3">';
			
			get_template_part( 'sidebars/sidebar' , 'primary' );
			
			echo '</div><div class="col_9"><div class="content">';
			
			get_template_part( 'loops/loop', 'page' );
		
			if( get_field('gallery') ):
			
				get_template_part( 'misc/gallery' );
				
			endif;
			
			if( get_field('accordion') ):
			
				get_template_part( 'misc/accordion' );
				
			endif;
		
			if( get_field('tabs') ):
			
				get_template_part( 'misc/tabs' );
				
			endif;
			
			echo '</div></div>';
		
		endif;
		
		echo '</div></div></div>';
	
	endif;
	
	if(is_user_logged_in()):
	
		echo '<div class="edit_button"><span class="edit">';
		
		edit_post_link();
		
		echo '</span></div>';
	
	endif;
	
	echo '</div>';
	
	get_template_part( 'misc/parallax' );

	if(get_field('appointment_feature')):

		get_template_part( 'sidebars/sidebar' , 'appointment' );
		
	endif;
					
?>