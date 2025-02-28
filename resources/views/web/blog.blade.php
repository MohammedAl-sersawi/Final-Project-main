<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog</title>
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
            <h1>Latest New By CareNet</h1>
			<div class="text">What We Actually Do?</div>
			<ul class="bread-crumb clearfix">
				<li><a href="index.html"><span class="fas fa-home"></span> Home </a></li>
				<li>Latest News</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Blog Page Section -->
	<section class="blog-page-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- News Block Two -->
				<div class="news-block-two col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="blog-detail.html"><img src="{{ asset('siteassets/images/background/20.jpg') }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="content">
								<ul class="post-meta">
									<li>June 21, 2018 at 8:12pm</li>
									<li>Post By: Admin</li>
								</ul>
								<h3><a href="blog-detail.html">Diagnostic Services for Efficient Results Picking Right </a></h3>
								<div class="text">There are a lot of women that are unaware of the numerous risks associated with their health and eventually ignore the ...</div>
								<a href="blog-detail.html" class="theme-btn btn-style-five"><span class="txt">read more</span></a>
							</div>
						</div>
					</div>
				</div>
				
				<!-- News Block Two -->
				<div class="news-block-two col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="blog-detail.html"><img src="{{ asset('siteassets/images/background/21.jpg') }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="content">
								<ul class="post-info">
								</ul>
								<ul class="post-meta">
									<li>June 21, 2018 at 8:12pm</li>
									<li>Post By: Admin</li>
								</ul>
								<h3><a href="blog-detail.html">Reasons to Visit for Heart Specialist Department.</a></h3>
								<div class="text">There are a lot of women that are unaware of the numerous risks associated with their health and eventually ignore the ...</div>
								<a href="blog-detail.html" class="theme-btn btn-style-five"><span class="txt">read more</span></a>
							</div>
						</div>
					</div>
				</div>
				
				<!-- News Block Two -->
				<div class="news-block-two col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="blog-detail.html"><img src="{{ asset('siteassets/images/background/22.jpg') }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="content">
								<ul class="post-info">
								</ul>
								<ul class="post-meta">
									<li>June 21, 2018 at 8:12pm</li>
									<li>Post By: Admin</li>
								</ul>
								<h3><a href="blog-detail.html">Preparing for an ECG Tips From Our Diagnosticians</a></h3>
								<div class="text">There are a lot of women that are unaware of the numerous risks associated with their health and eventually ignore the ...</div>
								<a href="blog-detail.html" class="theme-btn btn-style-five"><span class="txt">read more</span></a>
							</div>
						</div>
					</div>
				</div>
				
				<!-- News Block Two -->
				<div class="news-block-two col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="blog-detail.html"><img src="{{ asset('siteassets/images/background/23.jpg') }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="content">
								<ul class="post-info">
								</ul>
								<ul class="post-meta">
									<li>June 21, 2018 at 8:12pm</li>
									<li>Post By: Admin</li>
								</ul>
								<h3><a href="blog-detail.html">Diagnostic Services for Efficient Results Picking Right </a></h3>
								<div class="text">There are a lot of women that are unaware of the numerous risks associated with their health and eventually ignore the ...</div>
								<a href="blog-detail.html" class="theme-btn btn-style-five"><span class="txt">read more</span></a>
							</div>
						</div>
					</div>
				</div>
				
				<!-- News Block Two -->
				<div class="news-block-two col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="blog-detail.html"><img src="{{ asset('siteassets/images/background/24.jpg') }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="content">
								<ul class="post-info">
								</ul>
								<ul class="post-meta">
									<li>June 21, 2018 at 8:12pm</li>
									<li>Post By: Admin</li>
								</ul>
								<h3><a href="blog-detail.html">Reasons to Visit for Heart Specialist Us Today.</a></h3>
								<div class="text">There are a lot of women that are unaware of the numerous risks associated with their health and eventually ignore the ...</div>
								<a href="blog-detail.html" class="theme-btn btn-style-five"><span class="txt">read more</span></a>
							</div>
						</div>
					</div>
				</div>
				
				<!-- News Block Two -->
				<div class="news-block-two col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="blog-detail.html"><img src="{{ asset('siteassets/images/background/23.jpg') }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="content">
								<ul class="post-info">
								</ul>
								<ul class="post-meta">
									<li>June 21, 2018 at 8:12pm</li>
									<li>Post By: Admin</li>
								</ul>
								<h3><a href="blog-detail.html">Preparing for an ECG Tips From Our Diagnosticians</a></h3>
								<div class="text">There are a lot of women that are unaware of the numerous risks associated with their health and eventually ignore the ...</div>
								<a href="blog-detail.html" class="theme-btn btn-style-five"><span class="txt">read more</span></a>
							</div>
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
	</section>
	<!-- End Portfolio Page Section -->
	
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