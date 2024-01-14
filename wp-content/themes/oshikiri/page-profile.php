<?php
  $sidebar_links = [
    array(
      'text' => '企業理念',
      'url' => resolve_url('company/philosophy'),
    ),
    array(
      'text' => '事業所一覧',
      'url' => resolve_url('company/branch'),
    ),
    array(
      'modifier' => 'is-active',
      'text' => '会社概要',
      'url' => resolve_url('company/profile'),
    ),
    array(
      'text' => '沿革',
      'url' => resolve_url('company/history'),
    ),
    array(
      'text' => '海外ネットワーク',
      'url' => resolve_url('company/network'),
    ),
  ];

  $breadcrumbs = [
    array(
      'text' => 'TOP',
      'url' => resolve_url(),
    ),
    array(
      'text' => '会社情報',
      'url' => resolve_url('company'),
    ),
    array(
      'text' => '会社概要',
      'url' => '#',
    ),
  ];
?>

<?php 
/*
* Template name: Profile
*/
get_header(); ?>
<?php import_part('banner', array(
  'modifier' => '',
  'image' => resolve_asset_url('/images/banner/profile.jpg'),
  'text_jp' => '会社概要',
  'text_en' => 'Profile.',
  'breadcrumbs' => $breadcrumbs
));?>

<?php import_part('/composition-slots/composition-start', array(
  'sidebar_links' => $sidebar_links,
  'breadcrumbs' => $breadcrumbs
));?>

<?php
$contents = [
  array( 'label' => '社名', 'description' => '株式会社 オシキリ'),
  array( 'label' => '代表取締役社長', 'description' => '押切 丈二'),
  array( 'label' => '創立', 'description' => '1951年'),
  array( 'label' => '資本金', 'description' => '1億円'),
  array( 'label' => '社名', 'description' => '株式会社 オシキリ'),
  array( 'label' => '所在地', 'description' => '<div>[ 本社 ]<br/>〒252-0811<br class="show-sp"/> 神奈川県藤沢市桐原町4番地 <br class="show-sp"/><a target=_blank"" href="https://maps.app.goo.gl/wmaWqLWYFD6XhouF8">GoogleMap</a></div>
  <div>[工場 ]<br/><span>湘南（藤沢）</span><span>山形（東根）</span></div>
  <div>[ 営業所 ]<br/><span>東京</span><span>大阪</span><span>名古屋</span><span>福岡</span></div>
  <div>[ 販売会社 ]<br/>オシキリ北日本（札幌・仙台）<br class="show-sp"/><a href="'. resolve_url('company/branch') .'">事業所一覧</a></div>
  '),
  array( 'label' => '従業員数', 'description' => '280名'),
  array( 'label' => 'ISO取得', 'description' => '2000年6月'),
  array( 'label' => '事業内容', 'description' => '製パン、製菓機械の開発、製造、販売、メンテナンス
  食肉・水産機械の開発、製造、販売、メンテナンス
  微量計量装置の開発、製造、販売、メンテナンス
  マイクロ波応用装置の開発、製造、販売、メンテナンス
  各号に関する一切の業務'),
]
?>
<div class="company-profile">
  <div class="company-profile-info">
    <?php foreach($contents as $content) {?>
      <dl class="company-profile-list">
        <dt class="company-profile-term"><?php echo $content["label"]?></dt>
        <dd class="company-profile-description"><?php echo $content["description"]?></dd>
      </dl>
    <?php } ?>
  </div>
</div>

<?php import_part('/composition-slots/composition-end');?>
<?php
get_footer();