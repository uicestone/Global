<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php bloginfo('name'); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="<?bloginfo('template_url')?>/css/ie7.css" />
<![endif]-->
<link rel="stylesheet" type="text/css" href="<?bloginfo('stylesheet_url')?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="shadow">
		<section>
			<h1 class="title">
				<a href="<?bloginfo('url')?>"><img src="/wp-content/uploads/logo.png" alt="星瀚国际中心" /></a>
			</h1>
			<nav>
				<?wp_nav_menu(array('menu'=>'主导航','menu_class'=>'primary','depth'=>1,'container'=>false))?>
				<?!is_front_page() && wp_nav_menu(array('menu'=>'主导航','walker'=> new Custom_Walker_Nav_Sub_Menu(),'container'=>false,'menu_class'=>'sub'));?>
			</nav>
		</section>
	</header>
