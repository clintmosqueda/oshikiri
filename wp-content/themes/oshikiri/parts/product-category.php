<?php
$modifier = empty($modifier) ? '' : $modifier;
$itemPerPage = empty($itemPerPage) ? -1 : $itemPerPage;
$showCategory = empty($showCategory) ? 'true' : $showCategory;
$excludedId = empty($excludedId) ? '' : $excludedId;
$isRelated = empty($isRelated) ? '' : $isRelated;

$mpc = get_field('main_product_categories')->name;

$args = array(
  'posts_per_page'    => $itemPerPage,
  'post_type'     => PRODUCT_POST_TYPE,
  'post__not_in'   => array($excludedId),
  'meta_key'      => 'select_category',
  'meta_value'    => 'product',
  
);
$args2 = array(
  'posts_per_page'    => $itemPerPage,
  'post_type'     => PRODUCT_POST_TYPE,
  'post__not_in'   => array($excludedId),
  'tax_query'      => array(
    array(
      'taxonomy' => PRODUCT_CATEGORY,
      'field'    => 'slug',
      'terms'    => $mpc
    )
  )
);

$the_query = $isRelated ? new WP_Query( $args2 )  : new WP_Query( $args );
$post_arr = array();

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
      <?php foreach($categories as $category) : 
        $args3 = array(
          'posts_per_page'    => -1,
          'post_type'     => PRODUCT_POST_TYPE,
          'meta_key'      => 'select_category',
          'meta_value'    => 'product',
          'tax_query'      => array(
            array(
              'taxonomy' => PRODUCT_CATEGORY,
              'field'    => 'slug',
              'terms'    => $category,
              'hide_empty' => true,
            )
          )
        );
        $the_queries = new WP_Query( $args3 );
      ?>
        <?php while( $the_queries->have_posts() ) : $the_queries->the_post(); ?>
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
      <?php endforeach; ?>
    </ul>
  </div>

</div>
<?php endif; ?>
<?php wp_reset_query();?>