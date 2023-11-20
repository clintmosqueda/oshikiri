<?php
global $wp;
$current_url = home_url( add_query_arg( array(), $wp->request ) );
?>
<section class="assembly <?php echo $modifier; ?>">
  <div class="wrapper">
    <div class="assembly-content">
      <?php import_part("heading", array(
        'modifier' => 'assembly-heading',
        'heading' => 'Products',
        'subheading' => '製品一覧'
      ));?>
      <div class="assembly-lines">
        <span class="assembly-line is-active">パンの種類から探す</span>
        <span class="assembly-line">ラインから探す</span>
        <span class="assembly-line">製品カテゴリ一覧</span>
      </div>

      <div class="assembly-products">
        <div class="assembly-product is-active">
          <?php import_part("product-type", array(
            'modifier' => '',
            'itemPerPage' => 8,
          )); ?>
        </div>
        <div class="assembly-product">
          <?php import_part("product-line", array(
            'modifier' => '',
            'itemPerPage' => 8,
          )); ?>
        </div>
        <div class="assembly-product">
          <?php import_part("product-category"); ?>
        </div>
      </div>

      <?php if(is_front_page()) :?>
        <?php import_part("button", array(
          'modifier' => 'assembly-button',
          'link_url' => '/',
          'link_text' => 'もっとみる',
          'link_icon' => '#arrow'
          ))?>
      <?php endif;?>
    </div>
  </div>
</section>