<?php
add_action( 'admin_menu', 'rofl_register_menu_page' );
function rofl_register_menu_page() {
    add_menu_page(
	 __('Redirect On First Login', 'textdomain' ),
	  __('First Login Setting', 'textdomain' ), 
	  'manage_options',
	   'rofl-setting', 
	   'rofl_setting_function',
	    'dashicons-book-alt',
		6
	   );
} 
	


