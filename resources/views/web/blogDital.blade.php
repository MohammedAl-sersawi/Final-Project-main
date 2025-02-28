<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog Detail</title>
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
    <section class="page-title" style="background-image:url({{ asset('siteassets/images/background/blogs.jpg') }})">
        <div class="auto-container">
            <h1>Latest New By MediTech</h1>
			<div class="text">What We Actually Do?</div>
			<ul class="bread-crumb clearfix">
				<li><a href="index.html"><span class="fas fa-home"></span> Home </a></li>
				<li>Latest News</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
					<div class="news-detail">
						<div class="inner-box">
							<div class="image">
								<img src="{{ asset('siteassets/images/background/20.jpg') }}" alt="" />
							</div>
							<div class="lower-content">
								<div class="content">
									<ul class="post-info">
										<li><span class="icon flaticon-chat-comment-oval-speech-bubble-with-text-lines"></span> 02</li>
										<li><span class="icon flaticon-heart"></span> 126</li>
									</ul>
									<ul class="post-meta">
										<li>June 21, 2018 at 8:12pm</li>
										<li>Post By: Admin</li>
									</ul>
									<h3>Diagnostic Services for Efficient Results Picking Right</h3>
									<div class="text">
										<p>There have been a lot of cases in which people were not provided with accurate reports that eventually affected their medical treatment. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										<p>There have been a lot of cases in which people were not provided with accurate reports that eventually affected their medical treatment. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										<blockquote>
											<div class="blockquote-text">sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
											<div class="quote-box"><span class="icon flaticon-quote"></span></div>
										</blockquote>
										<p>sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Other Options -->
                        <div class="post-share-options clearfix">
                            <div class="pull-right">
                                <p>Tags : </p>
                                <ul class="tags">
                                    <li><a href="#">Body Surgery,</a></li>
                                    <li><a href="#">Dental Care,</a></li>
                                    <li><a href="#">Eye Care</a>,</li>
                                </ul>                               
                            </div>
							<div class="pull-left">
                                <p>Shere : </p>
                                <ul class="social-icon">
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-dribbble"></span></a></li>
                                </ul>
                            </div>
                        </div>
						
						<!-- New Posts -->
						<div class="new-posts">
							<span class="grid-icon flaticon-menu-3"></span>
							<div class="clearfix">
								<div class="pull-left">
									<a href="#">Prev Post <span>Tips on Minimalist</span></a>
								</div>
								<div class="pull-right">
									<a href="#" class="next-post">Next Post <span>Tips on Minimalist</span></a>
								</div>
							</div>
						</div>
						
						<!-- Doctor Testimonial Block -->
						<div class="doctor-testimonial-boxed">
							<div class="inner-boxed">
								
								<div class="single-item-carousel owl-carousel owl-theme">
									
									<div class="doctor-block-two">
										<div class="inner-block">
											<div class="image">
												<img src="{{ asset('siteassets/images/background/30.jpg') }}" alt="" />
											</div>
											<h3>MD. Salim Rana</h3>
											<ul class="social-icon">
												<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
												<li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
												<li><a href="#"><span class="fab fa-twitter"></span></a></li>
												<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
												<li><a href="#"><span class="fab fa-dribbble"></span></a></li>
											</ul>
											<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequa aute irure dolor. </div>
											<div class="quote-icon flaticon-quote"></div>
										</div>
									</div>
									
									<div class="doctor-block-two">
										<div class="inner-block">
											<div class="image">
												<img src="images/resource/author-6.jpg" alt="" />
											</div>
											<h3>MD. Salim Rana</h3>
											<ul class="social-icon">
												<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
												<li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
												<li><a href="#"><span class="fab fa-twitter"></span></a></li>
												<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
												<li><a href="#"><span class="fab fa-dribbble"></span></a></li>
											</ul>
											<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequa aute irure dolor. </div>
											<div class="quote-icon flaticon-quote"></div>
										</div>
									</div>
									
									<div class="doctor-block-two">
										<div class="inner-block">
											<div class="image">
												<img src="images/resource/author-6.jpg" alt="" />
											</div>
											<h3>MD. Salim Rana</h3>
											<ul class="social-icon">
												<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
												<li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
												<li><a href="#"><span class="fab fa-twitter"></span></a></li>
												<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
												<li><a href="#"><span class="fab fa-dribbble"></span></a></li>
											</ul>
											<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequa aute irure dolor. </div>
											<div class="quote-icon flaticon-quote"></div>
										</div>
									</div>
									
								</div>
								
							</div>
						</div>
						
					</div>
					
					<!--Comments Area-->
                    <div class="comments-area">
                        
                        <div class="group-title">
                            <h2>Comments  02</h2>
                        </div>
                        
                        <!--Comment Box-->
                        <div class="comment-box">
                            <div class="comment">
                                <div class="author-thumb"><img src="{{ asset('siteassets/images/background/37.jpg') }}" alt=""></div>
                                <div class="comment-inner">
                                    <div class="comment-info clearfix"><strong>Paul Jones </strong> <div class="comment-time">August 29, 2018</div></div>
                                    <div class="text">Cosmic ocean science Tunguska event the only home we’ve ever known Orion’s sword, concept of the one billions upon billions paroxysm of global death.</div>
                                    <a class="comment-reply" href="#"><span class="fas fa-reply-all"></span>Reply</a>
                                </div>
                            </div>
                        </div>
                        
                        <!--Comment Box-->
                        <div class="comment-box reply-comment">
                            <div class="comment">
                                <div class="author-thumb"><img src="{{ asset('siteassets/images/background/38.jpg') }}" alt=""></div>
                                <div class="comment-inner">
                                    <div class="comment-info clearfix"><strong>Catherine Brown</strong> <div class="comment-time">August 29, 2017</div></div>
                                    <div class="text">Cosmic ocean science Tunguska event the only home we’ve ever known Orion’s of the one billions upon billions paroxysm of global death.</div>
                                    <a class="comment-reply" href="#"><span class="fas fa-reply-all"></span>Reply</a>
                                </div>
                            </div>
                        </div>
					
					</div>
					
					
					<!-- Comment Form -->
                    <div class="comment-form">
						
						<div class="group-title">
                            <h2>Leave a Reply</h2>
                        </div>
						
						<!-- Comment Form -->
						<div class="comment-form">
							<!-- Comment Form -->
							<form method="post" action="blog.html">
								<div class="row clearfix">
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<input type="text" name="username" placeholder="Full Name" required>
									</div>
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="email" name="email" placeholder="Email" required>
									</div>
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="text" name="subject" placeholder="Subject" required>
									</div>
									
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<textarea name="message" placeholder="Message"></textarea>
									</div>
									
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<button class="theme-btn comment-btn" type="submit" name="submit-form">Post Comments</button>
									</div>
									
								</div>
							</form>
								
						</div>
						<!--End Faq Form -->
						
					</div>

					
					
				</div>
				
				<!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar">
						
						<!-- Search -->
                        <div class="sidebar-widget search-box">
                        	<form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search..." required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div>
						
						<!--Category Blog-->
                        <div class="sidebar-widget categories-blog">
                        	<div class="sidebar-title">
                            	<h2>Best Categories</h2>
								<div class="separator"></div>
                            </div>
                            <ul>
								<li><a href="#">Body Surgery <span>05</span></a></li>
								<li><a href="#">Dental Care <span>12</span></a></li>
								<li><a href="#">Eye Care <span>35</span></a></li>
								<li><a href="#">Blood Cancer <span>25</span></a></li>
								<li><a href="#">Neurology Sargery <span>65</span></a></li>
								<li><a href="#">Health Care <span>12</span></a></li>
							</ul>
                        </div>
						
						<!-- Popular Posts -->
                        <div class="sidebar-widget popular-posts">
                        	<div class="sidebar-title">
                            	<h2>Recent Posts</h2>
								<div class="separator"></div>
                            </div>
							
							<div class="widget-content">
							
                                <article class="post">
                                    <div class="post-thumb"><a href="blog-detail.html"><img src="{{ asset('siteassets/images/background/f0.jpg') }}" alt=""></a></div>
                                    <h3><a href="blog-detail.html">Integrative Medicine And Cancer Treatment</a></h3>
                                    <span class="date">Dec. 20,  2017</span>
                                </article>
								
								<article class="post">
                                    <div class="post-thumb"><a href="blog-detail.html"><img src="{{ asset('siteassets/images/background/f1.jpg') }}" alt=""></a></div>
                                    <h3><a href="blog-detail.html">Achieving Better Health Care One Patient  Time</a></h3>
                                    <span class="date">Dec. 20,  2017</span>
                                </article>
								
								<article class="post">
                                    <div class="post-thumb"><a href="blog-detail.html"><img src="{{ asset('siteassets/images/background/f2.jpg') }}" alt=""></a></div>
                                    <h3><a href="blog-detail.html">Doctor Appointment for the Client to check up.</a></h3>
                                    <span class="date">Dec. 20,  2017</span>
                                </article>
								
							</div>
							
						</div>
						
						<!-- Archive Category -->
                        <div class="sidebar-widget categories-blog">
                        	<div class="sidebar-title">
                            	<h2>Archives</h2>
								<div class="separator"></div>
                            </div>
                            <ul>
								<li><a href="#">February 2019</a></li>
								<li><a href="#">January 2019</a></li>
								<li><a href="#">December 2018</a></li>
							</ul>
                        </div>
						
						<!-- Gallery Widget -->
                        <div class="sidebar-widget gallery-widget">
							<div class="sidebar-title">
                            	<h2>Gallery</h2>
								<div class="separator"></div>
                            </div>
                            <div class="gallery-outer clearfix">
                                <figure class="image">
                                    <a href="{{ asset('siteassets/images/background/31.jpg') }}" class="lightbox-image" title="Image Title Here"><img src="{{ asset('siteassets/images/background/31.jpg') }}" alt=""></a>
                                </figure>

                                <figure class="image">
                                    <a href="{{ asset('siteassets/images/background/32.jpg') }}" class="lightbox-image" title="Image Title Here"><img src="{{ asset('siteassets/images/background/32.jpg') }}" alt=""></a>
                                </figure>

                                <figure class="image">
                                    <a href="{{ asset('siteassets/images/background/33.jpg') }}" class="lightbox-image" title="Image Title Here"><img src="{{ asset('siteassets/images/background/33.jpg') }}" alt=""></a>
                                </figure>

                                <figure class="image">
                                    <a href="{{ asset('siteassets/images/background/34.jpg') }}" class="lightbox-image" title="Image Title Here"><img src="{{ asset('siteassets/images/background/34.jpg') }}" alt=""></a>
                                </figure>

                                <figure class="image">
                                    <a href="{{ asset('siteassets/images/background/35.jpg') }}" class="lightbox-image" title="Image Title Here"><img src="{{ asset('siteassets/images/background/35.jpg') }}" alt=""></a>
                                </figure>

                                <figure class="image">
                                    <a href="{{ asset('siteassets/images/background/36.jpg') }}" class="lightbox-image" title="Image Title Here"><img src="{{ asset('siteassets/images/background/36.jpg') }}" alt=""></a>
                                </figure>
                            </div>
                        </div>
						
						<!-- Tags -->
                        <div class="sidebar-widget tags">
                            <div class="sidebar-title">
                            	<h2>Cool Tags</h2>
								<div class="separator"></div>
                            </div>
                            <ul class="tag-list clearfix">
                                <li><a href="#">Blood</a></li>
                                <li><a href="#">Eye Care</a></li>
                                <li><a href="#">Care</a></li>
                                <li><a href="#">Body Surgery</a></li>
                                <li><a href="#">Dental</a></li>
                                <li><a href="#">Diabetes</a></li>
                                <li><a href="#">Appointment</a></li>
                            </ul>
                        </div>
						
					</aside>
				</div>
				
			</div>
		</div>
	</div>
	
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