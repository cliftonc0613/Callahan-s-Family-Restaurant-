<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!--End of main-->

		
		<div id="footer">
	          <div id="quote">Luck of the Irish to you!</div>
		  <div id="copyright">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?><br>
		       <a href="http://www.cliftontcanady.com"><img  src="http://www.callahansfamilyrestaurant.com/wp-content/uploads/2011/09/CliftonCDesigns150.png" /></a>
		  </div>
		</div> 
		</div><!--End of wrapper-->
	<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
	
	<!-- Don't forget analytics -->
	
</body>

</html>
