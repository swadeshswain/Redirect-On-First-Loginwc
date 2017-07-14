<?php
add_action( 'admin_init', 'rofl_admin_init' );

function rofl_admin_init() {
  	register_setting( 'rofl-settings-group', 'rofl-plugin-settings' );
  	add_settings_section( 'rofil-section-1', __( 'Rofl Setting', 'textdomain' ), 'rofl_section_1_callback', 'rofl-plugin' );
  	add_settings_field( 'rofl-field-1-1', __( 'Active', 'textdomain' ), 'rofl_field_1_1_callback', 'rofl-plugin', 'rofil-section-1' );
	add_settings_field( 'rofl-field-1-2', __( 'Add Url', 'textdomain' ), 'rofl_field_1_2_callback', 'rofl-plugin', 'rofil-section-1' );
}
/* 
 * THE ACTUAL PAGE 
 * */
function rofl_setting_function() {
?>
  <div class="wrap">
      <h2><?php _e('Redirect On First Login By Swadesh', 'textdomain'); ?></h2>
      <form action="options.php" method="POST">
        <?php settings_fields('rofl-settings-group'); ?>
        <?php do_settings_sections('rofl-plugin'); ?>
        <?php submit_button(); ?>
      </form>
  </div>
<?php } 
function rofl_section_1_callback() {
	_e( 'Please configure below setting.', 'textdomain' );
}
function rofl_field_1_1_callback() {
	
	$settings = (array) get_option( 'rofl-plugin-settings' );
	$field = "rofl_field_1_1";
	$value = esc_attr( $settings[$field] );
	//echo "<input type='text' name='rofl-plugin-settings[$field]' value='$value' />";
	if($value == '1'){
	echo "<input type='radio' name='rofl-plugin-settings[$field]' value='1' id ='$value' checked/>";
	echo "<input type='radio' name='rofl-plugin-settings[$field]' value='0' id='$value'/>";
	}
	else if($value == '0')
	{
	echo "<input type='radio' name='rofl-plugin-settings[$field]' value='1' id ='$value' />";
	echo "<input type='radio' name='rofl-plugin-settings[$field]' value='0' id='$value' checked/>";
	}
	else 
	{
	echo "<input type='radio' name='rofl-plugin-settings[$field]' value='1' id ='$value' />";
	echo "<input type='radio' name='rofl-plugin-settings[$field]' value='0' id='$value'/>";
	} 
} 
function rofl_field_1_2_callback() {
	
	$settings = (array) get_option( 'rofl-plugin-settings' );
	$field = "rofl_field_1_2";
	$value = esc_attr( $settings[$field] );
	
	echo "<input type='text' name='rofl-plugin-settings[$field]' value='$value' />";
}