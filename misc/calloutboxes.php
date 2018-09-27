<?php

	if( have_rows('call_out_boxes','option') ):
	
		$items = get_field('call_out_boxes','option');
		
		if( get_field('shuffle_call_out_boxes') ):
		
			shuffle($items);
			
		endif;
			
		$count = count($items);
			
		echo '<div id="call_out_boxes"><div class="container"><div class="row gutters"><div class="col_12">';
						
		foreach( $items as $cob ):
				
			if($count == 1):
						        
				echo '<div class="cob_1">';
						
			elseif($count == 2):
					
				echo '<div class="cob_2">';
						
			elseif($count == 3):
					
				echo '<div class="cob_3">';
						
			elseif($count == 4):
					
				echo '<div class="cob_4">';
				
			elseif($count == 5):
					
				echo '<div class="cob_5">';
						
			else :
					
				echo '<div class="cob_1">';
						
			endif;
					
			echo '<div class="call_out_boxes_item">';
			
				if($cob['call_out_type'] == 'icon'):
				
					if($cob['shape'] == 'circle'):
					
						echo '<span class="circle fas fa-' . $cob['icon'] . '"></span>';
					
					elseif($cob['shape'] == 'square'):
					
						echo '<span class="square fas fa-' . $cob['icon'] . '"></span>';
					
					else :
					
						echo 'Oh no! Something went wrong! (shape)';
						
					endif;
				
				elseif($cob['call_out_type'] == 'image'):
				
					$image = $cob['image'];
					
					if($cob['shape'] == 'circle'):
					
						echo '<span class="circle image-icon"><img src="' . $image['url'] . '" alt="' . $image['alt'] . '" /></span>';
					
					elseif($cob['shape'] == 'square'):
					
						echo '<span class="square image-icon"><img src="' . $image['url'] . '" alt="' . $image['alt'] . '" /></span>';
					
					else :
					
						echo 'Oh no! Something went wrong! (shape)';
						
					endif;
				
				else :
				
					echo 'Oh no! Something went wrong! (call out type)';
				
				endif;
				
				echo $cob['content'];
					
			echo '</div></div>';
						
		endforeach;
					
		echo '</div></div></div></div>';
							
	else :
	
		// do nothing
				
	endif;
		
?>