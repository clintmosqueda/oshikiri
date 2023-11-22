<?php
$modifier = empty($modifier) ? '' : $modifier;
$itemPerPage = empty($itemPerPage) ? -1 : $itemPerPage;
$showCategory = empty($showCategory) ? 'true' : $showCategory;
$excludedId = empty($excludedId) ? '' : $excludedId;

$args = array(
  'posts_per_page'    => $itemPerPage,
  'post_type'     => PRODUCT_POST_TYPE,
  'post__not_in'   => array($excludedId),
  'meta_key'      => 'select_category',
  'meta_value'    => 'product'
);
$the_query = new WP_Query( $args );

$args = array(
  'taxonomy' => PRODUCT_CATEGORY,
  'orderby' => 'name',
  'order'   => 'ASC',
  'hide_empty' => false,
);
$categories = get_categories($args);
?>

<?php if( $the_query->have_posts() ): ?>
<div class="product-machine">
  <?php if($showCategory == 'true') { ?>
    <div class="product-machine-categories">
      <span class="product-machine-category-heading">Category</span>
      <ul class="product-machine-category-list">
        <?php foreach($categories as $category) : ?>
          <li class="product-machine-category-item">
            <a class="product-machine-category-link" href="<?php echo get_category_link($category->cat_ID)?>"><?php echo $category->name;?></a>
          </li>
        <?php endforeach; ?>
        </ul>
    </div>
  <?php } ?>
  <div class="product-machine-post">
    <ul class="product-machine-list">
      <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <li class="product-machine-item">
          <a class="product-machine-link" href="<?php echo get_permalink();?>">
            <div class="product-machine-content">
              <div class="product-machine-figure">
                <img class="product-machine-image" src="<?php echo get_eyecatch_data(get_the_ID(), 'product-machine-thumbnail', '')?>"
                  alt="bread">
              </div>
              <p class="product-machine-title"><?php the_title();?></p>
            </div>
          </a>
        </li>
      <?php endwhile; ?>
    </ul>
  </div>

</div>
<?php endif; ?>
<?php wp_reset_query();?>