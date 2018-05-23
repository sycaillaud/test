<?php
/**
 * Partial template for content in homepage.php
 *
 * @package lacotedeboeuf
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<section id="homepage-video">
		<video autoplay loop>
		  <source
		    src="<?php echo get_template_directory_uri(); ?>/videos/lacotedeboeuf-homepage-background.webm"
		    type="video/webm">
		  <source
		    src="<?php echo get_template_directory_uri(); ?>/videos//lacotedeboeuf-homepage-background.mp4"
		    type="video/mp4">
		  Votre navigateur ne permet pas de lire les vidéos HTML5.
		</video>
	</section>
	<section>
		<div class="entry-content">
			<?php the_content(); ?>	
		</div>
	</section>
</article>
