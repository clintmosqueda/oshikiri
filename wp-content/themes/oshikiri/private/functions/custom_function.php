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

// function filter_catalog_archive( $query ) {
  
//   if( $query->is_main_query() && !is_admin() && is_post_type_archive( CATALOG_POST_TYPE ) ) {
//       $categoryIDArray = [];
//       $args = array(
//         'taxonomy' => CATALOG_POST_TYPE_CATEGORY,
//         'orderby' => 'name',
//         'order'   => 'ASC',
//         'hide_empty' => false,
//       );
//       $categories = get_categories($args);

//       foreach($categories as $category) {
//         // echo '<pre>';
//         // print_r($category);
//         // echo '</pre>';
//         array_push($categoryIDArray, $category->cat_ID);
//       }

//       // print_r($categoryIDArray);

//       $taxquery = array(
//         array(
//             'taxonomy' => CATALOG_POST_TYPE_CATEGORY,
//             'field' => 'term_id',
//             // 'terms' => array(13, 14, 15, 16),
//             'terms' => $categoryIDArray,
//             'operator'=> 'IN',
//             // 'orderby' => 'term_id',
//             // 'order' => 'DESC',
//         )
//     );
      
//       $query->set( 'post_type', CATALOG_POST_TYPE );
//       $query->set( 'posts_per_page', '12' );
//       $query->set( 'order', 'DESC' );
//       $query->set( 'tax_query', $taxquery );
//       $query->set( 'post_status', 'publish' );
//   }

//   return $query;
// }
// add_action( 'pre_get_posts', 'filter_catalog_archive' );

function filter_catalog_archive( $query ) {
  if( $query->is_main_query() && !is_admin() && is_post_type_archive( CATALOG_POST_TYPE ) ) {
      $query->set( 'post_type', CATALOG_POST_TYPE );
      $query->set( 'posts_per_page', '12' );
      $query->set( 'post_status', 'publish' );
  }

  return $query;
}
add_action( 'pre_get_posts', 'filter_catalog_archive' );


// function get_catalog_option() {
//   $args = array(
//     'orderby'        => 'post_date',
//     'post_type'      => CATALOG_POST_TYPE,
//     'post_status'    => 'publish',
//     'order'          => 'DESC',
//   );

//   $catalogs = new WP_Query( $args );

//   if($catalogs->have_posts()) :
//     $html = '';
//     while($catalogs->have_posts()): $catalogs->the_post();
//       $html .= "<option value=". get_the_title() .">". get_the_title() ."</option>";
//     endwhile;
//     wp_reset_postdata();
//   endif;

//   return $html;

// }
// add_shortcode('get_catalog_option', 'get_catalog_option');



add_action('template_redirect', 'redirect_to_404_with_children');
function redirect_to_404_with_children() {
    // Replace 'your-page-slug' with the slug of the parent page
    $parent_slug = 'author';

    // Check if the current page or its children is being accessed
    if (is_page($parent_slug) || is_page($parent_slug . '/')) {
        global $wp_query;
        $wp_query->set_404();
        status_header(404);
        nocache_headers();
        include(get_404_template());
        exit();
    }

    // Check for child pages
    if (is_page() && $post = get_post()) {
        if ($post->post_parent) {
            $parent_id = wp_get_post_parent_id($post->ID);
            $parent = get_post($parent_id);

            if ($parent && $parent->post_name === $parent_slug) {
                global $wp_query;
                $wp_query->set_404();
                status_header(404);
                nocache_headers();
                include(get_404_template());
                exit();
            }
        }
    }
}