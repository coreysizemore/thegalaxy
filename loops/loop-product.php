<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
?>

<?php while ( have_posts() ) : the_post(); ?>

	<article class="blog_entry" id="post-<?php the_ID(); ?>">
                                
		<h1 class="entry_title"><?php csdd_the_title(); ?></h1>
			                   
		<?php the_content(); ?>
		 
	</article>
                        
<?php endwhile; ?>