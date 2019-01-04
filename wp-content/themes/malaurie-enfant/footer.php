<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package malaurie
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="footer">
		<div class="container">
			<a href="<?php echo esc_url( __( '/mentions-legales', 'malaurie' ) ); ?>" class="footer__link">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Mentions légales', 'malaurie' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
            <a href="http://www.lucile-fromant.fr" class="footer__link" target="_blank">
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Site réalisé par %s.', 'malaurie' ), 'Lucile Fromant' );
				?>
            </a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
