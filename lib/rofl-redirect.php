<?php
$value_url = esc_attr( $settings[$rofl_field_1_2] );
//hook when user registers
add_action( 'user_register', 'rofl_registration_save', 10, 1 );

function rofl_registration_save( $user_id ) {

    // insert meta that user not logged in first time
    update_user_meta($user_id, 'prefix_first_login', '1');

}
// hook when user logs in
add_action('wp_login', 'rofl_function', 10, 2);

function rofl_function($user_login, $user) { 
    $settings = (array) get_option( 'rofl-plugin-settings' );
	$field = "rofl_field_1_2";
	$field_2 = "rofl_field_1_1";
	$value_url = esc_attr( $settings[$field] );
	$value_active = esc_attr( $settings[$field_2] );
	$home_page = get_home_url();
    $user_id = $user->ID;
    // getting prev. saved meta
    $first_login = get_user_meta($user_id, 'prefix_first_login', true);
    // if first time login
	if ($value_active == '1'){
    if( $first_login == '1' ) {
        // update meta after first login
        update_user_meta($user_id, 'prefix_first_login', '0');
        // redirect to given URL
		if($value_url !=""){
        wp_redirect( $value_url );
		}
		else 
		{
		 wp_redirect( $home_page );
		}
	
        exit;
    }
	}
}