@extends('layout')
@section('content')
<!-- Start Breadcrumb 
    ============================================= -->
{{-- <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover"
    style="background-image: url(https://www.hurleymc.com/images/banners/childrens-hospital.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>PHILANTROPHY</h1>

            </div>
        </div>
    </div>
</div> --}}
<!-- End Breadcrumb -->

<!-- Start Blog
    ============================================= -->

<div class="blog-area full-blog default-padding">
    <div class="container">
        <div class="row d-flex justify-content-center movedown">
            <div class="col-lg-10">
                <div class="heading-center text-center makepadding">

                    <h3 class="movedown" style="padding: 1rem !important;"><b>Our Commitment to Making a Difference</b>
                    </h3>
                    <h4>At RevLine Marketing, we believe in the power of compassion, generosity, and the collective
                        effort to make the world a better place. As part of our commitment to social responsibility, we
                        have chosen to support and stand alongside St. Jude Children's Research Hospital.</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="blog-items">
            <div class="blog-content">
                <div class="blog-item-box">
                    <div class="row d-flex justify-content-center">
                        <!-- Single Item -->
                        <div class="col-md-3 text-center">
                            <img class="smallerinmobile" src="assets/img/Untitled.png" alt="">
                        </div>
                        <div class="col-md-7 single-item">
                            <div class="item">
                                <div class="thumb">

                                    <img src="assets/img/WhatsApp Image 2024-09-12 at 20.14.24.jpeg" alt="Thumb">
                                </div>
                                <div class="info">
                                    <h3 style="margin-left: 3rem;">
                                        <a>Why St. Jude ?</a>
                                    </h3>
                                    <p>
                                        St. Jude Children's Research Hospital is a beacon of hope for children facing
                                        life-threatening illnesses. Their groundbreaking research not only transforms
                                        the lives of individual children but also contributes to the global
                                        understanding of pediatric diseases. St. Jude operates on the principle that no
                                        family should ever receive a bill for treatment, travel, housing, or
                                        food—because all a family should worry about is helping their child live.
                                        Mark has personally been a St. Jude supporter for several decades and has
                                        brought the relationship to RevLine.
                                    </p>
                                    <!-- <a class="btn circle btn-theme border btn-sm" href="https://techmediainsider.com/">Read More</a> -->
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <!--    <div class="col-lg-6 col-md-6 single-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="https://validthemes.net/site-template/avedi/assets/img/blog/2.jpg" alt="Thumb">
                                </div>
                                <div class="info">
                                    <h3 style="margin-left: 1.5rem;">
                                        <a >Demand Gen Report</a>
                                    </h3>
                                    <p>
                                        Stay updated with the breaking news coverage of the B2B space. These concise news articles are designed to provide marketers with quick, concise information about major happenings in the industry that will impact their jobs.
                                    </p>
                                    <a class="btn circle btn-theme border btn-sm" href="https://www.demandgenreport.com/industry-news/news-briefs-lean-startup-expert-joins-hubspot-advisory-board/20799/">Read More</a>
                                </div>
                            </div>
                        </div> -->
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <!--   <div class="col-lg-6 col-md-6 single-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="https://validthemes.net/site-template/avedi/assets/img/blog/3.jpg" alt="Thumb">
                                </div>
                                <div class="info">
                                    <h3 style="margin-left: 1.5rem;">
                                        <a >RevLine Media Kit</a>
                                    </h3>
                                    <p>
                                        Check out RevLine's Media Kit to learn more about our company and offerings
                                    </p>
                                    <a class="btn circle btn-theme border btn-sm" target="_blank" href="../../RevLine Marketing Media Kit July 2024.pdf" download>Read More</a>
                                </div>
                            </div>
                        </div> -->
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <!--   <div class="col-lg-6 col-md-6 single-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="https://validthemes.net/site-template/avedi/assets/img/blog/5.jpg" alt="Thumb">
                                </div>
                                <div class="info">
                                    <h3 style="margin-left: 1.5rem;">
                                        <a >Hubspot Content</a>
                                    </h3>
                                    <p>
                                        The 2024 State of Marketing & Trends Report: Data from 1400+ Global Marketers
                                    </p>
                                    <a class="btn circle btn-theme border btn-sm" href="https://blog.hubspot.com/">Read More</a>
                                </div>
                            </div>
                        </div> -->
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <!--    <div class="col-lg-6 col-md-6 single-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="https://validthemes.net/site-template/avedi/assets/img/blog/5.jpg" alt="Thumb">
                                </div>
                                <div class="info">
                                    <h3 style="margin-left: 1.5rem;">
                                        <a >Momentum ITSM</a>
                                    </h3>
                                    <p>
                                        Momentum ITSMA enables ambitious companies to achieve market-beating performance by winning, growing, and retaining the most valuable client relationships.
                                    </p>
                                    <a class="btn circle btn-theme border btn-sm" href="https://momentumitsma.com/">Read More</a>
                                </div>
                            </div>
                        </div> -->
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <!--  <div class="col-lg-12 col-md-12 single-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="https://validthemes.net/site-template/avedi/assets/img/blog/22.jpg" alt="Thumb">
                                </div>
                                <div class="info">
                                    <h3 style="margin-left: 3rem;">
                                        <a >The Intersection Of AI & ABM: Transforming B2B Content Syndication</a>
                                    </h3>
                                    <p>
                                        Written by Mark Nachlis, RevLine Marketingb <br>

                                        In the ever-evolving landscape of B2B marketing, the convergence of artificial intelligence (AI) and ABM has ushered in a new era of efficiency and effectiveness in content syndication. As businesses strive to reach and engage their target audience, these technologies are playing a pivotal role in reshaping B2B content strategies, providing unprecedented value to marketers. This is not an “OR” solution but an addition to current solutions in place.
                                    </p>
                                    <a class="btn circle btn-theme border btn-sm" >Read More</a>
                                </div>
                            </div>
                        </div> -->
                        <!-- End Single Item -->

                    </div>


                    <!-- Pagination -->
                    <!--    <div class="row">
                        <div class="col-md-12 pagi-area text-center">
                            <nav aria-label="navigation">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>


