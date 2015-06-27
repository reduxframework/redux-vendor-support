<?php

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