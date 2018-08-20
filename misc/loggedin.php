<?php

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

?>