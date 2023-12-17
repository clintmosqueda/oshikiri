<?php
$modifier = empty($modifier) ? '' : $modifier;
$excludedId = empty($excludedId) ? '' : $excludedId;
$args = array(
  'posts_per_page'    => 3,
  'post_type'     => CASE_POST_TYPE,
  'post__not_in'   => array($excludedId),
);

$cases = new WP_Query( $args )
?>

<?php if( $cases->have_posts() ): ?>
<section class="related-cases <?php echo $modifier?>">
  <?php import_part("heading", array(
    'modifier' => 'related-cases-heading',
    'heading' => 'Cases',
    'subheading' => '導入事例'
  ));?>
  <div class="related-cases-cards">
    <div class="swiper related-cases-carousel js-related-cases-carousel">
      <div class="swiper-wrapper">
        <?php while( $cases->have_posts() ) : $cases->the_post(); ?>
          <div class="swiper-slide">
          <?php import_part("card-cases", array(
              'modifier' => '',
              'link' => get_permalink(),
              'image' => get_field('featured_image'),
              'title' => get_the_title(),
              'desc' => wp_strip_all_tags(get_first_paragraph(50))
            ));?>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php wp_reset_query();?>
