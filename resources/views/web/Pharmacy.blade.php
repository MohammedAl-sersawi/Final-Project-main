<!DOCTYPE html>
<html lang="en">
<head>
<title>Pharmacy</title>
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
    <section class="page-title" style="background-image:url({{ asset('siteassets/images/background/pharmacyy.jpg') }})">
        <div class="auto-container">
            <h1>Shoping Cart</h1>
			<div class="text">What We Actually Do?</div>
			<ul class="bread-crumb clearfix">
				<li><a href="index.html"><span class="fas fa-home"></span> Home </a></li>
				<li>Cart</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!--Cart Section-->
    <section class="cart-section">
        <div class="auto-container">

            <!--Cart Outer-->
            <div class="cart-outer">
                <div class="table-outer">
                    <table class="cart-table">
                        <thead class="cart-header">
                            <tr>
                                <th>Preview</th>
                                <th class="prod-column">product</th>
                                <th class="price">Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td class="prod-column">
                                    <div class="column-box">
                                        <figure class="prod-thumb"><a href="#"><img src="{{ asset('siteassets/images/background/omep.jpg') }}" alt=""></a></figure>
                                    </div>
                                </td>
                                <td><h4 class="prod-title">Patient Ninja</h4></td>
                                <td class="sub-total">$35.00</td>
                                <td class="qty"><div class="item-quantity style-two"><input class="quantity-spinner" type="text" value="2" name="quantity"></div></td>
                                <td class="total">$35.00</td>
                                <td><a href="#" class="remove-btn"><span class="fa fa-remove"></span></a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <div class="cart-options clearfix">
                    <div class="pull-left">
                        <div class="apply-coupon clearfix">
                            <div class="form-group clearfix">
                                <input type="text" name="coupon-code" value="" placeholder="Coupon Code">
                            </div>
                            <div class="form-group clearfix">
                                <button type="button" class="theme-btn coupon-btn">Apply Coupon</button>
                            </div>
                        </div>
                    </div>

                    <div class="pull-right">
                        <button type="button" class="theme-btn cart-btn btn-style-four">UPDATE CART</button>
                    </div>

                </div>

                <div class="row clearfix">
                    
                    <div class="column pull-left col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="shipping-block">
                            <div class="inner-box">
                                <h3>Shipping Free Shipping</h3>
                                <h4><a href="#">Calculate Shipping</a></h4>
                                
                                <!-- Shipping Form -->
                                <div class="shipping-form">
                                    <!--Shipping Form-->
                                    <form method="post" action="shop.html">
                                        <div class="form-group">
                                            <select>
                                            	<option>Pakistan</option>
                                                <option>USA</option>
                                                <option>China</option>
                                                <option>Germany</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="text" placeholder="State / county" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="text" placeholder="Postcode / ZIP" required>
                                        </div>
                                        <div class="form-group">
                                            <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">UPDATE TOTALS</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="column pull-right col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <!--Totals Table-->
                        <ul class="totals-table">
                            <li><h3>Cart Totals</h3></li>
                            <li class="clearfix total"><span class="col">Sub Total</span><span class="col price">$35.00</span></li>
                            <li class="clearfix total"><span class="col">Total</span><span class="col price">$35.00</span></li>
                            <li class="text-right"><button type="submit" class="theme-btn btn-style-four proceed-btn">Proceed to Checkout</button></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End Cart Section-->
	
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