<?php 
/**
 * Readily functions and definitions
 *
 * @package Readily
 * @since Readily 1.0
 */
 
/**
 * Maximum content width
 */
function readily_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'readily_content_width', 1024 );
}
add_action( 'after_setup_theme', 'readily_content_width', 0 );
 
if ( ! function_exists( 'readily_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function readily_setup() {
  
    /**
     * Remove Meta Generator Tag
     */
     
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
 
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'readily', get_template_directory() . '/languages' );

    /**
     * Enable HTML5 markup for search forms, comment forms, comment lists, gallery, and captions.
     */    
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    
    /**
     * This feature enables plugins and themes to manage the document title tag.
     */ 
    add_theme_support( 'title-tag' );
 
    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );
 
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => esc_html__( 'Primary Menu', 'readily' ),
        'secondary' => esc_html__('Secondary Menu', 'readily' )
    ) );
 
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, video and status
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video', 'status' ) );
}
endif; // readily_setup
add_action( 'after_setup_theme', 'readily_setup' );


add_action( 'widgets_init', 'readily_sidebars' );
function readily_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary-sidebar',
            'name'          => esc_html__( 'Primary Sidebar' ),
            'description'   => __( 'Main Widget Area' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}


/**
 * Registers stylesheets and scripts for the theme.
 */
function readily_add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
 
  // wp_enqueue_style( 'vendor', get_template_directory_uri() . '/css/vendor.css', array(), '1.1', 'all');
 
  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.min.js', array ( 'jquery' ), 1.1, true);
 
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'readily_add_theme_scripts' );



/**
 * Registers an editor stylesheet for the theme.
 */
function readily_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'readily_add_editor_styles' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Bootstrap menu walker.
 */
require get_template_directory() . '/inc/bootstrap-menu-walker.php';