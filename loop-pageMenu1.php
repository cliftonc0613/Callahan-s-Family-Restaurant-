<?php
/**
 * The loop that displays a page.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-page.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					
					<?php if ( is_front_page() ) { ?>
						<div id="page-header">
							<h2 class="entry-title"><?php the_title(); ?></h2>
						</div>
					<?php } else { ?>
						<div id="page-header">
							<h1 class="entry-title"><?php the_title(); ?></h1>
						</div>
					<?php } ?>
					
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div id=menu-page>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php $group_orders = getDistinctGroupOrder(‘app-menu-item’);
							foreach($group_orders as $group_order)
							{ ?> <div id=”foodmenu”><dl>
									<dt>
									<?php echo get(‘app-menu-item’,$group_order,1); ?>
									</dt>
									<dd class=”price”>
									<?php echo get(‘app-Item-price’,$group_order,1); ?>
									</dd>
									<dd class=”ingredients”>
									<?php echo get(‘app-item-description’,$group_order,1); ?>
									</dd>
									</dl>
								  </div>
						<?php }
						?>
						<!– check to see if there’s actually content filled in.  –>
							<?php
							$content = get_post_meta($post->ID, ‘d-item-name’, true); if ($content) { ?>
							
							$content = get_post_meta($post->ID, ‘d-item-name’, true); if ($content) { ?>
							<?php $group_orders = getDistinctGroupOrder(‘d-item-name’);
							foreach($group_orders as $group_order)
							{ ?> 
							<div id=”foodmenu”>
							<dl>
							<dt>
							<?php echo get(‘d-item-name’,$group_order,1); ?>
							</dt>
							<dd class=”price”>
							<?php echo get(‘d-item-price’,$group_order,1); ?>
							</dd>
							<dd class=”ingredients”>
							<?php echo get(‘d-item-description’,$group_order,1); ?>
							</dd>
							</dl>
							</div>
							<?php }
							?>
							<?php } else { ?>
							<?php } ?>

						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
					</div><!-- #memu-page -->
				</div><!-- #post-## -->

				<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>