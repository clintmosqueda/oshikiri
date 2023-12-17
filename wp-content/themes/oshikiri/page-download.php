<?php
/*
* Template name: Download
*/
get_header(); ?>
<?php
  $breadcrumbs = [
    array(
      'text' => 'TOP',
      'url' => resolve_url(),
    ),
    array(
      'text' => '資料ダウンロード',
      'url' => '#',
    ),
  ];
?>

<?php import_part('banner', array(
  'modifier' => 'banner-alt',
  'text_jp' => '資料ダウンロード',
  'text_en' => 'Download.',
  'circle_count' => 30,
  'breadcrumbs' => $breadcrumbs
));?>

<?php import_part('/composition-slots/composition-start', array(
  'breadcrumbs' => $breadcrumbs
));?>

<?php 
$catalog = query_custom_post(-1, CATALOG_POST_TYPE);
// echo '<pre>';
// print_r($catalog);
// echo '</pre>';
?>

<ul class="contact-post-list">
  <?php if($catalog->have_posts()) : ?>
    <?php while($catalog->have_posts()): $catalog->the_post();
    ?>
      <li class="contact-post-item" data-name="<?php echo the_title();?>" data-pdf="<?php echo the_field('material_pdf'); ?>"></li>
    <?php endwhile; ?>
  <?php endif; ?>
</ul>

<div class="contact contact-download">
  <div class="contact-form">
    <?php while (have_posts()) : the_post(); ?>
      <?php remove_filter ('the_content', 'wpautop'); the_content();?>
    <?php endwhile; ?>
  </div>
</div>

<?php import_part('/composition-slots/composition-end');?>
<?php
get_footer();