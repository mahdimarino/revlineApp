@extends('layout')
@section('content')

<!-- Start Breadcrumb 
    ============================================= -->
{{-- <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover"
    style="background-image: url(https://validthemes.net/site-template/avedi/assets/img/banner/12.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>Our Resources</h1>
              
            </div>
        </div>
    </div>
</div> --}}
<!-- End Breadcrumb -->

<!-- Start Blog
    ============================================= -->
<div class="blog-area full-blog default-padding">
    <div class="container">
        <div class="blog-items">
            <div class="blog-content">
                <div class="blog-item-box">
                    <div class="row">
                        <!-- Single Item -->
                        <div class="col-lg-6 col-md-6 single-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="https://validthemes.net/site-template/avedi/assets/img/blog/2.jpg" alt="Thumb">
                                </div>
                                <div class="info">
                                    <h3 style="margin-left: 1.5rem;">
                                        <a>{{$latestDemandGenPostUrl['title']}}</a>
                                    </h3>
                                    <p>
                                        Stay updated with the breaking news coverage of the B2B space. These concise
                                        news articles are designed to provide marketers with quick, concise information
                                        about major happenings in the industry that will impact their jobs.
                                    </p>
                                    <a class="btn circle btn-theme border btn-sm" href="{{ $latestDemandGenPostUrl['link'] }}"
                                        target="_blank">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-lg-6 col-md-6 single-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="https://validthemes.net/site-template/avedi/assets/img/blog/5.jpg" alt="Thumb">
                                </div>
                                <div class="info">
                                    <h3 style="margin-left: 1.5rem;">
                                        <a>{{ $latestHubSpotPostUrl['title'] }}</a>
                                    </h3>
                                    <p>
                                        The 2024 State of Marketing & Trends Report: Data from 1400+ Global Marketers
                                    </p>
                                    <a class="btn circle btn-theme border btn-sm" href="{{ $latestHubSpotPostUrl['link'] }}"
                                        target="_blank">Read More</a>
                        
                                </div>
                            </div>
                        </div>
                       
                       <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-lg-6 col-md-6 single-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="https://validthemes.net/site-template/avedi/assets/img/blog/3.jpg"
                                        alt="Thumb">
                                </div>
                                <div class="info">
                                    <h3 style="margin-left: 1.5rem;">
                                        <a>RevLine Media Kit</a>
                                    </h3>
                                    <p>
                                        Check out RevLine's Media Kit to learn more about our company and offerings
                                    </p>
                                    <a class="btn circle btn-theme border btn-sm" target="_blank"
                                        href="../../RevLine Marketing Media Kit July 2024.pdf" download>Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-lg-6 col-md-6 single-item">
                            <div class="item">
                                <div class="thumb">
                        
                                    <img src="assets/img/techmedia.png" alt="Thumb">
                                </div>
                                <div class="info">
                                    <h3 style="margin-left: 1.5rem;">
                                        <a>TechMedia Insider</a>
                                    </h3>
                                    <p>
                                        Discover the cutting-edge technology trends and access featured events and
                                        valuable resources from top tech companies
                                    </p>
                                    <a class="btn circle btn-theme border btn-sm" href="https://techmediainsider.com/">Read More</a>
                                </div>
                            </div>
                        </div>
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
                        <div class="col-lg-12 col-md-12 single-item">
                            <div class="item">
                                {{-- <div class="thumb">
                                    <img src="https://revlinemarketing.com/test/RevlineV2/assets/markcover.jpeg" alt="Thumb">
                                </div> --}}
                                <div class="info">
                                    <h3 style="margin-left: 3rem;">
                                        <a>The Intersection Of AI & ABM: Transforming B2B Content Syndication</a>
                                    </h3>
                                    <p>
                                        Written by Mark Nachlis, RevLine Marketing <br>

                                        In the ever-evolving landscape of B2B marketing, the convergence of artificial
                                        intelligence (AI) and ABM has ushered in a new era of efficiency and
                                        effectiveness in content syndication. As businesses strive to reach and engage
                                        their target audience, these technologies are playing a pivotal role in
                                        reshaping B2B content strategies, providing unprecedented value to marketers.
                                        This is not an “OR” solution but an addition to current solutions in place.
                                    </p>
                                    <a href="https://www.demandgenreport.com/demanding-views/the-intersection-of-ai-abm-transforming-b2b-content-syndication/8128/"
                                        class="btn circle btn-theme border btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
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
    <div style="padding-top:0" class="team-single-area default-padding" id="aboutmark">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-5 left-info">
                    <div class="thumb">
                        <img src="assets/img/jon2.jpeg" alt="Thumb">
                        <div class="social">
                            <!-- <ul>
                                <li class="facebook">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="youtube">
                                    <a href="#">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 right-info">
                    <h2 style="margin-left: 1.5rem;">Jon Miller</h2>
                    <span>Former CMO Demandbase</span>
                    <p>
                        As Chief Evangelist and former CMO of Demandbase, Jon Miller is responsible for delivering
                        Demandbase’s product vision to delight customers and fulfill its mission of transforming how B2B
                        companies go-to-market.
                    </p>
                    <a class="btn circle btn-theme border btn-sm"
                        href="https://www.demandbase.com/author/jon-miller/">Read More</a>
                </div>
            </div>

        </div>
    </div>
    <div style="padding-top:0" class="team-single-area default-padding" id="aboutmark">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-5 left-info">
                    <div class="thumb">
                        <img src="https://media.licdn.com/dms/image/v2/D5603AQGuZjtGRqquFA/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1676500756554?e=1731542400&v=beta&t=_BYzLL7TGtyp9JW2_DxBh7Yq0i78WR0AZ4qrosOTxCQ"
                            alt="Thumb">
                        <div class="social">

                        </div>
                    </div>
                </div>
                <div class="col-lg-7 right-info">
                    <h2 style="margin-left: 1.5rem;">Scott Albro</h2>
                    <span>Co-Founder and CEO of Goldie.</span>
                    <p>
                        Goldie is the AI co-pilot for sales reps with a simple mission: radically transform how
                        productive salespeople can be.
                        Goldie does this by: 1) suggesting and executing sales plays on behalf of reps; and 2)
                        automating the tedious tasks that distract reps from actual selling. To learn more, visit:
                        Goldie.ai.
                    </p>
                    <a class="btn circle btn-theme border btn-sm" href="https://www.linkedin.com/in/scottalbro/">Read
                        More</a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Blog -->
@endsection