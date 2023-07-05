<?php
/**
 * The Redux Framework Vendor Support Plugin
 *
 * A simple, truly extensible and fully responsive options framework
 * for WordPress themes and plugins. Developed with WordPress coding
 * standards and PHP best practices in mind.
 * Plugin Name:       Redux Vendor Support
 * Plugin URI:        http://redux.io/vendor-support
 * Description:       Registration of Redux support libraries for local installations.
 * Author:            Team Redux
 * Author URI:        http://redux.io
 * Version:           1.1.1
 * Requires at least: 5.0
 * Requires PHP:      7.1
 * Text Domain:       redux-framework
 * License:           GPL3+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Domain Path:       /redux-framework/redux-core/languages
 * Depends:           ReduxFramework
 *
 * @package           ReduxFramework
 * @author            Team Redux
 * @license           GNU General Public License, version 3
 * @copyright         2012-2023 Redux.io
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ReduxFramework' ) ) {
	echo '<div class="error notice"><p>Redux Vendor Support cannot load. Redux Framework not active.</p></div>';
	return;
}

if ( ! class_exists( 'Redux_Extension_Abstract' ) ) {
	echo '<div class="error notice"><p>Redux version 3 detected. This plugin is incompatible with Redux version 3.</p></div>';
	return;
}

if ( ! class_exists( 'Redux_Extension_Vendor_Support' ) ) {
	if ( file_exists( dirname( __FILE__ ) . '/vendor_support/class-redux-extension-vendor-support.php' ) ) {
		require dirname( __FILE__ ) . '/vendor_support/class-redux-extension-vendor-support.php';

		new Redux_Extension_Vendor_Support();
	}
}
