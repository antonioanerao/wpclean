<?php
function wp_clean_scripts(){
    //Bootstrap and Popper javascript/css files
    wp_enqueue_script( 'jquery','https://code.jquery.com/jquery-3.5.1.slim.min.js', array(), '3.5.1', true );
    wp_enqueue_script( 'popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true );
    wp_enqueue_script( 'bootstrap-js','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array( 'jquery' ), '4.5.0', true );
    wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css', array(), '4.5.0', 'all' );

    // Theme's main stylesheet
    wp_enqueue_style( 'wp-clean-style', get_stylesheet_uri(), array(), '1.0.0', false);

    // Google Fonts
    wp_enqueue_style( 'rajdhani', 'https://fonts.googleapis.com/css?family=Rajdhani:400,500,600,700|Seaweed+Script' );


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'wp_clean_scripts' );