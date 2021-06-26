<?php

/*
Plugin Name: По уроку
Description: функциональность
Version: 1.0
Author: Никита







*/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'AFCP_DIR', plugin_dir_path( __FILE__ ) );
define( 'AFCP_URL', plugin_dir_path( __FILE__ ) );

require AFCP_DIR . 'includes/class-afcp-core.php';

function afcp() {
	return AFCP_Core::instance();
}

afcp();