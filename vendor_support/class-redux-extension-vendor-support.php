<?php
/**
 * Redux Framework is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 * Redux Framework is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with Redux Framework. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package     ReduxVendorSupport
 * @author      Kevin Provance (kprovance)
 * @version     1.1.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Don't duplicate me!
if ( ! class_exists( 'Redux_Extension_Vendor_Support' ) ) {

	/**
	 * Main ReduxFramework custom_field extension class
	 *
	 * @since       3.1.6
	 */
	class Redux_Extension_Vendor_Support extends Redux_Extension_Abstract {

		/**
		 * Version.
		 *
		 * @var string
		 */
		public static $version = '1.1.0';

		/**
		 * Extension friendly name.
		 *
		 * @var string
		 */
		public $extension_name = 'Vendor Support';

		/**
		 * Class Constructor. Defines the args for the extensions class
		 *
		 * @param object|null $parent ReduxFramework object.
		 *
		 * @return      void
		 * @since       1.0.0
		 * @access      public
		 */
		public function __construct( $parent = null ) {
			parent::__construct( $parent, __FILE__ );

			include_once $this->extension_dir . 'class-redux-vendor-url.php';

			Redux_Vendor_URL::$dir = apply_filters( 'redux_vendor_support_dir', $this->extension_dir );

			Redux_Vendor_URL::$url = apply_filters( 'redux_vendor_support_url', $this->extension_url );
		}
	}

	class_alias( 'Redux_Extension_Vendor_Support', 'ReduxFramework_Extension_Vendor_Support' );
}
