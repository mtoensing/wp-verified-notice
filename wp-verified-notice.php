<?php

/*
Plugin Name: WP Verified Notice
Description: Displays a notice that verified accounts exists
GitHub Plugin URI: mtoensing/wp-verified-notice
Version:     3.0
Author:      MarcDK
Author URI:  https://marc.tv
License URI: GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

add_filter( 'comment_form_submit_button', 'filter_comment_form_submit_button', 10, 2 );

// define the comment_form_submit_button callback
function filter_comment_form_submit_button( $submit_button, $args ) {
	$here = get_permalink();
	$home_url = home_url();
  $submit_after = '<p class="comment-notes verified-notice"><span class="marctv-verified"></span> <a rel="nofollow" tabindex="-1" href="https://marc.tv/?p=27967">Wie kann ich mich verifizieren lassen?</a></p>';
  return $submit_button . $submit_after;
};

function add_wpva_enqueue_scripts() {
	wp_enqueue_style(
		"marctv-verified", WP_PLUGIN_URL . "/wp-verified-notice/wp-verified.css", true, "3.0" );

}

add_action( 'wp_enqueue_scripts', 'add_wpva_enqueue_scripts' );




?>
