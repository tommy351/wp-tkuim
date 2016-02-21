<?php
function tkuim_setup(){
  // load_theme_textdomain('tkuim', get_template_directory() . '/languages');

  add_theme_support('automatic-feed-links');

  add_theme_support('title-tag');

  // add_theme_support('post-formats', array(
	// 	'aside',
	// 	'image',
	// 	'video',
	// 	'quote',
	// 	'link',
	// 	'gallery',
	// 	'status',
	// 	'audio',
	// 	'chat',
	// ));

  add_theme_support('post-thumbnails');

  add_theme_support('html5', array(
    'comment-list',
    'comment-form',
    'search-form',
    'gallery',
    'caption'
  ));

  // add_editor_style( array( 'css/editor-style.css', twentysixteen_fonts_url() ) );

  register_nav_menus(array(
    'primary' => __('Primary menu', 'tkuim'),
    'top'     => __('Top menu', 'tkuim')
  ));
}

add_action('after_setup_theme', 'tkuim_setup');

function tkuim_widgets_init(){
  register_sidebar(array(
		'name'          => __('Sidebar', 'tkuim'),
		'id'            => 'sidebar-1',
		'description'   => __('Add widgets here to appear in your sidebar.', 'tkuim'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}

add_action('widgets_init', 'tkuim_widgets_init');

function tkuim_scripts(){
  wp_enqueue_style('tkuim-fontawesome', get_template_directory_uri() . '/node_modules/font-awesome/css/font-awesome.min.css', array(), '4.5.0');
  wp_enqueue_style('tkuim-style', get_stylesheet_uri(), array(), '1.0.0');

  wp_enqueue_script('tkuim-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3');
	wp_script_add_data('tkuim-html5', 'conditional', 'lt IE 9');
}

add_action('wp_enqueue_scripts', 'tkuim_scripts');
