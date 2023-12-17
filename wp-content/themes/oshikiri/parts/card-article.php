<?php
$modifier = empty($modifier) ? '' : $modifier;
$image = empty($image) ? '' : $image;
?>

<div class="card-article <?php echo $modifier; ?>" href="">
  <div class="card-article-figure">
    <img src="<?php echo $image; ?>" alt="">
  </div>
  <div class="card-article-content">
    <?php if(!empty($title)) {?>
      <h3 class="card-article-title"><?php echo $title; ?></h3>
    <?php } ?>
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