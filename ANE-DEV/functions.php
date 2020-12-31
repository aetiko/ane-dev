<?php

//adding the css and javascript files

function ane_setup(){
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Dosis:wght@800&display=swap');
    wp_enqueue_style('fontawesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    // wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), all);
    // wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'ane_setup');

// adding theme support for featured image
// adding the theme support for the title tag to make it dynamic
// adding the theme support for HTML 5

function ane_dev_init(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', 
    array('comment-list', 'comment-form', 'search-form')
);
}

add_action('after_setup_theme', 'ane_dev_init');

// undergrad post type

// function ane_dev_custom_undergrad_post_type(){
//     register_post_type('UNDERGRAD',
//     array(
//         'rewrite' => array('slug' => 'UNDERGRAD'),
//         'labels' => array(
//             'name' => 'UNDERGRAD',
//             'singular_name' => 'UNDERGRAD',
//             'add_new_item' => 'ADD NEW UNDERGRAD',
//             'edit_item' => 'EDIT UNDERGRAD'
//         ),
//         'menu-icon' => 'dashicons-clipboard',
//         'public' => true,
//         'has_archive' => true,
//         'supports' => array(
//             'title', 'thumbnail', 'editor', 'excerpt', 'comments'
//             )
//         )
//         );
// }
// 
function ane_dev_custom_undergrad_post_type()
{
    register_post_type(
        'UNDERGRAD',
        array(
            'rewrite' => array('slug' => 'UNDERGRAD'),
            'labels' => array(
                'name' => 'UNDERGRAD',
                'singular_name' => 'UNDERGRAD',
                'add_new_item' => 'ADD NEW UNDERGRAD',
                'edit_item' => 'EDIT UNDERGRAD'
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments'
            )
        )
    );
}

add_action('init', 'ane_dev_custom_undergrad_post_type');

// portfolio post type

function ane_dev_custom_portfolio_post_type(){
    register_post_type('PORTFOLIO',
    array(
        'rewrite' => array('slug' => 'PORTFOLIO'),
        'labels' => array(
            'name' => 'PORTFOLIO',
            'singular_name' => 'PORTFOLIO',
            'add_new_item' => 'ADD NEW PORTFOLIO',
            'edit_item' => 'EDIT PORTFOLIO'
        ),
        'menu-icon' => 'dashicons-clipboard',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title', 'thumbnail', 'editor', 'excerpt', 'comments'
            )
        )
        );
}

add_action('init', 'ane_dev_custom_portfolio_post_type');

// sidebar

function ane_widgets(){
    register_sidebar(
        array(
            'name' => 'Main Sidebar',
            'id' => 'main_sidebar',
            'before_tittle' => '<h3>',
            'after_title' => '</h3>'
        )
        );
}

add_action('widgets_init', ane_widgets());

function search_filter($query){
    if($query->is_search()){
        $query->set('post_type', array('post', 'PORTFOLIO', 'UNDERGRAD'));
    }
}

add_filter( 'pre_get_posts', 'search_filter' );
// portfolio post type

// function ane_dev_custom_service_post_type()
// {
//     register_post_type('SERVICE',
//         array(
//             'rewrite' => array('slug' => 'SERVICE'),
//             'labels' => array(
//                 'name' => 'SERVICE',
//                 'singular_name' => 'SERVICE',
//                 'add_new_item' => 'ADD NEW SERVICE',
//                 'edit_item' => 'EDIT SERVICE'
//             ),
//             'menu-icon' => 'dashicons-clipboard',
//             'public' => true,
//             'has_archive' => true,
//             'supports' => array(
//                 'title', 'thumbnail', 'editor', 'excerpt', 'comments'
//             )
//         )
//     );
// }

// add_action('init', 'ane_dev_custom_service_post_type');

