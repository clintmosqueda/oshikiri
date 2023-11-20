<a href="<?php echo $link_url; ?>" class="button <?php echo $modifier; ?>">
  <?php echo $link_text; ?>

  <?php if(!empty($link_icon)) { ?>
  <span class="button-icon">
    <?php import_part("svg", array(
      'svg_class' => '',
      'svg_id' => $link_icon
    ))?>
  </span>
  <?php } ?>
</a>