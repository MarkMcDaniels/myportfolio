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
        wp_localize_script( 'theme-js', 'edit_paths', 
            array(
                'test' => _(get_template_directory_uri(  ) . '/template-parts/test.php'),
                'face' => _(get_template_directory_uri() . '/template-parts/edit-face.php'),
                'project_one' => _(get_template_directory_uri(  ) . '/template-parts/edit-project-one.php'),
                'project_two' => _(get_template_directory_uri(  ) . '/template-parts/edit-project-two.php'),
                'project_three' => _(get_template_directory_uri(  ) . '/template-parts/edit-project-three.php'),
                'fcc' => _(get_template_directory_uri(  ) . '/template-parts/fcc.php'),
                'fcc_hidden' => get_option('fcc_block')
    
                )
            
            
        );
        

    }

    add_action('wp_enqueue_scripts', 'myportfolio_enqueue_scripts' );

    
    // Initial theme values setup
    function create_initial_values() {
        add_option('face_pic', '#', '', yes);

        add_option('project_one', array(
            'pic_name' => 'hushed-app-projects.png',
            'description' => "The hushed app silences your phone for a meeting or class. After the time is up it turns all your notifications back on. Android phones don't currently have this as an option.",
            'title' => 'The Hushed App'
        ), '', yes);

        add_option('project_two', array(
            'pic_name' => 'hushed-site-projects.png',
            'description' => 'A responsive website for the Hushed App.',
            'title' => 'The Hushed Site'
        ), '', yes);

        add_option('project_three', array(
            'pic_name' => 'spacedev-theme-projects.png',
            'description' => 'An in place editable Wordpress Theme for designers, and developers with Woocommerce payment capabilities.',
            'title' => 'This WordPress Theme'

        ), '', yes);

        add_option('fcc_block', 'false', '', yes);
        

    }

    add_action( 'wp_head', 'create_initial_values', 10);

    // Post processing
    function manage_post_updates(){


    }

    // multiple hooks to manage each post action
    add_action('admin_post_nopriv_face_form', 'manage_post_updates', 10);
    add_action('admin_post_face_form', 'manage_post_updates', 10);

    
