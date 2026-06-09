<?php

function ihacknebraska_setup(): void {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'ihacknebraska_setup');

function ihacknebraska_assets(): void {
    wp_enqueue_style(
        'ihacknebraska-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'ihacknebraska_assets');
