<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Web Developer">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body <?php body_class(); ?>>
    <div id="page">
        <!-- accesibilty 
        <a href="#content" class="skip-link screen-reader-text">
            <?php //esc_html_e('Skip to content', 'wphierarchy'); ?>
        </a> -->
        
        <nav id="site-navigation" class="main-navigation" role="navigation">
                <?php
                 
                    wp_nav_menu([
                        'theme_location' => 'main-menu'
                    ]);
                ?>
            </nav>
        <div id="content" class="site-content">
        <header id="masthead" class="site-header" role="banner">
            <p id="test1">test1</p>
            <p id="test2">test2</p>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </header>