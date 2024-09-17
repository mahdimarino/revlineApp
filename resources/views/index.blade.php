@extends('layout')
@section('content')
 <style>
    /* Full-screen video background */
    .video-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        overflow: hidden;
    }

    .subtitle {
        font-size: 25px;
    }

    .video-background video {
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        object-fit: cover;
    }

    /* Overlay content */
    .landing-content {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        color: white;
        text-align: center;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /* background-color: rgba(0, 0, 0, 0.5); */
        /* dark overlay */
        z-index: 1;
    }

    .content {
        z-index: 2;
        margin-top: 10rem;
    }

    .brands-stage-carousel img {
        height: 40px;
        /* Set a fixed height */
        object-fit: cover;
        /* Ensures the image maintains its aspect ratio and covers the area */
        width: 100%;
        /* Ensures the image fills the container's width */

    }
</style>
<div class="video-background">
    <video autoplay muted loop>
        <source src="assets/img/bannervid.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
</div>

<!-- Landing Section -->
<div class="landing-content">
    <div class="overlay"></div>
    <div class="content container">
        <h1 class="display-3 text-dark"><em><b class="text-danger">Rev</b><b>Line Marketing</b></em></h1>
        <h2 class="lead subtitle text-dark">Elevating Sales and Marketing <br> With our Tailored AI-Powered Approach
        </h2>
        <a class="btn-animation border dark" href="contact.php" data-animation="btn-animation dark border">Contact us <i
                class="arrow"></i></a>
    </div>
</div>
<!-- Start Banner 
    ============================================= -->
<!-- <div class="banner-area top-pad-90 bg-mixed double-items text-light"
        style="background-image: url(assets/img/shape/23.png);">
        <div id="bootcarousel" class="carousel slide carousel-fade animate_text" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="box-table">
                        <div class="box-cell">
                            <div class="container">
                                <div class="content">
                                    <div class="row align-center">
                                        <div class="col-lg-6 info">
                                            <h2 style="padding: 1rem !important;" data-animation="animated slideInRight">RevLine MARKETING
                                            </h2>
                                            <p data-animation="animated slideInLeft">
                                                Elevating Sales and Marketing <br> With our Tailored AI-Powered Approach
                                            </p>
                                            <a class="btn-animation border light" href="contact.html"
                                                data-animation="animated slideInUp">Contact us <i
                                                    class="arrow_right"></i></a>
                                        </div>
                                        <div class="col-lg-6 thumb" data-animation="animated slideInUp">
                                            <img src="assets/img/illustration/4.png" alt="Thumb">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
           
        </div>
    </div> -->
<!-- End Banner -->

<!-- Start Features
    ============================================= -->
<div class="our-features-area default-padding bottom-less">
    <div class="container text-center">
        <div class="row d-flex justify-content-around">
            <div class="col-lg-10">
                <div class="heading-center text-center">

                    <h2 style="padding: 1rem !important;">DATA & INTENT ‍DRIVEN APPROACH</h2>
                    <h5>Tracking the behavior of the opted-in contacts in our database enables us to more quickly target
                        your most relevant
                        leads.</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="features-box">
            <div class="row">
                <div class="col-lg-12 featur-item">
                    <div class="row">
                        <!-- Single Itme -->
                        <div class="col-lg-4 col-md-6 single-item hoverx2">
                            <div class="item text-center">
                                <div class="icon w-50 m-auto">
                                    <img src="assets/img/icon/1 Strong Intent Engine.png" alt="">
                                </div>
                                <div class="content mt-3">
                                    <h4>Strong Intent Engine</h4>
                                    <p>
                                        Find qualified first-party intent data to identify those prospects who are
                                        interested in your contact.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!-- End Single Itme -->
                        <!-- Single Itme -->
                        <div class="col-lg-4 col-md-6 single-item hoverx2">
                            <div class="item text-center">
                                <div class="icon w-50 m-auto">
                                    <img src="assets/img/icon/2 Look-a-Like Search Engine (1).png" alt="">
                                </div>
                                <div class="content mt-3">
                                    <h4>Look-a-Like Search Engine</h4>
                                    <p>
                                        Identify new potential clients that mirror the characteristics of your most
                                        profitable customers.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!-- End Single Itme -->
                        <!-- Single Itme -->
                        <div class="col-lg-4 col-md-6 single-item hoverx2">
                            <div class="item text-center">
                                <div class="icon w-50 m-auto">
                                    <img src="assets/img/icon/3 Intuitive AI Platform.png" alt="">
                                </div>
                                <div class="content mt-3">
                                    <h4>Intuitive AI Platform</h4>
                                    <p>
                                        Our unique AI quickly identifies your most relevant prospects and gathers
                                        critical contact info.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!-- End Single Itme -->
                        <!-- Single Itme -->
                        <div class="col-lg-4 col-md-6 single-item hoverx2">
                            <div class="item text-center">
                                <div class="icon w-50 m-auto">
                                    <img src="assets/img/icon/4 Engagement at Every Stage.png" alt="">
                                </div>
                                <div class="content mt-3">
                                    <h4>Engagement at Every Stage</h4>
                                    <p>
                                        We don’t stop at top of funnel From double touch to nurture & human based QA
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!-- End Single Itme -->
                        <!-- Single Itme -->
                        <div class="col-lg-4 col-md-6 single-item hoverx2">
                            <div class="item text-center">
                                <div class="icon w-50 m-auto">
                                    <img src="assets/img/icon/5 Psychological Profiles.png" alt="">
                                </div>
                                <div class="content mt-3">
                                    <h4>Psychological Profiles</h4>
                                    <p>
                                        Our AI helps us build your buyer’s persona, resulting in more targeted leads.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!-- End Single Itme -->
                        <!-- Single Itme -->
                        <div class="col-lg-4 col-md-6 single-item hoverx2">
                            <div class="item text-center">
                                <div class="icon w-50 m-auto">
                                    <img src="assets/img/icon/6 Strategic Approach.png" alt="">
                                </div>
                                <div class="content mt-3">
                                    <h4>Strategic Approach</h4>
                                    <p>
                                        We analyze your business and industry to create demand strategies aligned with
                                        your goals and audience.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!-- End Single Itme -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Features -->

