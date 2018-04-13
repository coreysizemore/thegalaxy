<div class="main coloredbg">
		
	<div class="container">
			
		<div class="row gutters">
				
			<div class="col_12">
					
				<div class="content please_log_in">
						
					<div class="login_wrapper">
							
						<p>This page is only available to our members, please sign in below or contact us for more information.</p>
						
						<?php
								
							$args = array(
									
								'redirect' => home_url('members'), 
								    
								'id_username' => 'user',
								    
								'id_password' => 'pass',
								    
								) 
								   
							;?>
								
						<?php wp_login_form( $args ); ?>
						
					</div>
						
				</div>
					
			</div>
				
		</div>
			
	</div>
		
</div>