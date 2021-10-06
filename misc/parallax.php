<?php 
	
	if(get_field('parallax_feature') == 'custom'):
	
		echo '<div id="parallax">';
	
			if(get_field('parallax_content')):
					
				echo '<div class="filter"><div class="container"><div class="row gutters"><div class="col_12">' . get_field('parallax_content') . '</div></div></div></div>';
					
			endif;
			
		echo '</div>';
		
	elseif(get_field('parallax_feature') == 'default'):
	
		if(get_field('use_parallax_feature','options') == 'display'):
	
			echo '<div id="parallax">';

			if(get_field('parallax','options')):
					
				echo '<div class="filter"><div class="container"><div class="row gutters"><div class="col_12">' . get_field('parallax','options') . '</div></div></div></div>';
					
			endif;
			
			echo '</div>';
			
		elseif(get_field('use_parallax_feature','options') == 'testimonial'):
	
			if( have_rows('testimonials','options') ):
				
				$testimonial = get_field('testimonials','options');
				
				$rand = rand(0, (count($testimonial) - 1));
				
				echo '<div id="parallax" class="parallax_tall"><div class="filter"><div class="container"><div class="row gutters"><div class="col_12"><div class="testimonial">';
					
					if($testimonial[$rand]['rating'] == 'one'):
						
						echo '<span class="test-rating"><i class="fas fa-star"></i></span>';
					
					elseif($testimonial[$rand]['rating'] == 'two'):
					
						echo '<span class="test-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i></span>';
					
					elseif($testimonial[$rand]['rating'] == 'three'):
					
						echo '<span class="test-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>';
					
					elseif($testimonial[$rand]['rating'] == 'four'):
					
						echo '<span class="test-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>';
					
					elseif($testimonial[$rand]['rating'] == 'five'):
					
						echo '<span class="test-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>';
					
					else:
					
						/* do not display anything */
					
					endif;
					
					echo '<span class="test-content">' . $testimonial[$rand]['content'] . '</span>';
					
					if(!empty($testimonial[$rand]['author'])):
					
						echo '<span class="test-author">' . $testimonial[$rand]['author'] . '</span>';
					
					else:
					
						echo '<span class="test-author">Anonymous</span>';
					
					endif;
					
					echo '<span class="test-date">' . $testimonial[$rand]['date'] . '</span>';

				echo '</div></div></div></div></div></div>';
						
			endif;
					
		endif;
		
	elseif(get_field('parallax_feature') == 'testimonial'):
	
		if( have_rows('testimonials','options') ):
				
			$testimonial = get_field('testimonials','options');
			
			$rand = rand(0, (count($testimonial) - 1));
			
			echo '<div id="parallax" class="parallax_tall"><div class="filter"><div class="container"><div class="row gutters"><div class="col_12"><div class="testimonial">';
				
				if($testimonial[$rand]['rating'] == 'one'):
					
					echo '<span class="test-rating"><i class="fas fa-star"></i></span>';
				
				elseif($testimonial[$rand]['rating'] == 'two'):
				
					echo '<span class="test-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i></span>';
				
				elseif($testimonial[$rand]['rating'] == 'three'):
				
					echo '<span class="test-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>';
				
				elseif($testimonial[$rand]['rating'] == 'four'):
				
					echo '<span class="test-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>';
				
				elseif($testimonial[$rand]['rating'] == 'five'):
				
					echo '<span class="test-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>';
				
				else:
				
					/* do not display anything */
				
				endif;
				
				echo '<span class="test-content">' . $testimonial[$rand]['content'] . '</span>';
				
				if(!empty($testimonial[$rand]['author'])):
				
					echo '<span class="test-author">' . $testimonial[$rand]['author'] . '</span>';
				
				else:
				
					echo '<span class="test-author">Anonymous</span>';
				
				endif;
				
				echo '<span class="test-date">' . $testimonial[$rand]['date'] . '</span>';

			echo '</div></div></div></div></div></div>';
					
		endif;

	endif;

?>