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
      'text' => '導入事例',
      'url' => '#',
    ),
  ];
?>
<?php import_part('banner', array(
  'modifier' => '',
  'image' => resolve_asset_url('/images/banner/case.jpg'),
  'text_jp' => '導入事例',
  'text_en' => 'Case.',
  'breadcrumbs' => $breadcrumbs
));?>

<?php import_part('/composition-slots/composition-start', array(
  'breadcrumbs' => $breadcrumbs
));?>
<div class="cases-archives">
  <div class="cases-articles">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <?php import_part("card-cases", array(
        'modifier' => 'cases-archive-card',
        'link' => get_permalink(),
        'image' => get_field('featured_image'),
        'title' => get_the_title(),
        'desc' => 'ベルトドライブプルーファ後、チェーンカス等の異物混入の不安がなくなりました。'
      ));?>
    <?php endwhile; // End Loop. ?>
  <?php endif; ?>

  </div>

  <?php if($itemsFound > 12) { ?>
    <?php import_part ('pagination')?>
  <?php  } ?>
</div>
<?php import_part('/composition-slots/composition-end');?>
<?php
get_footer();