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
        <span class="assembly-line" id="assembly-type" data-tab="type">パンの種類から探す</span>
        <span class="assembly-line" id="assembly-line" data-tab="line">ラインから探す</span>
        <span class="assembly-line" id="assembly-category" data-tab="category">製品カテゴリから探す</span>
      </div>