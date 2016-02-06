<?php

	function google_fonts() {

		wp_register_style('googlefont-OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300', array(), false, 'all');

        wp_enqueue_style('googlefont-OpenSans');

	}

	add_action('wp_enqueue_scripts', 'google_fonts');

	function apacheblack_scripts() {

		wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css');
		wp_enqueue_style('bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.min.css');
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
		wp_enqueue_style('style', get_stylesheet_uri());

		if ( is_single() || (is_page() && !is_page_template())) {
        wp_register_script('post-script', get_template_directory_uri() . '/js/post.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('post-script');
		wp_register_script('classie', get_template_directory_uri() . '/js/lib/classie.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('classie');
    	}

        wp_register_script('project', get_template_directory_uri() . '/js/project.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('project');

	}

	add_action('wp_enqueue_scripts', 'apacheblack_scripts');
