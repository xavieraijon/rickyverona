<?php
/**
 * RickyVerona functions and definitions
 *
 * @package RickyVerona
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'rickyverona_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function rickyverona_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on RickyVerona, use a find and replace
	 * to change 'rickyverona' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'rickyverona', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'	=> __( 'Primary Menu', 'rickyverona' ),
		'footer'	=> __( 'Footer Menu', 'rickyverona' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'rickyverona_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // rickyverona_setup
add_action( 'after_setup_theme', 'rickyverona_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function rickyverona_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'rickyverona' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'rickyverona_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rickyverona_scripts() {
	// Styles
	wp_enqueue_style( 'flexslider-style', get_template_directory_uri() . '/bower_components/flexslider/flexslider.css' );
	wp_enqueue_style( 'owl-carousel-style', get_template_directory_uri() . '/bower_components/owl-carousel2/dist/assets/owl.carousel.css' );
	wp_enqueue_style( 'owl-carousel-theme-style', get_template_directory_uri() . '/bower_components/owl-carousel2/dist/assets/owl.theme.default.css' );
	wp_enqueue_style( 'magnific-popup-style', get_template_directory_uri() . '/bower_components/magnific-popup/dist/magnific-popup.css' );
	wp_enqueue_style( 'animate-css-style', get_template_directory_uri() . '/bower_components/animate.css/animate.min.css' );
	wp_enqueue_style( 'rickyverona-style', get_stylesheet_uri() );
	
	// Scripts
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/bower_components/modernizr/modernizr.js', array());
	wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.min.js', array(), '1', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1', true );
}
add_action( 'wp_enqueue_scripts', 'rickyverona_scripts' );

// Register Custom Navigation Walker
require_once('inc/wp_bootstrap_navwalker.php');
