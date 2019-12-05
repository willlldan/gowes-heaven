	<!-- Start Header Area -->
	<header class="header_area sticky-header">
	    <div class="main_menu">
	        <nav class="navbar navbar-expand-lg navbar-light main_box">
	            <div class="container">
	                <!-- Brand and toggle get grouped for better mobile display -->
	                <a class="navbar-brand logo_h" href="home"><img src="<?= base_url('assets/') ?>img/logo.png" alt=""></a>
	                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <!-- Collect the nav links, forms, and other content for toggling -->
	                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
	                    <ul class="nav navbar-nav menu_nav ml-auto">
	                        <li class="nav-item active"><a class="nav-link" href="home">Home</a></li>
	                        <li class="nav-item submenu dropdown">
	                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
	                            <ul class="dropdown-menu">
	                                <li class="nav-item"><a class="nav-link" href="#">Shop Category</a></li>
	                                <li class="nav-item"><a class="nav-link" href="#">Product Details</a></li>
	                                <li class="nav-item"><a class="nav-link" href="#">Product Checkout</a></li>
	                                <li class="nav-item"><a class="nav-link" href="#">Shopping Cart</a></li>
	                                <li class="nav-item"><a class="nav-link" href="#">Confirmation</a></li>
	                            </ul>
	                        </li>

	                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
	                    </ul>
	                    <ul class="nav navbar-nav navbar-right">
	                        <li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
	                        <li class="nav-item">
	                            <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	        </nav>
	    </div>
	    <div class="search_input" id="search_input_box">
	        <div class="container">
	            <form class="d-flex justify-content-between">
	                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
	                <button type="submit" class="btn"></button>
	                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
	            </form>
	        </div>
	    </div>
	</header>
	<!-- End Header Area -->

	<!-- start banner Area -->
	<section class="banner-area">
	    <div class="container">
	        <div class="row fullscreen align-items-center justify-content-start mt-5">
	            <div class="col-lg-12">
	                <div class="active-banner-slider owl-carousel">
	                    <!-- single-slide -->
	                    <div class="row single-slide align-items-center d-flex mt-5">
	                        <div class="col-lg-5 col-md-6">
	                            <div class="banner-content">
	                                <h1>United New <br>Collection!</h1>
	                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
	                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
	                                <div class="add-bag d-flex align-items-center">
	                                    <a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
	                                    <span class="add-text text-uppercase">Add to Bag</span>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-lg-7">
	                            <div class="banner-img">
	                                <img class="img-fluid" src="<?= base_url('assets/') ?>img/banner/banner-img.png" alt="">
	                            </div>
	                        </div>
	                    </div>
	                    <!-- single-slide -->
	                    <div class="row single-slide mt-5">
	                        <div class="col-lg-5">
	                            <div class="banner-content">
	                                <h1>United New <br>Collection!</h1>
	                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
	                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
	                                <div class="add-bag d-flex align-items-center">
	                                    <a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
	                                    <span class="add-text text-uppercase">Add to Bag</span>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-lg-7">
	                            <div class="banner-img">
	                                <img class="img-fluid" src="<?= base_url('assets/') ?>img/banner/banner-img.png" alt="">
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
	<!-- End banner Area -->