</div>
<div class="about-area overflow-hidden default-padding-bottom">
    <div class="container-fluid">
        <div class="about-items">
            <div class="row align-center">
                <div class="col-lg-6">
                    <div class="thumb part3div">
                        <img src="https://validthemes.net/site-template/avedi/assets/img/blog/22.jpg" alt="Thumb">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content part4div">
                        <h4>Our Partnership</h4>
                        <h2 style="padding: 1rem !important;">Our Partnership</h2>
                        <p>
                            By aligning ourselves with St. Jude, we aim to be a catalyst for change and progress. Our
                            philanthropic effort extend beyond monetary donations; it's a commitment to being a force
                            for good in the lives of children and families navigating the challenging journey of
                            illness.
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<div class="about-area overflow-hidden default-padding-bottom">
    <div class="container-fluid makepadding">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 text-center"><a target="_blank" href="https://fundraising.stjude.org/site/TR/DIY/Active?px=8276056&pg=personal&fr_id=133377"><img src="assets/img/stjudimage.png" alt=""></a></div>
            <div class="col-md-6 text-center">
                <a target="_blank" href="https://fundraising.stjude.org/site/TR/DIY/Active?px=8276056&pg=personal&fr_id=133377"><img src="assets/img/kidparents.jpg" alt=""></a></div>
            <div class="col-md-8 text-center mt-3 makepadding text-dark">
                <h3> <b>Nothing gets in the way of family. Not even cancer.</b> </h3>
                <p>Nearly five months into his treatment at St. Jude Children's Research Hospital, 3-year-old Beckett
                    was missing his
                    brother and sisters back home in Michigan. His parents decided it was time for a surprise visit
                    home.</p>
                <p>The secret mission was kept under wraps until they finally pulled into the driveway, where they were
                    met by hugs and
                    happy tears. During their reunion, Beckett's family hoped and prayed that one day he would come home
                    for good.</p>
            </div>
            <div class="col-md-8 text-center mt-3">
                <img width="300" style="border-radius: 50%"
                    src="assets/img/kidsmile.jpg"
                    alt="">
            </div>
            <div class="col-md-7 text-center mt-3 makepadding text-dark">

                <p>Thankfully that day came. Beckett was declared cancer-free after a successful surgery and celebrated
                    the end of his
                    treatment with a No More Chemo Party two days before Thanksgiving.</p>

            </div>
            <div class="col-md-8 text-center mt-3 makepadding text-dark">

                <p>Your efforts directly impact families like Beckett's. With Thanksgiving and #GivingTuesday around the
                    corner, now is the
                    perfect time to ramp up your fundraising.</p>
                <p>Take a moment today to share your connection to St. Jude with your family and friends in an email,
                    text or social media
                    post and ask for donations during this season of giving.</p>

                    <a class="btn circle btn-theme border btn-sm mt-3 text-dark" target="_blank"
                       target="_blank" href="https://fundraising.stjude.org/site/TR/DIY/Active?px=8276056&pg=personal&fr_id=133377">Fundraise Now</a>

                        <p class="mt-3">Thank you for helping St. Jude give every child with cancer a chance.</p>
                        <p class="h4">Together, we can save more lives.</p>

            </div>
        </div>
    </div>
