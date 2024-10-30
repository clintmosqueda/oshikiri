<?php
/**
 * add_catalog
 * カスタム投稿タイプ「products」の投稿を選択肢として表示
 * @param array $children
 * @param array $atts
 */
function add_catalog( $children, $atts ) {
  if ( $atts['name'] == 'document' ) {
      $products = get_posts( array(
          'post_type' => CATALOG_POST_TYPE,
          'posts_per_page' => -1
      ) );
      foreach ( $products as $product ) {
          $children[$product->post_title] = $product->post_title;
      }
  }
  return $children;
}
add_filter( 'mwform_choices_mw-wp-form-291', 'add_catalog', 10, 2 );
add_filter( 'mwform_choices_mw-wp-form-1349', 'add_catalog', 10, 2 );

/**
 * my_mwform_value
 * @param string  $value valueの初期値
 * @param string  $name name属性値
 */
function my_mwform_value( $value, $name ) {
  // $_GET['hoge']があったら、name属性がhogeの項目の初期値に設定
  if ( $name === 'document' && !empty( $_GET['document'] ) && !is_array( $_GET['document'] ) ) {
    return $_GET['document'];
  }
  return $value;
}
add_filter( 'mwform_value_mw-wp-form-291', 'my_mwform_value', 10, 2 );
add_filter( 'mwform_value_mw-wp-form-1349', 'my_mwform_value', 10, 2 );


