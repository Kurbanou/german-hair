<?php

/**
 * Load scripts & styles
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

if (! class_exists('GH_Enqueue_Scripts')) {

	/**
	 * Initial setup
	 */
	class GH_Enqueue_Scripts
	{

		/**
		 * Constructor
		 */
		public function __construct()
		{
			// отключает иконки с версии 4.2
			remove_action('wp_head', 'print_emoji_detection_script', 7);
			remove_action('admin_print_scripts', 'print_emoji_detection_script');
			remove_action('wp_print_styles', 'print_emoji_styles');
			remove_action('admin_print_styles', 'print_emoji_styles');
			remove_filter('the_content_feed', 'wp_staticize_emoji');
			remove_filter('comment_text_rss', 'wp_staticize_emoji');
			remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
			//----- end --
			add_action('wp_head', array($this, 'javascript_detection'), 0);

			add_action('wp_enqueue_scripts', array($this, 'enqueue_vendors'));

			add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
			add_action('admin_enqueue_scripts', array($this, 'admin_scripts'));
		}

		/**
		 * Enqueue scripts and styles for all admin pages.
		 */
		public function admin_scripts($hook) {}

		/**
		 * Enqueues scripts and styles.
		 */
		public function enqueue_scripts()
		{
			wp_enqueue_style('style', gh_get_assets_uri('style', 'css'), array(), gh_get_version('style', 'css'));
			wp_enqueue_style('style-media', gh_get_assets_uri('media', 'css'), array(), gh_get_version('media', 'css'));
			wp_enqueue_style('header', gh_get_assets_uri('header', 'css'), array(), gh_get_version('header', 'css'));
			wp_enqueue_style('footer', gh_get_assets_uri('footer', 'css'), array(), gh_get_version('footer', 'css'));
			if (is_home()) {
				wp_enqueue_style('home', gh_get_assets_uri('home', 'css'), array(), gh_get_version('home', 'css'));
			}
			if (gh_is_admin()) {
				wp_enqueue_style('admin-bar-public', gh_get_assets_uri('admin-bar-public', 'css'), array(), gh_get_version('admin-bar-public', 'css'));
				wp_enqueue_script('admin-bar-public-script', gh_get_assets_uri('admin-bar-public', 'js'), array('jquery'), gh_get_version('admin-bar-public', 'js'), true);
			}
			if (is_page_template('page-about.php')) {
				wp_enqueue_style('about-style', gh_get_assets_uri('about', 'css'), array(), gh_get_version('about', 'css'));
			}

			wp_enqueue_script('script', gh_get_assets_uri('script', 'js'), array('jquery'), gh_get_version('script', 'js'), true);
		}

		public function enqueue_vendors()
		{
			wp_enqueue_script('lazyload', get_template_directory_uri() . '/assets/js-vendors/lazyload/jquery.lazy.min.js', array('jquery'));
			wp_enqueue_script('lazyload-av', get_template_directory_uri() . '/assets/js-vendors/lazyload/jquery.lazy.av.min.js', array('jquery'));
		}

		/**
		 * Handles JavaScript detection.
		 *
		 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
		 */
		public function javascript_detection()
		{
			echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
		}
	}

	new GH_Enqueue_Scripts();
}
