<?php 

	$files = glob(get_template_directory() . '/functions/*.php');

	foreach($files as $file) {
		if (basename($file, ".php") != 'back-compat') {
			require_once $file;
		}
	}

	/* Flush rewrite rules for custom post types. */
	add_action( 'after_switch_theme', 'bt_flush_rewrite_rules' );

	/* Flush your rewrite rules */
	function bt_flush_rewrite_rules() {
	     flush_rewrite_rules();
	}

	/**
	 * This Theme only works in WordPress 4.8 or later.
	*/

	$GLOBALS['wp_min_version'] = '4.8';

	if ( version_compare( $GLOBALS['wp_version'], $GLOBALS['wp_min_version'], '<' ) ) {
		require get_template_directory() . '/functions/back-compat.php';
		return;
	}



?>