<!-- Start Free Trial 
    ============================================= -->
<!--    <div class="free-trial-area overflow-hidden default-padding-bottom relative bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 left-info">
                    <h2 style="padding: 1rem !important;" data-animation="animated slideInLeft"> EMPOWERING GROWTH THROUGH DYNAMIC DEMAND
                        GENERATION</h2>
                    <p data-animation="animated slideInLeft hoverx2">
                        At RevLine Marketing, we specialize in driving success through B2B demand generation strategies
                        that deliver results.

                        Our tailored solutions are designed to ignite growth, nurture leads, and maximize your ROI.

                        With a deep understanding of the evolving B2B landscape, we empower your business to thrive in
                        competitive markets.

                    </p>
                    <ul>
                        <li>Grow your sales</li>
                        <li>Develop a Marketing Plan</li>
                        <li>Promote services</li>
                    </ul>
                    <a class="btn circle btn-theme effect btn-sm" href="contact.html">Get in touch</a>
                </div>
                <div class="col-lg-6 thumb hoverx2">
                    <img src="assets/img/illustration/1.svg" alt="Thumb">
                </div>
            </div>
        </div>
    </div> -->
<!-- End Free Trial -->

<!-- Star Choose us Area
    ============================================= -->
<!--   <div id="Business" class="choose-us-area relative">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 thumb part3div hoverx2"
                    style="background-image: url(assets/img/illustration/8.png); background-size: 80%; background-repeat: no-repeat;">
                </div>
                <div class="col-lg-6 info part4div">
                    <h5>Statistics</h5>
                    <h2 class="hoverx2">Unlocking Business Growth</h2>
                    <p class="hoverx2">
                        Welcome to a transformative journey towards propelling your business to new heights. Our mission
                        is to guide you through the dynamic landscape of online success, helping you attract not just
                        more visitors, but the right visitors – those who resonate with your offerings and hold the
                        potential to become loyal customers. Discover cutting-edge strategies that delve beyond
                        conventional approaches, harnessing the power of SEO, content excellence, and strategic
                        networking. Elevate your website's visitor engagement and watch your business flourish in the
                        digital realm. Let's unlock growth, together.
                    </p>
                    <div class="statistics">
                        <div class="item">
                            <div class="chart" data-percent="65" data-track-color="#e7e7e7" data-bar-color="red">
                                <span>65%</span>
                            </div>
                            <h5>- Before Marketing</h5>
                        </div>
                        <div class="item">
                            <div class="chart" data-percent="85" data-track-color="#e7e7e7" data-bar-color="red">
                                <span>85%</span>
                            </div>
                            <h5>After Marketing</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- End Choose us Area Area -->

<!-- Star Services
    ============================================= -->
<div id="why-Us" class="services-content-area text-center carousel-shadow bg-gray default-padding">
    <!-- Fixed Shape -->
    <div class="fixed-shape">
        <img src="assets/img/shape/33.png" alt="Shape">
    </div>
    <!-- End Fixed Shape -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="heading-center text-center">
                    <h5>Solutions We Provide</h5>
                    <h2 style="padding: 1rem !important;">Outstanding B2B Lead Generation Solutions</h2>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-left: 0 !important;" class="container-full">
        <div class="services-content-box services-stage-carousel owl-carousel owl-theme">
            <!-- Signle item -->
            <div class="item hoverx2">
                <div class="icon">
                    <i class="flaticon-target"></i>
                </div>
                <h4>MQL</h4>
                <p>
                    Discover exceptionally qualified MQLs (marketing qualified leads) who've shared their details due to
                    their interest in
                    your product, Solutions, or service.
                </p>

            </div>
            <div class="item hoverx2">
                <div class="icon">
                    <i class="flaticon-solution"></i>
                </div>
                <h4>ABM</h4>
                <p>
                    Utilize advanced ABM (account-based marketing) strategies to align your customer database with
                    authentic first-party
                    intent data, enabling strategic data-driven campaigns.
                </p>

            </div>
            <div class="item hoverx2">
                <div class="icon">
                    <i class="flaticon-advertising"></i>
                </div>
                <h4>HQL</h4>
                <p>
                    Explore HQL's (highly qualified leads) who have displayed a deeper interest in your company's
                    offerings after answering
                    multiple qualified questions.
                </p>

            </div>
            <!-- End Signle item -->
            <!-- Signle item -->
            <div class="item hoverx2">
                <div class="icon">
                    <i class="flaticon-technical-support"></i>
                </div>
                <h4>BANT</h4>
                <p>
                    Budget, Authority, Need, Timeframe (BANT) comprises a set of old-school but established guidelines.
                    Our AI guides every
                    prospect through these stages to identify leads for you.
                </p>

            </div>
            <!-- End Signle item -->


        </div>
    </div>
