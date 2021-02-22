<?php
/**
 * @package Hello_Dolly
 * @version 1.7.2
 */
/*
Plugin Name: Library
Plugin URI: http://
Description: This is library plugin
Author: Kevin
Version: 1.1.0
*/
defined( 'ROOT_DIR' ) or define( 'ROOT_DIR', dirname(__FILE__) );
require_once( ROOT_DIR .'/custom-post-type/library-post-type.php');
require_once( ROOT_DIR .'/shortcode/books-shortcode.php');
require_once( ROOT_DIR .'/extra/extra-fuction.php');

function plugin_enqueue_scripts() {
    wp_enqueue_script( 'frontend-ajax', JS_DIR_URI . 'frontend-ajax.js', array('jquery'), null, true );
    wp_localize_script( 'frontend-ajax', 'frontend_ajax_object',
        array( 
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
            'data_var_1' => 'value 1',
            'data_var_2' => 'value 2',
        )
    );
}
add_action( 'wp_enqueue_scripts', 'plugin_enqueue_scripts' );

