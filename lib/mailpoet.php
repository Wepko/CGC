<?php 

add_filter('mailpoet_newsletter_shortcode', 'mailpoet_custom_shortcode', 10, 6);

function mailpoet_custom_shortcode($shortcode, $newsletter, $subscriber, $queue, $newsletter_body, $arguments) {
  // always return the shortcode if it doesn't match your own!
  if ($shortcode !== '[custom:table]') return $shortcode; 
	echo "newsletter";
	echo $newsletter;
	echo "newsletter";

  $table =  "<table border=1>";
  $table .= "<thead><tr><th>Fruit Name</th><th>Fruit Color</th></tr></thead>";
  $table .= "<tbody><tr><td>Apple</td><td>Red</td></tr></tbody>";
  $table .= "<tbody><tr><td>Banana</td><td>Yellow</td></tr></tbody>";
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
	
	