<?php
/**
 * The template for displaying the footer
 *
 
 *
 * @package wpstart
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wpstart' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'wpstart' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'wpstart' ), 'wpstart', '<a href="https://automattic.com/" rel="designer">wpstart</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
