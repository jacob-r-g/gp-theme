<?php
    get_header();
?>
<!-- Full Page Intro -->
<div class="view" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Park Background.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
        <!-- Content -->
        <div class="container" style="margin-top:50px">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-md-6 white-text text-md-left mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.3s">
                    <h1 style="font-size:350%;font-weight:10; color:white">Looking for parking?</h1>
                    <h1 style="font-size:350%; color:var(--primary-green);font-weight:10">Get on the Gryd.</h1>
                    <hr class="hr-light">
                    <form class="form-inline getresponse" action="https://app.getresponse.com/add_subscriber.html" accept-charset="utf-8" method="post">
                        <div class="row">
                        <!-- <div class="form-group mx-sm-3 my-2"> -->
                            <div class="col">
                            <input type="text" name="email" class="form-control-plaintext" style="color:white; border:solid white 1px; height:45px" id="emailinput" placeholder="  email@example.com">
                        </div>
                        <!-- </div> -->
                        <input type="hidden" name="campaign_token" value="KHQs0" />
                        <!-- <div class="form-group mx-sm-3 my-2"> -->
                            <div class="col">
                            <input id="getresponse-submit" type="submit" class="btn" style="background-color:var(--primary-green); border-color:var(--primary-green);border-radius:0; margin-top:0;height:45px" value="Get Early Access" />
                        <!-- </div> -->
                        </div>
                        <div class="row">
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