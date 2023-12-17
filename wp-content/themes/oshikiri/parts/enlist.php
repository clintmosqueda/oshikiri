<section class="enlist">
  <div class="enlist-figure">
    <img src="<?php echo resolve_asset_url('/images/recruit-model-v2.png'); ?>" alt="">
  </div>
  <?php import_part("heading", array(
    'modifier' => 'enlist-heading',
    'heading' => 'Recruit',
    'subheading' => '採用情報'
  ));?>

  <p class="enlist-par">あなたが今朝食べた食パンも
    オシキリの機械で<br class="show-sp"/>つくられたものかもしれません。
    人と食の関係を創造するオシキリで、
    共に大きな可能性に挑戦しませんか？</p>

  <?php import_part("button", array(
    'modifier' => 'enlist-button',
    'link_url' => resolve_url('recruit'),
    'link_text' => 'もっとみる',
    'link_icon' => '#arrow'
  ))?>

</section>