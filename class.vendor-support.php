<?php

    if ( ! defined( 'ABSPATH' ) ) {
        die;
    }
    
    if (!class_exists('Redux_VendorSupport')) {
        class Redux_VendorSupport {
            public function __construct () {
                $this->_dir = plugin_dir_path( __FILE__ );
                
                require $this->_dir . 'vendor_support/extension_vendor_support.php';
                new ReduxFramework_extension_vendor_support($this);
            }
        }
        
        new Redux_VendorSupport();
    }