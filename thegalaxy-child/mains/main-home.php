<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
?>
	
<?php get_template_part( 'sidebars/sidebar' , 'announcement' ); ?>

<?php 
	
	if( get_field('display_call_out_boxes') ):

		get_template_part( 'misc/calloutboxes' );
		
	endif;
		
?>

<div class="main <?php echo basename(get_permalink()); ?>">

	<?php if( get_field('default_editor')): ?>
	
		<div class="default_editor">
		
			<div class="container">
					
				<div class="row gutters">
						
					<?php if( get_field('sidebar_selection') == 'right' ): ?>
						
						<div class="col_9">
								
							<div class="content">
								
								<?php
								
									echo '<h2 class="date">';
									
									date_default_timezone_set('America/Los_Angeles');
									
									echo date("l - F d, Y");
									
									echo '</h2>';
									
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
								
								<?php
	
									if( get_field('gallery') ):
								
										get_template_part( 'misc/gallery' );
										
									endif;
										
								?>
								
								<?php 
									
									if( get_field('accordion') ):
								
										get_template_part( 'misc/accordion' );
										
									endif;
										
								?>
								
								<?php 
									
									if( get_field('tabs') ):
								
										get_template_part( 'misc/tabs' );
										
									endif;
										
								?>
									
							</div>
								
						</div>
							
						<div class="col_3">
								
							<?php get_template_part( 'sidebars/sidebar' , 'primary' ); ?>
								
						</div>
					
					<?php endif; ?>
					
					<?php if( get_field('sidebar_selection') == 'none' ): ?>
					
						<div class="col_12">
							
							<div class="content">
				
								<?php get_template_part( 'loops/loop', 'page' ); ?>
								
								<?php
	
									if( get_field('gallery') ):
								
										get_template_part( 'misc/gallery' );
										
									endif;
										
								?>
								
								<?php 
									
									if( get_field('accordion') ):
								
										get_template_part( 'misc/accordion' );
										
									endif;
										
								?>
								
								<?php 
									
									if( get_field('tabs') ):
								
										get_template_part( 'misc/tabs' );
										
									endif;
										
								?>
								
							</div>
							
						</div>
					
					<?php endif; ?>
					
					<?php if( get_field('sidebar_selection') == 'left' ): ?>
					
						<div class="col_3">
								
							<?php get_template_part( 'sidebars/sidebar' , 'primary' ); ?>
							
						</div>
						
						<div class="col_9">
							
							<div class="content">
				
								<?php get_template_part( 'loops/loop', 'page' ); ?>
								
								<?php
	
									if( get_field('gallery') ):
								
										get_template_part( 'misc/gallery' );
										
									endif;
										
								?>
								
								<?php 
									
									if( get_field('accordion') ):
								
										get_template_part( 'misc/accordion' );
										
									endif;
										
								?>
								
								<?php 
									
									if( get_field('tabs') ):
								
										get_template_part( 'misc/tabs' );
										
									endif;
										
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

<?php get_template_part( 'misc/parallax' ); ?>

<?php

	if(get_field('appointment_feature'))
	{
		get_template_part( 'sidebars/sidebar' , 'appointment' );
	}
						
?>
	
	
	