<?php
  $breadcrumbs = [
    array(
      'text' => 'TOP',
      'url' => resolve_url(),
    ),
    array(
      'text' => '会社情報',
      'url' => resolve_url('company'),
    ),
    array(
      'text' => 'オシキリを支える人と技術',
      'url' => '#',
    ),
  ];

  $args = array(
    'taxonomy' => EMPLOYEE_POST_TYPE_CATEGORY,
    // 'orderby' => 'count',
    'order'   => 'DESC',
    // 'hide_empty' => false,
    // 'number' => 3
  );
  $categories = get_categories($args);
  
  get_header(); 
?>
<?php import_part('banner', array(
  'modifier' => '',
  'image' => resolve_asset_url('/images/banner/people.jpg'),
  'text_jp' => 'オシキリを支える人と技術',
  'text_en' => 'People.',
  'breadcrumbs' => $breadcrumbs
));?>


<?php import_part('/composition-slots/composition-start', array(
  'breadcrumbs' => $breadcrumbs,
  'modifier' => 'employee-composition'
));?>

<div class="employee">
  <p class="employee-excerpt">オシキリの社内について、またそこで働く人々の声を紹介します。</p>
  
  <div class="employee-archives">
    <?php 
      foreach($categories as $category) {
        if($category) {
    ?>
      <div class="employee-group">
        <?php import_part('caption', array(
          'modifier' => 'employee-caption',
          'text' => $category->name
        ));?>
        <div class="employee-cards">
          <?php
            $args = array(
              'post_type' => EMPLOYEE_POST_TYPE,
              'tax_query' => array(
                  array(
                  'taxonomy' => EMPLOYEE_POST_TYPE_CATEGORY,
                  'field'    => 'slug',
                  'terms'    => $category->name
                  )
                )
              );
            $posts = new WP_Query( $args );
          ?>
          <?php
            while($posts->have_posts()):
              $posts->the_post();
          ?>
            <?php import_part('card-employee')?>
          <?php endwhile; wp_reset_postdata();?>

        </div>
      </div>
    <?php }} ?>
  </div>
</div>



<?php import_part('/composition-slots/composition-end');?>
<?php
get_footer();