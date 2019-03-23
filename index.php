<?php   get_header(); ?>
    <div id="projects-wrapper">
        <h1 id="projects">Projects</h1>
        <div id="projects-content">
            
            <div class="project-grid-item">
                <div></div>
                <h3>The Hushed App</h3>
                <p>
                    The hushed app is a simple way to silence your phone for a meeting or class. After the time is up it turns all your notifications back on. Android phones don't currently have this as an option. I built one, and offered it to others for free.
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
            <div class="project-grid-item">
                <div></div>
                <h3>Hushed Website</h3>
                <p>
                    A responsive website for the Hushed App.
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
            <div class="project-grid-item">
                <div></div>
                <h3>Portfolio Theme</h3>
                <p>
                    An in place editable Wordpress Theme for designers, and developers with Woocommerce payment capabilities.
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
        <div id="hr-line"></div>
        <div id="codepen-block">
            <div id="fcc-labels">
                <div id="ffc-logo"><img src="<?php echo get_template_directory_uri(  );?>/assets/images/freecodecamp-logo.png" alt="free code camp logo"></div>
                <h3>Freecodecamp Certifications and Projects: </h3>
            </div>
            <div id="fcc-content">
                <div>
                    <p>Each Freecodecamp certificate is considered 300 hours of coursework.</p>
                    <ul>
                        <li><a href="https://www.freecodecamp.org/certification/markmcdaniels/responsive-web-design">Responsive Web Design</a></li>
                        <li><a href="https://www.freecodecamp.org/certification/markmcdaniels/javascript-algorithms-and-data-structures">Javascript Algorithms and Data Structures</a></li>
                        <li><a href="https://www.freecodecamp.org/certification/markmcdaniels/front-end-libraries">Front End Libraries</a></li>
                    </ul>

                </div>
                <div>
                    <span class="fab fa-codepen"></span>
                </div>
            </div>
        </div>
    </div><!--- end of projects-wrapper -->
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
    <div id="contact-wrapper">
        <div id="contact-content">
            <h1>Contact Me</h1>
            <?php echo Caldera_Forms::render_form( "CF5c8d7b2477311" ); ?>
        </div><!-- end of contact-content -->
    </div><!-- end of contact-wrapper -->

<?php get_footer();?>