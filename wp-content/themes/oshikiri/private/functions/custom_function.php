<?php
//disable gutenberg
add_filter('use_block_editor_for_post', '__return_false', 10);

function string_limit($input, $length) {
  $result = '';
  $result = mb_strlen( $input ) > $length ? mb_substr($input, 0, $length) . '...' : $input;
  return $result;
}

function get_first_paragraph($character_limit = 100){
  global $post;
  $str = wpautop( get_the_content() );
  $start = strpos($str, '<p>');
  $str = substr( $str, $start, strpos( $str, '</p>' ) + 4 );
  $str = strip_tags($str, '<a><strong><em>');
  return string_limit($str, $character_limit);
}

//query article post type
function query_custom_post($item = 6, $post_type = PRODUCT_POST_TYPE) {
  $args = array(
    'orderby'        => 'post_date',
    'post_type'      => $post_type,
    'post_status'    => 'publish',
    'posts_per_page' => $item,
    'order'          => 'DESC',
  );

  return new WP_Query( $args );
}

// query post by category
// function query_custom_post_by_cat($cat, $item = 6 , $post_type = ARTICLE_POST_TYPE) {
//   $args = array(
//     'orderby'        => 'post_date',
//     'post_type'      => $post_type,
//     'post_status'    => 'publish',
//     'posts_per_page' => $item,
//     'order'          => 'DESC',
//     'tax_query'      => array(
//       array(
//         'taxonomy' => ARTICLE_POST_TYPE_CATEGORY,
//         'field'    => 'slug',
//         'terms'    => $cat
//       )
//     )
//   );

//   return new WP_Query( $args );
// }

//hide default post in admin
add_action( 'admin_menu', 'remove_default_post_type' );

function remove_default_post_type() {
  remove_menu_page( 'edit.php' );
}

//remove <br> on single page
remove_filter( 'the_content', 'wpautop' );
function wpse_wpautop_nobr( $content ) {
  return wpautop( $content, false );
}

add_filter( 'the_content', 'wpse_wpautop_nobr' ); 

function filter_news_archive( $query ) {
  if( $query->is_main_query() && !is_admin() && is_post_type_archive( NEWS_POST_TYPE ) ) {
      $query->set( 'post_type', NEWS_POST_TYPE );
      $query->set( 'posts_per_page', '12' );
      $query->set( 'post_status', 'publish' );
  }

  return $query;
}
add_action( 'pre_get_posts', 'filter_news_archive' );

function filter_case_archive( $query ) {
  if( $query->is_main_query() && !is_admin() && is_post_type_archive( CASE_POST_TYPE ) ) {
      $query->set( 'post_type', CASE_POST_TYPE );
      $query->set( 'posts_per_page', '12' );
      $query->set( 'post_status', 'publish' );
  }

  return $query;
}
add_action( 'pre_get_posts', 'filter_case_archive' );

function filter_catalog_archive( $query ) {
  if( $query->is_main_query() && !is_admin() && is_post_type_archive( CATALOG_POST_TYPE ) ) {
      $query->set( 'post_type', CATALOG_POST_TYPE );
      $query->set( 'posts_per_page', '12' );
      $query->set( 'post_status', 'publish' );
  }

  return $query;
}
add_action( 'pre_get_posts', 'filter_catalog_archive' );



