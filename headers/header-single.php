<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
?>

<?php
	
	if( get_field('member_login_bar', 'options') ):
	
		if(is_user_logged_in()):
		
			$current_user = wp_get_current_user();
			$display_name = $current_user->display_name;
			$username = $current_user->user_login;
				 
			if($display_name):
				 
				echo '<div id="loginbar"><div class="container"><div class="row gutters"><div class="col_12"><div class="username"><span>Logged in as <span>';
				 
				echo $display_name;
				 	
				echo '</span><a href="';
				
				echo wp_logout_url( home_url() );
				
				echo '">Logout</a><span></div></div></div></div></div>';
				 	
			elseif($username):
				 
				echo '<div id="loginbar"><div class="container"><div class="row gutters"><div class="col_12"><div class="username"><span>';
				 
				echo $username;
				 	
				echo '<span></div></div></div></div></div>';
				 
			else:	
				 	
			endif;
		
		else:
		
			echo '<div id="loginbar"><div class="container"><div class="row gutters"><div class="col_12"><div class="username"><span><a href="';
			
			echo home_url('wp-admin');
				
			echo '">Member Login</a><span></div></div></div></div></div>';
			
		endif;
	
	endif;
		 
?>

<header class="header_page header_page_home page_default_image <?php basename(get_permalink()); ?>" data-stellar-background-ratio="0.9">

	<?php get_template_part( 'sidebars/sidebar' , 'contact-information' ); ?>
	
	<?php
		
		if( get_field('navigation_location', 'options') == 'top' ):
		
		echo '<div id="nav_bar" class="top_navigation">';
		
		elseif( get_field('navigation_location', 'options') == 'bottom' ):
		
		echo '<div id="nav_bar" class="bottom_navigation">';
		
		elseif( get_field('navigation_location', 'options') == 'left' ):
		
		echo '<div id="nav_bar" class="left_navigation">';
		
		elseif( get_field('navigation_location', 'options') == 'right' ):
		
		echo '<div id="nav_bar" class="right_navigation">';
		
		endif;
		
	?>
		
		<div class="container">
			
			<div class="row gutters">
		
				<div class="col_3">
				
					<?php get_template_part( 'logos/logo', 'main' ); ?>
				
				</div>
				
				<div class="col_9">
				
					<?php get_template_part( 'navs/nav', 'main' ); ?>
				
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div id="page_title" data-stellar-ratio="0.75">
		
		<h1 class="heading"><?php csdd_the_title(); ?></h1>
		
		<h2 class="subheading"><?php echo get_the_date(); ?></h2>
		
	</div>
	
</header>

<header class="header_page header_page_mobile page_default_image <?php basename(get_permalink()); ?>">
	
	<?php get_template_part( 'navs/nav', 'mobile' ); ?>
	
	<div id="page_title">
		
		<h1 class="heading"><?php csdd_the_title(); ?></h1>
		
		<h2 class="subheading"><?php echo get_the_date(); ?></h2>
		
	</div>
	
</header>