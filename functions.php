<?php
/**
 * Become Organized functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Become_Organized
 */

if ( ! function_exists( 'become_organized_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function become_organized_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Become Organized, use a find and replace
		 * to change 'become_organized' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'become_organized', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'become_organized' ),
			'secondary' => __( 'Secondary Menu', 'become_organized' )
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'become_organized_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'become_organized_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function become_organized_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'become_organized_content_width', 640 );
}
add_action( 'after_setup_theme', 'become_organized_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function become_organized_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'become_organized' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here.', 'become_organized' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'become_organized_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function become_organized_scripts() {
	wp_enqueue_style( 'become_organized-style', get_stylesheet_uri() );

	wp_enqueue_script( 'become_organized-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'become_organized-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'become_organized_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Replaces the excerpt "more" text by a link.
 */
function new_excerpt_more($more) {
	global $post;
	return '... <a class="moretag" href="' . get_permalink($post->ID) . '"> continue reading &raquo;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Remove the prefix generated by the_archive_title
 */
add_filter( 'get_the_archive_title', function ($title) {

	if ( is_category() ) {

					$title = single_cat_title( '', false );

			} elseif ( is_tag() ) {

					$title = single_tag_title( '', false );

			} elseif ( is_author() ) {

					$title = '<span class="vcard">' . get_the_author() . '</span>' ;

			}

	return $title;

});

add_action( 'init', 'custom_bootstrap_slider' );
/**
 * Register a Custom post type for.
 */
function custom_bootstrap_slider() {
	$labels = array(
		'name'               => _x( 'Slider', 'post type general name'),
		'singular_name'      => _x( 'Testimonial', 'post type singular name'),
		'plural_name'        => _x( 'Testimonials', 'post type plural name'),
		'menu_name'          => _x( 'Testimonials', 'admin menu'),
		'name_admin_bar'     => _x( 'Testimonial', 'add new on admin bar'),
		'add_new'            => _x( 'Add New', 'Testimonial'),
		'add_new_item'       => __( 'New Testimonial'),
		'new_item'           => __( 'New Testimonial'),
		'edit_item'          => __( 'Edit Testimonial'),
		'view_item'          => __( 'View Testimonial'),
		'all_items'          => __( 'All Testimonials'),
		'featured_image'     => __( 'Featured Image', 'text_domain' ),
		'search_items'       => __( 'Search Testimonials'),
		'parent_item_colon'  => __( 'Parent Testimonial:'),
		'not_found'          => __( 'No Testimonial found.'),
		'not_found_in_trash' => __( 'No Testimonial found in Trash.'),
	);

	$args = array(
		'labels'             => $labels,
		'menu_icon'	         => 'dashicons-star-half',
    'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail')
	);

	register_post_type( 'slider', $args );
}

function wpb_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
	}
	 
	add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );


