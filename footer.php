<!-- Footer -->
<footer class="footer" style="position:relative;display:block">
    <div class="container" style="padding-left: 30px">
        <div style="padding-top: 50px;padding-bottom: 30px;">
            <a href="https://gryd.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Gryd-fullcolour-rev-left-top-crop.png" class="img-fluid " alt="{gryd-logo}" width="175" style="margin-right: 50px"></a>
            <!-- Widget Area -->
            <div style="display:inline-block;">
                <?php
                dynamic_sidebar('footer-1')
                ?>
                <!--                 <a target="_blank" href="https://www.facebook.com/grydcom/"><i class="fa fa-facebook-square social" aria-hidden="true"></i></a>
                <a target="_blank" href="https://www.instagram.com/gryd.com/"><i class="fa fa-instagram social" aria-hidden="true"></i></a>
                <a target="_blank" href="https://www.youtube.com/channel/UC5Q4Zjc7iZYDxRzYPK7c8Nw"><i class="fa fa-youtube-play social" aria-hidden="true"></i></a>
                <a target="_blank" href="https://www.linkedin.com/company/18090906/"><i class="fa fa-linkedin-square social" aria-hidden="true"></i></a> -->
            </div>
            <!-- Widget Area -->
        </div>
        <h3 style="margin-top: 15px; font-size:150%"> Get In Touch</h3>
        <a class="mail" href="mailto:park@gryd.com">park@gryd.com</a>
        <div style="margin-bottom: 10px;margin-top: 40px;">
            <!-- Footer Navigation -->
            <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'footer',
                            'theme_location' => 'footer',
                            'container_class' => 'footer-menu'
                        )
                    );
                    ?>
        </div>
        <div style="font-size:85%; font-weight:300; padding-bottom:10px;">&copy; Copyright 2020 Gryd.com</div>
    </div>
</footer>
<!-- Load Javascript -->
<?php 
        wp_footer();
    ?>
</body>

</html>