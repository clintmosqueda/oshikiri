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
      array( 'url' => '/', 'text' => 'トップページ',)
    ]
  ))?>

  <?php import_part('mapsite', array(
    'modifier' => '',
    'label' => '製品を探す',
    'links' => [
      array( 'url' => '/', 'text' => 'パンの種類から探す', ),
      array( 'url' => '/', 'text' => 'ラインから探す', ),
      array( 'url' => '/', 'text' => '製品カテゴリ一覧', ),
    ]
  ))?>

  <?php import_part('mapsite', array(
    'modifier' => '',
    'label' => '製品情報',
    'links' => [
      array( 'url' => '/', 'text' => 'カタログ一覧', ),
      array( 'url' => '/', 'text' => '導入事例', ),
    ]
  ))?>

  <?php import_part('mapsite', array(
    'modifier' => '',
    'label' => '会社情報',
    'links' => [
      array( 'url' => '/', 'text' => 'オシキリの強み', ),
      array( 'url' => '/', 'text' => '企業理念', ),
      array( 'url' => '/', 'text' => '会社概要', ),
      array( 'url' => '/', 'text' => '事業所一覧', ),
      array( 'url' => '/', 'text' => '沿革', ),
      array( 'url' => '/', 'text' => '海外ネットワーク', ),
      array( 'url' => '/', 'text' => '採用情報', ),
    ]
  ))?>

  <?php import_part('mapsite', array(
    'modifier' => '',
    'label' => 'その他',
    'links' => [
      array( 'url' => '/', 'text' => 'お知らせ', ),
      array( 'url' => '/', 'text' => 'お問い合わせ', ),
      array( 'url' => '/', 'text' => 'プライバシーポリシー', ),
      array( 'url' => '/', 'text' => 'サイトマップ', ),
    ]
  ))?>
</div>

<?php import_part('/composition-slots/composition-end');?>
<?php
get_footer();
