<?php
$modifier = empty($modifier) ? '' : $modifier;

$args = array(
  'taxonomy' => PRODUCT_CATEGORY,
  'orderby' => 'name',
  'order'   => 'ASC',
  'hide_empty' => false,
);
$categories = get_categories($args);
?>


<div class="product-machine">
  <div class="product-machine-categories">
    <span class="product-machine-category-heading">Category</span>
    <ul class="product-machine-category-list">
      <?php foreach($categories as $category) : ?>
        <li class="product-machine-category-item <?php echo $category->name == get_queried_object()->name ? 'is-active' : '' ?>">
          <a class="product-machine-category-link" href="<?php echo get_category_link($category->cat_ID)?>"><?php echo $category->name;?></a>
        </li>
      <?php endforeach; ?>
      </ul>
  </div>
  <div class="product-machine-post">
    <?php if(have_posts()) { ?>
    <ul class="product-machine-list">
      <?php while (have_posts()) : the_post();
        $type = get_field('select_category');
        if($type == 'Product'):
       ?>
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
      <?php endif; endwhile; ?>
    </ul>
    <?php } else { ?>
      <p class="product-machine-post-empty">No Post Found</p>
    <?php } ?>
  </div>

</div>
