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
    <?php 
        if(!empty($_POST)){
            $editable = $_POST['action'];
            
            switch($editable){
                case 'face-path':
                    update_option('face_pic', sanitize_file_name($_POST['face-path']), '', yes);
                    break;

                case 'project-one':
                    update_option('project_one', array(
                        'pic_name' => sanitize_file_name($_POST['project-one-path']),
                        'description' => sanitize_textarea_field($_POST['project-one-text']),
                        'title' => sanitize_text_field($_POST['project-one-title'])
                    ), '', yes);
                    break;
                
                case 'project-two':
                    update_option('project_two', array(
                        'pic_name' => sanitize_file_name($_POST['project-two-path']),
                        'description' => sanitize_textarea_field($_POST['project-two-text']),
                        'title' => sanitize_text_field($_POST['project-two-title'])
                    ), '', yes);
                    break;

                case 'project-three':
                    update_option('project_three', array(
                        'pic_name' => sanitize_file_name($_POST['project-three-path']),
                        'description' => sanitize_textarea_field($_POST['project-three-text']),
                        'title' => sanitize_text_field($_POST['project-three-title'])
                    ), '', yes);
                    break;

                case 'fcc-block':
                    if(isset($_POST['fcc_hide'])) {
                        update_option('fcc_block', 'true', '', yes);
                    } else {
                        update_option( 'fcc_block', 'false', "", yes);
                    }
                    break;
                
                default:
                    echo "I failed to update";
                    break;
            }
        }
    ?>
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
            <canvas id="stars" height="300">
            </canvas>
            <div id="canvas-overlay">
                <p id="phrase">I strive to deliver quality code, on<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;time, and at a reasonable price.</p>
                <p id="phrase-small">I strive to deliver quality code, on time, and at a reasonable price.</p>
                
                <div id="face">
                    <?php 
                        if(is_user_logged_in()){
                            get_template_part('template-parts/edit');
                        }
                    ?>
                    <img src="<?php echo get_option('face_pic')?>" alt="a persons face">
                </div>
            </div><!-- end of canvas-overlay -->
            
        </header>
        <div id="content" class="site-content">