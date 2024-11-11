<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript">
        var _iub = _iub || [];
        _iub.csConfiguration = {
            "applyGdprForCH": false,
            "askConsentAtCookiePolicyUpdate": true,
            "countryDetection": true,
            "enableFadp": true,
            "enableUspr": true,
            "gdprAppliesGlobally": false,
            "lang": "en",
            "perPurposeConsent": true,
            "siteId": 3311264,
            "usprPurposes": "s,sh,adv",
            "whitelabel": false,
            "cookiePolicyId": 65821363,
            "banner": {
                "acceptButtonColor": "#C72310",
                "acceptButtonDisplay": true,
                "closeButtonDisplay": false,
                "customizeButtonCaptionColor": "#000000",
                "customizeButtonColor": "#FFFFFF",
                "customizeButtonDisplay": true,
                "explicitWithdrawal": true,
                "listPurposes": true,
                "position": "float-bottom-left",
                "rejectButtonCaptionColor": "#161616",
                "rejectButtonColor": "#FAFAFA",
                "rejectButtonDisplay": true,
                "showTitle": false
            }
        };
    </script>
    <script type="text/javascript" src="https://cs.iubenda.com/autoblocking/3311264.js"></script>
    <script type="text/javascript" src="//cdn.iubenda.com/cs/gpp/stub.js"></script>
    <script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Avedi - Creative & Digital Agency Multipurpose Template">


    <!-- ========== Page Title ========== -->
    <title>RevLine Marketing</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/RevLine.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/flaticon-set.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/elegant-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootsnav.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/style.css') }}?v=1731114345" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://polyfill.io/v3/polyfill.min.js"></script>
    <style>
      

        p {
            font-size: 16px;
            line-height: 1.7;
        }

        .navbar-nav li a {
            font-size: 17px !important;
            /* Adjust the size to your preference */
            color: black !important;
        }

        .owl-prev,
        .owl-next {
            display: none !important;
        }
    </style>


    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

</head>

