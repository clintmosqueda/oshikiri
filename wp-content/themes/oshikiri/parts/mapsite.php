<section class="mapsite <?php echo $modifier; ?>">
  <h3 class="mapsite-label">
    <span class="mapsite-label-icon"></span>
    <?php echo $label; ?>
  </h3>
  <ul class="mapsite-list">
    <?php foreach($links as $link) { ?>
      <li class="mapsite-item">
        <a class="mapsite-link <?php echo $link["class"]?>" data-tab="<?php echo $link["data-tab"]?>" href="<?php echo $link["url"]; ?>">
          <?php echo $link["text"]; ?>
          <span class="mapsite-link-icon">
            <?php import_part("svg", array(
              'svg_class' => '',
              'svg_id' => '#arrow'
            ))?>
          </span>
        </a>
      </li>
    <?php } ?>
  </ul>
</section>