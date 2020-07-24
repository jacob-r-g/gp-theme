<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Load CSS, other header content-->
    <?php
        wp_head();
    ?>
</head>
<html lang="en">

<body>
    <!-- Main navigation -->
    <header>
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg  navbar-dark transparent" role="navigation">
            <div class="container navbar-inner">
                <a class="navbar-brand" href="<?php echo get_home_url("/") ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/GrydPark-fullcolour-rev.png" class="img-fluid " alt="{gryd-park-logo}" width="250"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'theme_location' => 'primary',
                            'depth' => 2, // 1 = no dropdowns, 2 = with dropdowns.
                            'container'=> 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'main-navbar',
                            'menu_class'      => 'navbar-nav ml-auto mr-5',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        )
                    );
                    ?>
            </div>
        </nav>