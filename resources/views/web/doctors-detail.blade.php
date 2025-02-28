<!DOCTYPE html>
<html lang="en">
<head>
<title>Doctor Detail</title>
@include('web.layouts.head')

</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    <header class="main-header">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container clearfix">
                <div class="top-left clearfix">
                    <ul class="list">
						<li><span class="icon fas fa-envelope"></span> 2130 Fulton Street San Diego CA 94117-1080 USA</li>
						<li><span class="icon fas fa-phone"></span> <a href="tel:+555–123–2323"> 555–123–2323</a></li>
					</ul>
                </div>
                <div class="top-right clearfix">
                    <ul class="social-icons">
						<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
						<li><a href="#"><span class="fab fa-google"></span></a></li>
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-skype"></span></a></li>
						<li><a href="#"><span class="fab fa-linkedin"></span></a></li>
					</ul>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Upper -->
        @include('web.layouts.header')
        <!--End Header Upper-->

		<!--Sticky Header-->
        
        <!--End Sticky Header-->
		
    	<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon far fa-window-close"></span></div>
            
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
            	<div class="nav-logo"><a href="index.html"><img src="images/nav-logo.png" alt="" title=""></a></div>
                
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->
	
	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('siteassets/images/background/doctorUN.jpg') }});">
        <div class="auto-container">
            <h1>Dr. Detail For CareNet</h1>
			<div class="text">What We Actually Do?</div>
			<ul class="bread-crumb clearfix">
				<li><a href="index.html"><span class="fas fa-home"></span> Home </a></li>
				<li>Doctor Detail</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Doctor Detail Section -->
    <section class="doctor-detail">
        <div class="auto-container">
            <!-- Upper Box -->
            <div class="upper-box">
                <div class="row clearfix">
                    
                    <div class="detail-column col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="info-header">
                                <p>Provide Comprehensive Quality Care</p>
                                <h3>I‘m Dr. Johan Doe</h3>
                                <span class="designation">Neurosurgeon</span>
                            </div>
                            <ul class="info-list">
                                <li>
                                    <strong>Expertise</strong>
                                    <p>Cardiology</p>
                                    <p>Heart Specialist</p>
                                </li>
                                <li>
                                    <strong>Education</strong>
                                    <p>Doctor of Medicine, University of Texas, USA (1990) Medical Orientation Program, St. Louis University (St. Louis, Missouri 1996)</p>
                                </li>
                                <li>
                                    <strong>Experience</strong>
                                    <p>15 years of Experience in Medicine</p>
                                </li>
                                <li>
                                    <strong>Profession</strong>
                                    <p>MD Dean and Executive Vice President for Medical Affairs School of Medicine and Graduate School of Biomedical Sciences University of Texas Health Science Center at San Antonio</p>
                                </li>
                            </ul>
                        </div>
                    </div>
					
					<div class="image-box col-lg-4 col-md-12 col-sm-12">
                        <div class="image"><a href="{{ asset('siteassets/images/background/doctor4.jpg') }}" class="lightbox-image"><img src="{{ asset('siteassets/images/background/doctor4.jpg') }}" alt=""></a></div>
                    </div>
					
                </div>
            </div>

            <!-- Lower Content -->
            <div class="lower-content">
                <div class="row clearfix">
					
					<!-- Form Column -->
                    <div class="form-column col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="appointment-form">
								<div class="sec-title centered">
									<h2>Appointment Form</h2>
									<p>Get to Book Your Appointment Now</p>
								</div>
                                
                                <form method="post" action="appointment.html">
                                    <div class="row clearfix">
                                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                            <input type="text" name="username" placeholder="Name" required="">
                                            <span class="icon fa fa-user"></span>
                                        </div>
                                        
                                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                            <input type="email" name="email" placeholder="Email" required="">
                                            <span class="icon fa fa-envelope"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                            <input type="tel" name="phone" placeholder="Phone No" required="">
                                            <span class="icon fas fa-phone"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                            <select class="custom-select-box">
                                                <option>Cardiology Department</option>
                                                <option>Neurology Department</option>
                                                <option>Urology Department</option>
                                                <option>Gynecological Conditions</option>
                                                <option>Pediatric Department</option>
                                                <option>Laboratory Department</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                            <input type="text" name="day" placeholder="Day">
                                            <span class="icon fa fa-calendar"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                            <input type="text" name="time" placeholder="Time" class="">
                                            <span class="icon far fa-clock"></span>
                                        </div>
                                        
                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>

                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group text-center">
                                            <button class="theme-btn btn-style-two" type="submit" name="submit-form"><span class="txt">Book Appointment</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
					
                    <!-- Info Column -->
                    <div class="info-column col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <ul class="contact-list">
                                <li><span>E-mail:</span> example@company.com</li>
                                <li><span>Phone: </span> +000 000 0000</li>
                                <li><span>Timming:</span> 9:00am -5:00pm</li>
								<li class="clearfix">
									<a href="#" class="clearfix theme-btn btn-style-two"><span class="txt btn-txt">On Vacation</span></a>
									<span class="pull-right time">12:00pm -3:00pm</span>
								</li>
                            </ul>

                            <ul class="social-icon-one">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            </ul>

                            <div class="timetable">
                                <h3><small>Check Our</small> Weekly Timetable</h3>
                                <p>Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar. Vestibulum bib volutpat accumsan non laoreet nulla luctus...</p>
                                <ul>
                                    <li>Monday - Friday <span>8.00 - 18.00</span></li>
                                    <li>Saturday <span>9.00 - 16.00</span></li>
                                    <li>Sunday <span>9.00 - 16.00</span></li>
                                </ul>
                                <a href="#" class="theme-btn doctor-btn"><i class="fa fa-user-md"></i> See Doctors Time Table</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Doctor Detail Section -->
	
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
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
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
	
	<ul class="rtl-version option-box"> <li class="rtl">RTL Version</li> <li>LTR Version</li> </ul>

    <a href="#" class="purchase-btn">Purchase now $17</a>
    
    <div class="palate-foo">
        <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
    </div>

</div>

<!--Scroll to top-->
@include('web.layouts.script')
</body>
</html>