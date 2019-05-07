<?php   get_header(); ?>
    <div id="projects-wrapper">
        <h1 id="projects">Projects</h1>
        <h3 id="projects-small">Projects</h3>
        <div id="projects-content">
            
            <div id="project-one" class="project-grid-item">
                <div id="edit-project-one"><?php 
                    if(is_user_logged_in()){
                        get_template_part('template-parts/edit');
                    }
                ?>
                </div>
                <?php
                    
                    $project1 = get_option('project_one');
                    $picName1 = $project1['pic_name'];
                    $p1Descr = $project1['description'];
                    $p1Title = $project1['title'];
                ?>

                <div id="hushed-app" class="project-images"><img src="<?php echo get_template_directory_uri(  );?>/assets/images/<?php echo $picName1; ?>" alt="first project image"><!-- hushed-app-projects.png -->
            
                
                </div>
                <p id="app-small-title" class="project-small-title"><?php echo $p1Title; ?></p><!-- The Hushed App -->
                <p id="app-p"><!--
                    The hushed app silences your phone for a meeting or class. After the time is up it turns all your notifications back on. Android phones don't currently have this as an option.-->
                    <?php echo $p1Descr; ?>
                </p>
                
                <div class="project-grid-item project-grid-item-icons">
                    <a href="https://play.google.com/store/apps/details?id=com.hushedapp.hushed&hl=en">
                        <span class="fab fa-google-play"></span>
                    </a>
                    <a href="https://github.com/MarkMcDaniels">
                        <span class="fab fa-github"></span>
                    </a>
                </div>

            </div>
            <div id="project-two" class="project-grid-item">
                <div id="edit-project-two"><?php 
                        if(is_user_logged_in()){
                            get_template_part('template-parts/edit');
                        }
                    ?>
                </div>
                <?php
                    
                    $project2 = get_option('project_two');
                    $picName2 = $project2['pic_name'];
                    $p2Descr = $project2['description'];
                    $p2Title = $project2['title'];

                ?>

                <div id="hushed-site" class="project-images">
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/<?php echo $picName2; ?>" alt="second project image">
                </div>
                
                <p id="site-small-title" class="project-small-title"><!-- The Hushed Site --> <?php echo $p2Title ?></p>
                <p id="site-p">
                    <!--A responsive website for the Hushed App.-->
                    <?php echo $p2Descr; ?>
                </p>
                
                <div class="project-grid-item project-grid-item-icons">
                    <a href="https://thehushedapp.com">
                        <span class="fa fa-link"></span>
                    </a>
                    <a href="https://github.com/MarkMcDaniels">
                        <span class="fab fa-github"></span>
                    </a>
            </div>
            </div>
            <div id="project-three" class="project-grid-item">
                <div id="edit-project-three"><?php 
                        if(is_user_logged_in()){
                            get_template_part('template-parts/edit');
                        }
                    ?>
                </div>

                <?php
                    
                    $project3 = get_option('project_three');
                    $picName3 = $project3['pic_name'];
                    $p3Descr = $project3['description'];
                    $p3Title = $project3['title'];

                ?>

                <div id="spacedev-theme" class="project-images"><img src="<?php echo get_template_directory_uri(  );?>/assets/images/<?php echo $picName3; ?>" alt="third project image">
            
                </div>
                
                <p id="theme-small-title" class="project-small-title"><!--This WordPress Theme-->
                <?php $p3Title; ?></p>
                <p id="theme-p"><!-- 
                    An in place editable Wordpress Theme for designers, and developers with Woocommerce payment capabilities. -->
                    <?php echo $p3Descr; ?>
                </p>
                
                
                <div class="project-grid-item project-grid-item-icons">
                    <a href="#">
                        <span class="fa fa-link"></span>
                    </a>
                    <a href="https://github.com/MarkMcDaniels">
                        <span class="fab fa-github"></span>
                    </a>
            </div>
            </div>
            
        </div><!-- end of projects-content -->
        <div id="hr-line">
        </div>
        <div id="codepen-block">
            <div id="hide-codepen-block">
            <?php 
                if(is_user_logged_in()){
                    get_template_part('template-parts/edit');
                }
            ?>
            </div>
            <?php 
                $hidden = get_option( 'fcc_block');
                if ($hidden === 'false') {
                    get_template_part('template-parts/fcc-codeblock');
                }
            ?>
        </div><!-- end of codepen block -->
    </div><!--- end of projects-wrapper -->
    <div id="resume-block">
    <div id="resume-wrapper">
        <div id="resume-labels">
            <h1 id="resume">Resume: <a id="pdf-link" href="#"><span class="far fa-file-pdf"></span></a></h1>
            <h1 id="tech">Technologies I've used:</h1>
        </div><!-- end of resume-labels -->
        <div id="resume-content">
            <article class="tech-article center-h4">
                <h4>HTML</h4>
                <div class="div-img">
                    <img src="https://www.w3.org/html/logo/downloads/HTML5_Badge_64.png" alt="html 5 logo">
                </div>
            </article>
            <article class="tech-article center-h4">
                <h4>CSS</h4>
                <div class="div-img">
                    <img src="https://img.icons8.com/color/64/000000/css3.png" alt="css 3 logo">
                </div>
            </article>
            <article class="tech-article">
                <h4>JS</h4>
                <div class="div-img">
                    <img src="https://img.icons8.com/color/64/000000/javascript.png" alt="javascript logo">
                </div>           
            </article>
            <article class="tech-article">
                <h4>PYTHON</h4>
                <div class="div-img">
                    <img src="https://img.icons8.com/color/64/000000/python.png" alt="python logo">
                </div>
            </article>
            <article class="tech-article center-h4">
                <h4>REACT</h4>
                <div class="div-img">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/React-icon.svg/64px-React-icon.svg.png" alt="react logo">
                </div>
            </article>
            <article class="tech-article center-h4">
                <h4>JAVA</h4>
                <div class="div-img">
                    <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/icons8-java.svg" alt="java logo">
                </div>
            </article>
            <article class="tech-article">
                <h4>GITHUB</h4>
                <div class="div-img">
                    <img src="https://img.icons8.com/color/64/000000/github.png" alt="github logo">
                </div>
            </article>
            <article class="tech-article center-h4">
                <h4>PHP</h4>
                <div class="div-img">
                    <img src="<?php echo get_template_directory_uri(  ) ?>/assets/images/icons8-php-96.png" alt="php logo">
                </div>
            </article>
            <article class="tech-article">
                <h4>WORDPRESS</h4>
                <div class="div-img">
                    <img src="<?php echo get_template_directory_uri(  ) ?>/assets/images/icons8-wordpress-96.png" alt="wordpress logo">
                </div>
            </article>
            <article class="tech-article center-h4">
                <h4>SASS</h4>
                <div class="div-img">
                    <img src="https://sass-lang.com/assets/img/styleguide/color-1c4aab2b.png" alt="sass logo">
                </div>
            </article>
            <article class="tech-article">
                <h4>ANDROID</h4>
                <div class="div-img">
                    <img src="https://img.icons8.com/color/64/000000/android-os.png" alt="android logo">
                </div>
            </article>
            <article class="tech-article">
                <h4></h4>
                <div class="div-img">
                <img src="" alt="">
                </div>
            </article>
        </div>
    </div><!-- end of resume-wrapper -->
    </div><!-- end of resume block -->
    <div id="contact-wrapper">
        <div id="contact-content">
            <h1>Contact Me</h1>
            <?php echo Caldera_Forms::render_form( "CF5c8d7b2477311" ); ?>
        </div><!-- end of contact-content -->
    </div><!-- end of contact-wrapper -->

<?php get_footer();?>