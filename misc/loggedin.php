<?php

	if(is_user_logged_in()):
	
		$current_user = wp_get_current_user();
		$display_name = $current_user->display_name;
		$username = $current_user->user_login;
		
		if( get_field('login_bar_style', 'options') == 'containerwidth' ):
			 
			if($display_name):
				 
				echo '<div id="loginbar" class="container_width"><div class="container"><div class="row gutters"><div class="col_12"><div class="username"><span>Logged in as <span>';
				 
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
		
			if($display_name):
				 
				echo '<div id="loginbar" class="full_width"><div class="username"><span>Logged in as <span>';
				 
				echo $display_name;
				 	
				echo '</span><a href="';
				
				echo wp_logout_url( home_url() );
				
				echo '">Logout</a><span></div></div>';
				 	
			elseif($username):
				 
				echo '<div id="loginbar"><div class="username"><span>';
				 
				echo $username;
				 	
				echo '<span></div></div>';
				 
			else:
				 	
			endif;
			 	
		endif;
	
	else:
	
		if( get_field('login_bar_style', 'options') == 'containerwidth' ):
	
			echo '<div id="loginbar" class="container_width"><div class="container"><div class="row gutters"><div class="col_12"><div class="username"><span><a href="';
			
			echo home_url('wp-admin');
				
			echo '">Member Login</a><span></div></div></div></div></div>';
		
		else :
		
			echo '<div id="loginbar" class="full_width"><div class="username"><span><a href="';
			
			echo home_url('wp-admin');
				
			echo '">Member Login</a><span></div></div>';
		
		endif;
		
	endif;

?>