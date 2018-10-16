<?php
							
	$facilities = get_field('facilities');
	
	if( $facilities ):
	
		echo '<div class="facilities_wrapper"><div class="facilities_row first_row"><span>Location</span><span>Address</span><span>Phone</span><span>Hours</span></div>';
	
		foreach( $facilities as $item ):
		
			echo '<div class="facilities_row">';
			
			echo '<span>';
		
			if ($item['title']):
			
				echo $item['title'];
			
			endif;
			
			echo '</span><span>';
			
			if ($item['address']):
			
				echo $item['address'];
			
			endif;
			
			echo '</span><span>';
			
			if ($item['phone']):
			
				echo $item['phone'];
			
			endif;
			
			echo '</span><span>';
			
			if ($item['hours']):
			
				echo $item['hours'];
			
			endif;
			
			echo '</span>';
			
			echo '</div>';
		
		endforeach;
		
		echo '</div>';
	
	endif;
	
?>