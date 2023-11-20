<div class="breadcrumbs <?php echo $modifier; ?>">
  <?php foreach($breadcrumbs as $breadcrumb) {?>
    <a class="breadcrumbs-link" href="<?php echo $breadcrumb["url"]; ?>"><?php echo $breadcrumb["text"]; ?></a>
  <?php } ?>
</div>