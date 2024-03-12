<?php

require_once get_template_directory() . '/template-parts/navbar.php';


if ( !function_exists( 'adhentuxboottheme_theme_setup' ) ) {
    /* Theme Setup */
    function adhentuxboottheme_theme_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );

        add_theme_support( 'title-tag' );
    }

    add_action('after_setup_theme', 'adhentuxboottheme_theme_setup' );
}

wp_enqueue_style( 'bootstrap', get_theme_file_uri('css/bootstrap.min.css'), false, '1.1', 'all');


function adhentuxboottheme_add_theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_script( 'jquepopperry', 'https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js', array( 'jquery' ), 1.14, true);
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js', array( 'jquepopperry' ), 4.3, true);
    wp_enqueue_script( 'app-js', get_template_directory_uri() . '/js/app.js', array( 'bootstrap-js' ), 1.0, true);

    wp_add_inline_script( 
		'theme-slug-navigation', 
		'console.log( "Testing" );'
	);
}
add_action( 'wp_enqueue_scripts', 'adhentuxboottheme_add_theme_scripts' );

function adhentuxboottheme_add_widgets() {
	register_sidebar( array(
        'id'            => 'sidebar-1',
		'name'          => __( 'Primary Sidebar' ),
		'before_widget' => '<div class="card-body">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4><hr>',
	) );
}
add_action('widgets_init', 'adhentuxboottheme_add_widgets');

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );