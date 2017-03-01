<?php 

class plantilla{
	static $instancia = null;
	
	static function start($inicio = false){
		self::$instancia = new plantilla($inicio);
	}
  
	function __construct($inicio){
?>
		<!DOCTYPE html>
	<!--[if IE 8]><html class="ie ie8"> <![endif]-->
	<!--[if IE 9]><html class="ie ie9"> <![endif]-->
	<!--[if gt IE 9]><!-->
	<html>
	<!--<![endif]-->

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="template, tour template, city tours, city tour, tours tickets, transfers, travel, travel template" />
		<meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
		<meta name="author" content="Ansonika">
		<title>MIRA tickets.com | Experiencias que disfrutar</title>

		<!-- Favicons-->
		<link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('base/tema'); ?>/img/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('base/tema'); ?>/img/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('base/tema'); ?>/img/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('base/tema'); ?>/img/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('base/tema'); ?>/img/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('base/tema'); ?>/img/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('base/tema'); ?>/img/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('base/tema'); ?>/img/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url('base/tema'); ?>//android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('base/tema'); ?>/img/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('base/tema'); ?>/img/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('base/tema'); ?>/img/favicon-16x16.png">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<link href="<?php echo base_url('base/tema'); ?>/css/base.css" rel="stylesheet">	
		<!-- BASE CSS 
	   
		
		<link href="<?php echo base_url('base/tema'); ?>/css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo base_url('base/tema'); ?>/css/animate.min.css" rel="stylesheet">
		<link href="<?php echo base_url('base/tema'); ?>/css/menu.css" rel="stylesheet">
		<link href="<?php echo base_url('base/tema'); ?>/css/responsive.css" rel="stylesheet">
		<link href="<?php echo base_url('base/tema'); ?>/css/fontello/css/icon_set_1.css" rel="stylesheet">
		<link href="<?php echo base_url('base/tema'); ?>/css/fontello/css/icon_set_2.css" rel="stylesheet">
		<link href="<?php echo base_url('base/tema'); ?>/css/fontello/css/fontello.css" rel="stylesheet">
		<link href="<?php echo base_url('base/tema'); ?>/css/icon_restaurant/css/icon_restaurants.css" rel="stylesheet">
		<link href="<?php echo base_url('base/tema'); ?>/css/magnific-popup.css" rel="stylesheet">
		<link href="<?php echo base_url('base/tema'); ?>/css/pop_up.css" rel="stylesheet">-->

		<!-- Google web fonts -->
	   <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	   <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
	   <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>

		<!-- REVOLUTION SLIDER CSS -->
		<link href="<?php echo base_url('base/tema'); ?>/rs-plugin/css/settings.css" rel="stylesheet">
		<link href="<?php echo base_url('base/tema'); ?>/css/extralayers.css" rel="stylesheet">

		<!--[if lt IE 9]>
		  <script src="js/html5shiv.min.js"></script>
		  <script src="js/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>

	<!--[if lte IE 8]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
	<![endif]-->

		<div id="preloader">
			<div class="sk-spinner sk-spinner-wave">
				<div class="sk-rect1"></div>
				<div class="sk-rect2"></div>
				<div class="sk-rect3"></div>
				<div class="sk-rect4"></div>
				<div class="sk-rect5"></div>
			</div>
		</div>
		<!-- End Preload -->

		<div class="layer"></div>
		<!-- Mobile menu overlay mask -->

		<!-- Header================================================== -->
		<header>
			 <div id="top_line">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6"><i class="icon-phone"></i><strong>+809 555 4585</strong></div>
						
						<div class="col-md-6 col-sm-6 col-xs-6">
							<ul id="top_links">
								<li>
									<div class="dropdown dropdown-access">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="access_link">Iniciar Sesión</a>
										<div class="dropdown-menu">
											<div class="row">
												<div class="col-md-6 col-sm-6 col-xs-6">
													<a href="#" class="bt_facebook">
														<i class="icon-facebook"></i>Facebook </a>
												</div>
												<div class="col-md-6 col-sm-6 col-xs-6">
													<a href="#" class="bt_paypal">
														<i class="icon-paypal"></i>Paypal </a>
												</div>
											</div>
											<div class="login-or">
												<hr class="hr-or">
												<span class="span-or">O</span>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="inputUsernameEmail" placeholder="Email">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" id="inputPassword" placeholder="Contraseña">
											</div>
											<a id="forgot_pw" href="#">Olvido la contraseña?</a>
											<input type="submit" name="Sign_in" value="Iniciar Sesión" id="Sign_in" class="button_drop">
											<input type="submit" name="Sign_up" value="Registrarse" id="Sign_up" class="button_drop outline">
										</div>
									</div><!-- End Dropdown access -->
								</li>
							   
							</ul>
						</div>
					</div><!-- End row -->
				</div><!-- End container-->
			</div><!-- End top line-->
			
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-3">
						 <div id="logo">
							<a href="index_2.html"><img src="<?php echo base_url('base/tema'); ?>/img/logo.png" width="160" height="34" alt="Mira Tickets" data-retina="true" class="logo_normal"></a>
							<a href="index_2.html"><img src="<?php echo base_url('base/tema'); ?>/img/logo_sticky.png" width="160" height="34" alt="Mira Tickets" data-retina="true" class="logo_sticky"></a>
						</div>
					</div>
					<nav class="col-md-9 col-sm-9 col-xs-9">
						<a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
						<div class="main-menu">
							<div id="header_menu">
								<img src="<?php echo base_url('base/tema'); ?>/img/logo_sticky.png" width="160" height="34" alt="City tours" data-retina="true">
							</div>
							<a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
							<ul>
								
								<il><a href="#" class="btn_1 Small" style="float: right;  margin-right: 150px; line-height: 1.5;">Crea tu Evento </a>
								
								
								</il>
						   
								
							</ul>
						</div><!-- End main-menu -->
						<ul id="top_tools">
							<li>
								<div class="dropdown dropdown-search">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search"></i></a>
									<div class="dropdown-menu">
										<form>
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Buscar...">
												<span class="input-group-btn">
												<button class="btn btn-default" type="button" style="margin-left:0;">
												<i class="icon-search"></i>
												</button>
												</span>
											</div>
										</form>
									</div>
								</div>
							</li>
							<li>
								<div class="dropdown dropdown-cart">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class=" icon-basket-1"></i>Carrito (0) </a>
									<ul class="dropdown-menu" id="cart_items">
										<li>
											<div class="image"><img src="<?php echo base_url('base/tema'); ?>/img/thumb_cart_1.jpg" alt=""></div>
											<strong>
											<a href="#">Colour Vibe</a>1x $36.00 </strong>
											<a href="#" class="action"><i class="icon-trash"></i></a>
										</li>
										<li>
											<div class="image"><img src="<?php echo base_url('base/tema'); ?>/img/thumb_cart_2.jpg" alt=""></div>
											<strong>
											<a href="#">Jazz Santo Domingo</a>2x $36.00 </strong>
											<a href="#" class="action"><i class="icon-trash"></i></a>
										</li>
										<li>
											<div class="image"><img src="<?php echo base_url('base/tema'); ?>/img/thumb_cart_3.jpg" alt=""></div>
											<strong>
											<a href="#">Superate!r</a>1x $36.00 </strong>
											<a href="#" class="action"><i class="icon-trash"></i></a>
										</li>
										<li>
											<div>Total: <span>$120.00</span></div>
											<a href="cart.html" class="button_drop">Carrito</a>
											<a href="payment.html" class="button_drop outline">Pagar</a>
										</li>
									</ul>
								</div><!-- End dropdown-cart-->
							</li>
						</ul>
					</nav>
				</div>
			</div><!-- container -->
		</header><!-- End Header -->
		
	<?php
		if($inicio){
	?>
	<!-- Slider -->
		<div class="tp-banner-container">
			<div class="tp-banner">
				<ul>
					<!-- SLIDE  -->
					<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
						<!-- MAIN IMAGE -->
						<img src="<?php echo base_url('base/tema'); ?>/img/slides_bg/dummy.png" alt="slidebg1" data-lazyload="<?php echo base_url('base/tema'); ?>/img/slides_bg/slide_1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
						<!-- LAYER NR. 1 -->
						<div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Colour Vibe Santo Domingo
						</div>
						<!-- LAYER NR. 2 -->
						<div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
							<div style="color:#ffffff; font-size:16px; text-transform:uppercase">
								Jardin Botanico | 25 Febrero 7:00 PM</div>
						</div>
						<!-- LAYER NR. 3 -->
						<div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;"><span class="price"><sup>RD$</sup>39</span><a href='single_tour.html' class="button_intro">Comprar Entrada</a> 
						</div>
					</li>
					 <!-- SLIDE  -->
					<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
						<!-- MAIN IMAGE -->
						<img src="<?php echo base_url('base/tema'); ?>/img/slides_bg/dummy.png" alt="slidebg1" data-lazyload="<?php echo base_url('base/tema'); ?>/img/slides_bg/slide_4.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
						<!-- LAYER NR. 1 -->
						<div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">More than 100 tours available
						</div>
						<!-- LAYER NR. 2 -->
						<div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
							<div style="color:#ffffff; font-size:16px; text-transform:uppercase">
								Historic Buildings / Open Bus Tours / Museums Guides</div>
						</div>
						<!-- LAYER NR. 3 -->
						<div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;"><a href='all_tour_list.html' class="button_intro">View tours</a> <a href='single_tour.html' class=" button_intro outline">Read more</a>
						</div>
					</li>
					
					<!-- SLIDE  -->
					<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
						<!-- MAIN IMAGE -->
						<img src="<?php echo base_url('base/tema'); ?>/img/slides_bg/dummy.png" alt="slidebg1" data-lazyload="<?php echo base_url('base/tema'); ?>/img/slides_bg/slide_6.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
						<!-- LAYER NR. 1 -->
						<div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Discover fantastic places
						</div>
						<!-- LAYER NR. 2 -->
						<div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
							<div style="color:#ffffff; font-size:16px; text-transform:uppercase">
								We offer a variety of services and options</div>
						</div>
						<!-- LAYER NR. 3 -->
						<div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;"><a href='all_tour_list.html' class="button_intro">View tours</a> <a href='single_tour.html' class=" button_intro outline">Read more</a>
						</div>
					</li>
					
					<!-- SLIDE  -->
					<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
						<!-- MAIN IMAGE -->
						<img src="<?php echo base_url('base/tema'); ?>/img/slides_bg/dummy.png" alt="slidebg1" data-lazyload="<?php echo base_url('base/tema'); ?>/img/slides_bg/slide_5.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
						<!-- LAYER NR. 1 -->
						<div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">CityTours provides tour guides
						</div>
						<!-- LAYER NR. 2 -->
						<div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
							<div style="color:#ffffff; font-size:16px; text-transform:uppercase">
								Visit museum with a dedicated tour guide</div>
						</div>
						<!-- LAYER NR. 3 -->
						<div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;"><a href='all_tour_list.html' class="button_intro">View tours</a> <a href='single_tour.html' class=" button_intro outline">Read more</a>
						</div>
					</li>


				</ul>
				<div class="tp-bannertimer tp-bottom"></div>
			</div>

		</div>
		
		<!-- End Slider -->
		<section>
			 <div id="search_bar_container">
						<div class="container">
								<div class="search_bar">
								<span class="nav-facade-active" id="nav-search-in">
								<span id="nav-search-in-content" style="">Categorias</span>
								<span class="nav-down-arrow nav-sprite"></span>
								<select title="Search in" class="searchSelect" id="searchDropdownBox" name="tours_category">
									<option value="All Tours"  title="All Tours">Todas las Categorias</option>
									<option value="Museums" title="Museums">Musica</option>
									<option value="Tickets" title="Tickets">Deportes</option>
									<option value="Hotels" title="Hotels">Arte</option>
									<option value="Restaurants" title="Restaurants">Fiestas</option>
									<option value="Restaurants" title="Restaurants">Clases</option>
								</select>
								</span>
								<div class="nav-searchfield-outer">
									<input type="text" autocomplete="off" name="field-keywords" placeholder="Busca tu evento ...." id="twotabsearchtextbox">
								</div>
								<div class="nav-submit-button">
									<input type="submit" title="Cerca" class="nav-submit-input" value="Search">
								</div>
							</div><!-- End search bar-->
						</div>
					</div><!-- /search_bar-->
	</section><!-- End hero -->  
	<?php
		}else{
			?>
			<section class="parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url('base/tema'); ?>/img/single_tour_bg_1.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h1>Colour Vibe</h1>
                    <span>Jardin Botanico | 25 Febrero 8:00 AM</span>
                    <span class="rating"><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small></span>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div id="price_single_main">
                        desde/por persona <span><sup>RD$</sup>52</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section><!-- End section -->
	<div id="position">
            <div class="container">
                        <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Categoria</a></li>
                        <li>Colour Vibe</li>
                        </ul>
            </div>
    </div><!-- End Position -->
			<?php
		}
	?>
	
	


    <div class="container margin_60">
<?php 
	}
	
