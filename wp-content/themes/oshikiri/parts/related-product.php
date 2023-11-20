<?php 
$category = get_field('select_category');
?>

<div class="related-products">
  <div class="related-products-content">
    <div class="related-products-top">
      <h4 class="related-products-heading">関連商品</h4>
    </div>
    <div class="related-products-posts">
      <?php if($category == 'Bread') { ?>
        <?php import_part("product-type"); ?>
      <?php } elseif ($category == 'Line') { ?>
        <?php import_part("product-line"); ?>
      <?php } else { ?>
        <?php import_part("product-category", array(
          'showCategory' => 'false'
        )); ?>
      <?php } ?>
    </div>
    <?php import_part("button", array(
      'modifier' => 'related-products-button',
      'link_url' => resolve_archive_url(PRODUCT_POST_TYPE),
      'link_text' => '一覧へ戻る',
      'link_icon' => '#arrow'
    ))?>
  </div>
</div>