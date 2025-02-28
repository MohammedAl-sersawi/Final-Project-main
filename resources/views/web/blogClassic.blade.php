<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog Classic</title>
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
    <section class="page-title" style="background-image:url({{ asset('siteassets/images/background/blogCLS.jpg') }})">
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
					<div class="news-classic">
						
						<!-- News Block Two -->
						<div class="news-block-two style-two">
							<div class="inner-box">
								<div class="image">
									<a href="blog-detail.html"><img src="{{ asset('siteassets/images/background/20.jpg') }}" alt="" /></a>
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
										<h3><a href="blog-detail.html">Diagnostic Services for Efficient Results Picking Right </a></h3>
										<div class="text">There have been a lot of cases in which people were not provided with accurate reports that eventually affected their medical </div>
										<a href="blog-detail.html" class="theme-btn btn-style-five"><span class="txt">read more</span></a>
									</div>
								</div>
							</div>
						</div>
						
						<!-- News Block Two -->
						<div class="news-block-two style-two">
							<div class="inner-box">
								<div class="image">
									<a href="blog-detail.html"><img src="{{ asset('siteassets/images/background/22.jpg') }}" alt="" /></a>
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
										<h3><a href="blog-detail.html">Reasons to Visit for Heart Specialist for the Patient</a></h3>
										<div class="text">There have been a lot of cases in which people were not provided with accurate reports that eventually affected their medical </div>
										<a href="blog-detail.html" class="theme-btn btn-style-five"><span class="txt">read more</span></a>
									</div>
								</div>
							</div>
						</div>
						
						<!-- News Block Two -->
						<div class="news-block-two style-two">
							<div class="inner-box">
								<div class="image">
									<a href="blog-detail.html"><img src="{{ asset('siteassets/images/background/24.jpg') }}" alt="" /></a>
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
										<h3><a href="blog-detail.html">Preparing for an ECG Tips From Our Diagnosticians</a></h3>
										<div class="text">There have been a lot of cases in which people were not provided with accurate reports that eventually affected their medical </div>
										<a href="blog-detail.html" class="theme-btn btn-style-five"><span class="txt">read more</span></a>
									</div>
								</div>
							</div>
						</div>
						
						<!-- News Block Two -->
						<div class="news-block-two style-two">
							<div class="inner-box">
								<div class="image">
									<a href="blog-detail.html"><img src="{{ asset('siteassets/images/background/23.jpg') }}" alt="" /></a>
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
										<h3><a href="blog-detail.html">Diagnostic Services for Efficient Results Picking Right </a></h3>
										<div class="text">There have been a lot of cases in which people were not provided with accurate reports that eventually affected their medical </div>
										<a href="blog-detail.html" class="theme-btn btn-style-five"><span class="txt">read more</span></a>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Styled Pagination -->
						<div class="styled-pagination text-center">
							<ul class="inner-container clearfix">
								<li class="prev"><a href="#" class="active"><i class="flaticon-left-arrow"></i> Prev</a></li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li class="active"><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li class="next"><a href="#" class="active">Next <i class="flaticon-right-arrow-1"></i></a></li>
							</ul>
						</div>
						
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
                                    <div class="post-thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-1.jpg" alt=""></a></div>
                                    <h3><a href="blog-detail.html">Integrative Medicine And Cancer Treatment</a></h3>
                                    <span class="date">Dec. 20,  2017</span>
                                </article>
								
								<article class="post">
                                    <div class="post-thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-4.jpg" alt=""></a></div>
                                    <h3><a href="blog-detail.html">Achieving Better Health Care One Patient  Time</a></h3>
                                    <span class="date">Dec. 20,  2017</span>
                                </article>
								
								<article class="post">
                                    <div class="post-thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-5.jpg" alt=""></a></div>
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
                                    <a href="images/resource/news-1.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/gw-1.jpg" alt=""></a>
                                </figure>

                                <figure class="image">
                                    <a href="images/resource/news-2.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/gw-2.jpg" alt=""></a>
                                </figure>

                                <figure class="image">
                                    <a href="images/resource/news-3.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/gw-3.jpg" alt=""></a>
                                </figure>

                                <figure class="image">
                                    <a href="images/resource/news-4.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/gw-4.jpg" alt=""></a>
                                </figure>

                                <figure class="image">
                                    <a href="images/resource/news-5.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/gw-5.jpg" alt=""></a>
                                </figure>

                                <figure class="image">
                                    <a href="images/resource/news-6.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/gw-6.jpg" alt=""></a>
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