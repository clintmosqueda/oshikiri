<?php
  $sidebar_links = [
    array(
      'text' => '企業理念',
      'url' => resolve_url('company/philosophy'),
    ),
    array(
      'modifier' => 'is-active',
      'text' => '事業所一覧',
      'url' => resolve_url('company/branch'),
    ),
    array(
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
      'text' => '事業所一覧',
      'url' => '#',
    ),
  ];
?>

<?php 
/*
* Template name: Branch
*/
get_header(); ?>
<?php import_part('banner', array(
  'modifier' => '',
  'image' => resolve_asset_url('/images/banner/branch.jpg'),
  'text_jp' => '事業所一覧',
  'text_en' => 'branches.',
  'breadcrumbs' => $breadcrumbs
));?>

<?php import_part('/composition-slots/composition-start', array(
  'sidebar_links' => $sidebar_links,
  'breadcrumbs' => $breadcrumbs
));?>

<div class="company-branch">
  <div class="company-branch-info">
    <div class="company-branch-excert">
      <p class="company-branch-excert-par">オシキリグループの国内各地の拠点をご紹介します。</p>
    </div>
    <div class="company-branch-map">
      <div class="company-branch-location">
        <img src="<?php echo resolve_asset_url('/images/branch/sitemap.png')?>" alt="sitemap">
      </div>
      <div class="company-branch-legend">
        <dl>
          <dt>本社</dt>
          <dd>本社 / 湘南工場</dd>
        </dl>
        <dl>
          <dt>工場</dt>
          <dd>山形（東根）</dd>
        </dl>
        <dl>
          <dt>営業所</dt>
          <dd>
            <span>東京</span>
            <span>名古屋</span>
            <span>静岡</span>
            <span>大阪</span>
            <span>福岡</span>
          </dd>
        </dl>
        <dl>
          <dt>販売会社</dt>
          <dd>オシキリ北日本札幌営業所オシキリ北日本本社</dd>
        </dl>
        <dl>
          <dt>オシキリグループ</dt>
          <dd>株式会社オシキリ北日本<br>オシキリ・コーポレーション・オブ・アメリカ</dd>
        </dl>
      </div>
    </div>

    <div class="company-branch-facilities">
      <?php import_part('facility', array(
        'is_open' => 'is-open'
      ));?>
      <?php import_part('facility');?>
      <?php import_part('facility');?>
      <?php import_part('facility');?>
    </div>
  </div>
</div>

<?php import_part('/composition-slots/composition-end');?>
<?php
get_footer();