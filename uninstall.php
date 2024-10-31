<?php

/**
 * Fired when the plugin is uninstalled.
 *
 * When populating this file, consider the following flow
 * of control:
 *
 * - This method should be static
 * - Check if the $_REQUEST content actually is the plugin name
 * @link       https://www.peerpal.com
 * @since      1.0.0
 *
 * @package    peerpal-plugin
 */

// If uninstall not called from WordPress, then exit.
if (! defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>
