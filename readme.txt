=== Easy Responsive Video ===
Contributors: clubside
Plugin link: https://github.com/clubside/vern-responsive-video
Tags: video, responsive, oembed
Tested up to: 6.4.3
Requires at least: 2.9
Requires PHP: 5.0
Stable tag: 1.3.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Easy Responsive Video adapts oEmbed video to full width while maintaining aspect ratio.

== Description ==

Automatically adapt your embedded videos to the full width of their containers while maintaining the correct aspect ratio.

This is a simple filter that scans each embed in your posts, pages and custom post types, reads the width and height on the `iframe` and adds a style attribute including CSS `width`, `height` and `aspect-ratio` properties.

Currently supporting YouTube, Vimeo, WordPress/VideoPress and DailyMotion.

== Installation ==

1. Visit `Plugins > Add New`
2. Search for `Easy Responsive Video`
3. Install Easy Responsive Video once it appears
4. Activate Easy Responsive Video from your Plugins page.

= Manually =

1. Upload the `vern-responsive-video` folder to the `/wp-content/plugins/` directory
2. Activate the Easy Responsive Video plugin through the 'Plugins' menu in WordPress

== Changelog ==

= 1.3.0 [Feb 12, 2024] =

- Disabled direct file access.

= 1.2.0 [Feb 11, 2024] =

- Verified compatibility with WordPress 6.4.3.

= 1.1.0 [Dec 23, 2023] =

- Reworked provider identification.
- Added support for Vimeo, WordPress/VideoPress and DailyMotion.

= 1.0.0 [Dec 22, 2023] =

- Initial Release
