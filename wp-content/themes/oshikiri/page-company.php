<?php
  $breadcrumbs = [
    array(
      'text' => 'TOP',
      'url' => resolve_url(),
    ),
    array(
      'text' => '会社情報',
      'url' => '#',
    ),
  ];
?>

<?php 
/*
* Template name: Company
*/
get_header(); ?>
<?php import_part('banner', array(
  'modifier' => '',
  'image' => resolve_asset_url('/images/banner/company.jpg'),
  'text_jp' => '会社情報',
  'text_en' => 'Company.',
  'breadcrumbs' => $breadcrumbs
));?>

<?php import_part('/composition-slots/composition-start', array(
  'breadcrumbs' => $breadcrumbs
));?>
<div class="company">
  <p class="company-excerpt">多様なニーズに応える技術力により、
  お客様に喜ばれ愛される機械・システム開発を行っています。</p>
  <?php import_part("operation", array(
    'modifier' => "company-operation"
  ));?>
</div>

<?php import_part('/composition-slots/composition-end');?>
<?php
get_footer();