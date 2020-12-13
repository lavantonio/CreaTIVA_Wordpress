<?php

function creativa_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    // navigacija bootstrap
      require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

      register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'creativa' ),
) );
}
add_action('after_setup_theme', 'creativa_setup');

function new_excerpt_text() {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_text');

function set_excerpt_length() {
    return 70;
}
add_filter('excerpt_length', 'set_excerpt_length');


function sidebar() {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
    register_sidebar(array(
        'name' => 'Footer',
        'id' => 'footer',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));

    }
add_action('widgets_init', 'sidebar');
