<!DOCTYPE html>
<html lang="en">
<head>
    <title>Department</title>
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
    <section class="page-title" style="background-image:url({{ asset('siteassets/images/background/departments.jpg') }})">
        <div class="auto-container">
            <h1>Departments of CareNet</h1>
			<div class="text">What We Actually Do?</div>
			<ul class="bread-crumb clearfix">
				<li><a href="{{ url('/') }}"><span class="fas fa-home"></span> Home </a></li>
				<li>Departments</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Department Section -->
	<section class="department-section">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>CareNet Health Plan</h2>
				<div class="separator"></div>
			</div>
			
			<div class="services-carousel owl-carousel owl-theme">
				
				<!-- Department Block -->
				<div class="department-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="icon flaticon-kidneys"></div>
							<h3><a href="#">Urology</a></h3>
						</div>
						<div class="text">Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, ornare ac, nonummy non, lobortis a, enim. </div>
						<div class="read-outer">
							<a href="#" class="read-more">Read More <span class="icon fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block -->
				<div class="department-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="icon flaticon-brain"></div>
							<h3><a href="#">Neurology</a></h3>
						</div>
						<div class="text">Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, ornare ac, nonummy non, lobortis a, enim. </div>
						<div class="read-outer">
							<a href="#" class="read-more">Read More <span class="icon fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block -->
				<div class="department-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="icon flaticon-kidneys"></div>
							<h3><a href="#">Gastrology</a></h3>
						</div>
						<div class="text">Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, ornare ac, nonummy non, lobortis a, enim. </div>
						<div class="read-outer">
							<a href="#" class="read-more">Read More <span class="icon fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block -->
				<div class="department-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="icon flaticon-kidneys"></div>
							<h3><a href="#">Urology</a></h3>
						</div>
						<div class="text">Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, ornare ac, nonummy non, lobortis a, enim. </div>
						<div class="read-outer">
							<a href="#" class="read-more">Read More <span class="icon fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block -->
				<div class="department-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="icon flaticon-brain"></div>
							<h3><a href="#">Neurology</a></h3>
						</div>
						<div class="text">Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, ornare ac, nonummy non, lobortis a, enim. </div>
						<div class="read-outer">
							<a href="#" class="read-more">Read More <span class="icon fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block -->
				<div class="department-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="icon flaticon-kidneys"></div>
							<h3><a href="#">Gastrology</a></h3>
						</div>
						<div class="text">Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, ornare ac, nonummy non, lobortis a, enim. </div>
						<div class="read-outer">
							<a href="#" class="read-more">Read More <span class="icon fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block -->
				<div class="department-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="icon flaticon-kidneys"></div>
							<h3><a href="#">Urology</a></h3>
						</div>
						<div class="text">Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, ornare ac, nonummy non, lobortis a, enim. </div>
						<div class="read-outer">
							<a href="#" class="read-more">Read More <span class="icon fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block -->
				<div class="department-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="icon flaticon-brain"></div>
							<h3><a href="#">Neurology</a></h3>
						</div>
						<div class="text">Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, ornare ac, nonummy non, lobortis a, enim. </div>
						<div class="read-outer">
							<a href="#" class="read-more">Read More <span class="icon fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block -->
				<div class="department-block">
					<div class="inner-box">
						<div class="upper-box">
							<div class="icon flaticon-kidneys"></div>
							<h3><a href="#">Gastrology</a></h3>
						</div>
						<div class="text">Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, ornare ac, nonummy non, lobortis a, enim. </div>
						<div class="read-outer">
							<a href="#" class="read-more">Read More <span class="icon fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Department Section -->
	
	<!-- Department Section Three -->
	<section class="department-section-three">
		<div class="image-layer" style="background-image:url(images/background/6.jpg)"></div>
		<div class="auto-container">
			<!-- Department Tabs-->
            <div class="department-tabs tabs-box">
				<div class="row clearfix">
                	<!--Column-->
                    <div class="col-lg-4 col-md-12 col-sm-12">
						<!-- Sec Title -->
						<div class="sec-title light">
							<h2>Health <br> Department</h2>
							<div class="separator"></div>
						</div>
                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#tab-urology" class="tab-btn">Urology Department</li>
                            <li data-tab="#tab-department" class="tab-btn active-btn">Neurology Department</li>
                            <li data-tab="#tab-gastrology" class="tab-btn">Gastrology Department</li>
							<li data-tab="#tab-cardiology" class="tab-btn">Cardiology Department</li>
							<li data-tab="#tab-eye" class="tab-btn">Eye Care Department</li>
                        </ul>
                    </div>
                    <!--Column-->
                    <div class="col-lg-8 col-md-12 col-sm-12">
                    	<!--Tabs Container-->
                        <div class="tabs-content">
                        
                            <!-- Tab -->
                            <div class="tab" id="tab-urology">
                            	<div class="content">
									<h2>Urology Department</h2>
									<div class="title">Department of Neurology</div>
									<div class="text">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
									</div>
									<div class="two-column row clearfix">
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<h3>01 - Neurology Service</h3>
											<div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
										</div>
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<h3>02 - Neurology Service</h3>
											<div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
										</div>
									</div>
									<a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
								</div>
							</div>
							
							<!-- Tab -->
                            <div class="tab active-tab" id="tab-department">
                            	<div class="content">
									<h2>Neurology Department</h2>
									<div class="title">Department of Neurology</div>
									<div class="text">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
									</div>
									<div class="two-column row clearfix">
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<h3>01 - Neurology Service</h3>
											<div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
										</div>
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<h3>02 - Neurology Service</h3>
											<div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
										</div>
									</div>
									<a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
								</div>
							</div>
							
							<!-- Tab -->
                            <div class="tab" id="tab-gastrology">
                            	<div class="content">
									<h2>Gastrology Department</h2>
									<div class="title">Department of Neurology</div>
									<div class="text">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
									</div>
									<div class="two-column row clearfix">
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<h3>01 - Neurology Service</h3>
											<div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
										</div>
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<h3>02 - Neurology Service</h3>
											<div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
										</div>
									</div>
									<a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
								</div>
							</div>
							
							<!-- Tab -->
                            <div class="tab" id="tab-cardiology">
                            	<div class="content">
									<h2>Cardiology Department</h2>
									<div class="title">Department of Neurology</div>
									<div class="text">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
									</div>
									<div class="two-column row clearfix">
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<h3>01 - Neurology Service</h3>
											<div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
										</div>
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<h3>02 - Neurology Service</h3>
											<div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
										</div>
									</div>
									<a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
								</div>
							</div>
							
							<!-- Tab -->
                            <div class="tab" id="tab-eye">
                            	<div class="content">
									<h2>Eye Care Department</h2>
									<div class="title">Department of Neurology</div>
									<div class="text">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
										<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
									</div>
									<div class="two-column row clearfix">
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<h3>01 - Neurology Service</h3>
											<div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
										</div>
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<h3>02 - Neurology Service</h3>
											<div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus</div>
										</div>
									</div>
									<a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<!-- End Department Section -->
	
	<!-- Department Section Two -->
	<section class="department-section-two style-two">
		<div class="auto-container">
			<div class="sec-title centered">
				<h2>CareNet Health Plan</h2>
				<div class="separator"></div>
			</div>
			
			<div class="three-item-carousel owl-carousel owl-theme">
				
				<!-- Department Block Two -->
				<div class="department-block-two">
					<div class="inner-box">
						<div class="image">
							<a href="blog-single.html"><img src="{{ asset('siteassets/images/background/50.jpg') }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="blog-single.html">Urology Depart</a></h3>
							<div class="text">Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, </div>
							<a href="blog-single.html" class="read-more">Read More <span class="arrow fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block Two -->
				<div class="department-block-two">
					<div class="inner-box">
						<div class="image">
							<a href="blog-single.html"><img src="{{ asset('siteassets/images/background/51.jpg') }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="blog-single.html">Neurology Depart</a></h3>
							<div class="text">Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, </div>
							<a href="blog-single.html" class="read-more">Read More <span class="arrow fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block Two -->
				<div class="department-block-two">
					<div class="inner-box">
						<div class="image">
							<a href="blog-single.html"><img src="{{ asset('siteassets/images/background/52.jpg') }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="blog-single.html">Gastrology Depart</a></h3>
							<div class="text">Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, </div>
							<a href="blog-single.html" class="read-more">Read More <span class="arrow fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block Two -->
				<div class="department-block-two">
					<div class="inner-box">
						<div class="image">
							<a href="blog-single.html"><img src="{{ asset('siteassets/images/background/50.jpg') }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="blog-single.html">Urology Depart</a></h3>
							<div class="text">Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, </div>
							<a href="blog-single.html" class="read-more">Read More <span class="arrow fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block Two -->
				<div class="department-block-two">
					<div class="inner-box">
						<div class="image">
							<a href="blog-single.html"><img src="{{ asset('siteassets/images/background/51.jpg') }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="blog-single.html">Neurology Depart</a></h3>
							<div class="text">Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, </div>
							<a href="blog-single.html" class="read-more">Read More <span class="arrow fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block Two -->
				<div class="department-block-two">
					<div class="inner-box">
						<div class="image">
							<a href="blog-single.html"><img src="{{ asset('siteassets/images/background/52.jpg') }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="blog-single.html">Gastrology Depart</a></h3>
							<div class="text">Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, </div>
							<a href="blog-single.html" class="read-more">Read More <span class="arrow fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block Two -->
				<div class="department-block-two">
					<div class="inner-box">
						<div class="image">
							<a href="blog-single.html"><img src="{{ asset('siteassets/images/background/50.jpg') }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="blog-single.html">Urology Depart</a></h3>
							<div class="text">Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, </div>
							<a href="blog-single.html" class="read-more">Read More <span class="arrow fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block Two -->
				<div class="department-block-two">
					<div class="inner-box">
						<div class="image">
							<a href="blog-single.html"><img src="{{ asset('siteassets/images/background/51.jpg') }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="blog-single.html">Neurology Depart</a></h3>
							<div class="text">Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, </div>
							<a href="blog-single.html" class="read-more">Read More <span class="arrow fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
				<!-- Department Block Two -->
				<div class="department-block-two">
					<div class="inner-box">
						<div class="image">
							<a href="blog-single.html"><img src="{{ asset('siteassets/images/background/52.jpg') }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="blog-single.html">Gastrology Depart</a></h3>
							<div class="text">Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, </div>
							<a href="blog-single.html" class="read-more">Read More <span class="arrow fas fa-angle-double-right"></span></a>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Department Section Two -->
	
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