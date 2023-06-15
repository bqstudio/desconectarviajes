<?php 
if ( !function_exists( 'acf_add_local_field_group' ) ) return;

$settings_pages = ['settings' => 'General', 'analytics' => 'Analytics', 'menu' => 'Menu'];

acf_add_options_page();

foreach( $settings_pages as $file => $label ):
	$file = get_template_directory().'/inc/acf/'.$file.'.php';
	if( file_exists($file) === false ) continue;

	acf_add_options_sub_page($label);

	include_once($file);
endforeach;