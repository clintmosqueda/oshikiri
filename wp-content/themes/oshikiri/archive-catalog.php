<?php
get_header(); 
global $wp_query; 
$itemsFound = $wp_query->found_posts;
?>
<?php
  $breadcrumbs = [
    array(
      'text' => 'TOP',
      'url' => resolve_url(),
    ),
    array(
      'text' => 'カタログ一覧',
      'url' => '#',
    ),
  ];
?>

<?php import_part('banner', array(
  'modifier' => 'banner-alt',
  'text_jp' => 'カタログ一覧',
  'text_en' => 'Catalog.',
  'circle_count' => 30,
  'breadcrumbs' => $breadcrumbs
));?>


<main class="composition catalog">
  <aside class="composition-sidebar catalog-sidebar">
    <div class="composition-sidebar-links">
      <h3 class="catalog-sidebar-heading">Category</h3>
      <?php
        $args = array(
          'taxonomy' => CATALOG_POST_TYPE_CATEGORY,
          'orderby' => 'name',
          'order'   => 'ASC',
          'hide_empty' => false,
        );
        $categories = get_categories($args);
      ?>
      <ul class="catalog-sidebar-list">
        <?php foreach($categories as $category) : ?>
        <li class="catalog-sidebar-item">
          <a class="catalog-sidebar-link" href="<?php echo get_term_link($category->name, CATALOG_POST_TYPE_CATEGORY) ?>"><?php echo $category->name;?></a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </aside>
  <section class="composition-body catalog-body">
    <?php import_part('breadcrumbs', array(
      'breadcrumbs' => $breadcrumbs
    ))?>

    <div class="catalog-content">
      <div class="catalog-cards">
        <?php if ( have_posts() ) : ?>
          <?php $count = 0;?>
          <?php while ( have_posts() ) : the_post(); 
          $categories = get_the_terms(get_the_ID(), CATALOG_POST_TYPE_CATEGORY);
          // Start Loop: ?>
            <?php if ( $count % 4 ==  0) : ?>
              <?php echo $count > 0 ? "</div>" : "" ?>
              <?php echo "<div class='catalog-cards-row'>"?>
            <?php endif;?>
            <?php import_part('card-catalog', array(
              'title' => get_the_title(),
              'img' => get_eyecatch_data(get_the_ID(), 'card-catalog', ''),
              'categories' => $categories,
              'file' =>  get_field('material_pdf')
            ))?>
          <?php $count++; endwhile; // End Loop. ?>
        <?php endif; ?>
      </div>
      <?php if($itemsFound > 12) { ?>
        <?php import_part ('pagination')?>
      <?php  } ?>
    </div>
  </section>
</main>

<?php
get_footer();