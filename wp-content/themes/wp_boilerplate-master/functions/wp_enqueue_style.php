<?php 
	
	function dl_enqueue_style() {
		$theme_data = wp_get_theme();

		/* Register Scripts */
		wp_register_style('reset', get_parent_theme_file_uri('/assets/css/reset.css'), null, $theme_data->get( 'Version' ), 'screen');

		wp_register_style('mainStyle', get_parent_theme_file_uri('/assets/css/style.css'), array('reset'), $theme_data->get( 'Version' ), 'screen');


		wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', null, $theme_data->get( 'Version' ), 'screen');


		wp_register_style('Quicksand', 'sans-serif', 'href="https://fonts.googleapis.com/css?family=Quicksand:300,400" rel="stylesheet', array(),'1.0.0');

		wp_register_style('miestilo', get_parent_theme_file_uri('/assets/css/miestilo.css'), null, $theme_data->get( 'Version' ), 'screen');

		/* Enqueue Scripts */
		wp_enqueue_style('mainStyle');
		
		wp_enqueue_style('bootstrap');
		wp_enqueue_style('miestilo');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style');
?>