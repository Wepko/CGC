<?php 

// add_action(
// 	'mailpoet_subscription_before_subscribe',
// 	function($data, $segmentIds, $form) {
// 		print_r($POST);
// 		$_SESSION['arrayImg'] = $data;
// 		print_r($_SESSION);
// 		print_r($data, $segmentIds, $form);

// 		if ($form->id() !== 10 || !in_array(21, $segmentIds)) {
// 			return;
// 		}
		
		
// 		if ($data['some_custom_field'] === 'wrong') {
// 			throw new \MailPoet\UnexpectedValueException("You can not use 'wrong' in the some_custom_field.");
// 		}
// 	},
// 	10,
// 	3
// );

// add_action('mailpoet_sending_newsletter_render_after', function() {
// 	print_r('asf');
// });

// add_action('mailpoet_conflict_resolver_router_url_query_parameters', function() {
// 	print_r('asf1');
// });

add_filter('mailpoet_newsletter_shortcode', 'mailpoet_custom_shortcode', 10, 6);

function mailpoet_custom_shortcode($shortcode, $newsletter, $subscriber, $queue, $newsletter_body, $arguments) {
  // always return the shortcode if it doesn't match your own!
  if ($shortcode !== '[custom:table]') return $shortcode; 
	var_dump($newsletter_body);
  $table =  "<table border=1>";
  // $table .= "<thead><tr><th>$newsletter</th><th>Fruit Color</th></tr></thead>";
  $table .= "<tbody><tr><td>$</td><td>$</td></tr></tbody>";
  $table .= "<tbody><tr><td>$</td><td>$arguments</td></tr></tbody>";
  $table .= "</table>";
  
  return $table;
}


add_filter('mailpoet_newsletter_shortcode_link', 'mailpoet_custom_shortcode_referral_link', 10, 5);

function mailpoet_custom_shortcode_referral_link($shortcode, $newsletter, $subscriber, $queue, $arguments) {
  // always return the shortcode if it doesn't match your own!
  if ($shortcode !== '[link:referral]') return $shortcode;
  
  $referral = 'MailPoet';
  $referral_link = "http://example.com/?referral={$referral}";
  
  return $referral_link;
}
	
	