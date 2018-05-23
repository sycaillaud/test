<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package lacotedeboeuf
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'lacotedeboeuf_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

							<div>La Côte de Boeuf  © <?php echo date("Y"); ?> - <a href="<?php echo esc_url( home_url( '/mentions-légales' ) ); ?>">Mentions légales</a> - <a href="<?php echo esc_url( home_url( '/plan-du-site' ) ); ?>">Plan du site</a></div>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

