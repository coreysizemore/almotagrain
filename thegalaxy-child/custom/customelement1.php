<?php

	echo '<h2 class="date">';
	
	//date_default_timezone_set('America/Los_Angeles');
	
	//echo date("l - F d, Y");
	
	echo get_field('date');
	
	echo '</h2>';
	
	$cashbids = get_field('cash_bid');
	
	if( $cashbids ):
	
		echo '<div class="cash_wrapper"><div class="cash_row first_row"><span></span><span>Soft White Wheat</span><span>Hard Red Winter</span><span>Dark Northern Spring</span><span>Barley</span></div>';
	
		foreach( $cashbids as $bid ):
		
			echo '<div class="cash_row">';
			
			echo '<span>';
		
			if ($bid['month']):
			
				echo $bid['month'];
			
			endif;
			
			echo '</span><span>';
			
			if ($bid['soft_white_wheat']):
			
				echo $bid['soft_white_wheat'];
			
			endif;
			
			echo '</span><span>';
														
			if ($bid['hard_red_winter']):
			
				echo $bid['hard_red_winter'];
			
			endif;
			
			echo '</span><span>';
			
			if ($bid['dark_northern_spring']):
			
				echo $bid['dark_northern_spring'];
			
			endif;
			
			echo '</span><span>';
			
			if ($bid['barley']):
			
				echo $bid['barley'];
			
			endif;
			
			echo '</span>';
			
			echo '</div>';
		
		endforeach;
		
		echo '</div>';
	
	endif;
	
?>