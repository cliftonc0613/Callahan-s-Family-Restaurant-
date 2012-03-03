<?php 
/**
* Template Name: Home page
*/
/**
* Designer: Clifton t Canady
* Website: http://www.cliftontcanady.com/
* Description: This is a template for Callahans Family Restaurant Homepage 
*
*/
?>
<?php get_header(); ?>
 
<div>
	<div id="restaurant-photo">
	<img src="<?php the_field('restaurant_image'); ?>" alt="Restaurant Image" />
	</div>

    <div id="homepage-content">
    	
        <p><?php the_field('intro'); ?></p>
    </div>
    
    <div id="feature_menu_items">
      <img src="<?php the_field('feature_menu_items'); ?>" alt="Featured Items" />
    </div>
</div>
 
<?php get_footer(); ?>