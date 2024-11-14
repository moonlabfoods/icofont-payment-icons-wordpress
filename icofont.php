<?php
/*
Plugin Name: MoonLab Icofont Integration
Version: 1.0.3
*/


function icofont_style()
{
    wp_enqueue_style('icofont-1.0.2', plugin_dir_url(__FILE__) . 'assets/icofont.css', [], '1.0.3');
}

add_action( 'wp_enqueue_scripts', 'icofont_style' );