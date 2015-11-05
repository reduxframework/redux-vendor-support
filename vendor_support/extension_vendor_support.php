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
     * @package     ReduxFramework
     * @author      Kevin Provance (kprovance)
     * @version     3.0.0
     */

    // Exit if accessed directly
    if ( ! defined( 'ABSPATH' ) ) {
        exit;
    }

    // Don't duplicate me!
    if ( ! class_exists( 'ReduxFramework_extension_vendor_support' ) ) {

        /**
         * Main ReduxFramework custom_field extension class
         *
         * @since       3.1.6
         */
        class ReduxFramework_extension_vendor_support {

            static $version = "1.0.0";

            static $vendor_dir = "vendor_support";

            /**
             * Class Constructor. Defines the args for the extions class
             *
             * @since       1.0.0
             * @access      public
             *
             * @param       mixed $parent Panel sections.
             * @param       string $extension_dir Extension Directory.
             * @param       string $extension_url Extension Url.
             *
             * @return      void
             */
            public function __construct( $parent = null, $extension_dir = null, $extension_url= null ) {

                include_once $extension_dir . self::$vendor_dir . DIRECTORY_SEPARATOR . 'class.vendor-url.php';

                $this->extension_dir = ( !is_null( $extension_dir ) ? $extension_dir : '' ) . self::$vendor_dir . DIRECTORY_SEPARATOR;

                $this->extension_url = ( !is_null( $extension_url ) ? $extension_url : '' ) . self::$vendor_dir . '/';

                Redux_VendorURL::$dir = apply_filters( 'redux_vendor_support_dir', $this->extension_dir );

                Redux_VendorURL::$url = apply_filters( 'redux_vendor_support_url', $this->extension_url );

            }
        } // class
    } // if
