<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
    @include('web.layouts.head')
</head>
<body>

    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

        <header class="main-header header-style-three">

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="inner-container clearfix">

                    <!--Info-->
                    <div class="logo-outer">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                            <span class="logo-text">CARE<span class="net">NET</span></span>
                            </a>
                        </div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler For Mobile-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <!-- Togg le Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ route('about.us') }}">About Us</a></li>
                                    <li class="dropdown has-mega-menu"><a href="#">Pages</a>
										<div class="mega-menu">
											<div class="mega-menu-bar row clearfix">
												<div class="column col-md-3 col-xs-12">
													<h3>About Us</h3>
													<ul>
														<li><a href="{{ route('about.us') }}">About Us</a></li>
														<li><a href="{{ route('teams') }}">Our Team</a></li>
														<li><a href="{{ route('faqs') }}">Faq</a></li>
														<li><a href="{{ route('services') }}">Services</a></li>
													</ul>
												</div>
												<div class="column col-md-3 col-xs-12">
													<h3>Doctors</h3>
													<ul>
														<li><a href="{{ route('doctors') }}">Doctors</a></li>
														<li><a href="{{ route('doctor-detail') }}">Doctors Detail</a></li>
													</ul>
												</div>
												<div class="column col-md-3 col-xs-12">
													<h3>Blog</h3>
													<ul>
														<li><a href="{{ route('blogs') }}">Our Blog</a></li>
														<li><a href="{{ route('blogClassics') }}">Blog Classic</a></li>
														<li><a href="{{ route('blogDitals') }}">Blog Detail</a></li>
													</ul>
												</div>
											</div>
										</div>
									</li>
                                    <li><a href="{{ route('departments') }}">Department</a></li>
                                    <li><a href="{{ route('doctors') }}">Doctors</a></li>
                                    <li><a href="{{ route('blogs') }}">Blog</a></li>
                                    <li><a href="{{ route('pharmacies') }}">Pharmacy</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <!-- Main Menu End-->
                        <div class="outer-box clearfix">
                            <!-- Main Menu End-->


                            <!-- Social Box -->
                            <ul class="social-box clearfix">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-google"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            </ul>


                        </div>
                    </div>

                </div>
            </div>
            <!--End Header Upper-->

            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo1">
                        <a href="index.html">
                            <span class="logo-text1">CARE<span class="net1">NET</span></span>
                        </a>
                    </div>

                    <!--Right Col-->
                    <div class="right-col pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                                <ul class="navigation clearfix">
                                    <!--Keep This Empty / Menu will come through Javascript-->
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                    </div>

                </div>
            </div>
            <!--End Sticky Header-->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon far fa-window-close"></span></div>

                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.html"><img
                                src="{{ asset('siteassets/images//nav-logo.png') }}" alt="" title=""></a>
                    </div>

                    <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
                </nav>
            </div><!-- End Mobile Menu -->

        </header>
        <!-- End Main Header -->

        <!-- Main Slider Three -->
        <section class="main-slider-three">
            <div class="banner-carousel">
                <!-- Swiper -->
                <div class="swiper-wrapper">

                    <div class="swiper-slide slide">
                        <div class="auto-container">
                            <div class="row clearfix">

                                <!-- Content Column -->
                                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <h2>Your Most Trusted Health Partner For Life.</h2>
                                        <div class="text">We offer free consulting and the best project management
                                            for your ideas, 100% delivery guaranteed.</div>
                                        <div class="btn-box">
                                            <a href="#appointments" class="theme-btn appointment-btn"><span
                                                    class="txt">Appointment</span></a>
                                            <a href="{{ route('services') }}" class="theme-btn services-btn">Services</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Image Column -->
                                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="image">
                                            <img src="{{ asset('siteassets/images//main-slider/hospital1.jpg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>


                    <div class="swiper-slide slide">
                        <div class="auto-container">
                            <div class="row clearfix">

                                <!-- Content Column -->
                                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <h2>Your Most Trusted Health Partner For Life.</h2>
                                        <div class="text">We offer free consulting and the best project management
                                            for your ideas, 100% delivery guaranteed.</div>
                                        <div class="btn-box">
                                            <a href="contact.html" class="theme-btn appointment-btn"><span
                                                    class="txt">Appointment</span></a>
                                            <a href="services.html" class="theme-btn services-btn">Services</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Image Column -->
                                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="image">
                                            <img src="{{ asset('siteassets/images//main-slider/hospital-2.jpg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>


                    <div class="swiper-slide slide">
                        <div class="auto-container">
                            <div class="row clearfix">

                                <!-- Content Column -->
                                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <h2>Your Most Trusted Health Partner For Life.</h2>
                                        <div class="text">We offer free consulting and the best project management
                                            for your ideas, 100% delivery guaranteed.</div>
                                        <div class="btn-box">
                                            <a href="contact.html" class="theme-btn appointment-btn"><span
                                                    class="txt">Appointment</span></a>
                                            <a href="services.html" class="theme-btn services-btn">Services</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Image Column -->
                                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="inner-column">
                                        <div class="image">
                                            <img src="{{ asset('siteassets/images//main-slider/3.jpg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <!-- End Main Slider -->

        <!-- Health Section -->
        <section id="aboutus" class="health-section">
            <div class="auto-container">
                <div class="inner-container">

                    <div class="row clearfix">

                        <!-- Content Column -->
                        <div class="content-column col-lg-7 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="border-line"></div>
                                <!-- Sec Title -->
                                <div class="sec-title">
                                    <h2>Who We Are <br> Pioneering in Health.</h2>
                                    <div class="separator"></div>
                                </div>
                                <div class="text">Where you are at the heart of our mission. We hope you will
                                    consider us as your medical home—the place where you feel safe, comfortable and
                                    cared for. As a multi-specialty medical group,</div>
                                <a href="about.html" class="theme-btn btn-style-one"><span class="txt">More About
                                        Us</span></a>
                            </div>
                        </div>

                        <!-- Image Column -->
                        <div class="image-column col-lg-5 col-md-12 col-sm-12">
                            <div class="inner-column wow fadeInRight" data-wow-delay="0ms"
                                data-wow-duration="1500ms">
                                <div class="image">
                                    <img src="{{ asset('siteassets/images//main-slider/hospital2.jpg') }}"
                                        alt="" />
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- End Health Section -->

        <!-- Featured Section -->
        <section class="featured-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Feature Block -->
                    <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="upper-box">
                                <div class="icon flaticon-doctor-stethoscope"></div>
                                <h3><a href="#">Medical Treatment</a></h3>
                            </div>
                            <div class="text">Whether you're taking your first steps, just finding your stride,</div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                            <div class="upper-box">
                                <div class="icon flaticon-ambulance-side-view"></div>
                                <h3><a href="#">Emergency Help</a></h3>
                            </div>
                            <div class="text">Whether you're taking your first steps, just finding your stride,</div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                            <div class="upper-box">
                                <div class="icon fas fa-user-md"></div>
                                <h3><a href="#">Qualified Doctors</a></h3>
                            </div>
                            <div class="text">Whether you're taking your first steps, just finding your stride,</div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="750ms" data-wow-duration="1500ms">
                            <div class="upper-box">
                                <div class="icon fas fa-briefcase-medical"></div>
                                <h3><a href="#">Medical Professionals</a></h3>
                            </div>
                            <div class="text">Whether you're taking your first steps, just finding your stride,</div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Featured Section -->

        <!-- Department Section Three -->
        <section id="departments" class="department-section-three">
    <div class="image-layer" style="background-image:url({{ asset('siteassets/images/background/1doctor.jpg') }})"></div>
    <div class="auto-container">
        <div class="department-tabs tabs-box">
            <div class="row clearfix">
                <!-- قائمة الأقسام -->
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="sec-title light">
                        <h2>Health <br> Department</h2>
                        <div class="separator"></div>
                    </div>
                    <ul class="tab-btns tab-buttons clearfix">
                        @foreach ($departments as $index => $department)
                            <li class="tab-btn {{ $index == 0 ? 'active-btn' : '' }}" 
                                data-tab="tab-{{ $department->id }}">
                                {{ $department->trans_name }}
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- محتوى الأقسام -->
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="tabs-content">
                        @foreach ($departments as $index => $department)
                            <div class="tab {{ $index == 0 ? 'active-tab' : '' }}" 
                                id="tab-{{ $department->id }}" 
                                style="{{ $index == 0 ? '' : 'display:none;' }}">
                                <div class="content">
                                    <h2>{{ $department->trans_name }}</h2>
                                    <div class="title">Department of Neurology</div>
                                    <div class="text">
                                        <p>{{ $department->trans_description }}</p>
                                    </div>
                                    <div class="two-column row clearfix">
                                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                                    <h3>01 - Neurology Service</h3>
                                                    <div class="column-text">Lorem ipsum dolor sit amet, consectetuer
                                                        adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                                                        Cum
                                                        sociis natoque penatibus</div>
                                                </div>
                                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                                    <h3>02 - Neurology Service</h3>
                                                    <div class="column-text">Lorem ipsum dolor sit amet, consectetuer
                                                        adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                                                        Cum
                                                        sociis natoque penatibus</div>
                                                </div>
                                            </div>
                                    <a href="doctors-detail.html" class="theme-btn btn-style-two">
                                        <span class="txt">View More</span>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        <!-- End Department Section -->

        <!-- Team Section -->
        <section id="doctors" class="team-section">
            <div class="auto-container">

                <!-- Sec Title -->
                <div class="sec-title centered">
                    <h2>The Medical Specialists</h2>
                    <div class="separator"></div>
                </div>

                <div class="row clearfix">

                    <!-- Team Block -->
                    <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="{{ asset('siteassets/images//background/doctor1.jpg') }}" alt="" />
                                <div class="overlay-box">
                                    <ul class="social-icons">
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-google"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                    </ul>
                                    <a href="#" class="appointment">Make Appointment</a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Dr. Andria Jonea</a></h3>
                                <div class="designation">Cancer Specialist</div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="{{ asset('siteassets/images//background/doctor2.jpg') }}" alt="" />
                                <div class="overlay-box">
                                    <ul class="social-icons">
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-google"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                    </ul>
                                    <a href="#" class="appointment">Make Appointment</a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Dr. Robet Samith</a></h3>
                                <div class="designation">Heart Surgen</div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="{{ asset('siteassets/images//background/doctor3.jpg') }}" alt="" />
                                <div class="overlay-box">
                                    <ul class="social-icons">
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-google"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                    </ul>
                                    <a href="#" class="appointment">Make Appointment</a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Dr. Sharon Laura</a></h3>
                                <div class="designation">Family Physician</div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="750ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="{{ asset('siteassets/images//background/doctor4.jpg') }}" alt="" />
                                <div class="overlay-box">
                                    <ul class="social-icons">
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-google"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                    </ul>
                                    <a href="#" class="appointment">Make Appointment</a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Dr. Alex Furgosen</a></h3>
                                <div class="designation">Ortho Specialist</div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Team Section -->

        <!-- Video Section -->
        <section class="video-section"
            style="background-image:url({{ asset('siteassets/images//background/doctorHM.jpg') }})">
            <div class="auto-container">
                <div class="content">
                    <div class="text">WE ARE CARE ABOUT YOUR HEALTH</div>
                    <h2>We Care About You</h2>
                </div>
            </div>
        </section>
        <!-- End Video Section -->

        <!-- Appointment Section Two -->
        <section id="appointments" class="appointment-section-two">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">

                        <!-- Image Column -->
                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column wow slideInLeft" data-wow-delay="0ms"
                                data-wow-duration="1500ms">
                                <div class="image">
                                    <img src="{{ asset('siteassets/images//background/aidt.jpg') }}"
                                        alt="" />
                                </div>
                            </div>
                        </div>

                        <!-- Form Column -->
                        <div class="form-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <!-- Sec Title -->
                                <div class="sec-title">
                                    <h2>Appointment Form</h2>
                                    <div class="separator"></div>
                                </div>

                                <!-- Appointment Form -->
                                <div class="appointment-form">
                                    <form method="post" action="appointment.html">
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="username" placeholder="Name"
                                                    required="">
                                                <span class="icon fa fa-user"></span>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="email" name="email" placeholder="Email"
                                                    required="">
                                                <span class="icon fa fa-envelope"></span>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="tel" name="phone" placeholder="Phone No"
                                                    required="">
                                                <span class="icon fas fa-phone"></span>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="department" placeholder="Department"
                                                    required="">
                                                <span class="icon fas fa-home"></span>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="day" placeholder="Day">
                                                <span class="icon fa fa-calendar"></span>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="time" placeholder="Time"
                                                    class="">
                                                <span class="icon far fa-clock"></span>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <textarea name="message" placeholder="Message"></textarea>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <button class="theme-btn btn-style-two" type="submit"
                                                    name="submit-form"><span class="txt">Book
                                                        Appointment</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial Section Two -->
        <section class="testimonial-section-two">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <h2>Appointment Form</h2>
                    <div class="separator"></div>
                </div>
                <div class="testimonial-carousel owl-carousel owl-theme">

                    <!-- Tesimonial Block Two -->
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ asset('siteassets/images//background/person1.jpg') }}" alt="" />
                            </div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,nascetur ridiculus mus. Donec quam felis.Thanks.</div>
                            <div class="lower-box">
                                <div class="clearfix">

                                    <div class="pull-left">
                                        <div class="quote-icon flaticon-quote"></div>
                                    </div>
                                    <div class="pull-right">
                                        <div class="author-info">
                                            <h3>Max Winchester</h3>
                                            <div class="author">Kidny Patient</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tesimonial Block Two -->
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ asset('siteassets/images//background/person2.jpg') }}" alt="" />
                            </div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,nascetur ridiculus mus. Donec quam felis.Thanks.</div>
                            <div class="lower-box">
                                <div class="clearfix">

                                    <div class="pull-left">
                                        <div class="quote-icon flaticon-quote"></div>
                                    </div>
                                    <div class="pull-right">
                                        <div class="author-info">
                                            <h3>Jack Monita</h3>
                                            <div class="author">Kidny Patient</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tesimonial Block Two -->
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ asset('siteassets/images//background/person1.jpg') }}" alt="" />
                            </div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,nascetur ridiculus mus. Donec quam felis.Thanks.</div>
                            <div class="lower-box">
                                <div class="clearfix">

                                    <div class="pull-left">
                                        <div class="quote-icon flaticon-quote"></div>
                                    </div>
                                    <div class="pull-right">
                                        <div class="author-info">
                                            <h3>Max Winchester</h3>
                                            <div class="author">Kidny Patient</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tesimonial Block Two -->
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ asset('siteassets/images//background/person2.jpg') }}" alt="" />
                            </div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,nascetur ridiculus mus. Donec quam felis.Thanks.</div>
                            <div class="lower-box">
                                <div class="clearfix">

                                    <div class="pull-left">
                                        <div class="quote-icon flaticon-quote"></div>
                                    </div>
                                    <div class="pull-right">
                                        <div class="author-info">
                                            <h3>Jack Monita</h3>
                                            <div class="author">Kidny Patient</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Testimonial Section Two -->

        <!-- Counter Section -->
        <section class="counter-section style-two"
            style="background-image: url({{ asset('siteassets/images//background/pattern-3.png') }})">
            <div class="auto-container">

                <!-- Fact Counter -->
                <div class="fact-counter style-two">
                    <div class="row clearfix">

                        <!--Column-->
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon flaticon-logout"></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="2500" data-stop="2350">0</span>
                                    </div>
                                    <h4 class="counter-title">Satisfied Patients</h4>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon flaticon-logout"></div>
                                    <div class="count-outer count-box alternate">
                                        +<span class="count-text" data-speed="3000" data-stop="350">0</span>
                                    </div>
                                    <h4 class="counter-title">Doctor’s Team</h4>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon flaticon-logout"></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="2150">0</span>
                                    </div>
                                    <h4 class="counter-title">Success Mission</h4>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon flaticon-logout"></div>
                                    <div class="count-outer count-box">
                                        +<span class="count-text" data-speed="2500" data-stop="225">0</span>
                                    </div>
                                    <h4 class="counter-title">Successfull Surgeries</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- End Counter Section -->

        <!-- Doctor Info Section -->
        <section class="doctor-info-section">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">

                        <!-- Doctor Block -->
                        <div class="doctor-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <h3>Working Hours</h3>
                                <ul class="doctor-time-list">
                                    <li>Mon–Fri <span>8:00am–7:00pm</span></li>
                                    <li>Saturday <span>9:00am–5:00pm</span></li>
                                    <li>Sunday <span>9:00am–3:00pm</span></li>
                                </ul>
                                <h4>Emergency Cases</h4>
                                <div class="phone">Call us! <strong>+898 68679 575 09</strong></div>
                            </div>
                        </div>

                        <!-- Doctor Block -->
                        <div class="doctor-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <h3>Doctors Timetable</h3>
                                <div class="text">The following is for guidance only to help you plan your
                                    appointment with a preferred doctor or nurse. It does not guarantee availability as
                                    the doctors or nurses may sometimes be attending to other duties.</div>
                                <a href="#" class="detail">More Detail</a>
                            </div>
                        </div>

                        <!-- Doctor Block -->
                        <div class="doctor-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <h3>Primary Health Care</h3>
                                <div class="text">When you know you are using your best talents for something you
                                    love, you can’t it. Effective communication is the basis for building brands as
                                    solid as the relation-ships with build with our clients..</div>
                                <a href="#" class="detail">Contact Now</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End Doctor Info Section -->

        <!-- News Section Two -->
        <section class="news-section-two">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <h2>Latest News & Articals</h2>
                    <div class="separator style-three"></div>
                </div>
                <div class="row clearfix">

                    <!-- News Block Two -->
                    <div class="news-block-two col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="blog-detail.html"><img
                                        src="{{ asset('siteassets/images//background/doctorS1.jpg') }}"
                                        alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <div class="content">
                                    <ul class="post-meta">
                                        <li>June 21, 2018 at 8:12pm</li>
                                        <li>Post By: Admin</li>
                                    </ul>
                                    <h3><a href="blog-detail.html">Diagnostic Services for Efficient Results Picking
                                            Right </a></h3>
                                    <div class="text">There are a lot of women that are unaware of the numerous risks
                                        associated with their health and eventually ignore the ...</div>
                                    <a href="blog-detail.html" class="theme-btn btn-style-five"><span
                                            class="txt">read more</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- News Block Two -->
                    <div class="news-block-two col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="blog-detail.html"><img
                                        src="{{ asset('siteassets/images//background/doctorS2.jpg') }}"
                                        alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <div class="content">
                                    <ul class="post-meta">
                                        <li>June 21, 2018 at 8:12pm</li>
                                        <li>Post By: Admin</li>
                                    </ul>
                                    <h3><a href="blog-detail.html">Reasons to Visit for Heart Specialist
                                            Department.</a></h3>
                                    <div class="text">There are a lot of women that are unaware of the numerous risks
                                        associated with their health and eventually ignore the ...</div>
                                    <a href="blog-detail.html" class="theme-btn btn-style-five"><span
                                            class="txt">read more</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--Clients Section-->
        <!--End Clients Section-->

        <!--Main Footer-->
        @include('web.layouts.footer')

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value=""
                                placeholder="Search Here" required>
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>

                <br>
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="#">Business</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">SEO</a></li>
                    <li><a href="#">Logistics</a></li>
                    <li><a href="#">Freedom</a></li>
                </ul>

            </div>

        </div>
    </div>



    <!-- Color Palate / Color Switcher -->
    <div class="color-palate">
        <div class="color-trigger">
            <i class="fas fa-cog"></i>
        </div>
        <div class="color-palate-head">
            <h6>Choose Your Color</h6>
        </div>
        <div class="various-color clearfix">
            <div class="colors-list">
                <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
                <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
                <span class="palate olive-color" data-theme-file="css/color-themes/olive-theme.css"></span>
                <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
                <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
                <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
                <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
                <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
            </div>
        </div>

        <ul class="rtl-version option-box">
            <li class="rtl">RTL Version</li>
            <li>LTR Version</li>
        </ul>

        <a href="#" class="purchase-btn">Purchase now $17</a>

        <div class="palate-foo">
            <span>You will find much more options for colors and styling in admin panel. This color picker is used only
                for demonstation purposes.</span>
        </div>

    </div>

    <!--Scroll to top-->
    @include('web.layouts.script')


</body>

</html>
