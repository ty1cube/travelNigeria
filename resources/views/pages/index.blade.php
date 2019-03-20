@extends('front.master')

@section('content')
      
  <div class="bg-default enquiry-form ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <!-- form -->
                        <form>
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-3 col-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="select"></label>
                                        <div class="select">
                                            <select id="select" name="city" class="form-control">
                                                <option value="">Where do you want to visit in Nigeria</option>
                                                <option value="">Lagos</option>
                                                <option value="">Abuja</option>
                                                <option value="">PortHarcourt</option>
                                                <option value="">Jos</option>
                                                <option value="">Ogun</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-3 col-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="datepicker"></label>
                                        <div class="input-group">
                                            <input id="datepicker" name="datepicker" type="text" placeholder="Date" class="form-control" required>
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-3 col-12">
                                        <div class="form-group">
                                            <label class="control-label sr-only" for="email"></label>
                                            <div class="email">
                                                <input id="email" name="email" type="text" placeholder="Email" class="form-control" required>
                                    
                                            </div>
                                        </div>
                                    </div>
                               
                                <div class="col-xl-3 col-lg-12 col-md-6 col-sm-3 col-12">
                                    <button type="submit" name="singlebutton" class="btn btn-primary btn-lg">Enquiry Now</button>
                                </div>
                            </div>
                        </form>
                        <!-- /.form -->
                    </div>
                </div>
            </div>
        </div>


        <div class="space-medium">
                <div class="container">
                    <!-- about-head -->
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb60">
                            <div class="">
                                <h2>We are plus234travel </h2>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 offset-md-1 col-md-8 col-sm-12 col-12 mb60">
                            <div class="">
                                <p class="lead">We are dedicated to making your visits to Nigeria pleasurable and stress free. Our offerings support short term visits, extended visits or including Nigeria in your retirement options</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.about-head -->
                    <div class="row">
                        <!-- feature-section -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="well-block">
                                <!-- feature-left -->
                                <div class="feature-left">
                                    <div class="feature-icon"><img src="./images/calendar.png" alt=""></div>
                                    <div class="feature-content">
                                        <h4>Everything’s on Schedule</h4>
                                        <p>We provide you with excellent services immediately you arrive at the airport</p>
                                    </div>
                                </div>
                                <!-- /.feature-left -->
                                <!-- feature-left -->
                                <div class="feature-left">
                                    <div class="feature-icon"><img src="./images/adventure.png" alt=""></div>
                                    <div class="feature-content">
                                        <h4>Security Guarantee</h4>
                                        <p>We provide you with well trained and professional security during your stay</p>
                                    </div>
                                </div>
                               
                                <div class="feature-left">
                                    <div class="feature-icon"><img src="./images/hotel.png" alt=""></div>
                                    <div class="feature-content">
                                        <h4>Comfortable Housing</h4>
                                        <p>We provide you with beautiful and serene housing with facilities </p>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        <!-- tour-service -->
        <div class="space-medium">
            <div class="container">
                <!-- tour-1 -->
                <div class="row ">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <div class="section-title">
                                    <h2>Facilities available for your Visit</h2>
                                </div>
                            </div>
                    <div class="col-xl-4 col-lg-4 offset-md-1 col-md-4 col-sm-12 col-12 mb40">
                        <div class="tour-img">
                            <a href="#" class="imghover"> <img src="./images/goosepen_9.jpg" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 offset-md-1 col-md-5 col-sm-12 col-12 mb40">
                        <div class="tour-block">
                            <div class="tour-content">
                                <h2 class="mb30"><a href="#" class="title">Luxury Accomodation</a></h2>
                                <p class="mb30">Our luxury apartment, design to make you comfortable and make you feel at home when you are in Nigeria.</p>
                                <a href="#" class="btn-link">Learn more<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.tour-1 -->
                <!-- tour-2 -->
                <div class="row">
                    <div class="col-xl-5 col-lg-5 offset-md-1 col-md-5 col-sm-12 col-12 mb40">
                        <div class="tour-block">
                            <div class="tour-content">
                                <h2 class="mb30"><a href="#" class="title">Standard Gym facility</a></h2>
                                <p class="mb30">You have access to world class gym center to keep you fit and relax. There are professional trainer who will guide you at the center</p>
                                <a href="#" class="btn-link">Learn more<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 offset-md-1 col-md-4 col-sm-12 col-12 mb40">
                        <div class="tour-img">
                            <a href="#" class="imghover"> <img src="./images/goosepen_8.jpg" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
                <!-- /.tour-2 -->
                <!-- tour-3 -->
                <div class="row">
                    <div class="col-xl-4 col-lg-4 offset-md-1 col-md-4 col-sm-12 col-12 mb20">
                        <div class="tour-img">
                            <a href="#" class="imghover"> <img src="./images/goosepen_7.jpg" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 offset-md-1 col-md-5 col-sm-12 col-12 mb20">
                        <div class="tour-block">
                            <div class="tour-content">
                                <h2 class="mb30"><a href="#" class="title">Standard pool</a></h2>
                                <p class="mb30">We provide you with a clean and standard swimming pool to make you have fun and relax</p>
                                <a href="#" class="btn-link">Learn more<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.tour-3 -->
            </div>
        </div>
        <!-- /.tour-service -->
        <!-- destination-section -->
        <div class="space-medium">
            <div class="container-fluid">
                <div class="row">
                    <!-- section-title -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="section-title">
                            <h2>Unique Location</h2>
                        </div>
                    </div>
                    <!-- /.section-title -->
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 nopl nopr">
                        <!-- destination-section -->
                        <div class="destination-block">
                            <div class="desti-img">
                                <img src="./images/Business_hub.jpg" alt="">
                                <a href="#" class="desti-title">Business Hub</a>
                                <div class="overlay">
                                </div>
                               
                            </div>
                        </div>
                        <!-- /.destination-section -->
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 nopl nopr">
                        <!-- destination-section -->
                        <div class="destination-block">
                            <div class="desti-img">
                                <img src="./images/nite_life.jpg" alt="">
                                <a href="#" class="desti-title">Night Life</a>
                                <div class="overlay">
                                </div>
                               
                            </div>
                        </div>
                        <!-- /.destination-section -->
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 nopr nopl">
                        <!-- destination-section -->
                        <div class="destination-block">
                            <div class="desti-img">
                                <img src="./images/eko.jpg" alt="">
                                <a href="#" class="desti-title">Industrial Center</a>
                                <div class="overlay">
                                </div>
                                
                            </div>
                        </div>
                        <!-- /.destination-section -->
                    </div>
                    <!-- destination-section -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 nopr nopl">
                        <div class="destination-block">
                            <div class="desti-img">
                                <img src="./images/commercial.jpg" alt="">
                                <a href="#" class="desti-title">Commercial Cemter</a>
                                <div class="overlay">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- /.destination-section -->
                </div>
            </div>
        </div>
        
        <!-- /.about-section -->
        <!-- service-section -->
        <div class="space-medium service-wrapper" style="">
            <div class="container">
                <!-- service-head -->
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb60">
                        <div class="">
                            <h2>Our Services</h2>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 offset-md-1 col-md-8 col-sm-12 col-12 mb60">
                        <div class="">
                            <p class="lead">We provide a suite of services to make your visits to Nigeria Stress Free</p>
                        </div>
                    </div>
                </div>
                <!-- /.service-head -->
                <div class="row">
                    <!-- service-block -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 nopr">
                        <div class="service-block border-bottom border-right">
                            <div class="service-img"><img src="./images/hotel_1.png" alt=""></div>
                            <div class="service-content">
                                <h3 class="service-title"> Short Stay Serviced Apartments Rentals</h3></div>
                        </div>
                    </div>
                    <!-- /.service-block -->
                    <!-- service-block -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 nopl nopr">
                        <div class="service-block border-bottom border-right">
                            <div class="service-img"><img src="./images/disability.png" alt=""></div>
                            <div class="service-content">
                                <h3 class="service-title">Chauffer Driven Car Rental</h3></div>
                        </div>
                    </div>
                    <!-- /.service-block -->
                    <!-- service-block -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 nopl">
                        <div class="service-block border-bottom">
                            <div class="service-img"><img src="./images/airplane.png" alt=""></div>
                            <div class="service-content">
                                <h3 class="service-title">Short Term Medical Insurance Covergae</h3></div>
                        </div>
                    </div>
                    <!-- /.service-block -->
                    <!-- service-block -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 nopr">
                        <div class="service-block border-right">
                            <div class="service-img"><img src="./images/passport.png" alt=""></div>
                            <div class="service-content">
                                <h3 class="service-title">Personal Property Insurance coverage  </h3></div>
                        </div>
                    </div>
                    <!-- /.service-block -->
                    <!-- service-block -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 nopl nopr">
                        <div class="service-block  border-right">
                            <div class="service-img"><img src="./images/car_wash.png" alt=""></div>
                            <div class="service-content">
                                <h3 class="service-title">GSM SIM Card Rental </h3></div>
                        </div>
                    </div>
                    <!-- /.service-block -->
                    <!-- service-block -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 nopl">
                        <div class="service-block service-right-border service-bottom-border">
                            <div class="service-img"><img src="./images/car.png" alt=""></div>
                            <div class="service-content">
                                <h3 class="service-title"> Naira Mobile Wallet to Faciliate Electronic Transactions</h3></div>
                        </div>
                    </div>
                    <!-- /.service-block -->
                </div>
            </div>
        </div>
        <!-- /.service-section -->
        <!-- testimonial-section -->
        <div class="space-medium bg-light">
            <div class="container">
                <div class="row">
                    <!-- testimonial-head -->
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb60">
                        <div class="testimonial-head">
                            {{--  <div class="quote-icon">
                                <img src="./images/left_quote.png" alt="">
                            </div>  --}}
                            <h2 class="mb40">What Our Customers Say About Our Services</h2>
                            {{--  <a href="#" class="btn-link">Read All Reviews <i class="fa fa-angle-right"></i></a>  --}}
                        </div>
                    </div>
                    <!-- /.testimonial-head -->
                    <div class="col-xl-6 col-lg-6 offset-md-1 col-md-6 col-sm-12 col-12 mb60">
                        <div class="testimonial-carousel">
                            <div class="owl-carousel owl-theme testimonial-owl">
                                <!-- testimonial-item -->
                                <div class="item">
                                    <div class="testimonial-block">
                                        <div class="testimonial-content">
                                            <p class="testimonial-text">“I love the facility at the residence where i stayed and the environmnet was very conducive and friendly”</p>
                                            <span class="testi-meta"><strong>- Azeez Akinsola</strong> (USA)</span>
                                            <div class="testi-arrow"></div>
                                        </div>
                                        <div class="testi-img">
                                            <img src="./images/azeez.jpg" alt="" class="rounded-circle">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.testimonial-item -->
                                <!-- testimonial-item -->
                                <div class="item">
                                    <div class="testimonial-block">
                                        <div class="testimonial-content">
                                            <p class="testimonial-text">“The environment was serene and i love the people, they are really accomodating. I will patronize plus234travel next time”</p>
                                            <span class="testi-meta"><strong>- Tolu Akin-Olugbemi</strong> (USA)</span>
                                            <div class="testi-arrow"></div>
                                        </div>
                                        <div class="testi-img">
                                            <img src="./images/azeez.jpg" alt="" class="rounded-circle">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.testimonial-item -->
                                <!-- testimonial-item -->
                                <div class="item">
                                    <div class="testimonial-block">
                                        <div class="testimonial-content">
                                            <p class="testimonial-text">“This is my first time of being in Nigeria, plus234travel really makes my experience in Nigeria worthwhile</p>
                                            <span class="testi-meta"><strong>- Lewu Emmanuel</strong> (France)</span>
                                            <div class="testi-arrow"></div>
                                        </div>
                                        <div class="testi-img">
                                            <img src="./images/aribisalat.jpg" alt="" class="rounded-circle">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.testimonial-item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    @endsection