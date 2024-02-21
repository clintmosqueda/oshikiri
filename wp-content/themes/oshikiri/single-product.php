<?php
/**
 * The template for displaying all single posts.
 *
 * @see    https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */
get_header(); 
?>

<?php
  $breadcrumbs = [
    array(
      'text' => 'TOP',
      'url' => resolve_url(),
    ),
    array(
      'text' => '製品情報',
      'url' => resolve_archive_url(PRODUCT_POST_TYPE),
    ),
    array(
      'text' => get_the_title(),
      'url' => '#',
    ),
  ];
?>

<?php import_part('banner-single', array(
  'modifier' => '',
  'image' => get_the_post_thumbnail_url(get_the_ID(), 'featured-product'),
  'text_jp' => get_the_title(),
  'text_en' => 'Products.',
  'breadcrumbs' => $breadcrumbs
));?>

<div class="context context-product">
  <div class="context-wrap">
    <?php while (have_posts()) : the_post(); ?>
      <?php import_part('context'); ?>
      <?php 
        $catalog = get_field('catalog_list');
      ?>
      <?php if(!empty($catalog)): ?>
        <div class="context-request">
          <a class="context-request-link" href="<?php echo resolve_url('download?document='. $catalog->post_title); ?>">
            カタログ請求
            <span class="context-request-icon">
              <img src="<?php echo resolve_asset_url('/images/data.svg'); ?>" alt="">
            </span>
          </a>
        </div>
      <?php endif; ?>
    <?php endwhile; ?>
  </div>
</div>

<?php import_part('related-product')?>

<?php
get_footer();