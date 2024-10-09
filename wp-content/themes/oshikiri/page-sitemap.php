<?php
/*
* Template name: Sitemap
*/
get_header(); ?>
<?php
  $breadcrumbs = [
    array(
      'text' => 'TOP',
      'url' => resolve_url(),
    ),
    array(
      'text' => 'サイトマップ',
      'url' => '#',
    ),
  ];
?>

<?php import_part('banner', array(
  'modifier' => 'banner-alt',
  'text_jp' => 'サイトマップ',
  'text_en' => 'Sitemap.',
  'circle_count' => 30,
  'breadcrumbs' => $breadcrumbs
));?>

<?php import_part('/composition-slots/composition-start', array(
  'breadcrumbs' => $breadcrumbs
));?>

<div class="sitemap">
  <?php import_part('mapsite', array(
    'modifier' => '',
    'label' => 'TOP',
    'links' => [
      array( 'url' => '/', 'class' => '', 'data-tab' => '', 'text' => 'トップページ',)
    ]
  ))?>

  <?php import_part('mapsite', array(
    'modifier' => '',
    'label' => '製品を探す',
    'links' => [
      array( 'url' => resolve_archive_url(PRODUCT_POST_TYPE), 'class' => 'mapsite-products', 'data-tab' => 'type', 'text' => 'パンの種類から探す', ),
      array( 'url' => resolve_archive_url(PRODUCT_POST_TYPE), 'class' => 'mapsite-products', 'data-tab' => 'line', 'text' => 'ラインから探す', ),
      array( 'url' => resolve_archive_url(PRODUCT_POST_TYPE), 'class' => 'mapsite-products', 'data-tab' => 'category', 'text' => '製品カテゴリから探す', ),
    ]
  ))?>

  <?php import_part('mapsite', array(
    'modifier' => '',
    'label' => '製品情報',
    'links' => [
      array( 'url' => resolve_archive_url('catalog'), 'class' => '', 'data-tab' => '', 'text' => 'カタログ一覧', ),
      array( 'url' => resolve_archive_url('case'), 'class' => '', 'data-tab' => '', 'text' => '導入事例', ),
    ]
  ))?>

  <?php import_part('mapsite', array(
    'modifier' => '',
    'label' => '会社情報',
    'links' => [
      array( 'url' => resolve_url('about'), 'class' => '', 'data-tab' => '', 'text' => 'オシキリの強み', ),
      array( 'url' => resolve_url('corporate/philosophy'), 'class' => '', 'data-tab' => '', 'text' => '企業理念', ),
      array( 'url' => resolve_url('corporate/profile'), 'class' => '', 'data-tab' => '', 'text' => '会社概要', ),
      array( 'url' => resolve_url('corporate/branch'), 'class' => '', 'data-tab' => '', 'text' => '事業所一覧', ),
      array( 'url' => resolve_url('corporate/history'), 'class' => '', 'data-tab' => '', 'text' => '沿革', ),
      array( 'url' => resolve_url('corporate/network'), 'class' => '', 'data-tab' => '', 'text' => '海外ネットワーク', ),
      array( 'url' => resolve_url('recruit'), 'class' => '', 'data-tab' => '', 'text' => '採用情報', ),
      array( 'url' => resolve_url('employee'), 'class' => '', 'data-tab' => '', 'text' => 'オシキリを支える人と技術', ),
    ]
  ))?>

  <?php import_part('mapsite', array(
    'modifier' => '',
    'label' => 'その他',
    'links' => [
      array( 'url' => resolve_url('news'), 'text' => 'お知らせ', ),
      array( 'url' => resolve_url('contact'), 'class' => '', 'data-tab' => '', 'text' => 'お問い合わせ', ),
      array( 'url' => resolve_url('privacy'), 'class' => '', 'data-tab' => '', 'text' => 'プライバシーポリシー', ),
      array( 'url' => resolve_url('sitemap'), 'class' => '', 'data-tab' => '', 'text' => 'サイトマップ', ),
    ]
  ))?>
</div>

<?php import_part('/composition-slots/composition-end');?>
<?php
get_footer();
