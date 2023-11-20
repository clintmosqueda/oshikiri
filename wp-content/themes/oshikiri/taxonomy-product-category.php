<?php 
$breadcrumbs = [
  array(
    'text' => 'TOP',
    'url' => resolve_url(),
  ),
  array(
    'text' => '製品情報',
    'url' => '#',
  ),
];

get_header(); ?>
<?php import_part('banner', array(
  'modifier' => '',
  'image' => resolve_asset_url('/images/banner/product.jpg'),
  'text_jp' => '製品情報',
  'text_en' => 'Products.',
  'breadcrumbs' => $breadcrumbs
));?>

<?php import_part('breadcrumbs', array(
  'breadcrumbs' => $breadcrumbs,
  'modifier' => 'breadcrumbs-product-archive'
));?>
<main class="product-category-tax">
  <?php import_part('assembly/assembly-start');?>
    <div class="assembly-products">
      <div class="assembly-product" id="type" data-assembly="type">
        <?php import_part("product-type", array(
          'modifier' => '',
        )); ?>
      </div>
      <div class="assembly-product" id="line" data-assembly="line">
        <?php import_part("product-line", array(
          'modifier' => '',
        )); ?>
      </div>
      <div class="assembly-product" id="category" data-assembly="category">
        <?php import_part("product-category-tax"); ?>
      </div>
    </div>
  <?php import_part('assembly/assembly-end');?>
</main>
<?php
get_footer();