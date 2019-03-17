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
        </div><!--- end of projects-wrapper -->
        <div id="contact-wrapper">
            <div id="contact-content">
                <h1>Contact Me</h1>
                <?php echo Caldera_Forms::render_form( "CF5c8d7b2477311" ); ?>
            </div><!-- end of contact-content -->
        </div><!-- end of contact-wrapper -->
    <h2>index.php</h2>

<?php get_footer();?>