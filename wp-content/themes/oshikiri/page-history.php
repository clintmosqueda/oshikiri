<?php
  $sidebar_links = [
    array(
      'text' => '企業理念',
      'url' => resolve_url('corporate/philosophy'),
    ),
    array(
      'text' => '事業所一覧',
      'url' => resolve_url('corporate/branch'),
    ),
    array(
      'text' => '会社概要',
      'url' => resolve_url('corporate/profile'),
    ),
    array(
      'modifier' => 'is-active',
      'text' => '沿革',
      'url' => resolve_url('corporate/history'),
    ),
    array(
      'text' => '海外ネットワーク',
      'url' => resolve_url('corporate/network'),
    ),
  ];

  $breadcrumbs = [
    array(
      'text' => 'TOP',
      'url' => resolve_url(),
    ),
    array(
      'text' => '会社情報',
      'url' => resolve_url('corporate'),
    ),
    array(
      'text' => '沿革',
      'url' => '#',
    ),
  ];
?>

<?php 
/*
* Template name: History
*/
get_header(); ?>
<?php import_part('banner', array(
  'modifier' => '',
  'image' => resolve_asset_url('/images/banner/history.jpg'),
  'text_jp' => '沿革',
  'text_en' => 'history.',
  'breadcrumbs' => $breadcrumbs
));?>

<?php import_part('/composition-slots/composition-start', array(
  'sidebar_links' => $sidebar_links,
  'breadcrumbs' => $breadcrumbs
));?>

<div class="company-history">
  <div class="company-history-info">
    <?php import_part('history');?>
  </div>
</div>

<?php import_part('/composition-slots/composition-end');?>
<?php
get_footer();