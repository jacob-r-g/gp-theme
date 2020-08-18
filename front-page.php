<?php
    get_header();
?>
<!-- Full Page Intro -->
<!-- <div class="view" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Park Background.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;"> -->
<div class="view" style="background-color:white">
    <!-- Mask & flexbox options-->
    <div class="mask d-flex justify-content-center align-items-center" style="background-color:rgba(0,0,0,0)">
        <!-- Content -->
        <div class="container" style="margin-top:-75px">
            <!--Grid row-->
            <div class="row justify-content-start">
                <!--Grid column-->
                <div class="col-md black-text my-md wow fadeInLeft" data-wow-delay="0.3s">
                    <h1 style="font-weight:100;" class="display-3">Stop Driving in <span style="color:var(--primary-green)">Circles</span>.</h1>
                    <!-- <hr class="hr-light"> -->
                </div>
                <!--Grid column-->
            </div>

            <!-- Spacer -->
            <div class="my-5"></div>
            <!--Grid row-->
            <div id="getresponse-form-label" class="row justify-content-start">
                <div class="col-sm-6">
                    <h1 class="mb-3"style="font-size:1.25em"> GET EARLY ACCESS</h1>
                </div>
            </div>
            <!--Grid row-->
            <div class="row justify-content-start">
                <form id="getresponse-form" class="form-inline getresponse" action="https://app.getresponse.com/add_subscriber.html" accept-charset="utf-8" method="post">
                    <div class="col-md">
                        <div class="input-group mb-3">
                            <input style="width:300px" type="text" id="emailinput" name="email" class="form-control" placeholder="Your email here.">
                            <div class="input-group-append">
                                <button style="margin:0;text-transform:None;width:100px" id="getresponse-submit" class="btn btn-dark" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="campaign_token" value="KHQs0" />
                </form>
                <div class="col-sm-6">
                    <!-- Thank you message -->
                    <div id="getresponse-submit-thankyou" class="text-black animated fadeIn" style="display:none">
                        <h2>Thank You!</h2>
                        <p>A message about what you should expect</p>
                    </div>
                </div>
            </div>
            <!--Grid row-->
        </div>
        <div class="float-right position-absolute fp-pattern" style="top:5vh;left:80vw;"><img style="max-width:450px" src="<?php echo get_template_directory_uri(); ?>/assets/images/Gryd-Pattern_Black-02_rotate.png"></div>
        <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
</div>
<!-- Full Page Intro -->
</header>
<?php
    get_footer();
?>