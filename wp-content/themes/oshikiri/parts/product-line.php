<?php
$modifier = empty($modifier) ? '' : $modifier;
$itemPerPage = empty($itemPerPage) ? -1 : $itemPerPage;

$args = array(
  'posts_per_page'    => $itemPerPage,
  'post_type'     => PRODUCT_POST_TYPE,
  'meta_key'      => 'select_category',
  'meta_value'    => 'line'
);
$the_query = new WP_Query( $args );

?>
<?php if( $the_query->have_posts() ): ?>
<div class="product-line">

  <ul class="product-line-list">
    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <li class="product-line-item">
        <a class="product-line-link" href="<?php echo get_permalink();?>">
          <div class="product-line-content">
            <div class="product-line-figure">
              <img class="product-line-image" src="<?php echo get_eyecatch_data(get_the_ID(), 'product-line-thumbnail', '')?>"
                alt="bread">
            </div>
            <p class="product-line-title"><?php the_title();?></p>
          </div>
        </a>
      </li>
    <?php endwhile; ?>
  </ul>

</div>
<?php endif; ?>
<?php wp_reset_query();?>