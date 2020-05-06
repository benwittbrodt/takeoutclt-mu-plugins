<?php 
function takeout_post_types() {
    //Restaurant Post Type
    register_post_type('restaurant',array(
        'supports' => array('title','editor', 'thumbnail', 'excerpt'),
        'rewrite' => array('slug' => 'restaurants'),
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-store',
        'labels' => array(
            'name' => 'Restaurants',
            'add_new_item' => 'Add New Restaurant',
            'edit_item' => 'Edit Restaurant',
            'all_items' => 'All Restaurants',
            'singular_name' => 'Restaurant'
        )
    ));
        
    //Neighborhood Post Type
    register_post_type('neighborhood',array(
        'supports' => array('title','editor'),
        'rewrite' => array('slug' => 'neighborhoods'),
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-location-alt',
        'labels' => array(
            'name' => 'Neighborhoods',
            'add_new_item' => 'Add New Neighborhood',
            'edit_item' => 'Edit Neighborhood',
            'all_items' => 'All Neighborhoods',
            'singular_name' => 'Neighborhood'
        )
    )); 

    //Cuisine Post Type
    register_post_type('cuisine',array(
        'supports' => array('title','editor'),
        'rewrite' => array('slug' => 'cuisine'),
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-carrot',
        'labels' => array(
            'name' => 'Cuisines',
            'add_new_item' => 'Add New Cuisine',
            'edit_item' => 'Edit Cuisine',
            'all_items' => 'All Cuisines',
            'singular_name' => 'Cuisine'
        )
    )); 
}
add_action('init','takeout_post_types');