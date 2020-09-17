<?php
    get_header();
?>
<!-- Full Page Intro -->
<div class="view" style="background-color:white;overflow:visible;">
    <!-- Mask & flexbox options-->
    <div class="mask d-flex justify-content-center align-items-center" style="background-color:rgba(0,0,0,0);overflow:visible;">
        <!-- Content -->
        <div class="container" style="margin-top:-150px;margin-bottom:120px;">
            <!--Grid row-->
            <div class="row justify-content-start">
                <!--Grid column-->
                <div class="col-md black-text my-md wow fadeInLeft" data-wow-delay="0.3s">
                    <h1 style="font-weight:400;" class="display-3">Stop Driving in <span style="color:var(--primary-green)">Circles</span>.</h1>
                    <!-- <hr class="hr-light"> -->
                </div>
                <!--Grid column-->
            </div>
            <!-- Spacer -->
            <div class="my-5"></div>
            <!--Grid row-->
            <div id="getresponse-form-label" class="row justify-content-start">
                <div class="col-sm-6">
                    <h1 class="mb-3" style="font-size:1.25em"> GET EARLY ACCESS</h1>
                </div>
            </div>
            <!--Grid row-->
            <div class="row justify-content-start">
                <form id="getresponse-form" class="form-inline getresponse" action="https://app.getresponse.com/add_subscriber.html" accept-charset="utf-8" method="post">
                    <div class="col-md">
                        <div class="input-group mb-3">
                            <input style="height:50px;width:60vw; max-width:300px" type="text" id="emailinput" name="email" class="form-control" placeholder="Your email here.">
                            <div class="input-group-append">
                                <button style="margin:0;text-transform:None;width:130px" id="getresponse-submit" class="btn main-btn" type="submit">Sign Up</button>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="campaign_token" value="KHQs0" />
                </form>
                <div class="col-sm-6">
                    <!-- Thank you message -->
                    <div id="getresponse-submit-thankyou" class="text-black animated fadeIn" style="display:none">
                        <h2>You’re on the waitlist!</h2>
                        <p>We will reach out shortly with more info.</p>
                    </div>
                </div>
            </div>
            <!--Grid row-->
        </div>
        <div class="float-right position-absolute fp-pattern" style="top:22vh;left:33vw;z-index:2"><img style="width:100vh ;max-width:700px; min-width: 530px" src="<?php echo get_template_directory_uri(); ?>/assets/images/temp_city.png"></div>
        <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
</div>
<!-- Full Page Intro -->
</header>
<div class="view" style="background-color:var(--light-gray)">
    <!-- Mask & flexbox options-->
    <div class="mask d-flex justify-content-center align-items-center">
        <!-- Content -->
        <div class="container">
            <div class="row align-items-center">
                <!-- Image col -->
                <div class="col">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/temp_phone.png" class="img-fluid" style="max-width:300px; height:95vh">
                </div>
                <!-- Image col -->
                <!-- Text col -->
                <div class="col-6">
                    <h3 class="charcoal">Connecting <span class="primary-green">drivers</span> to<br>available <span class="primary-green"> parking</span> spots.</h3>
                    <div class="my-4"></div> <!-- spacer -->
                    <p>GrydPark is changing the way people park — Enabling<br> drivers to find and pre-book parking spots through our<br> advanced parking marketplace app.</p>
                    <div class="my-4"></div> <!-- spacer -->
                    <button class="btn main-btn px-5" type="submit"> Learn More </button>
                </div>
                <!-- Text col -->
            </div>
        </div>
        <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
</div>
<div class="view" style="background-color:white">
    <!-- Mask & flexbox options-->
    <div class="mask d-flex justify-content-center align-items-center">
        <!-- Content -->
        <div class="container" style="width:95%; height:95%">
            <!-- spacer -->
            <div class="my-5"></div>
            <h3 class="text-center primary-green" style="letter-spacing:3px">STEPS</h3>
            <h1 class="text-center" style="letter-spacing:4px">HOW TO PARK</h1>
            <div class="row">
                <div class="col">Col1</div>
                <div class="col">Col2</div>
                <div class="col">Col3</div>
            </div>
        </div>
        <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
</div>
<div class="view" style="background-color:var(--light-gray); min-height:680px ">
    <!-- Mask & flexbox options-->
    <!-- <div class="mask d-flex justify-content-center align-items-center"> -->
    <!-- Content -->
    <div class="container">
        <!-- spacer -->
        <div class="my-5"></div>
        <h3 class="text-center primary-green" style="letter-spacing:3px">PARKING</h3>
        <h1 class="text-center" style="letter-spacing:4px">BENEFITS</h1>
        <div class="row ">
            <div class="col">
                <div class="card mx-auto bg-light special-card my-4 px-4 ">
                    <div class="row my-auto">
                        <div class="col-3 text-center my-auto">
                            <h3 class="h3-adapt-size">Convinient </h3>
                        </div>
                        <div class="col-2 primary-green my-auto"> -------> </div>
                        <div class="col text-left my-auto">A solution to your parking stress at your fingertips. <br>Search, book and pay all in one seamless experience. </div>
                        <div class="col-1">Bookmrk?</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card mx-auto bg-light special-card my-4 px-4">
                    <div class="row my-auto">
                        <div class="col-3 text-center my-auto">
                            <h3 class="h3-adapt-size">Affordable</h3>
                        </div>
                        <div class="col-2 primary-green my-auto"> -------> </div>
                        <div class="col text-left">Our competitive pricing is often lower than the surrounding parking options.<br>  Our casual rates mean that you only pay for when you need to park.</div>
                        <div class="col-1">Bookmrk?</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card mx-auto bg-light special-card my-4 px-4 ">
                    <div class="row my-auto">
                        <div class="col-3 text-center my-auto">
                            <h3 class="h3-adapt-size">Innovative</h3>
                        </div>
                        <div class="col-2 primary-green my-auto"> -------> </div>
                        <div class="col text-left">Book a parking spot before you leave home to avoid circling the block.<br>  Our helpful navigation system will direct you straight to your assigned spot.</div>
                        <div class="col-1">Bookmrk?</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
</div>
<!-- Mask & flexbox options-->
<!-- </div> -->
</div>
<div class="view" style="background-color:white;height:50vh">
    <!-- Mask & flexbox options-->
    <div class="mask d-flex justify-content-center align-items-center">
        <!-- Content -->
        <div class="container text-center">
            <h1 class="--primary-green" style="font-weight:500;letter-spacing:3px"> HAVE QUESTIONS? </h1>
            <button class="btn main-btn px-5" type="submit">Grydpark Support Site </button>
        </div>
        <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
</div>
<?php
    get_footer();
?>