</div>

{{-- <div style="padding-bottom: 0" class="why-choose-us-area  bg-cover text-light">
    <div class="container">
        <div class="inner-items">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-7 ">
                    <div class="info">
                        <h2 style="margin-left: 1.5rem;">How You Can Help</h2>
                        <p>
                            Your support is invaluable. By choosing our products/services or directly contributing to
                            our philanthropic initiatives, you become a part of something bigger—a movement toward
                            healing, hope, and a brighter future for the next generation.
                        </p>
                        <ul>
                            <li>
                                <a class="btn circle btn-theme border btn-sm" target="_blank"
                                    href="https://fundraising.stjude.org/site/TR/DIY/Active?px=8276056&pg=personal&fr_id=133377">Donate
                                    Now</a>
                            </li>
                            <li>
                                <h5 style="margin-left: 1rem;">St. Jude</h5>
                                <p>
                                    Research Hospital
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}



{{-- 
<div class="about-area overflow-hidden default-padding">
    <div class="container">
        <div class="about-items">
            <div class="row align-center">

            
                <div class="col-lg-6">
                    <div class="thumb">
                        <img src="https://www.cedars-sinai.org/content/dam/cedars-sinai/blog/2021/3/helping-children-cope.jpg"
                            alt="Thumb">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="content">
                        <h4>PHILANTROPHY</h4>
                        <h2 class="makepadding">The Impact</h2>
                        <p>
                            Every donation, no matter how big or small, fuels the engine of progress at St. Jude. It
                            helps fund cutting-edge research, provides compassionate care to families, and ensures that
                            children facing life-threatening diseases receive the treatment they need without the burden
                            of financial strain.
                        </p>
                     
                    </div>
                </div>

            </div>
        </div>
    </div>
</div> --}}



<div class="container pb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-10">
            <div class="heading-center text-center">

                <h3 style="padding: rem !important;"><b>Join Us on this Journey</b> </h3>
                <h4 class="makepadding movedown">We invite you to join us in making a difference. Together, we can
                    create a world where no child
                    suffers the devastating effects of a life-threatening illness. With your support, we can contribute
                    to the life-changing work happening at St. Jude Children's Research Hospital.</h4>
            </div>
        </div>
    </div>
</div>
{{-- <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover"
    style="background-image: url(https://www.actforkids.com.au/wp-content/uploads/2021/11/All_0008_iStock-1160932512.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h3>Thank you for being a part of our commitment to philanthropy and for helping us bring hope, healing,
                    and joy to those who need it most.</h3>

            </div>
        </div>
    </div>
</div> --}}



<!-- End Blog -->
@endsection