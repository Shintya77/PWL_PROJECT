 
 @extends('layouts.user.master')
 
 @section('content')


 <!-- Breadcrumb Section Begin -->
 <div class="breadcrumb-option contact-breadcrumb set-bg" data-setbg="img/breadcrumb/contact-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->


    <!-- Contact Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="contact__form">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact__form__text">
                            <div class="contact__form__title">
                                <h2>Get In Touch</h2>
                                <p>Please contact us or send us an email or go to our forum.</p>
                            </div>
                            <form action="#">
                                <div class="input-list">
                                    <input type="text" placeholder="Your name">
                                    <input type="text" placeholder="Your email">
                                </div>
                                <textarea placeholder="Your Message"></textarea>
                                <button type="submit" class="site-btn">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="contact__address__item">
                        <h4>New York Office</h4>
                        <ul>
                            <li><i class="fa fa-map-marker"></i> 917 Atlantic Lane, Strongsville, <br />NY, United State
                            </li>
                            <li><i class="fa fa-phone"></i> (+12) 345-678-910</li>
                            <li><i class="fa fa-envelope"></i> newyork.info@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="contact__address__item">
                        <h4>New Jersey Office</h4>
                        <ul>
                            <li><i class="fa fa-map-marker"></i> 171 Logan Lane, Union City <br />NJ, United Statee</li>
                            <li><i class="fa fa-phone"></i> (+12) 345-678-910</li>
                            <li><i class="fa fa-envelope"></i> newjersey.info@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="contact__address__item">
                        <h4>Washington Office</h4>
                        <ul>
                            <li><i class="fa fa-map-marker"></i> 9 East Bear Hill St. Great Falls <br />Washington,
                                United State</li>
                            <li><i class="fa fa-phone"></i> (+12) 345-678-910</li>
                            <li><i class="fa fa-envelope"></i> washington.info@colorlib.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->

    
    @endsection