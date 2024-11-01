<?php

add_action('wpts_daily_event', 'wpts_do_this_daily');
function wpts_do_this_daily() {
	// do something every day
	// get all plugins
	
	// Check if the file https://plugins.svn.wordpress.org/XYZ/trunk/readme.txt exits
		// If yes, check if e.g. author is the same as local
			// If yes, get translations from https://api.wordpress.org/translations/plugins/1.0/?slug=XYZ
				// If yes, check if at least 1 exist
					// If yes, check if one for the current site locale exist, then check if it's installed here
						// If exist but not installed, send warning to install it
						// If not exist, activate TranslateMe
}

function wpts_activate_cron() {
	if (! wp_next_scheduled ( 'wpts_daily_event' )) {
		wp_schedule_event(time(), 'daily', 'wpts_daily_event');
	}
}

function wpts_deactive_cron() {
	wp_clear_scheduled_hook('wpts_daily_event');
}

?>