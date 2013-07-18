<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package Dentego
 */
?>
	</div><!-- #main .wrapper -->
	</div><!--#page-->
	<footer id="colophon" role="contentinfo">
	<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_class' => 'nav-menu-footer' ) ); ?>
		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://dentego.fr/', 'twentytwelve' ) ); ?>" title="Dentego">Tout droits résérvés@Dentego</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>