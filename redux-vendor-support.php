<?php
    /**
     * The Redux Framework Plugin
     * A simple, truly extensible and fully responsive options framework
     * for WordPress themes and plugins. Developed with WordPress coding
     * standards and PHP best practices in mind.
     * Plugin Name:     Redux Extensions
     * Plugin URI:      http://reduxframeworks.com/extensions
     * Description:     All of the Redux Framework extensions.
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
     * @copyright       2012-2014 Redux Framework
     */

// Exit if accessed directly
    if ( ! defined( 'ABSPATH' ) ) {
        die;
    }

    add_action( 'setup_theme', 'redux_extensions_demo', 5 );
    function redux_extensions_demo() {
        if ( !class_exists( 'Redux' ) ) {
            return;
        }

        global $pagenow;

        if ($pagenow == "customize.php" || (isset($_POST) && isset($_POST['wp_customize']))) {
            Redux::setExtensions( 'redux_demo', dirname( __FILE__ ) . '/extensions/advanced_customizer' );
            Redux::setExtensions( 'smof_data', dirname( __FILE__ ) . '/extensions/advanced_customizer' );
            return;
        }

        if ( class_exists( 'Redux' ) ) {
            $files = glob( dirname( __FILE__ ) . '/configs/*.php' );
            foreach ( $files as $file ) {
                include( $file );
            }
        } else {

        }
    }