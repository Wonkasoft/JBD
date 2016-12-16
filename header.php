<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="<?php echo get_template_directory_uri(); ?>/img/Mic@50px.png" type="image/x-icon" rel="shortcut icon" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<?php wp_head(); ?>
	<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
        	assets: '<?php echo get_template_directory_uri(); ?>',
        	tests: {}
        });
      </script>

    </head>
    <body <?php body_class(); ?>>

    	<!-- wrapper -->
    	<div class="wrapper">

    		<!-- section -->
    		<section class="main">

    			<!-- header -->
    			<header class="header clear" role="banner">

    				<nav class="navbar navbar-inverse">

    					<!-- header container -->
    					<div class="container-fluid">

    						<!-- header row -->
    						<div class="navbar-header">
    							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#JBDNavbar">
    								<span class="icon-bar"></span>
    								<span class="icon-bar"></span>
    								<span class="icon-bar"></span>
    							</button>
    							<div class="col-xs-3">
    							<a class="navbar-brand" href="#"><!-- logo -->
    								<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
    								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="img-responsive logo-img">
    								<!-- /logo -->
    							</a>
    							</div>
    							<div class="col-xs-5 hidden-sm hidden-md hidden-lg text-center">
    								<img src="<?php echo get_template_directory_uri(); ?>/img/live.png" alt="Live and Acoustified" class="img-responsive center-block live-img">
    							</div>
    						
    						<div class="col-xs-12 collapse navbar-collapse custom-extended" id="JBDNavbar">
    							<!-- social -->
    							<div class="col-xs-12 col-sm-5">
    							<ul class="nav navbar-nav social-nav">
    								<li>
    									<a href="<?php echo home_url(); ?>">
    										<img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt="facebook" class="img-responsive social-img">
    									</a>
    								</li>
    								<li>
    									<a href="<?php echo home_url(); ?>">
    										<img src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" alt="facebook" class="img-responsive social-img">
    									</a>
    								</li>
    								<li>
    									<a href="<?php echo home_url(); ?>">
    										<img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt="facebook" class="img-responsive social-img">
    									</a>
    								</li>
    							</ul>
    							</div>
    							<div class="col-xs-12 col-sm-4">
    							<!-- /social -->
    							<?php wp_nav_menu(array('menu_class' => 'nav navbar-nav top-nav')); ?>
    							</div>
    						</div>
    					</div>
    					<!-- /header row -->
    					<!-- header container -->
    				</nav>
    			</header>
    			<!-- /header -->
    			<div class="container custom-extended">
    				<div class="row">
    					<div class="col-sm-12 hidden-xs text-center">
    						
    								<img src="<?php echo get_template_directory_uri(); ?>/img/live.png" alt="Live and Acoustified" class="img-responsive center-block live-img">
							</div>
							</div>
							<div class="row main-spacer">
							<div class="col-sm-6 hidden-xs text-center">
								<div class="col-sm-8">
    								<img src="<?php echo get_template_directory_uri(); ?>/img/showticket.jpg" alt="Show Ticket" class="img-responsive center-block ticket-img">
								</div>
							</div>
    					<div class="col-xs-12 col-sm-6 top-space">
    						<div class="col-sm-10 col-lg-8 col-sm-offset-2 col-lg-offset-4">
    						<p>
    							Jethro BoDidley is an international rock star who has taken time off from his busy tour to play local clubs, private events and concert venues. Jethro's trademark raspy voice, manic guitar play and unpredictable sense of humor will acoustic-rock the HOUSE.
    						</p>
    						<div class="col-xs-12 text-center">
    							<button class="booknow-btn">book now</button>
    						</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</section>
    		<!-- /section -->
