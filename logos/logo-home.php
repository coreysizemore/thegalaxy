<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
?>

<div id="logo_home">
	
	<?php if( get_field('home_logo', 'options') == 'image'): ?>
					                
		<?php if ( get_theme_mod( 'themeslug_logo_3' ) ) : ?>
				
			<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo_3' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
			
			<?php if ( get_bloginfo( 'description' ) ) : ?>
			
				<h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
				
			<?php else : ?>
			
			<?php endif; ?>
				    
		<?php else : ?>
				
			<h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
			
			<?php if ( get_bloginfo( 'description' ) ) : ?>
				        
				<h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
			 	
			<?php else : ?>
			 
			<?php endif; ?>
				    
		<?php endif; ?>
	
	<?php elseif( get_field('home_logo', 'options') == 'text'): ?>
	
		<?php if( get_field('home_logo_text', 'options')): ?>
		
			<div class="home_logo_text_wrapper">
		
				<?php echo the_field('home_logo_text', 'options'); ?>
			
			</div>
		
		<?php else : ?>
		
			<h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
			
			<?php if ( get_bloginfo( 'description' ) ) : ?>
				        
				<h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
			 	
			<?php else : ?>
			 
			<?php endif; ?>
		
		<?php endif; ?>
		
	<?php else : ?>
	
		<!-- display nothing -->
	
	<?php endif; ?>
				
</div>