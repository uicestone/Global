<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title><?php wp_title(' - ', true, 'right'); ?><?php bloginfo('site_name'); ?></title>
		<link rel="icon" type="image/png" href="images/favicon.ico" />
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
		<?php wp_head(); ?>
		<!--[if lt IE 9]>
		<script src="scripts/ie9.js">IE7_PNG_SUFFIX=".png";</script>
		<![endif]-->
	</head>
	<body>
		<div class="wraper">
			<header class="header">
				<a class="logo" href="<?php echo site_url(); ?>">Allstar International</a>
				<?php wp_nav_menu(array('theme_location'=>'primary', 'container'=>'nav'))?>
			</header>
		</div> 
