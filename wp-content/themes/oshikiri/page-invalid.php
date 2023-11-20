<?php
/*
* Template name: Invalid
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

<div class="contact contact-invalid">
  <div class="contact-form">
    <?php while (have_posts()) : the_post(); ?>
      <?php remove_filter ('the_content', 'wpautop'); the_content();?>
    <?php endwhile; ?>
  </div>
</div>

<?php import_part('/composition-slots/composition-end');?>
<?php
get_footer();