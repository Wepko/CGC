<?php 

function cgc_assets() {
    wp_enqueue_style( 'cgc_stylesheet', get_template_directory(), '/dist/assets/css/bundle.css', array() , null ,'all' );
}

add_action( 'wp_enqueue_scripts', 'cgc_assets' );

function cgc_scripts() {
	wp_enqueue_style( 'cgc-style',  get_template_directory_uri() . '/assets/css/main.min.css', array());
	//wp_style_add_data( 'cgc-style', 'rtl', 'replace' );

	wp_enqueue_script( 'cgc-navigation', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true );

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'my-ajax-request', get_template_directory_uri() . '/assets//js/filter.js' );
	wp_localize_script( 'my-ajax-request', 'true_obj', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );

}
add_action( 'wp_enqueue_scripts', 'cgc_scripts' );