<main class="composition <?php echo $modifier; ?>">
  <aside class="composition-sidebar">
    <div class="composition-sidebar-links">
      <?php if(!empty($sidebar_links)) {?>
        <?php foreach($sidebar_links as $link) { ?>
          <a href="<?php echo $link["url"]; ?>" class="composition-sidebar-link <?php echo $link["modifier"];?>"><?php echo $link["text"]; ?></a>
        <?php } ?>
      <?php } ?>
    </div>
  </aside>
  <section class="composition-body">
    <?php import_part('breadcrumbs', array(
      'breadcrumbs' => $breadcrumbs,
      'modifier' => 'breadcrumbs-composition'
    ));?>