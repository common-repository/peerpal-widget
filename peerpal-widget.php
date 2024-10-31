<?php
/*
Plugin Name: PeerPal Widget
Plugin URI: https://wordpress.org/plugins/peerpal-widget
Description: [peerpal school='Demo'] shortcode
Version: 1.1.0
Author: PeerPal
License: GPLv3
*/

if (! defined('ABSPATH')) { // Avoid direct calls to this file and prevent full path disclosure
    exit;
}

function peerpal_widget_add_shortcode_cb($atts)
{
    $version = '1.1.0';

    $school = $atts['school'];
    $host = "https://widget.peerpal.com/js/widget.min.js";
    $atts_json = json_encode($atts);

    $html = "\n<!-- PeerPal Widget v.{$version} wordpress.org/plugins/peerpal-widget/ -->\n" . "
    <script>
      function initPeerPal() {
        peerpal.init('{$school}', {$atts_json});
      }
    </script>
    <script src=\"{$host}\" defer async onload=\"initPeerPal()\"></script>";
    return $html;
}

add_shortcode('peerpal', 'peerpal_widget_add_shortcode_cb');

?>
