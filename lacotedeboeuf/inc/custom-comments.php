<?php
/**
 * Comment layout.
 *
 * @package lacotedeboeuf
 */

// Comments form.
add_filter( 'comment_form_default_fields', 'lacotedeboeuf_bootstrap_comment_form_fields' );

/**
 * Creates the comments form.
 *
 * @param string $fields Form fields.
 *
 * @return array
 */

if ( ! function_exists( 'lacotedeboeuf_bootstrap_comment_form_fields' ) ) {

	function lacotedeboeuf_bootstrap_comment_form_fields( $fields ) {
		$commenter = wp_get_current_commenter();
		$req       = get_option( 'require_name_email' );
		$aria_req  = ( $req ? " aria-required='true'" : '' );
		$html5     = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
		$fields    = array(
			'author' => '<div class="form-group comment-form-author"><label for="author">' . __( 'Name',
					'lacotedeboeuf' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
			            '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . '></div>',
			'email'  => '<div class="form-group comment-form-email"><label for="email">' . __( 'Email',
					'lacotedeboeuf' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
			            '<input class="form-control" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . '></div>',
			'url'    => '<div class="form-group comment-form-url"><label for="url">' . __( 'Website',
					'lacotedeboeuf' ) . '</label> ' .
			            '<input class="form-control" id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30"></div>',
		);

		return $fields;
	}
} // endif function_exists( 'lacotedeboeuf_bootstrap_comment_form_fields' )

add_filter( 'comment_form_defaults', 'lacotedeboeuf_bootstrap_comment_form' );

/**
 * Builds the form.
 *
 * @param string $args Arguments for form's fields.
 *
 * @return mixed
 */

if ( ! function_exists( 'lacotedeboeuf_bootstrap_comment_form' ) ) {

	function lacotedeboeuf_bootstrap_comment_form( $args ) {
		$args['comment_field'] = '<div class="form-group comment-form-comment">
	    <label for="comment">' . _x( 'Comment', 'noun', 'lacotedeboeuf' ) . ( ' <span class="required">*</span>' ) . '</label>
	    <textarea class="form-control" id="comment" name="comment" aria-required="true" cols="45" rows="8"></textarea>
	    </div>';
		$args['class_submit']  = 'btn btn-secondary'; // since WP 4.1.
		return $args;
	}
} // endif function_exists( 'lacotedeboeuf_bootstrap_comment_form' )
