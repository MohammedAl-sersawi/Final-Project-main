<!DOCTYPE html>
<html lang="en">
<head>
<title>Faq</title>
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
    <section class="page-title" style="background-image:url(images/background/7.jpg);">
        <div class="auto-container">
            <h1>Faq’s For MediTech</h1>
			<div class="text">What We Actually Do?</div>
			<ul class="bread-crumb clearfix">
				<li><a href="index.html"><span class="fas fa-home"></span> Home </a></li>
				<li>Faq’s</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Faq Page Section -->
	<section class="faq-page-section">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Frequently Ask Question <br> Get Every Single Answers There.</h2>
				<div class="separator"></div>
			</div>
			
			<!-- Faq Info Tabs-->
			<div class="faq-info-tabs">
				<!-- Faq Tabs -->
				<div class="faq-tabs tabs-box">
				
					<!--Tab Btns-->
					<ul class="tab-btns tab-buttons clearfix">
						<li data-tab="#prod-general" class="tab-btn active-btn">General</li>
						<li data-tab="#prod-urgent" class="tab-btn">Urgent</li>
					</ul>
					
					<!--Tabs Container-->
					<div class="tabs-content">
						
						<!--Tab / Active Tab-->
						<div class="tab active-tab" id="prod-general">
							<div class="content">
							
								<div class="row clearfix">
									
									<div class="column col-lg-6 col-md-12 col-sm-12">
										<!--Accordian Box-->
										<ul class="accordion-box">
											
											<!--Block-->
											<li class="accordion block">
												<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-add"></span> <span class="icon icon-minus fas fa-minus"></span></div>Can I use my doctor or any other doctor I choose?</div>
												<div class="acc-content">
													<div class="content">
														<div class="text">No, just your Primary Care Physician (PCP). However, if you regularly see a specialist, register that doctor. If you have a medical event and see several doctors, you don't need to register these doctors. Just register the Medical Event.</div>
													</div>
												</div>
											</li>
					
											<!--Block-->
											<li class="accordion block">
												<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-add"></span> <span class="icon icon-minus fas fa-minus"></span></div>How are my medical bills paid?</div>
												<div class="acc-content">
													<div class="content">
														<div class="text">No, just your Primary Care Physician (PCP). However, if you regularly see a specialist, register that doctor. If you have a medical event and see several doctors, you don't need to register these doctors. Just register the Medical Event.</div>
													</div>
												</div>
											</li>
											
											<!--Block-->
											<li class="accordion block active-block">
												<div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus flaticon-add"></span> <span class="icon icon-minus fas fa-minus"></span></div>Do I need to register every doctor I go to?</div>
												<div class="acc-content current">
													<div class="content">
														<div class="text">No, just your Primary Care Physician (PCP). However, if you regularly see a specialist, register that doctor. If you have a medical event and see several doctors, you don't need to register these doctors. Just register the Medical Event.</div>
													</div>
												</div>
											</li>
											
											<!--Block-->
											<li class="accordion block">
												<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-add"></span> <span class="icon icon-minus fas fa-minus"></span></div>What should I do when I go to the doctor's office?</div>
												<div class="acc-content">
													<div class="content">
														<div class="text">No, just your Primary Care Physician (PCP). However, if you regularly see a specialist, register that doctor. If you have a medical event and see several doctors, you don't need to register these doctors. Just register the Medical Event.</div>
													</div>
												</div>
											</li>
										
										</ul>
									</div>
									
									<div class="column col-lg-6 col-md-12 col-sm-12">
										
										<!--Accordian Box-->
										<ul class="accordion-box">
											
											<!--Block-->
											<li class="accordion block">
												<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-add"></span> <span class="icon icon-minus fas fa-minus"></span></div>How much will my hospital stay cost?</div>
												<div class="acc-content">
													<div class="content">
														<div class="text">No, just your Primary Care Physician (PCP). However, if you regularly see a specialist, register that doctor. If you have a medical event and see several doctors, you don't need to register these doctors. Just register the Medical Event.</div>
													</div>
												</div>
											</li>
					
											<!--Block-->
											<li class="accordion block">
												<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-add"></span> <span class="icon icon-minus fas fa-minus"></span></div>Can I choose my class of ward?</div>
												<div class="acc-content">
													<div class="content">
														<div class="text">No, just your Primary Care Physician (PCP). However, if you regularly see a specialist, register that doctor. If you have a medical event and see several doctors, you don't need to register these doctors. Just register the Medical Event.</div>
													</div>
												</div>
											</li>
											
											<!--Block-->
											<li class="accordion block">
												<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-add"></span> <span class="icon icon-minus fas fa-minus"></span></div>What is a Patient Centered Medical Home?</div>
												<div class="acc-content">
													<div class="content">
														<div class="text">No, just your Primary Care Physician (PCP). However, if you regularly see a specialist, register that doctor. If you have a medical event and see several doctors, you don't need to register these doctors. Just register the Medical Event.</div>
													</div>
												</div>
											</li>
											
											<!--Block-->
											<li class="accordion block">
												<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-add"></span> <span class="icon icon-minus fas fa-minus"></span></div>Why hospitals do not allow return medication?</div>
												<div class="acc-content">
													<div class="content">
														<div class="text">No, just your Primary Care Physician (PCP). However, if you regularly see a specialist, register that doctor. If you have a medical event and see several doctors, you don't need to register these doctors. Just register the Medical Event.</div>
													</div>
												</div>
											</li>
											
											<!--Block-->
											<li class="accordion block">
												<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-add"></span> <span class="icon icon-minus fas fa-minus"></span></div>How are my medical bills paid?</div>
												<div class="acc-content">
													<div class="content">
														<div class="text">No, just your Primary Care Physician (PCP). However, if you regularly see a specialist, register that doctor. If you have a medical event and see several doctors, you don't need to register these doctors. Just register the Medical Event.</div>
													</div>
												</div>
											</li>
										
										</ul>
										
									</div>
									
								</div>
								
							</div>
						</div>
						
						<!--Tab-->
                        <div class="tab" id="prod-urgent">
							<div class="content">
								
								<div class="row clearfix">
									
									<div class="column col-lg-6 col-md-12 col-sm-12">
										<!--Accordian Box-->
										<ul class="accordion-box">
											
											<!--Block-->
											<li class="accordion block">
												<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-add"></span> <span class="icon icon-minus fas fa-minus"></span></div>Can I use my doctor or any other doctor I choose?</div>
												<div class="acc-content">
													<div class="content">
														<div class="text">No, just your Primary Care Physician (PCP). However, if you regularly see a specialist, register that doctor. If you have a medical event and see several doctors, you don't need to register these doctors. Just register the Medical Event.</div>
													</div>
												</div>
											</li>
					
											<!--Block-->
											<li class="accordion block">
												<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-add"></span> <span class="icon icon-minus fas fa-minus"></span></div>How are my medical bills paid?</div>
												<div class="acc-content">
													<div class="content">
														<div class="text">No, just your Primary Care Physician (PCP). However, if you regularly see a specialist, register that doctor. If you have a medical event and see several doctors, you don't need to register these doctors. Just register the Medical Event.</div>
													</div>
												</div>
											</li>
											
											<!--Block-->
											<li class="accordion block active-block">
												<div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus flaticon-add"></span> <span class="icon icon-minus fas fa-minus"></span></div>Do I need to register every doctor I go to?</div>
												<div class="acc-content current">
													<div class="content">
														<div class="text">No, just your Primary Care Physician (PCP). However, if you regularly see a specialist, register that doctor. If you have a medical event and see several doctors, you don't need to register these doctors. Just register the Medical Event.</div>
													</div>
												</div>
											</li>
											
											<!--Block-->
											<li class="accordion block">
												<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-add"></span> <span class="icon icon-minus fas fa-minus"></span></div>What should I do when I go to the doctor's office?</div>
												<div class="acc-content">
													<div class="content">
														<div class="text">No, just your Primary Care Physician (PCP). However, if you regularly see a specialist, register that doctor. If you have a medical event and see several doctors, you don't need to register these doctors. Just register the Medical Event.</div>
													</div>
												</div>
											</li>
										
										</ul>
									</div>
									
									<div class="column col-lg-6 col-md-12 col-sm-12">
										
										<!--Accordian Box-->
										<ul class="accordion-box">
											
											<!--Block-->
											<li class="accordion block">
												<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-add"></span> <span class="icon icon-minus fas fa-minus"></span></div>How much will my hospital stay cost?</div>
												<div class="acc-content">
													<div class="content">
														<div class="text">No, just your Primary Care Physician (PCP). However, if you regularly see a specialist, register that doctor. If you have a medical event and see several doctors, you don't need to register these doctors. Just register the Medical Event.</div>
													</div>
												</div>
											</li>
					
											<!--Block-->
											<li class="accordion block">
												<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-add"></span> <span class="icon icon-minus fas fa-minus"></span></div>Can I choose my class of ward?</div>
												<div class="acc-content">
													<div class="content">
														<div class="text">No, just your Primary Care Physician (PCP). However, if you regularly see a specialist, register that doctor. If you have a medical event and see several doctors, you don't need to register these doctors. Just register the Medical Event.</div>
													</div>
												</div>
											</li>
											
											<!--Block-->
											<li class="accordion block">
												<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-add"></span> <span class="icon icon-minus fas fa-minus"></span></div>What is a Patient Centered Medical Home?</div>
												<div class="acc-content">
													<div class="content">
														<div class="text">No, just your Primary Care Physician (PCP). However, if you regularly see a specialist, register that doctor. If you have a medical event and see several doctors, you don't need to register these doctors. Just register the Medical Event.</div>
													</div>
												</div>
											</li>
											
											<!--Block-->
											<li class="accordion block">
												<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-add"></span> <span class="icon icon-minus fas fa-minus"></span></div>Why hospitals do not allow return medication?</div>
												<div class="acc-content">
													<div class="content">
														<div class="text">No, just your Primary Care Physician (PCP). However, if you regularly see a specialist, register that doctor. If you have a medical event and see several doctors, you don't need to register these doctors. Just register the Medical Event.</div>
													</div>
												</div>
											</li>
											
											<!--Block-->
											<li class="accordion block">
												<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-add"></span> <span class="icon icon-minus fas fa-minus"></span></div>How are my medical bills paid?</div>
												<div class="acc-content">
													<div class="content">
														<div class="text">No, just your Primary Care Physician (PCP). However, if you regularly see a specialist, register that doctor. If you have a medical event and see several doctors, you don't need to register these doctors. Just register the Medical Event.</div>
													</div>
												</div>
											</li>
										
										</ul>
										
									</div>
									
								</div>
								
							</div>
						</div>
						
					</div>
					
				</div>
			</div>
			
		</div>
	</section>
	<!-- End Faq Page Section -->
	
	<!-- Faq Form Section -->
	<section class="faq-form-section">
		<div class="auto-container">
			<div class="sec-title centered">
				<h2>Ask Your Question</h2>
				<div class="separator"></div>
			</div>
			
			<!-- Faq Form -->
			<div class="faq-form">
				
				<!--Faq Form-->
				<form method="post" action="blog.html">
					<div class="row clearfix">
						<div class="col-lg-6 col-md-6 col-sm-12 form-group">
							<input type="text" name="username" placeholder="Name" required>
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-12 form-group">
							<input type="email" name="email" placeholder="Email" required>
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-12 form-group">
							<input type="text" name="phone" placeholder="Phone" required>
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-12 form-group">
							<input type="text" name="department" placeholder="Department" required>
						</div>
						
						<div class="col-lg-12 col-md-12 col-sm-12 form-group">
							<textarea name="message" placeholder="Your Question"></textarea>
						</div>
						
						<div class="col-lg-12 col-md-12 col-sm-12 text-center form-group">
							<button class="theme-btn btn-style-two" type="submit" name="submit-form"><span class="txt">Ask A Question</span></button>
						</div>
						
					</div>
				</form>
				
				<!--End Faq Form -->
				
			</div>
			
		</div>
	</section>
	<!-- End Faq Form Section -->
	
	<!-- Newsletter Section -->
	<section class="newsletter-section style-two">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Title Column -->
				<div class="title-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2>Subscribe Our Newsletter</h2>
						<div class="text">To receive email releases, simply provide us with your email address below.</div>
					</div>
				</div>
				<!-- Form Column -->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Subscribe Form -->
						<div class="subscribe-form">
							<form method="post" action="contact.html">
								<div class="form-group">
									<input type="email" name="email" value="" placeholder="Your Email Address" required>
									<button type="submit" class="theme-btn btn-style-two">subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Newsletter Section -->
	
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