<body class="blue">

    <!-- Preloader Start -->
    <div id="site-preloader" class="site-preloader">
        <div class="loader-wrap">
            <!--  <div class="ring">
                <span></span>
            </div> -->
            <img width="200px" src="assets/RevLine.png" class="logo logo-display" alt="Logo">
            <img src="" alt="">
            <!-- <h2>RevLine</h2> -->
        </div>
    </div>
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">

            <!-- Start Top Search -->

            <!-- End Top Search -->

            <div class="container-full">

                <!-- Start Atribute Navigation -->
                {{-- <div class="attr-nav">
                    <ul>

                        <li class="side-menu">
                            <a href="#">
                                <span class="bar-1"></span>
                                <span class="bar-2"></span>
                                <span class="bar-3"></span>
                            </a>
                        </li>
                    </ul>
                </div> --}}
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                     <img width="30" src="{{asset('assets/img/barlist.png')}}" alt="">
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img width="100px" src="assets/RevLine.png" class="logo logo-display" alt="Logo">
                        <img width="100px" src="assets/RevLine.png" class="logo logo-scrolled" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">


                        <li><a href="index.php">home</a></li>
                        <li><a href="about">Company</a></li>
                        {{-- <li class="dropdown">
                            <a href="about" class="dropdown-toggle" data-toggle="dropdown">Company</a>
                            <ul class="dropdown-menu">
                                <li><a href="about#mission">mission</a></li>
                                <li><a href="about#aboutmark">About</a></li>

                            </ul>
                        </li> --}}
                        <li><a href="solutions&services">sOLUTIONS & Services</a></li>
                        <li><a href="resources">Resources</a></li>
                        <li><a href="philantrophy">Philantrophy</a></li>
                        <li><a href="contact">Contact</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

            <!-- Start Side Menu -->
            {{-- <div class="side">
                <a href="#" class="close-side"><i class="icon_close"></i></a>
                <div class="widget">
                    <img width="100px" src="assets/RevLine.png" alt="Logo">
                    <p>
                        Your Partner in B2B Demand Generation
                    </p>
                </div>
                <div class="widget address">
                    <div>
                        <ul>
                            <li>
                                <div class="content">
                                    <p>Address</p>
                                    <strong>539 W. Commerce St #6282 <br>
                                        Dallas,TX 75208</strong>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <p>Email</p>
                                    <strong>info@RevLinemarketing.com</strong>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <p>Contact</p>
                                    <strong>1-888-9RevLine</strong>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="widget newsletter">
                    <h4 class="title">Get Subscribed!</h4>
                    <form action="#">
                        <div class="input-group stylish-input-group">
                            <input type="email" placeholder="Enter your e-mail" class="form-control" name="email">
                            <span class="input-group-addon">
                                <button type="submit">
                                    <i class="arrow_right"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="widget social">
                    <ul class="link">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                    </ul>
                </div>
            </div> --}}
            <!-- End Side Menu -->

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    @yield('content')



    <!-- Star Contact Area
        ============================================= -->
    {{-- <div class="contact-area overflow-hidden default-padding bg-gray">

        <div class="container">
            <div class="contact-items">
                <!-- Fixed BG -->
                <!--  <div class="fixed-bg left">
                        <img src="assets/img/shape/38.png" alt="Shape">
                    </div> -->
                <!-- Fixed BG -->
                <div class="row align-center">

                    <div class="col-lg-6 contact-box">
                        <div class="form-items">
                            <h2 style="margin-left:1.5rem">Connect with RevLine Marketing</h2>
                            <p>Ready to take your B2B demand generation to the next level? We're here to help. Get in
                                touch with us today to schedule a consultation and discover how RevLine Marketing can
                                transform your growth trajectory.</p>
                            <form action="assets/mail/contact.php" method="POST" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" id="name" name="name" placeholder="Name"
                                                type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="email" name="email" placeholder="Email*"
                                                type="email">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="phone" name="phone" placeholder="Phone"
                                                type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="comments" name="comments"
                                                placeholder="Tell Us About Project *"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button class="btn-animation dark border" type="submit" name="submit"
                                            id="submit">
                                            Send Message <i class="arrow"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- Alert Message -->
                                <div class="col-lg-12 alert-notification">
                                    <div id="message" class="alert-msg"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 left-info">
                        <div class="info-items bg-light">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="flaticon-location"></i>
                                </div>
                                <div class="info">
                                    <h5>Location</h5>
                                    <p>
                                        539 W. Commerce St #6282 <br> Dallas,TX 75208
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="flaticon-telephone"></i>
                                </div>
                                <div class="info">
                                    <h5>Make a Call</h5>
                                    <p>
                                        1-888-9RevLine
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="info">
                                    <h5>Send a Mail</h5>
                                    <p>
                                        info@RevLinemarketing.com
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- <ul class="social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                </ul> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Contact Area -->
    <!-- Star Footer
        ============================================= -->
    <footer style="padding-bottom: 0; padding-top: 0;" class="bg-light text-dark">
        <div class="container">
            <div class="f-items ">
                <div style="padding: 1rem !important;" class="row">
                    <div class="col-lg-5 col-md-6 item">
                        <div class="f-item about">
                            <h4 style="margin-left: 1rem; moveright" class="widget-title">RevLine Marketing</h4>
                            <p>
                                Your Partner in B2B Demand Generation

                            </p>
                            <div class="social">
                                <ul>
                                    <li class="facebook">
                                        Follow us on <a href="https://www.linkedin.com/company/revline-marketing-inc">
                                            <img width="70"
                                                src="https://upload.wikimedia.org/wikipedia/commons/a/aa/LinkedIn_2021.svg"
                                                alt=""></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title moveright">Legal</h4>
                            <ul>
                                <li>
                                    <a href="https://www.iubenda.com/terms-and-conditions/65821363">Terms &
                                        Conditions</a>
                                </li>
                                <li>
                                    <a href="https://www.iubenda.com/privacy-policy/65821363/cookie-policy">Cookie
                                        Policy</a>
                                </li>
                                <li>
                                    <a href="https://www.iubenda.com/privacy-policy/65821363">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class='iubenda-cs-preferences-link' href="#">Your Privacy Choices</a>
                                </li>
                                <li>
                                    <a href="#" class='iubenda-cs-uspr-link'>Notice at Collection</a>
                                </li>
                                <li>
                                    <a href="https://RevLinemarketing.com/donotsellmydata.html">Do Not Sell My Personal
                                        Information</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title moveright">Links</h4>
                            <ul>
                                <li>
                                    <a href="index">Home</a>
                                </li>
                                <li>
                                    <a href="about">Company</a>
                                </li>
                                <li>
                                    <a href="solutions&services">Solutions & Services</a>
                                </li>
                                <li>
                                    <a href="resources">Resources</a>
                                </li>
                                <li>
                                    <a href="philantrophy">Philantrophy</a>
                                </li>
                                <li>
                                    <a href="contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item contact">
                            <h4 class="widget-title moveright">Contact Us</h4>
                            <div class="address">
                                <ul>
                                    <li>
                                        <p>Locations</p>
                                        <strong>539 W. Commerce St #6282 <br> Dallas,TX 75208</strong><br>
                                        <strong>951 Old County Road,<br> Suite 2-379 <br> Belmont, CA 94002</strong>
                                    </li>
                                    <li>
                                        <p>Email</p>
                                        <strong>info@RevLinemarketing.com</strong>
                                    </li>
                                    <li>
                                        <p>Contact</p>
                                        <strong>1-888-9RevLine</strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <!-- <div class="footer-bottom">
                <div class="container">
                    <div class="row align-center">
                        <div class="col-lg-4">
                            <p>&copy; Copyright 2021. All Rights Reserved</p>
                        </div>
                        <div class="col-lg-4 text-center logo">
                            <a href="#"><img width="100px" src="assets/img/illustration/kwasa/3.png" alt="Logo"></a>
                        </div>
                        <div class="col-lg-4 text-right newsletter">
                            <form action="#">
                                <div class="input-group stylish-input-group">
                                    <input type="email" placeholder="Enter your e-mail" class="form-control" name="email">
                                    <span class="input-group-addon">
                                        <button type="submit">
                                            <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> -->
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer-->

    <!-- jQuery Frameworks
        ============================================= -->
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/count-to.js') }}"></script>
    <script src="{{ asset('assets/js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootsnav.js') }}"></script>
    <script src="{{ asset('assets/js/easy-pie-chart.js') }}"></script>
    <script src="{{ asset('assets/js/pie-chart-active.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        window.addEventListener('scroll', () => {
                let content = document.querySelector('.part3div');
                let contentPosition = content.getBoundingClientRect().top;
                let screenPostion = window.innerHeight / 1.7;
                if (contentPosition < screenPostion) {
                    content.classList.add('active3');
                } else {
                    content.classList.remove('active3');
                }
            });
            window.addEventListener('scroll', () => {
                let content = document.querySelector('.part4div');
                let contentPosition = content.getBoundingClientRect().top;
                let screenPostion = window.innerHeight / 1.7;
                if (contentPosition < screenPostion) {
                    content.classList.add('active4');
                } else {
                    content.classList.remove('active4');
                }
            });
    </script>

</body>

</html>