<?php get_header();
  global $wp_query; 
  $itemsFound = $wp_query->found_posts;
?>

<?php
  $breadcrumbs = [
    array(
      'text' => 'TOP',
      'url' => resolve_url(),
    ),
    array(
      'text' => '最新情報',
      'url' => '#',
    ),
  ];
?>

<?php import_part('banner', array(
  'modifier' => '',
  'image' => resolve_asset_url('/images/banner/news.jpg'),
  'text_jp' => '最新情報',
  'text_en' => 'News.',
  'breadcrumbs' => $breadcrumbs
));?>

<?php import_part('/composition-slots/composition-start', array(
  'breadcrumbs' => $breadcrumbs
));?>

<div class="news-archive">
  
  <div class="news-archive-filters">
    <div class="news-archive-filter">
      <?php echo do_shortcode('[fe_widget]');?>
    </div>

  </div>

  <?php if ( have_posts() ) : ?>
    <div class="news-archive-articles">
      <?php while ( have_posts() ) : the_post(); 
      $categories = get_the_terms(get_the_ID(), NEWS_POST_TYPE_CATEGORY);
      $tags = get_the_terms(get_the_ID(), NEWS_POST_TYPE_TAG);
      ?>
        <?php import_part('card', array(
          'modifier' => '',
          'link' => get_permalink(),
          'image' => get_eyecatch_data(get_the_ID(), 'card-news', ''),
          'title' => get_the_title(),
          'categories' => $categories,
          'tags' => $tags
        ));?>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>
  <?php if($itemsFound > 12) { ?>
    <?php import_part ('pagination')?>
  <?php  } ?>
</div>

<?php import_part('/composition-slots/composition-end');?>
<?php
get_footer();