<?php
/*
* Template name: Contact
*/
get_header(); ?>
<?php import_part('banner', array(
  'modifier' => 'banner-alt',
  'text_jp' => 'お問い合わせ',
  'text_en' => 'Contact.',
  'circle_count' => 30
));?>

<?php
  $breadcrumbs = [
    array(
      'text' => 'TOP',
      'url' => resolve_url(),
    ),
    array(
      'text' => 'お問い合わせ',
      'url' => '#',
    ),
  ];

  $progress = [
    array(
      'text' => '入力',
      'modifier' => 'is-active'
    ),
    array(
      'text' => '確認',
      'modifier' => 'is-active'
    ),
    array(
      'text' => '完了',
      'modifier' => ''
    ),
  ]
?>

<?php import_part('/composition-slots/composition-start', array(
  'breadcrumbs' => $breadcrumbs
));?>

<div class="contact">
  <?php import_part('progress', array(
    'lists' => $progress
  ))?>

  <div class="contact-form contact-form-confirm">
    <?php while (have_posts()) : the_post(); ?>
      <?php remove_filter ('the_content', 'wpautop'); the_content();?>
    <?php endwhile; ?>
  </div>
</div>

<?php import_part('/composition-slots/composition-end');?>
<?php
get_footer();