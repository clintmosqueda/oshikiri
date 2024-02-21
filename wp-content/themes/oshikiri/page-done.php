<?php
/*
* Template name: Done
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
      'modifier' => 'is-active'
    ),
  ]
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

<div class="contact-complete contact-done">
<?php import_part('progress', array(
    'lists' => $progress
  ))?>
  <p class="contact-complete-desc">資料ダウンロードいただきありがとうございました。</p>
  <?php import_part("button", array(
    'modifier' => 'contact-complete-button',
    'link_url' => resolve_url('/'),
    'link_text' => 'TOPへ戻る',
    'link_icon' => '#arrow'
    ))?>
</div>

<?php import_part('/composition-slots/composition-end');?>

<?php
get_footer();
