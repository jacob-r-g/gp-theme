<?php
    get_header();
?>
<!-- Full Page Intro -->
<div class="view" style="background-color:white;overflow:visible;">
    <!-- Mask & flexbox options-->
    <div class="mask d-flex justify-content-center " style="background-color:rgba(0,0,0,0);overflow:visible;">
        <!-- Content -->
        <div style="min-height:100vh; max-height:100% class=" container">
            <!--Grid row-->
            <div class="row justify-content-start">
                <!--Grid column-->
                <!-- For larger screens -->
                <div class="d-none d-md-block col-md black-text my-lg wow fadeInLeft" data-wow-delay="0.3s">
                    <h1 style="margin-top:10vh" class="display-3 stic">Stop Driving in <span class="primary-green">Circles</span>.</h1>
                </div>
                <!-- For smaller screens -->
                <div class="d-md-none col-md black-text my-lg wow fadeInLeft" data-wow-delay="0.3s">
                    <h1 style="margin-top:10vh" class="display-3 stic-sm">Stop Driving in <span class="primary-green">Circles</span>.</h1>
                </div>
                <!--Grid column-->
            </div>
            <!-- Spacer -->
            <div class="my-5"></div>
            <!--Grid row-->
            <div id="getresponse-form-label" class="row justify-content-start">
                <div class="col-sm-6">
                    <h1 class="mb-3" style="font-size:1.125em; letter-spacing:2px"> GET EARLY ACCESS</h1>
                </div>
            </div>
            <!--Grid row-->
            <div class="row justify-content-start">
                <form id="getresponse-form" class="form-inline getresponse" action="https://app.getresponse.com/add_subscriber.html" accept-charset="utf-8" method="post">
                    <div class="col-md">
                        <div class="input-group mb-3">
                            <input style="width:55vw; max-width:300px" type="text" id="emailinput" name="email" class="form-control email-input" placeholder="johndoe@example.com">
                            <div class="input-group-append">
                                <button id="getresponse-submit" class="btn main-btn mail-btn" type="submit">Sign Up</button>
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
        <!-- For larger screens -->
        <div class="float-right position-absolute d-none d-lg-block" style="top:37vh;left:36vw;z-index:2"><img style="width:90vh ;max-width:1035px; min-width: 530px" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec1_grydcity.png"></div>
        <!-- For smaller screens -->
        <!--         <div class="container">
            <img class=" img d-lg-none" style="width:90vw" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec1_grydcity.png">
        </div> -->
    </div>
    <!-- Content -->
</div>
<!-- Mask & flexbox options-->
</div>
<!-- Full Page Intro -->
</header>
<div class="view" style="background-color:var(--light-gray);height:100%">
    <!-- Content -->
    <div class="container d-flex justify-content-center align-items-center my-5" style="min-height:100vh; max-height:100%">
        <div class="row align-items-center justify-content-center">
            <!-- Image col -->
            <div class="col-md mx-5 " style="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-crop.png" class="img-fluid pt-4" style="max-width:calc(1036px / 2); max-height:calc(1460px / 2); height:80vh">
            </div>
            <!-- Image col -->
            <!-- Text col -->
            <div style="min-width:40vw " class="col-md-6 d-none d-md-block">
                <h1 class="charcoal mt-3 h1-connecting">Connecting <span class="primary-green">drivers </span>to<br>available <span class="primary-green"> parking</span> spots.</h1>
                <div style="margin: 35px 0px;"></div> <!-- spacer -->
                <p class="body-copy">GrydPark is changing the way people park — Enabling drivers to find and pre-book parking spots through our advanced parking marketplace app.</p>
                <div style="margin: 35px 0px;"></div> <!-- spacer -->
                <button class="btn main-btn px-5" type="submit"> Learn More </button>
                <div class="pb-2"></div> <!-- spacer -->
            </div>
            <!-- Text col -->
            <!-- Text col  for small screens-->
            <div style="max-width:100vw" class="col-md-6 text-center d-md-none">
                <h1 class="charcoal mt-3" style="font-size:1.9rem">Connecting <span class="primary-green">drivers</span> to<br>available <span class="primary-green"> parking</span> spots.</h1>
                <div class="my-4"></div> <!-- spacer -->
                <p class="body-copy text-center">GrydPark is changing the way people park — Enabling drivers to find and pre-book parking spots through our advanced parking marketplace app.</p>
                <div class="my-4"></div> <!-- spacer -->
                <button class="btn main-btn px-5" type="submit"> Learn More </button>
                <div class="pb-2"></div> <!-- spacer -->
            </div>
            <!-- Text col -->
        </div>
        <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
