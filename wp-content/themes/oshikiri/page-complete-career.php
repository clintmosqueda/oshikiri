<?php
/*
* Template name: Complete Career
*/
get_header(); ?>
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
      'modifier' => 'is-active'
    ),
  ]
?>

<?php import_part('banner', array(
  'modifier' => 'banner-alt',
  'text_jp' => '中途採用エントリーフォーム',
  'text_en' => 'Entry.',
  'circle_count' => 30,
  'breadcrumbs' => $breadcrumbs
));?>

<?php import_part('/composition-slots/composition-start', array(
  'breadcrumbs' => $breadcrumbs
));?>

<div class="contact-complete">
<?php import_part('progress', array(
    'lists' => $progress
  ))?>
  <p class="contact-complete-desc">お問い合わせありがとうございました。
担当者の確認後、折り返しご連絡いたします。</p>
  <?php import_part("button", array(
    'modifier' => 'contact-complete-button',
    'link_url' => resolve_url('/'),
    'link_text' => 'TOPへ戻る',
    'link_icon' => '#arrow'
    ))?>

    <div class="" style="display:none">
      <?php if( have_posts() ): ?>
        <?php while (have_posts()) : the_post(); ?>
        <?php remove_filter ('the_content', 'wpautop'); the_content();?>
        <?php endwhile; ?>
      <?php endif;?>
    </div>
</div>

<?php import_part('/composition-slots/composition-end');?>
<?php
get_footer();
