<?php 
/**
* Template Name: Page Under Construction
*/
/**
* Designer: Clifton t Canady
* Website: http://www.cliftontcanady.com/
* Description: This is a template for Callahans Family Restaurant Under Construction Page 
*
*/
?>
<?php get_header(); ?>
<div>			
					<?php if ( is_front_page() ) { ?>
						<div id="page-header">
							<h2 class="entry-title"><?php the_title(); ?></h2>
						</div>
					<?php } else { ?>
						<div id="page-header">
							<h1 class="entry-title"><?php the_title(); ?></h1>
						</div>
					<?php } ?>
                        
        <div id="homepage-content">
                    
             <p><?php the_field('header'); ?></p>       
            <p><?php the_field('introduction'); ?></p>
        </div>
        
        <div id="feature_menu_items">
          <img src="<?php the_field('under_construction1'); ?>" alt="Under Construction" />
        </div>
 </div>
<?php get_footer(); ?>