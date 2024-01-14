<?php

$args = array(
    'label' => ucfirst(PRODUCT_POST_TYPE),
    
    'labels' => array(
        'singular_name' => ucfirst(PRODUCT_POST_TYPE), 
        'menu_name' => 'Product', 
        'add_new_item' => 'Add New Product Post Title', 
        'add_new' => 'Add New Product' , 
        'new_item' => 'New Item', 
        'edit_item' => 'Edit Product Post', 
        'view_item' => 'View Product Post', 
        'not_found' => 'No Posts Found', 
        'not_found_in_trash' => 'ゴミ箱に投稿はありません。', 
        'search_items' => 'Search Product Post', 
    ),

    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'rewrite' => true,
    'supports' => array('title', 'thumbnail'),
    'show_in_rest' => true
);

register_post_type(PRODUCT_POST_TYPE,$args);

$args = array(

  'label'        => 'Product Categories',
  'labels'       => array(
    'name'          => 'Product Categories',
    'singular_name' => 'Product Category',
    'all_items'     => 'Product Categories'
  ),
  'hierarchical' => true,
  'public'       => true,
  'show_ui'      => true,
  'rewrite'      => array( 'slug' => PRODUCT_CATEGORY ),
  'show_in_rest' => true,

);
register_taxonomy( PRODUCT_CATEGORY, array( PRODUCT_POST_TYPE ), $args );

$args = array(

  'label'        => 'Line Categories',
  'labels'       => array(
    'name'          => 'Line Categories',
    'singular_name' => 'Line Category',
    'all_items'     => 'Line Categories'
  ),
  'hierarchical' => true,
  'public'       => true,
  'show_ui'      => true,
  'rewrite'      => array( 'slug' => PRODUCT_LINE_CATEGORY ),
  'show_in_rest' => true,

);
register_taxonomy( PRODUCT_LINE_CATEGORY, array( PRODUCT_POST_TYPE ), $args );

$args = array(

  'label'        => 'Bread Categories',
  'labels'       => array(
    'name'          => 'Bread Categories',
    'singular_name' => 'Bread Category',
    'all_items'     => 'Bread Categories'
  ),
  'hierarchical' => true,
  'public'       => true,
  'show_ui'      => true,
  'rewrite'      => array( 'slug' => PRODUCT_BREAD_CATEGORY ),
  'show_in_rest' => true,

);
register_taxonomy( PRODUCT_BREAD_CATEGORY, array( PRODUCT_POST_TYPE ), $args );

//case
$args = array(
    'label' => ucfirst(CASE_POST_TYPE),
    
    'labels' => array(
        'singular_name' => ucfirst(CASE_POST_TYPE), 
        'menu_name' => 'Case', 
        'add_new_item' => 'Add New Case Post Title', 
        'add_new' => 'Add New Case' , 
        'new_item' => 'New Item', 
        'edit_item' => 'Edit Case Post', 
        'view_item' => 'View Case Post', 
        'not_found' => 'No Posts Found', 
        'not_found_in_trash' => 'ゴミ箱に投稿はありません。', 
        'search_items' => 'Search Case Post', 
    ),

    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'rewrite' => true,
    'supports' => array('title', 'author', 'thumbnail', 'excerpt'),
    'show_in_rest' => true
);

register_post_type(CASE_POST_TYPE,$args);

//news
$args = array(
    'label' => ucfirst(NEWS_POST_TYPE),
    
    'labels' => array(
        'singular_name' => ucfirst(NEWS_POST_TYPE), 
        'menu_name' => 'News', 
        'add_new_item' => 'Add New News Post Title', 
        'add_new' => 'Add New News' , 
        'new_item' => 'New Item', 
        'edit_item' => 'Edit News Post', 
        'view_item' => 'View News Post', 
        'not_found' => 'No Posts Found', 
        'not_found_in_trash' => 'ゴミ箱に投稿はありません。', 
        'search_items' => 'Search News Post', 
    ),

    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'rewrite' => true,
    'supports' => array('title', 'thumbnail'),
    'show_in_rest' => true
);

register_post_type(NEWS_POST_TYPE,$args);

