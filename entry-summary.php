<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<h2><?php the_title(); ?></h2>
	
	<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>

	<?php the_excerpt(); ?>

	<p><?php edit_post_link(); ?></p>

</article>