<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
?>

<?php
		
	if( get_field('search_location', 'options') == 'topright' ):
		
	echo '<a href="#" id="searchopen" class="search_top_right">';
		
	elseif( get_field('search_location', 'options') == 'topleft' ):
		
	echo '<a href="#" id="searchopen" class="search_top_left">';
		
	elseif( get_field('search_location', 'options') == 'bottomright' ):
		
	echo '<a href="#" id="searchopen" class="search_bottom_right">';
		
	elseif( get_field('search_location', 'options') == 'bottomleft' ):
		
	echo '<a href="#" id="searchopen" class="search_bottom_left">';
		
	endif;
		
?>
	
	<span class="icon icon-search"></span>
	
</a>

<div id="search">

	<a href="#" id="searchclose"><span class="icon icon-close"></span></a>
	
	<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
		
		<span class="icon icon-search"></span>
			
		<input placeholder="Search the website." class="text" type="text" name="s" id="s" />
		
		<input type="submit" class="submit button" name="submit" value="<?php _e('Search');?>" />
	
	</form>

</div>