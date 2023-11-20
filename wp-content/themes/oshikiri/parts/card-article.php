<div class="card-article" href="">
  <div class="card-article-figure">
    <img src="<?php echo resolve_asset_url('/images/about/about-image2.jpg'); ?>" alt="">
  </div>
  <div class="card-article-content">
    <h3 class="card-article-title"><?php echo $title; ?></h3>
    <p class="card-article-desc"><?php echo $desc; ?></p>
    <?php if(!empty($link_url)) {?>
      <?php import_part("button", array(
        'modifier' => 'card-article-button',
        'link_url' => $link_url,
        'link_text' => $link_text,
        'link_icon' => '#arrow'
      ))?>
    <?php } ?>
  </div>
</div>