</div>
<!-- End Services -->

<!-- Star Team
    ============================================= -->
<div id="why-Us" class="services-content-area text-center carousel-shadow bg-gray default-padding">
    <!-- Fixed Shape -->
    <div class="fixed-shape">
        <img src="assets/img/shape/33.png" alt="Shape">
    </div>
    <!-- End Fixed Shape -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="heading-center text-center">
                    <h5>Our Partners</h5>
                    <h2 style="padding: 1rem !important;">Join Our Growing List of Satisfied Clients
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-left: 0 !important;" class="container-full">
        <div class="services-content-box brands-stage-carousel owl-carousel owl-theme">
            <!-- Signle item -->
            <div class="item hoverx2">
                <img src="{{ asset('assets/img/download2.png')}}" alt="">
            </div>
            <div class="item hoverx2">
                <img src="{{ asset('assets/img/download3.png')}}" alt="">
            </div>
            <div class="item hoverx2">
                <img src="{{ asset('assets/img/download4.png')}}" alt="">
            </div>
            <div class="item hoverx2">
                <img src="{{ asset('assets/img/images5.png')}}" alt="">
            </div>
            <div class="item hoverx2">
                <img src="{{ asset('assets/img/download6.png')}}" alt="">
            </div>
            <div class="item hoverx2">
                <img src="{{ asset('assets/img/download7.png')}}" alt="">
            </div>
            <div class="item hoverx2">
                <img src="{{ asset('assets/img/download8.png')}}" alt="">
            </div>
            <div class="item hoverx2">
                <img src="{{ asset('assets/img/download9.jpg')}}" alt="">
            </div>

            <div class="item hoverx2">
                <img src="{{ asset('assets/img/download10.png')}}" alt="">
            </div>
            <div class="item hoverx2">
                <img src="{{ asset('assets/img/download11.png')}}" alt="">
            </div>
            <div class="item hoverx2">
                <img src="{{ asset('assets/img/download.png')}}" alt="">
            </div>
          
        </div>
    </div>
</div>
<!-- End Team -->

<!-- Start Fun Factor Area
    ============================================= -->
<!--     <div class="fun-fact-area text-center text-light default-padding">
        <div class="container">
            <div class="inner-items">
                <div class="row">
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="687" data-speed="5000">687</div>
                            <span class="medium">Projects Executed</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="2348" data-speed="5000">2348</div>
                            <span class="medium">Data Analytics</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="450" data-speed="5000">450</div>
                            <span class="medium">Data Management</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="1200" data-speed="5000">1200</div>
                            <span class="medium">Satisfied Customers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- End Fun Factor Area -->

<!-- Start Pricing Area
    ============================================= -->

<!-- End Pricing Area -->

<!-- Star Testimonials
    ============================================= -->
<div class="testimonials-area default-padding-bottom bg-gray">
    <div class="container">
        <div class="testimonial-items text-center">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="heading mt-5">
                        <h2>Happy Customers</h2>
                    </div>
                    <div class="testimonials-carousel owl-carousel owl-theme">
                        <div class="item">
                            <p>
                                I'm thrilled with the service I received from this company! Their attention to
                                detail and commitment to customer satisfaction truly stand out. My experience
                                exceeded my expectations, and I'll definitely be recommending them to friends and
                                colleagues.
                            </p>
                            <div class="thumb-box">

                            </div>
                            <h5>Alice Johnson</h5>
                            <span>Marketing Manager</span>
                        </div>
                        <div class="item">
                            <p>
                                What a fantastic team! From the moment I contacted them, I knew I was in good hands.
                                Their professionalism and expertise made my project a breeze. I'm so impressed with
                                the quality of their work and the timely manner in which it was delivered.
                            </p>
                            <div class="thumb-box">

                            </div>
                            <h5>David Smith</h5>
                            <span>Small Business Owner</span>
                        </div>
                        <div class="item">
                            <p>
                                I can't thank this company enough for their outstanding service. They took the time
                                to understand my unique needs and provided tailored solutions that worked perfectly
                                for me. Working with them was a delight, and I'm already looking forward to our next
                                collaboration.
                            </p>
                            <div class="thumb-box">

                            </div>
                            <h5>Emily Williams</h5>
                            <span>Brand Manager</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonials -->

<!-- Star Blog
    ============================================= -->

<!-- End Blog -->
@endsection