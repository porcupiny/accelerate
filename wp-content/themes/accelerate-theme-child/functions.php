<?php
/**
* Accelerate Marketing Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/
// Enqueue scripts and styles
function accelerate_child_scripts() {
    wp_enqueue_style( 'accelerate-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'accelerate-style' ));
}
add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );
// Custom post types function
function create_custom_post_types() {
// create a case study custom post type
    register_post_type('case_studies',
        array(
            'labels' => array(
                'name' => __( 'Case Studies' ),
                'singular_name' => __( 'Case Study' )
                ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array(
                'slug' => 'case-studies'
                ),
            )
    );
}
// hook this custom post type function into the theme
add_action( 'init', 'create_custom_post_types' );

//enqueues our external font awesome stylesheet
function enqueue_our_required_stylesheets(){
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');

add_filter( 'storm_social_icons_size', create_function( '', 'return "normal";' ) );
add_filter( 'storm_social_icons_size', create_function( '', 'return "large";' ) );
