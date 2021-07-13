<?php
/**
 * Basho Pro child theme functions and definitions.
 */

/**
 * Enqueue theme scripts and styles.
 */
function basho_pro_child_scripts_and_styles() {
    $parent_style = 'basho-pro-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'basho_pro_child_scripts_and_styles' );
