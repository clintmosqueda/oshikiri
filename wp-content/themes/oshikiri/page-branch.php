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

  $facilities = [
    array(
      'modifier' => '',
      'image' => resolve_asset_url('/images/branch/facility1.jpg'),
      'name' => '本社 / 湘南工場',
      'address' => '〒252-0811 神奈川県藤沢市桐原町4番地',
      'tel' => '0466-44-6011',
      'fax' => '0466-44-6969',
      'map_location' => ''
    ),
    array(
      'modifier' => '',
      'image' => resolve_asset_url('/images/branch/facility2.jpg'),
      'name' => '山形工場',
      'address' => '〒999-3701 山形県東根市大字東根甲5500',
      'tel' => '0237-43-4222',
      'fax' => '0237-43-4759',
      'map_location' => ''
    ),
    array(
      'modifier' => '',
      'image' => resolve_asset_url('/images/branch/facility3.jpg'),
      'name' => '名古屋営業所',
      'address' => '〒481-0043 愛知県北名古屋市沖村六反136',
      'tel' => '0568-25-7331',
      'fax' => '0568-25-7555',
      'map_location' => ''
    ),
    array(
      'modifier' => '',
      'image' => resolve_asset_url('/images/branch/facility4.jpg'),
      'name' => '大阪営業所',
      'address' => '〒565-0853 大阪府吹田市春日3-20-10',
      'tel' => '06-6821-3711',
      'fax' => '06-6821-6002',
      'map_location' => ''
    ),
    array(
      'modifier' => '',
      'image' => resolve_asset_url('/images/branch/facility5.jpg'),
      'name' => '福岡営業所',
      'address' => '〒811-2304 福岡県糟屋郡粕屋町仲原3-6-19',
      'tel' => '092-939-3820',
      'fax' => '092-931-3167',
      'map_location' => ''
    ),
    array(
      'modifier' => '',
      'image' => resolve_asset_url('/images/branch/facility6.jpg'),
      'name' => '札幌営業所',
      'address' => '〒004-0054 北海道札幌市厚別区厚別中央四条5-6-1',
      'tel' => '011-893-0678',
      'fax' => '011-801-2768',
      'map_location' => ''
    ),
    array(
      'modifier' => '',
      'image' => resolve_asset_url('/images/branch/facility7.jpg'),
      'name' => '仙台営業所',
      'address' => '〒989-3123 宮城県仙台市青葉区錦ヶ丘8-12-22',
      'tel' => '022-391-6196',
      'fax' => '022-391-6195',
      'map_location' => ''
    ),
    array(
      'modifier' => '',
      'image' => resolve_asset_url('/images/branch/facility8.jpg'),
      'name' => 'OCA',
      'address' => '10425 Drummond Road, Philadelphia, PA 19154, U.S.A.',
      'tel' => '(+1)215-637-6005',
      'fax' => '(+1)215-637-6041',
      'map_location' => ''
    ),
  ]
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

    <?php if(!empty($facilities)) {?>
      <div class="company-branch-facilities">
        <?php foreach($facilities as $facility) { ?>
          <?php import_part('facility', array(
            'modifier' => $facility["modifier"],
            'image' => $facility["image"],
            'name' => $facility["name"],
            'address' => $facility["address"],
            'tel' => $facility["tel"],
            'fax' => $facility["fax"],
            'map_location' => $facility["map_location"]
          ));?>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
</div>

<?php import_part('/composition-slots/composition-end');?>
<?php
get_footer();