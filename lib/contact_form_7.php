<?php

/**
 * Remove tag <p> и <br>.
 */

define('WPCF7_AUTOP', false );
add_filter( 'wpcf7_autop_or_not', '__return_false' );

/**
 * Remove tag <span>.
 */

add_filter('wpcf7_form_elements', function($content) {
	preg_match_all('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', $content, $matches);
	foreach($matches[0] as $match):
		$texter = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $match);
		$content = str_replace(trim($match), trim($texter), $content);
	endforeach;
	return $content;
});
//$("#name").unwrap();

add_filter( 'wpcf7_form_elements', 'dd_wpcf7_form_elements_replace' );
function dd_wpcf7_form_elements_replace( $content ) {
    // $name == Form Tag Name [textarea* your-message] 
    $name = 'name="text-name"';
    $str_pos = strpos( $content, $name );
    if (false !== $str_pos) {
      $content = substr_replace( $content, ' required="required" ', $str_pos, 0 );
    }
		$name = 'name="text-phone"';
    $str_pos = strpos( $content, $name );
    if (false !== $str_pos) {
      $content = substr_replace( $content, ' required="required" ', $str_pos, 0 );
    }

		$name = 'name="textarea-text"';
    $str_pos = strpos( $content, $name );
    if (false !== $str_pos) {
      $content = substr_replace( $content, ' required="required" ', $str_pos, 0 );
    }

		
    return $content;
}
