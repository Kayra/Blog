<?php

	function google_fonts() {
		
		$query_args = array(
			'family' => 'Montserrat:400,700|Open+Sans:400',
			'subset' => 'latin,latin-ext',
			);

		wp_register_style('google_fonts', add_query_arg($query_args, "//fonts.googleapis.com/css"), array(), null);

	}

	add_action('wp_enqueue_scripts', 'google_fonts');

	function apacheblack_scripts() {

		wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
		wp_enqueue_style('skeleton', get_template_directory_uri() . '/css/skeleton.css');
		wp_enqueue_style('style', get_stylesheet_uri());

	}

	add_action('wp_enqueue_scripts', 'apacheblack_scripts');