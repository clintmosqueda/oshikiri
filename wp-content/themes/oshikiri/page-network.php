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
      'text' => '会社概要',
      'url' => resolve_url('company/profile'),
    ),
    array(
      'text' => '沿革',
      'url' => resolve_url('company/history'),
    ),
    array(
      'modifier' => 'is-active',
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
      'text' => '海外ネットワーク',
      'url' => '#',
    ),
  ];
?>

<?php 
/*
* Template name: Network
*/
get_header(); ?>
<?php import_part('banner', array(
  'modifier' => '',
  'image' => resolve_asset_url('/images/banner/network.jpg'),
  'text_jp' => '海外ネットワーク',
  'text_en' => 'network.',
  'breadcrumbs' => $breadcrumbs
));?>


<?php import_part('/composition-slots/composition-start', array(
  'sidebar_links' => $sidebar_links,
  'breadcrumbs' => $breadcrumbs
));?>

<div class="company-network">
  <p class="company-network-par">オシキリグループの海外の技術提携/販売提携先を紹介します。</p>
  <div class="company-network-partnership">
    <?php import_part('caption', array(
      'modifier' => 'company-network-caption',
      'text' => '販売提携'
    ));?>

    <div class="company-network-partners">

      <div class="partner">
        <div class="partner-figure">
          <img src="<?php echo resolve_asset_url('/images/network/partner-image1.jpg')?>" alt="">
        </div>
        <div class="partner-content">
          <h3 class="partner-title">PT.MACHINDOTAMA ABADI</h3>
          <p class="partner-par">Pasar Modern Paramount Serpong,Ruko Tematik Blok R Nomor 17,Jalan Raya Serpong,Kelurahan Curug Sangereng,Kecamatan Kalapa Dua,Kabupaten Tangerang,Provinsi Banten 15810</p>
          <p class="partner-par">Tel：+62 21 543 74659</p>
          <a class="partner-link" target="_blank" href="www.baro.co.id">www.baro.co.id</a>
        </div>
      </div>

      <div class="partner">
        <div class="partner-figure">
          <img src="<?php echo resolve_asset_url('/images/network/partner-image1.jpg')?>" alt="">
        </div>
        <div class="partner-content">
          <h3 class="partner-title">JCG Marketing Group,Inc.</h3>
          <p class="partner-par">1308 Oroquieta Street,Sta.Cruz Manila,Philippines 1003</p>
          <p class="partner-par">Tel:(632)7337032,7359650<br>Fax:(632)7334216</p>
          <a class="partner-link" target="_blank" href="www.jcgmarketing.com">www.jcgmarketing.com</a>
        </div>
      </div>

      <div class="partner">
        <div class="partner-figure">
          <img src="<?php echo resolve_asset_url('/images/network/partner-image1.jpg')?>" alt="">
        </div>
        <div class="partner-content">
          <h3 class="partner-title">KWANG IL TRADING CO.（光一貿易）</h3>
          <p class="partner-par">Triflex #309-317,PungjeonRo 37-9,DanwonGu,AnsanSi,GyounggiDo,Korea</p>
          <p class="partner-par">Tel:+82-31-495-0809</p>
        </div>
      </div>

    </div>
  </div>
</div>

<?php import_part('/composition-slots/composition-end');?>
<?php
get_footer();