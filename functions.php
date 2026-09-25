<?php

function myFiles()
{
    wp_enqueue_style(
        'aj-style',
        get_stylesheet_uri(),
        array(),
        time()
    );

    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/main.js',
        array(),
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'myFiles');

function create_tech_taxonomy()
{
    $labels = array(
        'plurals' => 'testings',
        'singular' => 'testing'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_rest' => true,
        'rewrite' => array(
            'slug' => 'testing'
        )
    );

    register_taxonomy('testing', array('post'), $args);
}

// add_action('init','create_tech_taxonomy');

function create_taxonomy()
{
    $args = array(

        'labels' => array(
            'name'          => 'Technologies',
            'singular_name' => 'Technology',
        ),


        'public'             => true,
        'show_ui'            => true,
        'show_in_rest'       => true,
        'show_admin_column'  => true,
        'show_in_nav_menus'  => true,
        'show_tagcloud'      => true,

        'hierarchical' => false,
        'sort'         => false,

        'description' => 'Technology used in the project.',

        'query_var' => 'technology',

        'rewrite' => array(
            'slug'         => 'technology',
            'with_front'   => true,
            'hierarchical' => false,
            'ep_mask'      => EP_NONE,
        ),

        'capabilities' => array(
            'manage_terms' => 'manage_categories',
            'edit_terms'   => 'manage_categories',
            'delete_terms' => 'manage_categories',
            'assign_terms' => 'edit_posts',
        ),


        'rest_base'           => 'technology',
        'rest_controller_class' => 'WP_REST_Terms_Controller',

        'meta_box_cb' => null,

        'meta_box_sanitize_cb' => null,
    );
    register_taxonomy('testing', array('post'), $args);
}


add_action('init','create_taxonomy');