</div>
<div class="view" style="background-color:white;height:100%">
    <!-- Content -->
    <div class="container" style="height:100% max-height:1080px">
        <!-- spacer -->
        <div class="my-5"></div>
        <h3 class="text-center primary-green" style="letter-spacing:3px">STEPS</h3>
        <h1 class="text-center mb-4 htp">HOW TO PARK</h1>
        <!-- For all screen sizes Except md -->
        <div class="row d-md-none d-lg-flex">
            <div class="col-md-4 mb-4 px-4">
                <h3 class="nums">01</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec3_plan.png" class="img-fluid my-4" style="max-width:100%;height:auto">
                <div class="card special-card-1 text-center">
                    <h3 class="primary-green pt-2 bh1">Plan</h3>
                    <p class="bbc">Enter an address, business
                        name or landmark to secure the  perfect parking spot for today  or for and upcoming trip.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4 px-4">
                <h3 class="nums">02</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec3_pay.png" class="img-fluid my-4" style="max-width:100%;height:auto">
                <div class="card special-card-1 text-center">
                    <h3 class="primary-green pt-2 bh1">Pay</h3>
                    <div class="triangle d-none d-md-block"></div>
                    <p class="bbc">Payment is quick, easy and secure through the grydpark mobile app.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4 px-4">
                <h3 class="nums">03</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec3_park.png" class="img-fluid my-4" style="max-width:100%;height:auto">
                <div class="card special-card-1 text-center">
                    <h3 class="primary-green pt-2 bh1">Park</h3>
                    <div class="triangle d-none d-md-block"></div>
                    <p class="bbc">Skip the hassle of parking  and arrive at your reserved spot using the instructions provided.</p>
                </div>
            </div>
        </div>
        <!-- For all screen sizes Except md -->
        <!-- For md screen size -->
        <div class="row d-none d-md-flex d-lg-none">
            <div class="col-md-4 mb-4 px-3">
                <h3>01</h3>
                <div style="min-height:310px" class="card special-card-1 text-center">
                    <h3 class="primary-green pt-2 bh1">Plan</h3>
                    <p class="bbc">Enter an address, business
                        name or landmark to secure the  perfect parking spot for today  or for and upcoming trip.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4 px-3">
                <h3>02</h3>
                <div style="min-height:310px" class="card special-card-1 text-center">
                    <h3 class="primary-green pt-2 bh1">Pay</h3>
                    <div class="triangle d-none d-md-block"></div>
                    <p class="bbc">Payment is quick, easy and secure through the grydpark mobile app.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4 px-3">
                <h3>03</h3>
                <div style="min-height:310px" class="card special-card-1 text-center">
                    <h3 class="primary-green pt-3 bh1">Park</h3>
                    <div class="triangle d-none d-md-block"></div>
                    <p class="bbc">Skip the hassle of parking  and arrive at your reserved spot using the instructions provided.</p>
                </div>
            </div>
        </div>
        <!--For md screen size -->
    </div>
    <!-- Content -->
    <!-- Spacer -->
    <div style="margin-bottom:80px"></div>
</div>
<div class="view" style="background-color:var(--light-gray); min-height:95vh;height:100%">
    <!-- Mask & flexbox options-->
    <!-- <div class="mask d-flex justify-content-center align-items-center"> -->
    <!-- Content -->
    <div class="container">
        <!-- spacer -->
        <div class="my-4"></div>
        <h3 class="text-center primary-green" style="letter-spacing:3px">PARKING</h3>
        <h1 class="text-center" style="letter-spacing:4px">BENEFITS</h1>
        <div class="row ">
            <div class="col">
                <div class="card mx-auto bg-light special-card-2 my-4 px-4">
                    <div class="row my-auto">
                        <div class="col-auto text-center my-auto">
                            <h3 class="h3-adapt-size" s>Convinient </h3>
                        </div>
                        <div class="col-auto primary-green my-auto d-none d-md-block"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.png" class="img-fluid" style="max-width:75px"> </div>
                        <div class="col text-left my-auto p-adapt-size">A solution to your parking stress at your fingertips. <br>Search, book and pay all in one seamless experience. </div>
                        <div class="col-1 d-none d-md-block">
                            <div class="bookmark shadow-sm">
                                <h6>A</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card mx-auto bg-light special-card-2 my-1 px-4">
                    <div class="row my-auto">
                        <div class="col-auto text-center my-auto">
                            <h3 class="h3-adapt-size">Affordable</h3>
                        </div>
                        <div style="size:200px" class="col-auto primary-green my-auto d-none d-md-block"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.png" class="img-fluid" style="max-width:75px"> </div>
                        <div class="col text-left my-auto p-adapt-size">Our competitive pricing is often lower than the surrounding parking options. Our casual rates mean that you only pay for when you need to park.</div>
                        <div class="col-1 d-none d-md-block">
                            <div class="bookmark shadow-sm">
                                <h6>B</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card mx-auto bg-light special-card-2 my-4 px-4 ">
                    <div class="row my-auto">
                        <div class="col-auto text-center my-auto">
                            <h3 class="h3-adapt-size">Innovative</h3>
                        </div>
                        <div class="col-auto primary-green my-auto d-none d-md-block"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.png" class="img-fluid" style="max-width:75px"> </div>
                        <div class="col text-left my-auto p-adapt-size">Book a parking spot before you leave home to avoid circling the block.  Our helpful navigation system will direct you straight to your assigned spot.</div>
                        <div class="col-1 d-none d-md-block">
                            <div class="bookmark shadow-sm">
                                <h6>C</h6>
                            </div>
                        </div>
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
<div class="view" style="background-color:white;height:45vh">
    <!-- Mask & flexbox options-->
    <div class="mask d-flex justify-content-center align-items-center">
        <!-- Content -->
        <div class="container d-flex justify-content-center align-items-center text-center bg-light-gray hqb">
            <div class="row">
                <div class="col">
                    <h1 class="hqh"> HAVE QUESTIONS?</h1>
                    <button onclick=" help_page()" class="btn main-btn px-5">Grydpark Support Site</button>
                    <script>
                    function help_page()
                    {
                        window.open(
                          'https://help.parkwithgryd.com/',
                          '_blank' // <- open in new window.
                        );
                    } 
                    </script>
                </div>
            </div>
        </div>
        <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
</div>
<?php
    get_footer();
?>