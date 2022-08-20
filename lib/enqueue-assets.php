<?php 


function cgc_scripts() {
	wp_enqueue_style( 'cgc-style',  get_template_directory_uri() . '/dist/assets/css/main.css', array());
	wp_style_add_data( 'cgc-style', 'rtl', 'replace' );
	
	wp_enqueue_script( 'my-ajax-request', get_template_directory_uri() . '/dist/assets/js/main.js', array(), null, true );

//	wp_enqueue_script( 'my-ajax-request', get_template_directory_uri() . '/dist/assets/js/filter.js');

	wp_localize_script( 'my-ajax-request', 'true_obj', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );


	//wp_enqueue_script( 'my-ajax-request', get_template_directory_uri() . '/assets//js/filter.js' );

}
add_action( 'wp_enqueue_scripts', 'cgc_scripts' );


function wp_kama_admin_enqueue_scripts_action( $hook_suffix ){
	wp_enqueue_script( 'my-ajax-request', get_template_directory_uri() . '/dist/assets/js/admin.js', array(), null, true );
	wp_localize_script( 'my-ajax-request', 'true_obj', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
}
add_action( 'admin_enqueue_scripts', 'wp_kama_admin_enqueue_scripts_action' );
