<a class="card <?php echo $modifier; ?>" href="<?php echo $link; ?>">
  <div class="card-figure">
    <img class="card-image" src="<?php echo $image; ?>" alt="">
  </div>
  <div class="card-content">
    <h3 class="card-title"><?php echo $title; ?></h3>
    <div class="card-tax">
      <span class="card-category"><?php echo $category?></span>
      <?php if(!empty($tags)) { ?>
        <div class="card-tags">
          <?php foreach ($tags as $tag) { ?>
            <span class="card-tag"><?php echo $tag; ?></span>
          <?php } ?>
        </div>
      <?php } ?>
    </div>
  </div>
</a>