<?php
/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HelloElementorChild
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

define('HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0');

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function hello_elementor_child_scripts_styles()
{

    wp_enqueue_style(
        'hello-elementor-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        [
            'hello-elementor-theme-style',
        ],
        HELLO_ELEMENTOR_CHILD_VERSION
    );

}
add_action('wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20);

function register_deer_tests_post_type()
{
    $labels = array(
        'name' => __('Deer Tests'),
        'singular_name' => __('Deer Test'),
        'menu_name' => __('Deer Tests'),
        'add_new' => __('Add New'),
        'add_new_item' => __('Add New Deer Test'),
        'edit_item' => __('Edit Deer Test'),
        'new_item' => __('New Deer Test'),
        'view_item' => __('View Deer Test'),
        'search_items' => __('Search Deer Tests'),
        'not_found' => __('No Deer Tests found'),
        'not_found_in_trash' => __('No Deer Tests found in Trash'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_menu' => true,
        'rewrite' => array('slug' => 'deer-tests'),
        'taxonomies' => array('category', 'post_tag'),
    );

    register_post_type('deer_tests', $args);
}
add_action('init', 'register_deer_tests_post_type');

function fix_print($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}