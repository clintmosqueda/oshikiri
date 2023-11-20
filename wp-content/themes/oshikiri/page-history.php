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
      'modifier' => 'is-active',
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

    <dl class="company-history-list">
      <dt class="company-history-term">1949</dt>
      <dd class="company-history-description">
        <p class="company-history-par">押切龍雄が神奈川県横浜市鶴見にて、製パン用の小型低速 横型ミキサを開発、販売をはじめる。</p>
        <div class="company-history-figure">
          <img src="<?php echo resolve_asset_url('/images/history/history-image1.jpg')?>" alt="">
        </div>
      </dd>
    </dl>

    <dl class="company-history-list">
      <dt class="company-history-term">1949</dt>
      <dd class="company-history-description">
        <p class="company-history-par">東京 大森で法人化。</p>
      </dd>
    </dl>

    <dl class="company-history-list">
      <dt class="company-history-term">1949</dt>
      <dd class="company-history-description">
        <p class="company-history-par">学校給食や食生活の洋風化が進み、新製品の竪型ミキサ、生地分割機などを開発。</p>
      </dd>
    </dl>

    <dl class="company-history-list">
      <dt class="company-history-term">1949</dt>
      <dd class="company-history-description">
        <p class="company-history-par">学校給食や食生活の洋風化が進み、新製品の竪型ミキサ、生地分割機などを開発。</p>
      </dd>
    </dl>

    <dl class="company-history-list">
      <dt class="company-history-term">1949</dt>
      <dd class="company-history-description">
        <p class="company-history-par">押切龍雄が神奈川県横浜市鶴見にて、製パン用の小型低速 横型ミキサを開発、販売をはじめる。</p>
      </dd>
    </dl>

    <dl class="company-history-list">
      <dt class="company-history-term">1949</dt>
      <dd class="company-history-description">
        <p class="company-history-par">押切龍雄が神奈川県横浜市鶴見にて、製パン用の小型低速 横型ミキサを開発、販売をはじめる。</p>
      </dd>
    </dl>

    <dl class="company-history-list">
      <dt class="company-history-term">1949</dt>
      <dd class="company-history-description">
        <p class="company-history-par">押切龍雄が神奈川県横浜市鶴見にて、製パン用の小型低速 横型ミキサを開発、販売をはじめる。</p>
      </dd>
    </dl>

  </div>
</div>

<?php import_part('/composition-slots/composition-end');?>
<?php
get_footer();