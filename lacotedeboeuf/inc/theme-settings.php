<?php
/**
 * Check and setup theme's default settings
 *
 * @package lacotedeboeuf
 *
 */

if ( ! function_exists( 'lacotedeboeuf_setup_theme_default_settings' ) ) :
	function lacotedeboeuf_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$lacotedeboeuf_posts_index_style = get_theme_mod( 'lacotedeboeuf_posts_index_style' );
		if ( '' == $lacotedeboeuf_posts_index_style ) {
			set_theme_mod( 'lacotedeboeuf_posts_index_style', 'default' );
		}

		// Sidebar position.
		$lacotedeboeuf_sidebar_position = get_theme_mod( 'lacotedeboeuf_sidebar_position' );
		if ( '' == $lacotedeboeuf_sidebar_position ) {
			set_theme_mod( 'lacotedeboeuf_sidebar_position', 'right' );
		}

		// Container width.
		$lacotedeboeuf_container_type = get_theme_mod( 'lacotedeboeuf_container_type' );
		if ( '' == $lacotedeboeuf_container_type ) {
			set_theme_mod( 'lacotedeboeuf_container_type', 'container' );
		}
	}
endif;
