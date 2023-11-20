<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @see https://codex.wordpress.org/Creating_an_Error_404_Page
 */
get_header(); ?>
<?php
  $breadcrumbs = [
    array(
      'text' => 'TOP',
      'url' => resolve_url(),
    ),
    array(
      'text' => '404',
      'url' => '#',
    ),
  ];
?>

<?php import_part('banner', array(
  'modifier' => 'banner-alt',
  'text_jp' => '404',
  'text_en' => 'Page Not Fond.',
  'circle_count' => 30,
  'breadcrumbs' => $breadcrumbs
));?>

<?php import_part('/composition-slots/composition-start', array(
  'breadcrumbs' => $breadcrumbs
));?>

<div class="not-found">
  <p class="not-found-par">お探しのページは見つかりませんでした。
  URLにお間違いがないか、ご確認ください。</p>
  <?php import_part("button", array(
    'modifier' => 'not-found-button',
    'link_url' => '/',
    'link_text' => 'TOPへ戻る',
    'link_icon' => '#arrow'
    ))?>
</div>

<?php import_part('/composition-slots/composition-end');?>
<?php
get_footer();
