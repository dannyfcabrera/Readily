<?php
/**
 * Custom template tags.
 *
 * @package Readily
 */

if ( ! function_exists( 'readily_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function readily_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		esc_html_x( 'Posted on %s', 'post date', 'readily' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		esc_html_x( 'by %s', 'post author', 'readily' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

}
endif;

if ( ! function_exists( 'readily_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function readily_entry_footer() {
  
	if ( 'post' === get_post_type() ) {
  	
		$categories_list = get_the_category_list( esc_html__( ', ', 'readily' ) );
		if ( $categories_list && readily_categorized_blog() ) {
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'readily' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}

		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'readily' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'readily' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_html__( 'Leave a comment', 'readily' ), esc_html__( '1 Comment', 'readily' ), esc_html__( '% Comments', 'readily' ) );
		echo '</span>';
	}

	edit_post_link(
		sprintf(
			esc_html__( 'Edit %s', 'readily' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function readily_categorized_blog() {
	if ( false === ( $all_cats = get_transient( 'readily_categories' ) ) ) {
		$all_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			'number'     => 2,
		) );

		$all_cats = count( $all_cats );

		set_transient( 'readily_categories', $all_cats );
	}

	if ( $all_cats > 1 ) {
		return true;
	} else {
		return false;
	}
}

/**
 * Flush out the transients used in readily_categorized_blog.
 */
function readily_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	delete_transient( 'readily_categories' );
}
add_action( 'edit_category', 'readily_category_transient_flusher' );
add_action( 'save_post',     'readily_category_transient_flusher' );
