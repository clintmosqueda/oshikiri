<?php 
$modifier = empty($modifier) ? '' : $modifier;
$link = empty($link) ? '' : $link;
$image = empty($image) ? '' : $image;
$title = empty($title) ? '' : $title;
$categories = empty($categories) ? '' : $categories;
$tags = empty($tags) ? '' : $tags;
?>
<a class="card <?php echo $modifier; ?>" href="<?php echo $link; ?>">
  <div class="card-figure">
    <img class="card-image" src="<?php echo $image; ?>" alt="">
  </div>
  <div class="card-content">
    <h3 class="card-title"><?php echo $title; ?></h3>
    <div class="card-tax">
      <?php if(!empty($categories)) { ?>
        <?php foreach ($categories as $category) { ?>
          <span class="card-category"><?php echo $category->name?></span>
        <?php } ?>
      <?php } ?>

      <?php if(!empty($tags)) { ?>
        <div class="card-tags">
          <?php foreach ($tags as $tag) { ?>
            <span class="card-tag"><?php echo $tag->name; ?></span>
          <?php } ?>
        </div>
      <?php } ?>
    </div>
  </div>
</a>