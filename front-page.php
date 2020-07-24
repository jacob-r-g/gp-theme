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
            <div class="container navbar-inner" style="max-width:1400px">
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
<!-- Full Page Intro -->
<div class="view" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Park Background.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
        <!-- Content -->
        <div class="container" style="margin-top:50px">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-md-6 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.3s">
                    <h1 style="font-size:350%;font-weight:10; color:white">Looking for parking?</h1>
                    <h1 style="font-size:350%; color:var(--primary-green);font-weight:10">Get on the Gryd.</h1>
                    <hr class="hr-light">
                    <form class="form-inline getresponse" action="https://app.getresponse.com/add_subscriber.html" accept-charset="utf-8" method="post">
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="text" name="email" class="form-control-plaintext" style="color:white; border:solid white 1px;" id="emailinput" placeholder="  email@example.com" style="border:1px solid lightgray">
                        </div>
                        <input type="hidden" name="campaign_token" value="KHQs0" />
                        <div class="form-group mx-sm-3 mb-2">
                            <input id="getresponse-submit" type="submit" class="btn mb-2" style="background-color:var(--primary-green); border-color:var(--primary-green);border-radius:0" value="Get Early Access" />
                        </div>
                    </form>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
</div>
<!-- Full Page Intro -->
</header>
<?php
    get_footer();
?>