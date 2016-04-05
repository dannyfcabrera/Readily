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
	$time_string = '<time class="entry-date published updated" itemprop="datePublished" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" itemprop="datePublished" datetime="%1$s">%2$s</time> | Updated on <time class="updated" itemprop="dateModified" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		esc_html_x( 'Posted on %s', 'post date', 'readily' ),
		$time_string
	);

	$byline = sprintf(
		esc_html_x( 'by %s', 'post author', 'readily' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '"><span itemprop="author">' . esc_html( get_the_author() ) . '</span></a></span>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

}
endif;

if ( ! function_exists( 'readily_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function readily_post_footer() {
  
	if ( 'post' === get_post_type() ) {
  	
		$categories_list = get_the_category_list( esc_html__( ', ', 'readily' ) );
		if ( $categories_list && readily_categorized_blog() ) {
			printf( '<div class="cat-links">' . esc_html__( 'Posted in %1$s', 'readily' ) . '</div>', $categories_list ); // WPCS: XSS OK.
		}

		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'readily' ) );
		if ( $tags_list ) {
			printf( '<div class="tags-links">' . esc_html__( 'Tagged %1$s', 'readily' ) . '</div>', $tags_list ); // WPCS: XSS OK.
		}
	}

	if ( is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
    comments_template();
	}
	
	echo '<div class="publisher sr-only">Published by: <span itemprop="publisher">'. get_bloginfo( 'name' ) .'</span></div>';

	edit_post_link(
		sprintf(
			esc_html__( 'Edit %s', 'readily' ),
			the_title( '<div class="sr-only">"', '"</div>', false )
		),
		'<div class="edit-link btn btn-default">',
		'</div>'
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
