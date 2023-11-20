<?php get_header(); ?>
<?php import_part('banner', array(
  'modifier' => '',
  'image' => resolve_asset_url('/images/banner/case.jpg'),
  'text_jp' => '導入事例',
  'text_en' => 'Case.'
));?>

<?php
  $breadcrumbs = [
    array(
      'text' => 'TOP',
      'url' => resolve_url(),
    ),
    array(
      'text' => '導入事例',
      'url' => '#',
    ),
  ];
?>

<?php import_part('/composition-slots/composition-start', array(
  'breadcrumbs' => $breadcrumbs
));?>
<div class="cases-archives">
  <div class="cases-articles">
    <?php import_part("card-cases", array(
      'modifier' => 'cases-archive-card',
      'link' => '',
      'image' => resolve_asset_url('/images/card-cases1.jpg'),
      'title' => '株式会社三好屋食品工業様',
      'desc' => 'ベルトドライブプルーファ後、チェーンカス等の異物混入の不安がなくなりました。'
    ));?>
    <?php import_part("card-cases", array(
      'modifier' => '',
      'link' => '',
      'image' => resolve_asset_url('/images/card-cases1.jpg'),
      'title' => '株式会社三好屋食品工業様',
      'desc' => 'ベルトドライブプルーファ後、チェーンカス等の異物混入の不安がなくなりました。'
    ));?>
    <?php import_part("card-cases", array(
      'modifier' => '',
      'link' => '',
      'image' => resolve_asset_url('/images/card-cases1.jpg'),
      'title' => '株式会社三好屋食品工業様',
      'desc' => 'ベルトドライブプルーファ後、チェーンカス等の異物混入の不安がなくなりました。'
    ));?>
    <?php import_part("card-cases", array(
      'modifier' => '',
      'link' => '',
      'image' => resolve_asset_url('/images/card-cases1.jpg'),
      'title' => '株式会社三好屋食品工業様',
      'desc' => 'ベルトドライブプルーファ後、チェーンカス等の異物混入の不安がなくなりました。'
    ));?>
    <?php import_part("card-cases", array(
      'modifier' => '',
      'link' => '',
      'image' => resolve_asset_url('/images/card-cases1.jpg'),
      'title' => '株式会社三好屋食品工業様',
      'desc' => 'ベルトドライブプルーファ後、チェーンカス等の異物混入の不安がなくなりました。'
    ));?>
  </div>

  <div class="pagination">
    <div class="pagination-nav pagination-prev">
      <span class="pagination-nav-icon">
        <?php import_part("svg", array(
          'svg_class' => '',
          'svg_id' => '#arrow'
        ))?>
      </span>
      前へ
    </div>
    <div class="pagination-select">
      <div class="pagination-label">
        <div class="pagination-label-wrap">
          <span class="pagination-page pagination-page-current">1</span>
          /
          <span class="pagination-page pagination-page-last">7</span>
        </div>
        <span class="pagination-caret"></span>
      </div>
      <div class="pagination-list">1/7</div>
    </div>
    <div class="pagination-nav pagination-next">
      次へ
      <span class="pagination-nav-icon">
        <?php import_part("svg", array(
          'svg_class' => '',
          'svg_id' => '#arrow'
        ))?>
      </span>
    </div>
  </div>
</div>
<?php import_part('/composition-slots/composition-end');?>
<?php
get_footer();