	function __destruct(){
?>
		</div><!-- End container -->
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3">
                    <h3>Ayuda?</h3>
                    <a href="tel://004542344599" id="phone">+809 532 2866</a>
                    <a href="mailto:ayuda@miratickets.com" id="email_footer">ayuda@miratickets.com</a>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="#">Ayuda</a></li>
                        <li><a href="#">Iniciar Sesion</a></li>
                        <li><a href="#">Registrarse</a></li>
                         <li><a href="#">Terminos y condiciones</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h3>Descubre</h3>
                    <ul>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Eventos</a></li>
                        
                         <li><a href="#">Gallery</a></li>
                    </ul>
                </div>
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-google"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-pinterest"></i></a></li>
                            <li><a href="#"><i class="icon-vimeo"></i></a></li>
                            <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        </ul>
                        <p>© MiraTickets 2016</p>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer><!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

    <!-- Common scripts -->
    <script src="<?php echo base_url('base/tema'); ?>/js/jquery-1.11.2.min.js"></script>
    <script src="<?php echo base_url('base/tema'); ?>/js/common_scripts_min.js"></script>
    <script src="<?php echo base_url('base/tema'); ?>/js/functions.js"></script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="<?php echo base_url('base/tema'); ?>/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo base_url('base/tema'); ?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?php echo base_url('base/tema'); ?>/js/revolution_func.js"></script>
</body>
</html>
<?php 
	}
}