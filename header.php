<!DOCTYPE html>
<?php if (is_front_page()){ ?>
<html lang="en" class="front-page">
<?php } else { ?>
<html lang="en">
<?php } ?>
<!-- Need inline stylesheet to utilize php to get image link -->
<style>
    .gryd-pattern-background{
        position: relative; 

     }
    .gryd-pattern-background::before{
        content:"";
        width: 100%;
        height: 100%;
        position: absolute;
        background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Gryd-Pattern_Green-03.png');
        background-size: 750px;
        background-position: center; 
        background-attachment: fixed;
        opacity: 0.075;
    }  
</style>

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Load CSS, other header content-->
    <?php
        wp_head();
    ?>
</head>
<?php if (is_front_page()){ ?>

<body class="front-page">
    <?php } else { ?>

    <body class="gryd-pattern-background">
        <?php } ?>
        <!-- Main navigation -->
        <header>
            <!--Navbar-->
            <nav class="navbar fixed-top navbar-expand-lg  navbar-light bg-white navstyles" role="navigation">
                <div class="container">
                    <a class="navbar-brand" href="<?php echo get_home_url("/") ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/GrydPark-fullcolour.png" class="img-fluid " alt="{gryd-park-logo}" width="200"></a>
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
            </div>