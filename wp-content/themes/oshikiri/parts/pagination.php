<div class="pagination">
  <?php
    $prev_link = get_previous_posts_page_link();
    $next_link = get_next_posts_page_link();
    $prev_link_disable = empty(get_previous_posts_link()) ? 'is-disabled' : '' ;
    $next_link_disable = empty(get_next_posts_link()) ? 'is-disabled' : '' ;
  ?>
  <a href="<?php echo $prev_link; ?>" class="pagination-nav pagination-prev <?php echo $prev_link_disable; ?>">
    <span class="pagination-nav-icon">
      <?php import_part("svg", array(
        'svg_class' => '',
        'svg_id' => '#arrow'
      ))?>
    </span>
    前へ
  </a>
  <div class="pagination-select">
    <div class="pagination-label">
      <div class="pagination-label-wrap">
        <?php wp_pagenavi(); ?>
      </div>
      <span class="pagination-caret"></span>
    </div>
    <div class="pagination-list">
      <?php wp_pagenavi(); ?>
    </div>
  </div>
  <a href="<?php echo $next_link; ?>" class="pagination-nav pagination-next <?php echo $next_link_disable; ?>">
    次へ
    <span class="pagination-nav-icon">
      <?php import_part("svg", array(
        'svg_class' => '',
        'svg_id' => '#arrow'
      ))?>
    </span>
  </a>
</div>