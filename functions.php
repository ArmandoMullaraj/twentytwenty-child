<?php
function wpdocs_theme_name_scripts() 
{
    wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/js/jquery-3.2.1.min.js', array(), '', true );
    wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/js/slick.min.js', array(), '', true );
    wp_enqueue_script( 'slick-animation', get_stylesheet_directory_uri() . '/js/slick-animation.min.js', array(), '', true );
    wp_enqueue_script( 'custom', get_stylesheet_directory_uri() . '/js/custom.js', array(), '', true );
    wp_enqueue_script( 'slider', get_stylesheet_directory_uri() . '/js/slider.js', array(), '', true);
    wp_enqueue_script( 'header', get_stylesheet_directory_uri() . '/js/header.js', array(), '', true);
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

if( function_exists('acf_add_options_page') ) 
{

    acf_add_options_page(array(

        'page_title'    => 'Theme General Settings',

        'menu_title'    => 'Theme Settings',

        'menu_slug'     => 'theme-general-settings',

        'capability'    => 'edit_posts',

        'redirect'      => false

    ));

}

function cc_mime_types($mimes) 
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function mytheme_excerpt_more( $more ) 
{
    return '';
}
add_filter('excerpt_more', 'mytheme_excerpt_more');

function mytheme_custom_excerpt_length( $length ) 
{
    return 21;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );

function wp_custom_archive($args = '') {
    $aaargs = array(
        'type'            => 'yearly',
        'limit'           => '',
        'format'          => 'html', 
        'before'          => '',
        'after'           => '',
        'show_post_count' => false,
        'echo'            => 1,
        'order'           => 'DESC'
    );
    wp_get_archives( $aaargs );
}

function new_excerpt_more( $more ) {
    return ' ...';
}
add_filter('excerpt_more', 'new_excerpt_more');