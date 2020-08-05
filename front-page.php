<?php
    get_header();
?>
<!-- Full Page Intro -->
<!-- <div class="view" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Park Background.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;"> -->
<div class="view" style="background-color:#6E6FBE">
    <!-- Mask & flexbox options-->
    <div class="mask d-flex justify-content-center align-items-center" style="background-color:rgba(0,0,0,0.35)">
        <!-- Content -->
        <div class="container" style="margin-top:50px">
            <!--Grid row-->
            <div class="row justify-content-start">
                <!--Grid column-->
                <div class="col-md-6 white-text text-md-left mt-xl-5 mb-2 wow fadeInLeft" data-wow-delay="0.3s">
                    <h1 style="font-size:350%;font-weight:10; color:white">Looking for parking?</h1>
                    <h1 style="font-size:350%; color:var(--primary-green);font-weight:10">Get on the Gryd.</h1>
                    <hr class="hr-light">
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
            <div class="row justify-content-start">
                <form id="getresponse-form" class="form-inline getresponse" action="https://app.getresponse.com/add_subscriber.html" accept-charset="utf-8" method="post">
                    <!-- <div class="form-group mx-sm-3 my-2"> -->
                    <div class="col-sm-6">
                        <input type="text" name="email" class="form-control-plaintext" style="color:white; border:solid white 1px; height:45px;width:195px;padding-left: 10px" id="emailinput" placeholder="email@example.com">
                    </div>
                    <!-- </div> -->
                    <input type="hidden" name="campaign_token" value="KHQs0" />
                    <!-- <div class="form-group mx-sm-3 my-2"> -->
                    <div class="col-sm-6">
                        <input id="getresponse-submit" type="submit" class="btn" style="background-color:var(--primary-green);border-radius:0; min-height:45px;width:195px; margin-left:0px" value="Get Early Access" />
                        <!-- </div> -->
                    </div>
                </form>
                <div class="col-sm-6">
                    <!-- Thank you message -->
                    <div id="getresponse-submit-thankyou" class="text-white animated fadeIn" style="display:none">
                        <h2>Thank You!</h2>
                        <p>A message about what you should expect</p>
                    </div>
                </div>
            </div>
            <!--Grid row-->
        </div>
        <div class="float-right position-absolute fp-pattern" style="top:25vh;right:-38vw;"><img style="max-width:70vw" src="<?php echo get_template_directory_uri(); ?>/assets/images/Gryd-Pattern_Green-02.png"></div>
        <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
</div>
<!-- Full Page Intro -->
</header>
<?php
    get_footer();
?>