<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Playfair+Display:700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<section class="lightbox panel-white">
	<span class="lightbox-close icon-close"><span class="icon-space"></span></span>
		<span class="lightbox-arrow disabled lightbox-prev icon-arrow-left"><span class="icon-space"></span></span>
		<div class="compartment">
			<p>This is the lightbox</p>
		</div>
		<span class="lightbox-arrow disabled lightbox-next icon-arrow-right"><span class="icon-space"></span></span>
	</div>
</section>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
	<div class="compartment">
	<div id="site-title">
		<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?></div>
	<nav id="header-menu" role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
	</nav>
</div>
</header>
<div id="container"> 