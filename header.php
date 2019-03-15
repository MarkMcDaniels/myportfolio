<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Web Developer">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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
                <a id="payment" href="#">Make a Payment</a>
        </nav>
        
        <header id="masthead" class="site-header" role="banner">
          
            <p id="phrase">I strive to deliver quality code, on<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;time, and at a reasonable price.</p>
        
            <div id="face"></div>

            
        </header>
        <div id="content" class="site-content">