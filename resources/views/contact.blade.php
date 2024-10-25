@extends('layout')
@section('content')

<!-- Start Breadcrumb 
    ============================================= -->
{{-- <div class="breadcrumb-area shadow dark bg-cover text-center text-light"
    style="background-image: url(assets/img/contactbg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>Contact Us</h1>
               
            </div>
        </div>
    </div>
</div> --}}
<!-- End Breadcrumb -->

<!-- Star Contact Area
    ============================================= -->

<!-- End Contact Area -->

<!-- Star Google Maps
    
<div class="maps-area">
    <div class="google-maps">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3353.056267409104!2d-96.8313523!3d32.7785961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e9944046d77d3%3A0x4b5699dbe89c2c37!2s539%20W%20Commerce%20St%20%236282%2C%20Dallas%2C%20TX%2075208%2C%20USA!5e0!3m2!1sen!2sus!4v1694451970203!5m2!1sen!2sus"
            ></iframe>
    </div>
</div>
End Google Maps -->
<div class="contact-area overflow-hidden default-padding bg-gray">

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
                                    <div class="form-group">
                                        <p class="text-dark">Are you a ___?</p>
                                        <select class="form-control" id="areyou" name="phone">
                                            
                                            <option value="publisher">Publisher</option>
                                            <option value="agency">Agency</option>
                                            <option value="enterprise">Enterprise</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="form-group">
                              <p class="text-dark">What are you researching? (tick all that applies)</p>
                            <div style="display: flex; flex-direction: column;">
                                <label><input style="min-height: 10px" type="checkbox" name="research[]" value="Content Generation"><span> Content
                                        Generation</span></label>
                                <label><input style="min-height: 10px" type="checkbox" name="research[]" value="Account Based Marketing"><span>
                                        Account Based Marketing</span></label>
                                <label><input style="min-height: 10px" type="checkbox" name="research[]" value="Email Marketing"><span> Email
                                        Marketing</span></label>
                                <label><input style="min-height: 10px" type="checkbox" name="research[]" value="Appointment Setting"><span>
                                        Appointment Setting</span></label>
                                <label><input style="min-height: 10px" type="checkbox" name="research[]"
                                        value="Full Funnel Demand Generation"><span> Full Funnel Demand Generation</span></label>
                                <label><input style="min-height: 10px" type="checkbox" name="research[]" value="Custom Survey"><span> Custom
                                        Survey</span></label>
                                <label><input style="min-height: 10px" type="checkbox" name="research[]" value="Programmatic"><span>
                                        Programmatic</span></label>
                                <label><input style="min-height: 10px" type="checkbox" name="research[]" value="Lookalike Audience Mapping"><span>
                                        Lookalike Audience Mapping</span></label>
                            </div>
                            </div>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <p class="text-dark">How soon are you looking to add a service?</p>
                                        <input class="form-control" id="howsoon" name="howsoon" placeholder="Answer here" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <p class="text-dark">What specific goals do you hope to achieve with a service provided by RevLine Marketing? *</p>
                                        <textarea class="form-control" id="comments" name="comments"
                                            placeholder="Answer here"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <p class="text-dark">Would you like a RevLine Sales Rep to get in touch with you?</p>
                                        <select class="form-control" id="yesno" name="yesno">
                            
                                            <option value="publisher">Yes</option>
                                            <option value="agency">No</option>
                                           
                                            <!-- Add more options as needed -->
                                        </select>
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button class="btn-animation dark border" type="submit" name="submit" id="submit">
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
                                <h5>Locations</h5>
                                <p>
                                    539 W. Commerce St #6282 <br> Dallas,TX 75208 <br><br>
                                    951 Old County Road, <br> Suite 2-379, Belmont, <br> CA 94002
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
                                <h5>Send An E-Mail</h5>
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
</div>
@endsection