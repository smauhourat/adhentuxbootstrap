<?php


if ( !function_exists( 'adhentuxboottheme_theme_setup' ) ) {
    /* Theme Setup */
    function adhentuxboottheme_theme_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
    }

    add_action('after_setup_theme', 'adhentuxboottheme_theme_setup' );
}

    wp_enqueue_style( 'bootstrap', get_theme_file_uri('css/bootstrap.min.css'), false, '1.1', 'all');


function adhentuxboottheme_add_theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

//	wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css', array(), '1.1', 'all' );

    //wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.1', 'all' );

	// wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), 1.1, true );
    wp_enqueue_script( 'jquepopperry', 'https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js', array( 'jquery' ), 1.14, true);
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js', array( 'popper' ), 4.3, true);

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
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