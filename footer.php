<?php
/**
 * The template for displaying the footer
 * Customized for Child Theme
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package Twenty_Twelve
 * @subpackage Twenty_Twelve_Child
 * @since Twenty Twelve Child 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php $childthemeoptions = get_option('childoptions');
			if ($childthemeoptions['footerinfo'] === "") { ?>
				<a href="<?php echo esc_url( __( 'http:///wordpress.org/', 'twentytwelve' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a> &copy; <?php echo date('Y'); ?>
			<?php } else {
				echo $childthemeoptions['footerinfo'];
			} ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>