<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

		<!-- STYLES ARE ENQUED THROUGH FUNCTIONS.PHP -->

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<nav>
      <!-- logo -->
      <div class="nav__logo">
				<h1>bgt</h1>
			</div>

      <!-- nav links-->
      <div class="nav__links">

				<ul>
					 <li><a href="index.html">home</a></li>
					 <li><a href="tours.html">tours</a></li>
					 <li><a href="about.html">about</a></li>
					 <li><a href="blog.html">blog</a></li>
					 <li><a href="contact.html">contact</a></li>
				</ul>

      </div><!-- nav links -->

    </nav>


    <main>
