<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

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
        <nav id="bt-menu" class="bt-menu">
            <a href="#" class="bt-menu-trigger"><span>Menu</span></a>
            <ul>
                <li><a href="/">Posts</a></li>
                <li><a href="/about">About</a></li>
            </ul>
            <ul>
                <li><a href="https://twitter.com/mike_polatoglou" class="bt-icon icon-twitter">Twitter</a></li>
                <li><a href="https://plus.google.com/u/0/+MichailPolatoglou/posts" class="bt-icon icon-gplus">Google+</a></li>
            </ul>
        </nav>