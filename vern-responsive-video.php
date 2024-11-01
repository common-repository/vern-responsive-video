<?php
/**
 * Plugin Name:       Easy Responsive Video
 * Description:       Easy Responsive Video adapts oEmbed video to full width while maintaining aspect ratio.
 * Version:           1.3.0
 * Requires at least: 2.9
 * Requires PHP:      5.0
 * Plugin URI:        https://github.com/clubside/vern-responsive-video
 * Author:            Chris Rowley
 * Author URI:        https://vgpavilion.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       vern-responsive-video
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function vern_responsive_video( $cached_html, $url, $attr, $post_id ) {
	// list of URL patterns to match
	$sources = array(
		'youtube.com',
		'youtu.be',
		'www.youtube.com',
		'm.youtube.com',
		'vimeo.com',
		'www.vimeo.com',
		'player.vimeo.com',
		'videopress.com',
		'video.wordpress.com',
		'dailymotion.com',
		'www.dailymotion.com',
		'geo.dailymotion.com'
	);
	if (in_array(parse_url($url, PHP_URL_HOST), $sources)) {
		// find the end of the initial IFRAME element
		$iframe_end = strpos( $cached_html, '>');
		// extract the WIDTH attribute if present
		if (preg_match('/width="(\d*)"/sm', $cached_html, $regs)) {
			$width = $regs[1];
		} else {
			$width = '';
		}
		// extract the HEIGHT attribute if present
		if (preg_match('/height="(\d*)"/sm', $cached_html, $regs)) {
			$height = $regs[1];
		} else {
			$height = '';
		}
		// default to 16:9 aspect ration if attributes unavailable
		if ($width === '' || $height === '') {
			$width = '16';
			$height = '9';
		}
		// add calculated inline styles to IFRAME element
		$cached_html = substr_replace($cached_html, ' style="aspect-ratio: ' . $width . ' / ' . $height . '; width: 100%; height: auto;">', $iframe_end, 0);
	}
	return $cached_html;
}

add_filter( 'embed_oembed_html', 'vern_responsive_video', 99, 4 );
?>
