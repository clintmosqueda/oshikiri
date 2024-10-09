<?php
  $sidebar_links = [
    array(
      'text' => '企業理念',
      'url' => resolve_url('corporate/philosophy'),
    ),
    array(
      'modifier' => 'is-active',
      'text' => '事業所一覧',
      'url' => resolve_url('corporate/branch'),
    ),
    array(
      'text' => '会社概要',
      'url' => resolve_url('corporate/profile'),
    ),
    array(
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
      'text' => '事業所一覧',
      'url' => '#',
    ),
  ];

  $facilities = [
    array(
      'modifier' => '',
      'id' => 'facility1',
      'image' => resolve_asset_url('/images/branch/facility1.jpg'),
      'name' => '本社 / 湘南工場',
      'address' => '〒252-0811 神奈川県藤沢市桐原町4番地',
      'tel' => '0466-44-6011',
      'fax' => '0466-44-6969',
      'map_location' => 'https://maps.app.goo.gl/wmaWqLWYFD6XhouF8',
      'head_office_detail_pc' => resolve_asset_url('/images/branch/facility-details.svg'),
      'head_office_detail_sp' => resolve_asset_url('/images/branch/facility-details-sp.svg'),
    ),
    array(
      'modifier' => '',
      'id' => 'facility2',
      'image' => resolve_asset_url('/images/branch/facility2.jpg'),
      'name' => '山形工場',
      'address' => '〒999-3701 山形県東根市大字東根甲5500',
      'tel' => '0237-43-4222',
      'fax' => '0237-43-4759',
      'map_location' => 'https://maps.app.goo.gl/WbghptzFiVxr71vE8'
    ),
    array(
      'modifier' => '',
      'id' => 'facility3',
      'image' => resolve_asset_url('/images/branch/facility3.jpg'),
      'name' => '名古屋営業所',
      'address' => '〒481-0043 愛知県北名古屋市沖村六反136',
      'tel' => '0568-25-7331',
      'fax' => '0568-25-7555',
      'map_location' => 'https://maps.app.goo.gl/Jd8eiuzhhfpbQQaY7'
    ),
    array(
      'modifier' => '',
      'id' => 'facility4',
      'image' => resolve_asset_url('/images/branch/facility4.jpg'),
      'name' => '大阪営業所',
      'address' => '〒565-0853 大阪府吹田市春日3-20-10',
      'tel' => '06-6821-3711',
      'fax' => '06-6821-6002',
      'map_location' => 'https://maps.app.goo.gl/TZUd5fUZxwLqGXkPA'
    ),
    array(
      'modifier' => '',
      'id' => 'facility5',
      'image' => resolve_asset_url('/images/branch/facility5.jpg'),
      'name' => '福岡営業所',
      'address' => '〒811-2304 福岡県糟屋郡粕屋町仲原3-6-19',
      'tel' => '092-939-3820',
      'fax' => '092-931-3167',
      'map_location' => 'https://maps.app.goo.gl/DQiqsoe2HD3QgcQd8'
    ),
    array(
      'modifier' => '',
      'id' => 'facility11',
      'image' => resolve_asset_url('/images/branch/facility6.jpg'),
      'name' => '札幌営業所',
      'address' => '〒004-0054 北海道札幌市厚別区厚別中央四条5-6-1',
      'tel' => '011-893-0678',
      'fax' => '011-801-2768',
      'map_location' => 'https://maps.app.goo.gl/E34F7kXcKBipKVt46'
    ),
    array(
      'modifier' => '',
      'id' => 'facility12',
      'image' => resolve_asset_url('/images/branch/facility7.jpg'),
      'name' => '仙台営業所',
      'address' => '〒989-3123 宮城県仙台市青葉区錦ヶ丘8-12-22',
      'tel' => '022-391-6196',
      'fax' => '022-391-6195',
      'map_location' => 'https://maps.app.goo.gl/dAHd58YBmJV6iVNg9'
    ),
    array(
      'modifier' => '',
      'id' => 'facility8',
      'image' => resolve_asset_url('/images/branch/facility8.jpg'),
      'name' => 'Oshikiri Corporation of America',
      'address' => '10425 Drummond Road, Philadelphia, PA 19154, U.S.A.',
      'tel' => '(+1)215-637-6005',
      'fax' => '(+1)215-637-6041',
      'map_location' => 'https://maps.app.goo.gl/Mz1UiXyx4Zekiztf8'
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
  'text_en' => 'branch.',
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
        <img src="<?php echo resolve_asset_url('/images/branch/sitemap3.png')?>" alt="sitemap">
      </div>
      <div class="company-branch-legend">
        <dl>
          <dt>本社</dt>
          <dd><a href="#facility1">本社 / 湘南工場</a></dd>
        </dl>
        <dl>
          <dt>工場</dt>
          <dd><a href="#facility2">山形工場</a></dd>
        </dl>
        <dl>
          <dt>営業所</dt>
          <dd class="company-branch-legend-group">
            <span><a href="#facility11">札幌</a></span>
            <span><a href="#facility12">仙台</a></span>
            <span><a href="#facility1">東京</a></span>
            <span><a href="#facility3">名古屋</a></span>
            <span><a href="#facility4">大阪</a></span>
            <span><a href="#facility5">福岡</a></span>
          </dd>
        </dl>
        <dl>
          <dt>オシキリグループ</dt>
          <dd>
          <span>富士物産株式会社</span><br>
          <span>広州昌洋有限公司</span><br>
            <a href="#facility8">オシキリ・コーポレーション・オブ・アメリカ</a>
          </dd>
        </dl>
      </div>
    </div>

    <?php if(!empty($facilities)) {?>
      <div class="company-branch-facilities">
        <?php foreach($facilities as $facility) { ?>
          <?php import_part('facility', array(
            'modifier' => $facility["modifier"],
            'id' => $facility["id"],
            'image' => $facility["image"],
            'name' => $facility["name"],
            'address' => $facility["address"],
            'tel' => $facility["tel"],
            'fax' => $facility["fax"],
            'map_location' => $facility["map_location"],
            'head_office_detail_pc' => empty($facility["head_office_detail_pc"]) ? '' :  $facility["head_office_detail_pc"],
            'head_office_detail_sp' => empty($facility["head_office_detail_sp"]) ? '' :  $facility["head_office_detail_sp"],
          ));?>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
</div>

<?php import_part('/composition-slots/composition-end');?>
<?php
get_footer();