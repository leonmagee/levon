<!doctype html>
<html <?php language_attributes();?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<title><?php wp_title('');?><?php if (wp_title('', false)) {
    echo ' :';
}?><?php bloginfo('name');?></title>
	<link href="<?php echo get_template_directory_uri(); ?>/assets/img/levon-favicon.png" rel="icon" type="image/png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description');?>">

	<?php wp_head();?>
</head>
<body <?php body_class();?>>

<!-- wrapper -->
<div class="wrapper">

	<!-- header -->
	<header class="header clear" role="banner">

		<div class="max-width-wrap header-inner">
			<!-- logo -->
			<div class="site-title">
                <div class="site-title-inner">
                    <a href="<?php echo home_url(); ?>">
                        <span class="logo logo_1">l</span>
                        <span class="logo logo_2">e</span>
                        <span class="logo logo_3">v</span>
                        <span class="logo logo_4">o</span>
                        <span class="logo logo_5">n</span>
		                <?php //echo bloginfo('name'); ?>
                    </a>
                </div>
			</div>
			<!-- /logo -->

			<!-- nav -->
			<nav class="nav" role="navigation">
				<?php //html5blank_nav(); ?>
				<?php wp_nav_menu();?>
			</nav>
			<!-- /nav -->

		</div>
		<!-- /max-width-wrap -->

	</header>
	<!-- /header -->

	<div class="inner-wrapper">
