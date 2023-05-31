<?php
/**
 * Redux Framework Vendor URL Container Class
 *
 * @author      Kevin Provance (kprovance)
 * @package     Redux_Framework/Classes
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Redux_Vendor_URL' ) ) {

	/**
	 * Redux_Vendor_URL class.
	 */
	class Redux_Vendor_URL {

		/**
		 * Plugin URL
		 *
		 * @var string
		 */
		public static $url;

		/**
		 * Plugin director.
		 *
		 * @var string
		 */
		public static $dir;

		/**
		 * Get the vendor library from this plugin.
		 *
		 * @param string $handle Library handle.
		 *
		 * @return string|void
		 */
		public static function get_url( string $handle ) {
			$ace = self::$dir . 'vendor/ace_editor/ace.js';

			if ( 'ace-editor' === $handle && file_exists( $ace ) ) {
				return self::$url . 'vendor/ace_editor/ace.js';
			}
		}
	}
}
