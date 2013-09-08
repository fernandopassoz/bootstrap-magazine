<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width; initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="" />
<meta name="author" content="Fernando" />

<link rel="shortcut icon" href="/favicon.ico" />
<link rel="apple-touch-icon" href="/apple-touch-icon.png" />

<link href="<?php echo content_url(); ?>/themes/bootstrap-magazine/css/bootstrap-mine.css" rel="stylesheet" media="screen">
<link href="<?php echo content_url(); ?>/themes/bootstrap-magazine/css/css/bootstrap-responsive.css" rel="stylesheet"
	media="screen">
<script type="text/javascript" src="<?php echo content_url(); ?>/themes/bootstrap-magazine/js/holder.js"></script>
<script type="text/javascript" src="<?php echo content_url(); ?>/themes/bootstrap-magazine/js/respond.min.js"></script>

<title><?php wp_title(' | ', true, 'right'); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<script src="<?php echo content_url(); ?>/themes/bootstrap-magazine/js/jquery-2.0.3.min.js"></script>
<script src="<?php echo content_url(); ?>/themes/bootstrap-magazine/js/bootstrap.min.js"></script>
<div id="wrapper" class="hfeed">
	<header id="header" role="banner">

 		<div id="header" class="container">
			<div class="row">
				<div id="logo" class="col-md-3">

					<a href="<?php echo site_url(); ?>"><img src="<?php echo content_url(); ?>/themes/bootstrap-magazine/images/logo.jpg" /></a>
				</div>
				<div id="main-banner" class="col-md-5">
					<img src="<?php echo content_url(); ?>/themes/bootstrap-magazine/js/holder.js/468x60" class="img-responsive"></img>
				</div>
				<form class="col-md-4" role="search">
					<div id="row">

					<div class="form-group col-md-7">
						<input type="text" class="form-control" placeholder="O que você quer buscar?"
							size="14">
					</div>
					<button type="submit" class="btn btn-default col-md-5">PROCURAR</button>
					</div>
				</form>
			</div>
		</div>


		<!-- <div class="linha"></div> -->
		<div class="bar">
			
			<div class="container">
					
				<nav class="navbar navbar-default" role="navigation">
			
					<div class="menu-principal">
						<?php
						wp_nav_menu(array('menu' => 'primary', 'theme_location' => 'primary', 'depth' => 2, 'container' => false, 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'wp_page_menu', 'walker' => new wp_bootstrap_navwalker()));
						?>
						<!--<div class="collapse navbar-collapse navbar-ex1-collapse"> -->
							<ul class="nav navbar-nav navbar-right pad-pequeno">
								<li><a href="#"><img alt=""
										src="<?php echo content_url(); ?>/themes/bootstrap-magazine/images/icons/facebook-color.png" height="20px"></a></li>
								<li><a href="#"><img alt=""
										src="<?php echo content_url(); ?>/themes/bootstrap-magazine/images/icons/twitter-color.png" height="20px"></a></li>
								<li><a href="#"><img alt=""
										src="<?php echo content_url(); ?>/themes/bootstrap-magazine/images/icons/pinterest-color.png" height="20px"></a></li>
								<li><a href="#"><img alt=""
										src="<?php echo content_url(); ?>/themes/bootstrap-magazine/images/icons/youtube-color.png" height="20px"></a></li>
			
							</ul>
						<!-- </div> -->
					</div>
			
				</nav>
			</div>
		</div>
		<div class="linha"></div>
	</header>
<div id="container" class="container">
