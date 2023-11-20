<?php
  if(empty($circle_count)) { $circle_count = 16; } 
?>

<section class="banner <?php echo $modifier; ?>">
  <?php import_part('circle', array(
    'modifier' => 'banner-circle',
    'circle_count' => $circle_count
  ))?>

  <div class="banner-content">
    <?php import_part('breadcrumbs', array(
      'breadcrumbs' => $breadcrumbs,
      'modifier' => 'breadcrumbs-banner'
    ));?>

    <h2 class="banner-heading">
      <span class="banner-heading-jp"><?php echo $text_jp; ?></span>
      <span class="banner-heading-en"><?php echo $text_en; ?></span>
    </h2>
  </div>

  <?php if(!empty($image)) { ?>
    <div class="banner-figure">
      <img src="<?php echo $image; ?>" alt="<?php echo $text_jp; ?>">
    </div>
  <?php } ?>


</section>