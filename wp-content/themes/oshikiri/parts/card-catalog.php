<?php
$modifier = empty($modifier) ? '' : $modifier;
$categories = empty($categories) ? '' : $categories;
$title = empty($title) ? '' : $title;
$img = empty($img) ? '' : $img;
$file = empty($file) ? '' : $file;
?>

<div class="card-catalog <?php echo $modifier; ?>">
  <div class="">
    <div class="card-categories">
      <?php foreach($categories as $category ) { ?>
        <span class="card-catalog-category"><?php echo $category->name; ?></span>
      <?php } ?>
    </div>
    <h3 class="card-catalog-title"><?php echo $title; ?></h3>
  </div>
  <div class="">
    <div class="card-catalog-figure">
      <img src="<?php echo $img; ?>" alt="">
    </div>
    <a 
      data-material="<?php echo $file; ?>"
      class="card-catalog-button" 
      href="<?php echo resolve_url('download?document='. $title); ?>">資料ダウンロード</a>
  </div>
</div>