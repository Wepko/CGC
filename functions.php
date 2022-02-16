<?php
/**
 * cgc functions and definitions
 *

 */


function wpse16119876_init_session() {
	if ( ! session_id() ) {
		session_start();
	}
}
// Start session on init hook.
add_action( 'init', 'wpse16119876_init_session' );


require_once('lib/helpers.php');
require_once('lib/enqueue-assets.php');
require_once('lib/nav-menu.php');
require_once('lib/custom-taxonomy.php');
require_once('lib/ajax.php');
require_once('lib/contact_form_7.php');
require_once('lib/widgets.php');
require_once('lib/mailpoet.php');
//require_once('lib/watermarks.php');




