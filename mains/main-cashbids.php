<?php
	
	/*
		@package WordPress
		@subpackage endor
	*/
	 
?>

<div class="main <?php echo basename(get_permalink()); ?> ">
	
	<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div class="container"><div class="row gutters"><div class="col_12"><div class="breadcrumb_wrapper"><span class="breadcrumbs">','</span></div></div></div></div>');} ?>

	<?php if( get_field('default_editor')): ?>
	
		<div class="default_editor">
		
			<div class="container">
					
				<div class="row gutters">
						
					<?php if( get_field('sidebar_selection') == 'right' ): ?>
					
						<div class="col_2 first">
							
							<div class="content">
								
								<h2 class="page_heading"><?php csdd_the_title(); ?></h2>
		
								<?php
						
									if(get_field('page_sub_heading'))
									{
										echo '<h3 class="page_subheading">' . get_field('page_sub_heading') . '</h3>';
									}
												
								?>
								
							</div>
							
						</div>
						
						<div class="col_7">
								
							<div class="content">
					
								<?php get_template_part( 'loops/loop', 'page' ); ?>
									
							</div>
								
						</div>
							
						<div class="col_3 last">
								
							<?php get_template_part( 'sidebars/sidebar' , 'primary' ); ?>
								
						</div>
					
					<?php endif; ?>
					
					<?php if( get_field('sidebar_selection') == 'none' ): ?>
					
						<div class="col_2 first">
							
							<div class="content">
								
								<h2 class="page_heading"><?php csdd_the_title(); ?></h2>
		
								<?php
						
									if(get_field('page_sub_heading'))
									{
										echo '<h3 class="page_subheading">' . get_field('page_sub_heading') . '</h3>';
									}
												
								?>
								
							</div>
							
						</div>
					
						<div class="col_10 last">
							
							<div class="content">
								
								<?php
								
									echo '<h2 class="date">' . date("l - F d, Y") . '</h2>';
									
									$cashbids = get_field('cash_bid');
									
									if( $cashbids ):
									
										echo '<div class="cash_wrapper"><div class="cash_row first_row"><span></span><span>Soft White Wheat</span><span>White Club Wheat</span><span>Hard Red Winter</span><span>Dark Northern Spring</span><span>Barley</span></div>';
									
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
											
											if ($bid['white_club_wheat']):
											
												echo $bid['white_club_wheat'];
											
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
								
								<?php get_template_part( 'loops/loop', 'page' ); ?>
								
							</div>
							
						</div>
					
					<?php endif; ?>
					
					<?php if( get_field('sidebar_selection') == 'left' ): ?>
					
						<div class="col_3 first">
								
							<?php get_template_part( 'sidebars/sidebar' , 'primary' ); ?>
							
						</div>
						
						<div class="col_7">
							
							<div class="content">
				
								<?php get_template_part( 'loops/loop', 'page' ); ?>
								
							</div>
							
						</div>
						
						<div class="col_2 last">
							
							<div class="content">
								
								<h2 class="page_heading"><?php csdd_the_title(); ?></h2>
		
								<?php
						
									if(get_field('page_sub_heading'))
									{
										echo '<h3 class="page_subheading">' . get_field('page_sub_heading') . '</h3>';
									}
												
								?>
								
							</div>
							
						</div>
					
					<?php endif; ?>
						
				</div>
				
			</div>
			
		</div>
	
	<?php endif; ?>
		
	<?php if(is_user_logged_in()):?>
	
		<div class="edit_button">
		
			<span class="edit"><?php edit_post_link(); ?></span>
		
		</div>
	
	<?php endif; ?>

</div>

<?php if( get_field('parallax_feature')): ?>
	
	<div class="parallax parallax-page parallax_default_image" data-stellar-background-ratio="0.15">
			
		<?php
		
			if(get_field('parallax_content'))
			{
				echo '<div class="filter">' . get_field('parallax_content') . '</div>';
			}
											
		?>
			
	</div>

<?php endif; ?>

<?php

	if(get_field('appointment_feature'))
	{
		get_template_part( 'sidebars/sidebar' , 'appointment' );
	}
						
?>