<?php
/*
Plugin Name: Salcodes
Version: 1.0
Description: Output the current year in your WordPress site.
Text Domain: salcodes
*/

/**
 * [current_year] returns the Current Year as a 4-digit string.
 * @return string Current Year
*/

add_shortcode( 'current_year', 'salcodes_year' );
function salcodes_init(){
    function salcodes_year() {
    return getdate()['year'];
    }
}
add_action('init', 'salcodes_init');

/** Always end your PHP files with this closing tag */
?>
