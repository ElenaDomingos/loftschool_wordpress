<?php


// functions

function loft(){
    wp_enqueue_style('lib',  get_stylesheet_directory_uri() . '/css/libs.min.css', array(), null);
    wp_enqueue_style('main',  get_stylesheet_directory_uri() . '/css/main.css', array('lib'), time());
    wp_enqueue_style('media',  get_stylesheet_directory_uri() . '/css/media.css', array('lib', 'main'), null);

    wp_enqueue_script( 'jquery');
    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/js/main.js', 'jquery', null, true);


}



function true_register_wp_sidebar(){
    register_sidebar(
        array(
            'id' => 'true_side',
            'name' => 'Right Sidebar',
            'before_widget' => '<div id="%1$s" class="sidebar__sidebar-item %2$s">',
            'after_widget'=> '</div>',
            'before_title' => '<div class="sidebar-item__title">',
            'after_title' => '</div>'
        )
    );
}

function register_post_types()
{
    register_post_type('post_type_name', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Акции', 
            'singular_name'      => 'Акция', 
            'add_new'            => 'Добавить акцию', 
            'add_new_item'       => 'Добавление акции', 
            'edit_item'          => 'Редактирование акции', 
            'new_item'           => 'Новая акция', 
            'view_item'          => 'Смотреть акцию', 
            'search_items'       => 'Искать акцию', 
            'not_found'          => 'Не найдено', 
            'not_found_in_trash' => 'Не найдено в корзине', 
            'menu_name'          => 'акции', 
        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => null, 
        'exclude_from_search' => null, 
        'show_ui'             => null, 
        'show_in_menu'        => null, 
        'show_in_admin_bar'   => null,
        'show_in_nav_menus'   => null,
        'show_in_rest'        => null, 
        'rest_base'           => null, 
        'menu_position'       => null,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'comments'), 
        'taxonomies'          => array('category'),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ));
}

// Actions

add_action('wp_enqueue_scripts', 'loft');

add_action('widgets_init', 'true_register_wp_sidebar');

add_action( 'init', 'register_post_types' );


// Othere things

register_nav_menus(
    array(
        'head_menu' => 'Top Menu',
        'foot_menu' => 'Footer Menu'
    )
);

add_theme_support('post-thumbnails');
