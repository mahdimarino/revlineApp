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

    .titleh3::before {
    content: "\2713"; /* Unicode for check mark */
    color: blue; /* Set the color to blue */
    margin-right: 10px; /* Adds some space between the check mark and the heading */
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
</style>
{{-- <div class="video-background">
    <video autoplay muted loop>
        <source src="assets/img/bannervid.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
</div> --}}

<!-- Landing Section -->
{{-- <div class="landing-content">
    <div class="overlay"></div>
    <div class="content container">
        <h1 class="display-3 text-dark"><em><b class="text-danger">Rev</b><b>Line Marketing</b></em></h1>
        <h2 class="lead subtitle text-dark">Elevating Sales and Marketing <br> With our Tailored AI-Powered Approach
        </h2>
        <a class="btn-animation border dark" href="contact.php" data-animation="btn-animation dark border">Contact us <i
                class="arrow"></i></a>
    </div>
</div> --}}
<!-- Start Banner 
    ============================================= -->
 {{-- <div class="banner-area top-pad-90 bg-mixed double-items text-light"
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
    </div>  --}}
    <div class="banner-area top-pad-90 bg-mixed double-items text-light"
        {{-- style="background-image: url(assets/img/shape/23.png);" --}}
        >
        <div id="bootcarousel" class="carousel slide carousel-fade animate_text" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div style=" border-bottom: 5rem solid blue; font-style: italic !important;" class="box-table">
                        <div class="box-cell">
                            <div class="container ">
                                <div class="content">
                                    <div class="row align-center">
                                        <div class="col-lg-8 info">
                                            <h3 class="text-dark" style="padding: 1rem !important;" data-animation="animated slideInRight">
                                                <b style="color: blue">small</b> enough to be flexible
                                            </h3>
                                            <h2 class="text-dark" style="padding: 1rem !important;" data-animation="animated slideInRight">
                                                <b style="color: red" >BIG</b> enough to fulfill your campaigns
                                            </h2>
                                            {{-- <p data-animation="animated slideInLeft">
                                                Elevating Sales and Marketing <br> With our Tailored AI-Powered Approach
                                            </p> --}}
                                            <a class="btn-animation border light" href="contact.html"
                                                data-animation="animated slideInUp">Contact us <i
                                                    class=""></i></a>
                                        </div>
                                        <div class="col-lg-4 thumb" data-animation="animated slideInUp">
                                            <img src="https://scontent.fdxb2-1.fna.fbcdn.net/v/t1.15752-9/461416187_507614272147275_8909323302051623766_n.png?stp=dst-png_s2048x2048&_nc_cat=111&ccb=1-7&_nc_sid=9f807c&_nc_ohc=oh2tn8B1amwQ7kNvgE7GPQ3&_nc_ht=scontent.fdxb2-1.fna&_nc_gid=AnZdSfp3PmtHKu5UL0NB9YD&oh=03_Q7cD1QG72yTO0P7RkQeRFeE9UZJy6UPbwGCwSmvNoj1YrvPXnQ&oe=672BEA3D" alt="Thumb">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
    
        </div>
    </div>
<!-- End Banner -->

<!-- Start Features
    ============================================= -->
<div class="our-features-area default-padding bottom-less">
    {{-- <div class="container text-center">
        <div class="row d-flex justify-content-around">
            <div class="col-lg-10">
                <div class="heading-center text-center">

                    <h2 style="padding: 1rem !important;">DATA & INTENT ‍DRIVEN APPROACH</h2>
                    <h4>Tracking the behavior of the opted-in contacts in our database enables us to more quickly target
                        your most relevant
                        leads.</h4>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container">
        <div class="features-box">
            <div class="row">
                <div class="col-lg-12 featur-item">
                    <div class="row justify-content-center">
                        <!-- Single Itme -->
                        <div class="col-lg-4 col-md-6 single-item hoverx2">
                            <div class="item text-center">
                                {{-- <div class="icon w-50 m-auto">
                                    <img src="assets/img/icon/1 Strong Intent Engine.png" alt="">
                                </div> --}}
                                <div class="content mt-3">
                                    <h4>USA-based Company</h4>
                                    <p>
                                        Partner with a U.S.-based company staffed by experienced professionals, all of
                                        whom have English as first language. We
                                        ensure smooth and clear communication every step of the way!
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!-- End Single Itme -->
                        <!-- Single Itme -->
                        <div class="col-lg-4 col-md-6 single-item hoverx2">
                            <div class="item text-center">
                                {{-- <div class="icon w-50 m-auto">
                                    <img src="assets/img/icon/2 Look-a-Like Search Engine (1).png" alt="">
                                </div> --}}
                                <div class="content mt-3">
                                    <h4>First-party Data</h4>
                                    <p>
                                        Generate leads using our first-party audience and achieve your revenue targets
                                        with a steady stream of high-quality,
                                        reliable leads.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!-- End Single Itme -->
                        <!-- Single Itme -->
                        <div class="col-lg-4 col-md-6 single-item hoverx2">
                            <div class="item text-center">
                                {{-- <div class="icon w-50 m-auto">
                                    <img src="assets/img/icon/3 Intuitive AI Platform.png" alt="">
                                </div> --}}
                                <div class="content mt-3">
                                    <h4>No Outsourcing</h4>
                                    <p>
                                        Experience complete flexibility in campaign customization and insight reporting,
                                        with our current reach of over 40
                                        million opted-in subscribers 100% owned and operated by RevLine.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!-- End Single Itme -->
                        <!-- Single Itme -->
                        <div class="col-lg-4 col-md-6 single-item hoverx2">
                            <div class="item text-center">
                                {{-- <div class="icon w-50 m-auto">
                                    <img src="assets/img/icon/4 Engagement at Every Stage.png" alt="">
                                </div> --}}
                                <div class="content mt-3">
                                    <h4>Leads start from $28 to $1000</h4>
                                    <p>
                                        Avail of leads that start from the Top of Funnel for only $28, down to the
                                        Bottom of Funnel for $1,000 when securing
                                        Appointment Setting. We're flexible like that!
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!-- End Single Itme -->
                        <!-- Single Itme -->
                        <div class="col-lg-4 col-md-6 single-item hoverx2">
                            <div class="item text-center">
                                {{-- <div class="icon w-50 m-auto">
                                    <img src="assets/img/icon/5 Psychological Profiles.png" alt="">
                                </div> --}}
                                <div class="content mt-3">
                                    <h4>30 years of industry experience</h4>
                                    <p>
                                        The dynamic team at RevLine offers extensive experience and a proven track
                                        record in the demand generation industry.
                                        With a keen understanding of the industry's evolution, we are well-equipped to
                                        address your specific needs.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!-- End Single Itme -->
                        <!-- Single Itme -->
                        {{-- <div class="col-lg-4 col-md-6 single-item hoverx2">
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
                        </div> --}}
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
{{-- <div id="why-Us" class="services-content-area text-center carousel-shadow bg-gray default-padding">

    <div class="fixed-shape">
        <img src="assets/img/shape/33.png" alt="Shape">
    </div>

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



        </div>
    </div>
</div> --}}
<!-- End Services -->

<div class="container default-padding-bottom">
    <div class="row d-flex justify-content-center">
        <div class="col-10">
            <h1 style="margin: 2rem">RevLine: Your Partner in Navigating the Evolving Landscape of B2B Lead Generation
            </h1>
            <p>B2B lead gen has been tough due to budget cuts, longer sales, and multiple decision-makers. To thrive in
                this
                competitive environment, clients need effective strategies, ABM, and strong partnerships.</p>
            <p>At RevLine, we understand the unique challenges you face and offer tailored solutions to help you
                overcome them. Let us
                explore how we can assist you through these challenges.</p>
           

           
          
        </div>
        <div class="col-8">
            <h3 class="ml-5 titleh3">FLEXIBILITY:</h3>
            <p>We help companies overcome challenges associated with changing budget cycles, longer sales processes, and
                the
                involvement of multiple decision-makers to drive sustainable growth.</p>
            
            <h3 class="ml-5 titleh3">QUALITY:</h3>
            <p>Our team helps clients generate high-quality leads, implement effective ABM strategies, and integrate AI
                tools to
                enhance productivity, ensuring that both quality and efficiency are maintained.</p>
            
            <h3 class="ml-5 titleh3">COMMUNICATION:</h3>
            <p>Our team helps clients generate high-quality leads, implement effective ABM strategies, and integrate AI
                tools to
                enhance productivity, ensuring that both quality and efficiency are maintained.We emphasize open communication and
                transparency between clients to ensure every project aligns with a shared vision,
                resulting in successful outcomes, and effective campaign management.</p>
            
            <h3 class="ml-5 titleh3">PARTNERSHIPS:</h3>
            <p>We cultivate strong partnerships between marketers and agencies, offering strategic guidance while leveraging your
                in-house expertise for optimal results.</p>
            
            <h3 class="ml-5 titleh3">ACCURACY:</h3>
            <p>We guide clients in prioritizing data accuracy to improve marketing performance and provide a solid foundation for
                AI-driven initiatives.</p>
        </div>
    </div>
</div>

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
                    <h4>Our Partners</h4>
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
                <img src="{{ asset('assets/img/brands/brands/brand1.png')}}" alt="">
            </div>
            <div class="item hoverx2">
                <img src="{{ asset('assets/img/brands/brands/2.png')}}" alt="">
            </div>
            <div class="item hoverx2">
                <img src="{{ asset('assets/img/brands/brands/3.png')}}" alt="">
            </div>
            <div class="item hoverx2">
                <img src="{{ asset('assets/img/brands/brands/4.png')}}" alt="">
            </div>
            <div class="item hoverx2">
                <img src="{{ asset('assets/img/brands/brands/5.png')}}" alt="">
            </div>
            <div class="item hoverx2">
                <img src="{{ asset('assets/img/brands/brands/6.png')}}" alt="">
            </div>
            <div class="item hoverx2">
                <img src="{{ asset('assets/img/brands/brands/7.png')}}" alt="">
            </div>
            <div class="item hoverx2">
                <img src="{{ asset('assets/img/brands/brands/8.png')}}" alt="">
            </div>

            <div class="item hoverx2">
                <img src="{{ asset('assets/img/brands/brands/9.png')}}" alt="">
            </div>
            <div class="item hoverx2">
                <img src="{{ asset('assets/img/brands/brands/10.png')}}" alt="">
            </div>
            <div class="item hoverx2">
                <img src="{{ asset('assets/img/brands/brands/11.png')}}" alt="">
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
<div class="testimonials-area  bg-gray">
    <div class="container">
        <div class="testimonial-items text-center">
            <div class="row">
                <div style="text-align: start" class="col-lg-6 d-flex align-items-center">
                    <div>
                        <h2>
                            We’re glad to be of help.
                        </h2>
                        <h3>
                            Be part of the innovators who seek progress.
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="heading mt-5">
                        <h2></h2>
                    </div>
                    <div class="testimonials-carousel owl-carousel owl-theme">
                        <div class="item">
                            <p style="font-size: 16px">
                                I’ve had the pleasure of working with Mark for over 20 years and with Linda for the last 5 years. When I heard Mark
                                started RevLine Marketing, I had no hesitation in partnering with him again. So far, we've successfully run several
                                campaigns for three major clients, and the quality of leads and timely delivery from Mark's team has been outstanding.
                                We've already secured a couple of client renewals, which speaks to the results RevLine delivers. I'm excited to continue
                                our collaboration and see what more we can achieve together. A big thanks to the entire team at RevLine Marketing!
                            </p>
                            <div class="thumb-box">

                            </div>
                            <h5>Founder</h5>
                            <span>Advertising Agency Partner</span>
                        </div>
                        <div class="item">
                           <p style="font-size: 16px">
                                I had the pleasure of working with Linda and Mark on several projects at their previous company, and I was consistently
                                impressed by their professionalism and meticulous attention to detail. They go above and beyond to ensure that every
                                project, no matter the scale, is executed successfully and delivers impactful results for the client.
                            </p>
                            <div class="thumb-box">

                            </div>
                            <h5>Media Director / Client Partner</h5>
                            <span>Advertising Agency Partner</span>
                        </div>
                        <div class="item">
                           <p style="font-size: 16px">
                                I have worked with RevLine’s account service team for many years, even prior to RevLine’s existence. They have proven to be a solid team that prioritizes quality and agency relationships. Their account service has always been organized, accommodating, and responsive.
                            </p>
                            <div class="thumb-box">

                            </div>
                            <h5>Director of Demand Generation</h5>
                            <span>Advertising Agency Partner</span>
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