// news category
$args = array(

  'label'        => 'Categories',
  'labels'       => array(
    'name'          => 'Categories',
    'singular_name' => 'Category',
    'all_items'     => 'Categories'
  ),
  'hierarchical' => true,
  'public'       => true,
  'show_ui'      => true,
  'rewrite'      => array( 'slug' => NEWS_POST_TYPE_CATEGORY ),
  'show_in_rest' => true,

);
register_taxonomy( NEWS_POST_TYPE_CATEGORY, array( NEWS_POST_TYPE ), $args );

$args = array(

  'label'        => 'Tag',
  'labels'       => array(
    'name'          => 'Tags',
    'singular_name' => 'Tag',
    'all_items'     => 'Tags'
  ),
  'hierarchical' => false,
  'public'       => true,
  'show_ui'      => true,
  'rewrite'      => array( 'slug' => NEWS_POST_TYPE_TAG )
);

register_taxonomy(NEWS_POST_TYPE_TAG, array(NEWS_POST_TYPE), $args );

//employee
$args = array(
  'label' => ucfirst(EMPLOYEE_POST_TYPE),
  
  'labels' => array(
      'singular_name' => ucfirst(EMPLOYEE_POST_TYPE), 
      'menu_name' => 'Employee', 
      'add_new_item' => 'Add New Employee Post Title', 
      'add_new' => 'Add New Employee' , 
      'new_item' => 'New Item', 
      'edit_item' => 'Edit Employee Post', 
      'view_item' => 'View Employee Post', 
      'not_found' => 'No Posts Found', 
      'not_found_in_trash' => 'ゴミ箱に投稿はありません。', 
      'search_items' => 'Search Employee Post', 
  ),

  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true,
  'show_in_menu' => true,
  'query_var' => true,
  'has_archive' => true,
  'hierarchical' => false,
  'menu_position' => 5,
  'rewrite' => true,
  'supports' => array('title'),
  'show_in_rest' => true
);

register_post_type(EMPLOYEE_POST_TYPE,$args);

$args = array(

  'label'        => 'Department',
  'labels'       => array(
    'name'          => 'Department',
    'singular_name' => 'Department',
    'all_items'     => 'Departments',
    'add_new_item' => 'Add New Department', 
  ),
  'hierarchical' => true,
  'public'       => true,
  'show_ui'      => true,
  'rewrite'      => array( 'slug' => EMPLOYEE_POST_TYPE_CATEGORY ),
  'show_in_rest' => true,

);
register_taxonomy( EMPLOYEE_POST_TYPE_CATEGORY, array( EMPLOYEE_POST_TYPE ), $args );

//catalog
$args = array(
  'label' => ucfirst(CATALOG_POST_TYPE),
  
  'labels' => array(
      'singular_name' => ucfirst(CATALOG_POST_TYPE), 
      'menu_name' => 'Catalog', 
      'add_new_item' => 'Add New Catalog Post Title', 
      'add_new' => 'Add New Catalog' , 
      'new_item' => 'New Item', 
      'edit_item' => 'Edit Catalog Post', 
      'view_item' => 'View Catalog Post', 
      'not_found' => 'No Posts Found', 
      'not_found_in_trash' => 'ゴミ箱に投稿はありません。', 
      'search_items' => 'Search Catalog Post', 
  ),

  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true,
  'show_in_menu' => true,
  'query_var' => true,
  'has_archive' => true,
  'hierarchical' => false,
  'menu_position' => 5,
  'rewrite' => true,
  'supports' => array('title', 'thumbnail'),
  'show_in_rest' => true
);

register_post_type(CATALOG_POST_TYPE,$args);

$args = array(

  'label'        => 'Categories',
  'labels'       => array(
    'name'          => 'Categories',
    'singular_name' => 'Category',
    'all_items'     => 'Categories',
  ),
  'hierarchical' => true,
  'public'       => true,
  'show_ui'      => true,
  'rewrite'      => array( 'slug' => CATALOG_POST_TYPE_CATEGORY ),
  'show_in_rest' => true,

);
register_taxonomy( CATALOG_POST_TYPE_CATEGORY, array( CATALOG_POST_TYPE ), $args );