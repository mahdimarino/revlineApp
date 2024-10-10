@extends('layout')
@section('content')
<!-- Start Breadcrumb 
    ============================================= -->
{{-- <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover"
    style="background-image: url(assets/img/illustration/13.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>About Us</h1>
             
            </div>
        </div>
    </div>
</div> --}}
<!-- End Breadcrumb -->

<!-- Start About
    ============================================= -->
<div class="about-area overflow-hidden default-padding " id="mission">
    <div class="container">
        <div class="about-items">
            {{-- <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading-center text-center">

                            <h2 style="padding: 1rem !important;">Our Mission</h2>
                            <h3>Our mission is to understand our customers’ needs and design a sales plan custom-designed to produce the highest
                            quality, ethically sourced leads in the industry.</h3>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row align-center">

                <!-- Thumb -->
                <div class="col-lg-5">
                    <div style="padding-top: 6rem;" class="thumb ">
                        <img src="{{ asset('assets/img/missionimg.png')}}" alt="Thumb">
                    </div>
                </div>
                <!-- End Thumb -->

                <div class="col-lg-7">
                    <div class="content  ">
                        <!-- <h4>OUR MISSION</h4> -->
                        <h2 style="padding: 1rem !important;">ABOUT US</h2>
                        <p>

                            RevLine Marketing Inc. is a forward-thinking B2B digital marketing firm dedicated to helping agencies and businesses
                            succeed in the digital landscape. With a strong focus on data-driven AI strategies, innovation, and client satisfaction,
                            the company provides comprehensive marketing solutions, including SEO, SEM, social media marketing, appointment setting,
                            and more to drive growth and visibility.
                            <br><br>
                            Our team consists of seasoned experts who harness AI's power for demand generation, lead nurturing, and account-based
                            marketing.
                            <br><br>
                            Our mission is to understand our customers’ needs and design a sales plan custom-designed to produce the highest
                            quality, ethically sourced leads in the industry.
                        </p>
                        <!--  <div class="content-inner">
                                <a href="https://www.youtube.com/watch?v=owhuBrGIOsE"
                                    class="popup-youtube theme video-play-button item-center">
                                    <i class="fa fa-play"></i>
                                </a>
                                <div class="row align-center">
                                    <div class="col-lg-6">
                                        <ul>
                                            <li>Fresh ideas</li>
                                            <li>Unique designs</li>
                                            <li>Skilled trades</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <h2>25 <span>Years of experience</span></h2>
                                    </div>
                                </div>
                            </div>  -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- <div style="padding-top: 0;" class="our-features-area default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-center text-center">

                    <h2 style="padding: 1rem !important;">Why Choose RevLine Marketing?</h2>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="features-box">
            <div class="row">
                <div class="col-lg-12 featur-item">
                    <div class="row">
                        
                        <div class="col-lg-6 col-md-6 single-item hoverx2">
                            <div class="item text-center">
                                <div class="icon w-25 m-auto">
                                    <img src="assets/img/icon/1 Strong Intent Engine.png" alt="">
                                </div>
                                <div class="content mt-3">
                                    <h4>Proven AI-Powered Results</h4>
                                    <p>
                                        Our track record, fueled by advanced AI technologies, speaks for itself. We've
                                        consistently helped businesses achieve their demand generation objectives,
                                        driving revenue growth and market expansion through data-driven insights and
                                        automated strategies.
                                    </p>

                                </div>
                            </div>
                        </div>

                       
                        <div class="col-lg-6 col-md-6 single-item hoverx2">
                            <div class="item text-center">
                                <div class="icon w-25 m-auto">
                                    <img src="assets/img/icon/2 Look-a-Like Search Engine (1).png" alt="">
                                </div>
                                <div class="content mt-3">
                                    <h4>Data-Driven Personalization</h4>
                                    <p>
                                        We understand your business needs. That's why we utilize AI-driven insights to
                                        tailor strategies that align with your specific objectives, industry dynamics,
                                        and target audience.
                                    </p>

                                </div>
                            </div>
                        </div>
                   
                        <div class="col-lg-6 col-md-6 single-item hoverx2">
                            <div class="item text-center">
                                <div class="icon w-25 m-auto">
                                    <img src="assets/img/icon/3 Intuitive AI Platform.png" alt="">
                                </div>
                                <div class="content mt-3">
                                    <h4>Collaborative Partnership</h4>
                                    <p>
                                        We position ourselves as an integral part of your team. Our success thrives on
                                        collaboration and transparent communication, forming the foundation of our
                                        client relationships.
                                    </p>

                                </div>
                            </div>
                        </div>
             
                        <div class="col-lg-6 col-md-6 single-item hoverx2">
                            <div class="item text-center">
                                <div class="icon w-25 m-auto">
                                    <img src="assets/img/icon/4 Engagement at Every Stage.png" alt="">
                                </div>
                                <div class="content mt-3">
                                    <h4>Trailblazing Innovation</h4>
                                    <p>
                                        The B2B landscape is in constant flux. We stay at the forefront, embracing the
                                        latest trends and technologies to infuse creativity and effectiveness into your
                                        campaigns.
                                    </p>

                                </div>
                            </div>
                        </div>
                    

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- End About -->
<!-- Start Team Single Area
    ============================================= -->
<div style="padding-top:0" class="team-single-area default-padding" id="aboutmark">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-5 left-info">
                <div style="width:90%" class="thumb">
                    <img src="https://media.licdn.com/dms/image/v2/D5603AQF6nuXFCPBbuA/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1704255056908?e=1731542400&v=beta&t=ckanFil0pnQJORQWBx_0R1Ws5luHKDVmKypDlopMsi8"
                        alt="Thumb">
                    <div class="social">
                        <ul>

                            <li>
                                <a style="background-image: url(data:image/png;base64,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);     background-size: 100%;"
                                    href="https://www.linkedin.com/in/marknachlis/">
                                    <!-- <img width="30" src="data:image/png;base64,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" alt=""> -->
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 right-info">
                <h2 style="margin-left: 1.5rem;">Mark Nachlis</h2>
                <span>Managing Director of RevLine Marketing</span>
                <p>
                    The driving force behind RevLine Marketing, brings to the table a wealth of experience and a proven
                    track record in the demand generation industry. His journey is one of dynamic leadership, strategic
                    insight, and an unwavering commitment to helping businesses thrive. As the Managing Director of
                    RevLine Marketing, Mark's experience and expertise are poised to revolutionize the demand generation
                    landscape, benefiting both the industry as a whole and the clients it serves.
                </p>
                <ul>
                    <li>
                        <strong>Email:</strong>
                        <a href="mailto:support@avedi.com">info@RevLinemarketing.com</a>
                    </li>
                    <li>
                        <strong>Phone:</strong>
                        <a href="tel:123-456-7890">1-888-9RevLine</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bottom-info">
            <div class="row">
                <div class="col-lg-12  text-center">
                    <!--  <h2>About Member</h2> -->
                    <p>
                        With a career that spans decades, Mark's foundation is built upon a solid bedrock of roles in
                        sales, marketing, and technology. This diverse background, peppered with high-level positions at
                        prominent companies, has endowed him with a comprehensive understanding of the intricate nuances
                        that drive revenue growth.
                    </p>
                    <p>
                        Mark, as the Chief Growth Officer at B2Lead, was instrumental in scaling the company’s revenue
                        from $700K to over $10MM during his tenure as CGO.
                    </p>
                    <p>
                        As Senior VP-Enterprise Sales at True Influence, a start up at the time, Mark grew the company
                        to $4MM within a 18 month period.
                    </p>
                    <p>
                        And as VP of Technology Markets at Harte-Hanks, Mark managed a $100MM portfolio.
                    </p>
                    <p>
                        Mark’s roles have allowed him to work across various sectors, fine-tuning his skills and
                        insights.
                    </p>
                </div>
                <!--  <div class="col-lg-6 about-area reverse">
                    <div class="info">
                        <div class="skill-items">
                            
                            <div class="progress-box">
                                <h5>Software Development</h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="88">
                                        <span>88%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-box">
                                <h5>Cyber Security</h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="95">
                                        <span>95%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-box">
                                <h5>Artificial Intelligence</h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="80">
                                        <span>80%</span>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- End Team Single Area -->

<div style="padding-top: 0;" class="blog-area single full-blog full-blog default-padding">
    <div class="container">
        <div class="blog-items">
            <div class="row">
                <div class="blog-content col-lg-10 offset-lg-1 col-md-12">
                    <div class="blog-item-box">

                        <div class="item">
                            <!-- Start Post Thumb -->
                            <div class="thumb">
                                <img src="https://validthemes.net/site-template/avedi/assets/img/blog/11.jpg"
                                    alt="Thumb">

                            </div>
                            <!-- Start Post Thumb -->

                            <div class="info">
                                <!-- <h3>Common so wicket appear to sudden</h3>

                                <div class="footer-meta">
                                    <ul>
                                        <li>
                                            <img src="assets/img/teams/1.jpg" alt="Author">
                                            <span>By </span>
                                            <a href="#">John Baus</a>
                                        </li>
                                        <li>
                                            <span>In </span>
                                            <a href="#">Creative</a>
                                        </li>
                                    </ul>
                                </div> -->

                                <p>
                                    The launch of RevLine Marketing signifies a pivotal moment in Mark's journey – a
                                    moment where his vast experience is distilled into a powerful entity poised to
                                    reshape the demand generation industry. The company's core mission, "Accelerating
                                    your revenue," is a direct reflection of Mark's profound understanding of what
                                    businesses need in today's fast-paced, digitally driven world. RevLine Marketing is
                                    uniquely positioned to offer comprehensive solutions that traverse the entire demand
                                    generation spectrum that exists today and moving into the future. </p>
                                <blockquote>
                                    With a keen eye on market trends, a deep understanding of client needs, and an
                                    unwavering dedication to driving revenue acceleration, Mark is poised to leave an
                                    indelible mark on the landscape of demand generation.
                                    <!-- <cite> - Adam John</cite> -->
                                </blockquote>
                                <!--  <p>
                                    Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.
                                </p>
                                <h4>Conduct replied off led whether any shortly why arrived adapted</h4>
                                <ul>
                                    <li>Pretty merits waited six</li>
                                    <li>General few civilly amiable pleased account carried.</li>
                                    <li>Continue indulged speaking</li>
                                    <li>Narrow formal length my highly</li>
                                    <li>Occasional pianoforte alteration unaffected impossible</li>
                                </ul>
                                <div class="row gallery">
                                    <div class="col-lg-6 col-md-6">
                                        <img src="assets/img/blog/1.jpg" alt="Thumb">
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <img src="assets/img/blog/2.jpg" alt="Thumb">
                                    </div>
                                </div>
                                <p>
                                    Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves. projecting is devonshire dispatched are
                                </p> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="about-area overflow-hidden default-padding-bottom">
    <div class="container">
        <div class="about-items">
            <div class="row align-center">
                <div class="col-lg-6">
                    <div class="content part3div">
                        <h4>WHO WE ARE</h4>
                        <h2 style="padding: 1rem !important;">Unique Solutions for Your Business</h2>
                        <p>
                            At RevLine Marketing, we're not just a B2B demand generation company; we're your growth
                            partners. Our team comprises seasoned experts who bring a wealth of experience in demand
                            generation, lead nurturing, and account-based marketing to the table. With a
                            client-centric approach, we are committed to driving your success through innovative
                            strategies that push boundaries and exceed expectations.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="thumb part4div">
                        <img src="assets/img/illustration/7.png" alt="Thumb">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div> -->

<!-- Star Achivement
    ============================================= -->

<!-- End Achivement Area -->
@endsection