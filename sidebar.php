<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
?>

<div class="sidebar">
	
    <?php if ( is_active_sidebar( 'sidebar' ) ) : ?> <?php dynamic_sidebar( 'sidebar' ); ?>
            
    <?php else : ?><p>You need to drag a widget into your sidebar in the WordPress Admin</p>
	
	<?php endif; ?>
	        
</div>
