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