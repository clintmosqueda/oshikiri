<?php
//disable gutenberg
add_filter('use_block_editor_for_post', '__return_false', 10);

//query article post type
function query_custom_post($item = 6, $post_type = ARTICLE_POST_TYPE) {
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

//add body class
add_filter( 'body_class', 'slug_class_name' );
function slug_class_name( $classes ) {
  global $post;

  if(is_single()) {
    $classes[] = 'is-single';
    $classes[] = 'single-page-'.$post->ID;
  }

  else {
    $others =  $post->post_name .'-page';
    $classes[$others] = $others;
  }
  return $classes;

  // return the $classes array
}