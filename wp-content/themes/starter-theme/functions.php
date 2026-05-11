<?php
add_action( 'after_setup_theme', function () {
	add_theme_support( 'title-tag' );
} );

function starter_theme_enqueue_styles() {
    wp_enqueue_style( 'starter-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'starter_theme_enqueue_styles' );
