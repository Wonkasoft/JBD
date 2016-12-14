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
					<a class="navbar-brand" href="#"><!-- logo -->
						<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="img-responsive logo-img">
						<!-- /logo -->
					</a>
			</div>
					<div class="collapse navbar-collapse" id="JBDNavbar">
					<!-- social -->
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
					<!-- /social -->
						<?php wp_nav_menu(array('menu_class' => 'nav navbar-nav')); ?>
					</div>
			
			<!-- /header row -->
			</div>
			<!-- header container -->
			</nav>
			<!-- section -->
			<section class="main">
			</section>
			<!-- /section -->
			</header>
			<!-- /header -->
