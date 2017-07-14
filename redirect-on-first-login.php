<?php
/**
 * Plugin Name:       Redirect On First Login
 * Plugin URI:        https://swadeshswain.com/
 * Description:       Standalone functionality to redirect users to a special page on their first login(s)
 * Version:           1.0.0
 * Author:            swadeshswain
 * Author URI:        http://swadeshswain.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       redirect-on-first-login
 */
 
 // If this file is called directly, abort.
 if ( ! defined( 'WPINC' ) ) {
	die;
 }
  define( 'ROFL_URL_PATH', plugin_dir_url( __FILE__ ) );
  define( 'ROFL_PLUGIN_PATH', plugin_dir_path(__FILE__) );
  include( ROFL_PLUGIN_PATH . 'lib/rofl-menu.php');
  include( ROFL_PLUGIN_PATH . 'lib/rofl-setting.php');
  include( ROFL_PLUGIN_PATH . 'lib/rofl-redirect.php');
 
?>