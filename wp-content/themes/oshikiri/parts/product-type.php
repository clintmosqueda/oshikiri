<?php
$modifier = empty($modifier) ? '' : $modifier;
$itemPerPage = empty($itemPerPage) ? -1 : $itemPerPage;
$excludedId = empty($excludedId) ? '' : $excludedId;

$args = array(
  'posts_per_page'    => $itemPerPage,
  'post_type'     => PRODUCT_POST_TYPE,
  'post__not_in'   => array($excludedId),
  'meta_key'      => 'select_category',
  'meta_value'    => 'bread'
);
$the_query = new WP_Query( $args );

?>
<?php if( $the_query->have_posts() ): ?>
<div class="product-type">

  <ul class="product-type-list">
    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <li class="product-type-item">
        <a class="product-type-link" href="<?php echo get_permalink();?>">
          <div class="product-type-content">
            <div class="product-type-figure">
              <img class="product-type-image" src="<?php echo get_eyecatch_data(get_the_ID(), 'product-type-thumbnail', '')?>"
                alt="bread">
            </div>
            <p class="product-type-title"><?php the_title();?></p>
          </div>
        </a>
      </li>
    <?php endwhile; ?>
  </ul>

</div>
<?php endif; ?>
<?php wp_reset_query();?>