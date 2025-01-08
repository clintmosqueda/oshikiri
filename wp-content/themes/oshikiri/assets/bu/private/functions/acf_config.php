<?php

$user = wp_get_current_user();
if ( in_array( 'administrator', (array) $user->roles ) ) {

	if( function_exists('acf_add_options_page') ) {

		acf_add_options_page(array(
			'page_title' 	=> 'Job Openings',
			'menu_title'	=> '募集要項',
			'menu_slug' 	=> 'job openings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false,
			'update_button' => 'Update',
			'icon_url' => 'dashicons-id-alt',
			'position' => 9
		));
	}

	// if( function_exists('acf_add_options_page') ) {

	// 	acf_add_options_page(array(
	// 		'page_title' 	=> 'Recommended Categories',
	// 		'menu_title'	=> 'Recommended Categories',
	// 		'menu_slug' 	=> 'recommeded categories',
	// 		'capability'	=> 'edit_posts',
	// 		'redirect'		=> false,
	// 		'update_button' => 'Update',
	// 		'icon_url' => 'dashicons-category',
	// 		'position' => 8
	// 	));
	// }
}

function my_acf_admin_head() { 
  ?>
  <style type="text/css">
    .toplevel_page_job-openings .acf-editor-wrap iframe{
			height: 200px!important
    }      
  </style>
<?php }
  
  add_action('acf/input/admin_head', 'my_acf_admin_head');