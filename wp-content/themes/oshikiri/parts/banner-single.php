<section class="banner-single <?php echo $modifier; ?>">
  <?php import_part('circle', array(
    'modifier' => 'banner-single-circle',
    'circle_count' => 30
  ))?>

  <div class="banner-single-content">
    <div class="banner-single-wrap">
      <h2 class="banner-single-heading">
        <span class="banner-single-heading-jp"><?php echo $text_jp; ?></span>
        <span class="banner-single-heading-en"><?php echo $text_en; ?></span>
      </h2>

      <?php if(!empty($image)) { ?>
        <div class="banner-single-figure">
          <img src="<?php echo $image; ?>" alt="<?php echo $text_jp; ?>">
        </div>
      <?php } ?>
    </div>

    <?php import_part('breadcrumbs', array(
      'breadcrumbs' => $breadcrumbs,
      'modifier' => 'breadcrumbs-banner-single'
    ));?>

  </div>


</section>