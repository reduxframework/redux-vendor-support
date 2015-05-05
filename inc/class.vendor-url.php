<?php

if ( ! class_exists( 'Redux_VendorURL' ) ) {
    exit();
}

if (!class_exists('Redux_VendorURL')) {
    class Redux_VendorURL {
        static public $url = '';
        static public $dir = '';
    
        
        public static function ace_editor() {
            return self::$url . 'vendor/ace/ace.js';
        }
        
        public static function select2() {
            return self::$url . 'vendor/select2/select2.js';
        }
    }
}