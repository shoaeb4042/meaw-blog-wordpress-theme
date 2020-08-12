<?php 
/* nav walker */

require_once(get_template_directory().'/navwalker.php');


function stylenscripts(){

    wp_enqueue_style('style',get_template_directory_uri().'/style.css',array(),'all');
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css',array(),'all');
    wp_enqueue_style('fafa','https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',array(),'all');
    wp_enqueue_style('break',get_template_directory_uri().'/css/breaking.css',array(),'all');



    wp_deregister_script( 'jquery' );
    wp_register_script('jquery',get_template_directory_uri() . '/vendor/jquery/jquery.min.js',array(), '', 'true');
    wp_enqueue_script('jquery');

    wp_register_script('bootstrapjs',get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js',array(), '', 'true');
    wp_enqueue_script('bootstrapjs');

    wp_register_script('breaking',get_template_directory_uri() . '/vendor/breaking.js',array(), '', 'true');
    wp_enqueue_script('breaking');



}
add_action('wp_enqueue_scripts','stylenscripts');


function theme_support() {
    add_theme_support( 'custom-header' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );
    add_theme_support( 'custom-logo', array(
        'height'      => 50,
        'width'       => 46,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    }
    add_action('after_setup_theme','theme_support');


    /* menu register */

register_nav_menu('topmenu',__('Main Menu','mblog'));
register_nav_menu('bottommenu',__('Footer Menu','mblog'));



/**
 * Add a sidebar.
 */
function sidebar() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'meawblog' ),
        'id'            => 'sidebar1',
        'description'   => __( 'Widgets in this area will be shown on all posts', 'meawblog' ),
        'before_widget' => '<div class="card my-4 pl-2 pr-2">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="title-outer">
        <h3 class=" title">',
        'after_title'   => '</h3></div>',
    ) );
}
add_action( 'widgets_init', 'sidebar' );




?>