<?php
/**
 * cp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cp
 */

if ( ! function_exists( 'cp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on cp, use a find and replace
		 * to change 'cp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cp', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'cp' ),
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
		add_theme_support( 'custom-background', apply_filters( 'cp_custom_background_args', array(
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
add_action( 'after_setup_theme', 'cp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cp_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'cp_content_width', 640 );
}
add_action( 'after_setup_theme', 'cp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */



//  animate start


function cp_scripts() {
	wp_enqueue_style( 'cp-style', get_stylesheet_uri() );
	wp_enqueue_style('wp_play_style', get_stylesheet_directory_uri().'/styles/styles.min.css');

	wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css');
	wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js');
	wp_enqueue_script('jquery');
}

add_action('init', 'register_post_types');
 function register_post_types(){



  register_post_type('menu', array(
    'labels'             => array(
      'name'               => 'Меню', // Основное название типа записи
      'singular_name'      => 'Меню', // отдельное название записи типа Book
      'add_new'            => 'Добавить меню',
      'add_new_item'       => 'Добавить новое меню',
      'edit_item'          => 'Редактировать меню',
      'new_item'           => 'Новое меню',
      'view_item'          => 'Посмотреть меню',
      'search_items'       => 'Найти меню',
      'not_found'          => 'Не найдено',
      'not_found_in_trash' => 'В корзине ничего не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Меню'
      ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'            => array( 'title', 'comments'  )  // 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',
  ));






  register_post_type('design', array(
    'labels'             => array(
      'name'               => 'Дизайн', // Основное название типа записи
      'singular_name'      => 'Дизайн', // отдельное название записи типа Book
      'add_new'            => 'Добавить дизайн',
      'add_new_item'       => 'Добавить новый дизайн',
      'edit_item'          => 'Редактировать дизайн',
      'new_item'           => 'Новый дизайн',
      'view_item'          => 'Посмотреть дизайн',
      'search_items'       => 'Найти дизайн',
      'not_found'          => 'Не найдено',
      'not_found_in_trash' => 'В корзине ничего не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Дизайн'
      ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => null,
    'taxonomies'          => array( 'kategoriya' ),
    'supports'            => array( 'title', 'comments'  )  // 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',
  ));



  register_post_type('architecture', array(
    'labels'             => array(
      'name'               => 'Архитектура', // Основное название типа записи
      'singular_name'      => 'Архитектура', // отдельное название записи типа Book
      'add_new'            => 'Добавить архитектуру',
      'add_new_item'       => 'Добавить новую архитектуру',
      'edit_item'          => 'Редактировать архитектуру',
      'new_item'           => 'Новый архитектура',
      'view_item'          => 'Посмотреть архитектуру',
      'search_items'       => 'Найти архитектуру',
      'not_found'          => 'Не найдено',
      'not_found_in_trash' => 'В корзине ничего не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Архитектура'
      ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => null,
    'taxonomies'          => array( 'categoryarchitecture' ),
    'supports'            => array( 'title', 'comments'  )  // 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',
  ));





  register_post_type('services', array(
    'labels'             => array(
      'name'               => 'Услуги', // Основное название типа записи
      'singular_name'      => 'Услуги', // отдельное название записи типа Book
      'add_new'            => 'Добавить услугу',
      'add_new_item'       => 'Добавить новую услугу',
      'edit_item'          => 'Редактировать услугу',
      'new_item'           => 'Новая услуга',
      'view_item'          => 'Посмотреть услугу',
      'search_items'       => 'Найти услугу',
      'not_found'          => 'Не найдено',
      'not_found_in_trash' => 'В корзине ничего не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Услуги'
      ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'            => array( 'title', 'comments'  )  // 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',
  ));








  register_post_type('blog', array(
    'labels'             => array(
      'name'               => 'Блог', // Основное название типа записи
      'singular_name'      => 'Блог', // отдельное название записи типа Book
      'add_new'            => 'Добавить статью',
      'add_new_item'       => 'Добавить новую статью',
      'edit_item'          => 'Редактировать статью',
      'new_item'           => 'Новая статья',
      'view_item'          => 'Посмотреть статью',
      'search_items'       => 'Найти статью',
      'not_found'          => 'Не найдено',
      'not_found_in_trash' => 'В корзине ничего не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Блог'
      ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'            => array( 'title', 'comments'  )  // 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',
  ));


}


