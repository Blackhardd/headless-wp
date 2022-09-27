<?php

/**
 * ITUA Headless WP
 * 
 * @package         ITUA_Headless_WP
 * @author          Oleksandr Piskun
 * 
 * @wordpress-plugin
 * Plugin Name:     ITUA Headless WP
 * Description:     Makes from WordPress headless CMS.
 * Version:         0.0.1
 * Author:          ITUA
 * Author URI:      https://itua.com.ua/
 * Text Domain:     itua
 */


if( !defined( 'ABSPATH' ) )
    exit;


// Define plugin constants.
if( !defined( 'ITUA_HWP_VER' ) )
    define( 'ITUA_HWP_VER', '0.0.1' );

if( !defined( 'ITUA_HWP_PATH' ) )
    define( 'ITUA_HWP_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );

if( !defined( 'ITUA_HWP_URL' ) )
    define( 'ITUA_HWP_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );


// Require core class file.
require_once ITUA_HWP_PATH . '/inc/HeadlessWP.php';