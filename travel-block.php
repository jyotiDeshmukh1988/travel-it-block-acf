<?php
/**
 * Plugin Name: Travel Itinerary Block
 * Plugin URI: https://github.com/jyotiDeshmukh1988/travel-it-block-acf
 * Author: Jyoti Deshmukh
 * Author URI: https://github.com/jyotiDeshmukh1988/travel-it-block-acf
 * Description: Travel Itinerary Block built with Advanced Custom Fields ACF Pro
 * Version: 0.1.0
 * License: GPL2
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: travel-it-block
*/

defined ('ABSPATH') OR die('No direct script access allowed');

add_action('acf/init', 'techiepress_acf_travel_it_block');

function techiepress_acf_travel_it_block() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // Register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'travelitblock',
            'title'             => __('Travel Itinerary Block'),
            'description'       => __('Travel Itinerary Block to add good information for traveller.'),
            /*'render_callback'   => function () {
                echo "<h3>Travel Itinerary Jyoti Block</h3>";
            },*/
            'render_template'   => plugin_dir_path( __FILE__ ).'template-parts/travel-block.php',
            'category'          => 'media',
            'icon'          => 'format-gallery',
            'keywords'      => array('Travel','Itinerary'),   
            'enqueue_assets'    => function() {
                wp_enqueue_style( 'travel-it-block', plugin_dir_url( __FILE__ ) . 'assets/css/style.css', '', '1.0.0', 'all' );
            }  
        ));
    }
}