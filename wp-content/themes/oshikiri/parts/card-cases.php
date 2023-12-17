<?php
$modifier = empty($modifier) ? '' : $modifier;
$link = empty($link) ? '' : $link;
$image = empty($image) ? '' : $image;
$title = empty($title) ? '' : $title;
$desc = empty($desc) ? '' : $desc;
?>

<a class="card-cases <?php echo $modifier; ?>" href="<?php echo $link; ?>">
  <div class="card-cases-figure">
    <img class="card-cases-image" src="<?php echo $image; ?>" alt="">
    <span></span>
  </div>
  <div class="card-cases-content">
    <?php if(!empty($title)) { ?>
      <h3 class="card-cases-title"><?php echo $title; ?></h3>
    <?php } ?>
    <p class="card-cases-par"><?php echo $desc; ?></p>
  </div>
</a>