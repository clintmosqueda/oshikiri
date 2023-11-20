<?php get_header(); ?>
<?php
    global $wp_query; 
    $itemsFound = $wp_query->found_posts;
?>
  <?php import_part('eyecatch', array(
    'modifier'    => '',
    'heading'     => 'SEARCH',
    'subheading'  => '探す',
    'image'       => '/images/eyecatch-category.jpg',
  )) ?>

  <section class="classification">
    <div class="l-wrapper classification-wrapper">
      <div class="classification-content">
        <div class="classification-topics">
          <h2 class="classification-heading classification-heading-category heading"><span>Search Results for:</span> <?php echo get_search_query(); ?></h2>
          <?php if(have_posts()) : ?>
          <div class="classification-cards">
            <?php while (have_posts()) : the_post(); ?>
              <?php import_part('related-card', array(
                'modifier'  => 'classification-card',
                'link'      => get_permalink(),
                'image'     => get_eyecatch_data(get_the_ID(), 'card-image-lg', ''),
                'title'     => get_the_title(),
                'category'  => get_the_terms(get_the_ID(), TOPICS_POST_TYPE_CATEGORY),
                'time'      => get_the_time('Y.m.d')
              )) ?>
            <?php endwhile; ?>

            <?php if($itemsFound > 8) { ?>
              <div class="classification-pager">
                <?php
                  previous_posts_link('<span class="classification-pager-arrow classification-pager-prev"></span>');
                  // if (get_previous_posts_link() == '') { echo '<span class="classification-pager is-disabled">«</span>';}
                  wp_pagenavi();
                  next_posts_link('<span class="classification-pager-arrow classification-pager-next"></span>');
                  // if (get_next_posts_link() == '') { echo '<span class="pager-next is-disabled">»</span>'; }
                ?>
              </div>
            <?php } ?>
          </div>
          <?php else : ?>
            <p class="search-not-found">Posts not Found</p>
          <?php endif; ?>
        </div>
        <aside class="classification-aside">
          <div class="classification-search">
            <?php get_search_form(); ?>
          </div>
          <div class="classification-category">
            <h3 class="classification-aside-heading">カテゴリー</h3>
            <?php import_part('category-list')?>
          </div>
          <div class="classification-recommended">
            <h3 class="classification-aside-heading">おすすめ記事</h3>
            <?php import_part('recommend-list')?>
          </div>
        </aside>
      </div>
    </div>
  </section>
<?php
get_footer();
