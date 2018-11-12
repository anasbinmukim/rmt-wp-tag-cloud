<?php
/*
Plugin Name: Wordpress Tag Cloud Shortcode
Plugin URI: https://rmweblab.com
Description: Simple tag cloude for wordpress
Author: Anas
Version: 1.0
Author URI: https://rmweblab.com/
Copyright: © 2018 rmweblab
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: rmt-tag-cloud
Domain Path: /languages
*/

if ( ! defined( 'ABSPATH' ) ) {
exit;
}


function rmt_tag_cloud_shortcode($atts, $content = null) {
	extract(shortcode_atts(array(
		'box_css' => '',
		'zoom_type' => '',
		'backgroundcolor' => ''
	), $atts));

	$output = '';

	$output .= do_shortcode($content);

	return $output;


}
add_shortcode('rmt_tag_cloud', 'rmt_tag_cloud_shortcode');

function rmt_tag_cloud_item_shortcode($atts, $content = null) {
	extract(shortcode_atts(array(
		'weight' => '',
		'link' => '',
		'item' => ''
	), $atts));


	$output = '';

	$output .= $content;

	return $output;



}
add_shortcode('rmt_tag_cloud_item', 'rmt_tag_cloud_item_shortcode');
