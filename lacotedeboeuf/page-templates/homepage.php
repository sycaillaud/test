<?php
/**
 * Template Name: Homepage
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package lacotedeboeuf
 */

get_header();
$container = get_theme_mod( 'lacotedeboeuf_container_type' );
?>

<div class="wrapper" id="homepage-wrapper">
	<div id="primary">
		<main class="site-main" id="main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'loop-templates/content', 'home' ); ?>						
			<?php endwhile; ?>
		</main>
	</div>
</div>

<?php get_footer(); ?>
