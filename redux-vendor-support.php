<?php
    /**
     * The Redux Framework Plugin
     * A simple, truly extensible and fully responsive options framework
     * for WordPress themes and plugins. Developed with WordPress coding
     * standards and PHP best practices in mind.
     * Plugin Name:     Redux Vendor Support
     * Plugin URI:      http://reduxframeworks.com/vendor-support
     * Description:     Registration of Redux support libraries for local installations.
     * Author:          Team Redux
     * Author URI:      http://reduxframework.com
     * Version:         1.0.0
     * Text Domain:     redux-framework
     * License:         GPL3+
     * License URI:     http://www.gnu.org/licenses/gpl-3.0.txt
     * Domain Path:     /ReduxFramework/ReduxCore/languages
     *
     * @package         ReduxFramework
     * @author          Dovy Paukstys <dovy@reduxframework.com>
     * @author          Kevin Provance <kevin@reduxframework.com>
     * @license         GNU General Public License, version 3
     * @copyright       2012-2015 Redux Framework
     */

// Exit if accessed directly
    if ( ! defined( 'ABSPATH' ) ) {
        die;
    }

    if (!class_exists('Redux_VendorSupport')) {
        class Redux_VendorSupport {
            private $_dir = '';
            private $_url = '';
            
            public function __construct () {
                $this->_dir = plugin_dir_path( __FILE__ );
                $this->_url = plugin_dir_url( __FILE__ );
                
                include_once $this->_dir . 'inc/class.vendor-url.php';
                
                Redux_VendorURL::$dir = $this->_dir;
                Redux_VendorURL::$url = $this->_url;
            }
        }
        
        new Redux_VendorSupport();
    }