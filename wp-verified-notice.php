<?php

/*
Plugin Name: WP Verified Notice
Description: Displays a notice that verified accounts exists
GitHub Plugin URI: mtoensing/wp-verified-notice
Version:     1.9
Author:      MarcDK
Author URI:  https://marc.tv
License URI: GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

add_filter( 'comment_form_defaults', 'wpva_comment_form_defaults' );

function wpva_comment_form_defaults( $defaults ) {

	$here = get_permalink();
	$home_url = home_url();

	$defaults['comment_notes_after'] = $defaults['comment_notes_after'] . '<p class="comment-notes verified-notice"><span class="marctv-verified"></span> <a rel="nofollow" tabindex="-1" href="https://marc.tv/?p=27967">Wie bekomme ich einen verifizierten Account?</a> - <a tabindex="-1" rel="nofollow" href="' . $home_url .  '/wp-login.php?redirect_to='. $here .'#respond">Login</a></p>';

	return $defaults;
}

function add_wpva_enqueue_scripts() {
	wp_enqueue_style(
		"marctv-verified", WP_PLUGIN_URL . "/wp-verified-notice/wp-verified.css", true, "1.8" );

}

add_action( 'wp_enqueue_scripts', 'add_wpva_enqueue_scripts' );


?>