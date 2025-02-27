<?php

/**
 * Enqueues the design system CSS stylesheet on the frontend of the WordPress site.
 *
 * @since 1.3.0
 */
function design_system_eibc_public_enqueue_global_styles() {
    $version = filemtime( get_template_directory() . '/dist/index.css' );
    wp_enqueue_style( 'design-system-eibc-styles', get_stylesheet_directory_uri() . '/dist/index.css', array(), $version );
}

add_action( 'enqueue_block_assets', 'design_system_eibc_public_enqueue_global_styles' );
add_action( 'admin_enqueue_scripts', 'design_system_eibc_public_enqueue_global_styles' );