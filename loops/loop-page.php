<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
?>

<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>">
	                   
		<?php the_content("Continue reading " . the_title('', '', false)); ?>
		 
	</article>
                        
<?php endwhile; ?>
