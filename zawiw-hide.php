<?php
/*
Plugin Name: ZAWiW Hide
Plugin URI:
Description: Toggles visibility of content within zawiw-hide shortcode
Version: 1.0
Author: Simon Volpert, Sascha Winkelhofer
Author URI: http://svolpert.eu
License: GPLv2
*/


// Defines the zawiw-hide shortcode
add_shortcode( 'zawiw-hide', 'zawiw_hide_shortcode' );

// Load Scripts
add_action( 'wp_enqueue_scripts', 'zawiw_hide_queue_script' );
add_action( 'wp_enqueue_scripts', 'zawiw_hide_queue_stylesheet' );


function zawiw_hide_shortcode( $atts, $content = null )
{
    // echo "<pre>";
    // print $content;
    // echo "</pre>";
    // Dummy Link
    $snippet  = '<a href="javascript:void(0)" class="zawiw-hide">';
    // Icons
    $snippet .= '<i class="zawiw-hide-icon fa fa-caret-right"></i><i class="zawiw-hide-icon fa fa-caret-down"></i>';
    // Title
    $snippet .= (isset($atts['title']) ? $atts['title'] : 'Click to toggle');
    $snippet .= '</a><div class="zawiw-hide-content">' . $content . '</div>';
    return $snippet;
}

function zawiw_hide_queue_script()
{
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'zawiw_hide_script', plugins_url( 'helper.js', __FILE__ ) );

}

function zawiw_hide_queue_stylesheet() {
    wp_enqueue_style( 'zawiw_hide_style', plugins_url( 'style.css', __FILE__ ) );
    wp_enqueue_style( 'font_awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' );
}

?>
