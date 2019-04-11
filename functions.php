<?php


    // Theme support

    add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', "quote", "status", "video", "audio", 'chat']);

    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'custom-background' );

    add_theme_support( 'custom-header' );

    add_theme_support( 'custom-logo' );

    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'title-tag' );

    add_theme_support( 'customize-selective-refresh-widgets' );

    add_theme_support( 'starter-content' );



    // Add CSS
    function myportfolio_enqueue_styles(){

        wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all');
    }

    add_action('wp_enqueue_scripts', 'myportfolio_enqueue_styles', 10);


    // Register menu
    register_nav_menus( [
        'main-menu' => esc_html__( 'Main Menu', 'myportfolio' )
    ] );

    // Add scripts
    function myportfolio_enqueue_scripts(){
        // dependency for jquery. Part of core wp
        wp_enqueue_script( 'theme-js', get_stylesheet_directory_uri(). '/assets/js/theme.js', ['jquery'], time(), true  );
    }

    add_action('wp_enqueue_scripts', 'myportfolio_enqueue_scripts' );