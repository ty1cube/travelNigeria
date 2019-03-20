@extends('front.master')

@section('content')



        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                    
                    <div class="contact-wrapper">
                        <div id="contact-map" class="mb60"></div>
                        <div class="row">
                            <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 offset-md-1 col-md-10 col-sm-12 col-12">
                                <div class="section-title">
                                    <h2>We're here for you all day, everyday!</h2>
                                    <p>If you have any questions or comments please complete the form below.We'd love to hear from you!</p>
                                </div>
                                <div class="contact-block">
                                    <!-- contact-form -->
                                    <form>
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="name">Name</label>
                                                    <input id="name" type="text" placeholder="Your Name" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="email"> Email</label>
                                                    <input id="email" type="text" placeholder="Your Email Address" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="phone"> Phone</label>
                                                    <input id="phone" type="text" placeholder="Your Contact Number" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="subject">Subject </label>
                                                    <input id="subject" type="text" placeholder="Your Subject" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="textarea">Messages</label>
                                                    <textarea class="form-control" id="textarea" name="textarea" rows="4" placeholder="Your Messages"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                                                <button type="submit" name="singlebutton" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- contact-form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact-info -->
        <div class="space-small">
            <div class="container">
                <div class="row ">
                    <!-- contact -->
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-6 col-12 mb20">
                        <div class="contact-info">
                            <h4 class="contact-info-title">Head Office Location</h4>
                            <div class="contact-info-content">
                                <i class="fa fa-map-marker contact-info-icon"></i>
                                <p>408 N Armore Avenue Villa Park, IL 60181 </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.contact -->
                    <!-- contact -->
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-6 col-12 mb20">
                        <div class="contact-info">
                            <h4 class="contact-info-title">Call Us</h4>
                            <div class="contact-info-content">
                                <i class="fa fa-phone contact-info-icon"></i>
                                <p><strong>+1(630) 286 -2605</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.contact -->
                    <!-- contact -->
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-6 col-12 mb20 ">
                        <div class="contact-info">
                            <h4 class="contact-info-title">Email Us</h4>
                            <div class="contact-info-content">
                                <i class="fa fa-envelope contact-info-icon"></i>
                                <p><strong>info@plus234travel.com</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.contact -->
                </div>
            </div>
        </div>

       
       
        @endsection