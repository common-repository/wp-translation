<?php
/*
Plugin Name: WP Translation Status
Plugin URI: http://casier.eu/wp-dev
Description: Make a link to GlotPress centralised translation so contributor can help translating the plugin that do not have yet a translation in the local site language
Version: 0.1
Text Domain: wp-translation
Author: Pascal CASIER
Author URI: https://profiles.wordpress.org/casiepa
License: GPL2
*/

include( dirname(__FILE__) . '/includes/cron.php');
include( dirname(__FILE__) . '/includes/local_functions.php');
include( dirname(__FILE__) . '/includes/remote_functions.php');
include( dirname(__FILE__) . '/includes/main.php');

wpts_do_main();

?>