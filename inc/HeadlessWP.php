<?php

/**
 * Main plugin class file.
 * 
 * @package     ITUA_Headless_WP
 * @since       0.0.1
 */


namespace ITUA;


if( !defined( 'ABSPATH' ) )
    exit;


final class HeadlessWP {

    /**
     * Constructor.
     */
    public function __construct(){
        $this->init();
    }


    /**
     * Init plugin.
     *
     * @return void
     */
    public function init(){
        add_action( 'init', array( $this, 'disable_frontend' ) );
    }


    /**
     * Disable site frontend.
     * 
     * @return void
     */
    public function disable_frontend(){
        if( !is_admin() ){
            exit;
        }
    }
}


new HeadlessWP();