<?php

function wpts_do_main() {
	// Add the TranslateMe action link to all plugins
	add_filter( 'plugin_action_links', 'wpts_add_action_plugin', 10, 5 );
	
	// Register activation hook to run the daily check for the plugins
	register_activation_hook(__FILE__, 'wpts_activate_cron');
	
	// Register the deactivation hook for the daily check for the plugins
	register_deactivation_hook(__FILE__, 'wpts_deactive_cron');
	
	/*
	if ( ! function_exists( 'get_plugins' ) ) {
		require_once ABSPATH . 'wp-admin/includes/plugin.php';
	}
	var_dump(get_plugins());
	*/
}
?>