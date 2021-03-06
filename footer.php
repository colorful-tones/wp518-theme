<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Wp518 Theme
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer grid" role="contentinfo">
		<div class="site-info unit whole">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'wp518' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'wp518' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'wp518' ), 'Wp518 Theme', '<a href="http://damoncook.net" rel="designer">Damon Cook & Eric Frisino</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
