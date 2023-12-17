<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

<?php
  $breadcrumbs = [
    array(
      'text' => 'TOP',
      'url' => resolve_url(),
    ),
    array(
      'text' => '最新情報',
      'url' => '#',
    ),
    array(
      'text' => get_the_title(),
      'url' => '#',
    ),
  ];
  $categories = get_the_terms(get_the_ID(), NEWS_POST_TYPE_CATEGORY);
  $tags = get_the_terms(get_the_ID(), NEWS_POST_TYPE_TAG);
?>

<?php import_part('banner-single', array(
  'modifier' => 'banner-single-news',
  'text_jp' => '最新情報',
  'text_en' => 'News.',
  'breadcrumbs' => $breadcrumbs
));?>
<main class="vlog vlog-case">

  <h1 class="vlog-title">
    <?php the_title();?>
    <span class="vlog-title-icon"></span>
  </h1>

  <div class="vlog-case-acf">
    <div class="vlog-case-acf-upper">
      <div class="vlog-case-acf-featured">
        <img src="<?php the_field('featured_image') ?>" alt="">
      </div>
      <div class="vlog-case-acf-details">
        <div class="vlog-case-acf-logo">企業LOGO</div>

        <div class="vlog-case-acf-info">
          <?php if( have_rows('info') ):?>
            <?php while ( have_rows('info') ) : the_row();?>
              <dl class="vlog-case-acf-info-list">
                <dt class="vlog-case-acf-info-title"><?php echo get_sub_field('info_title'); ?></dt>
                <dd class="vlog-case-acf-info-desc"><?php echo get_sub_field('info_details'); ?></dd>
              </dl>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>

      </div>
    </div>
    <div class="vlog-case-acf-lower">
      <div class="vlog-case-acf-manufactured">
        <h4 class="vlog-case-acf-label">製造製品</h4>
        <div class="vlog-case-acf-content">
          <?php the_field('manufactured_products') ?>
        </div>
      </div>
      <div class="vlog-case-acf-machinery">
        <h4 class="vlog-case-acf-label">オシキリの導入機械</h4>
        <div class="vlog-case-acf-content">
          <?php the_field('introduction_machinery') ?>
        </div>
        
      </div>
    </div>
  </div>

  <div class="single single-content">
    <?php the_content(); ?>
  </div>

  <?php import_part("related-cases", array(
    'excludedId' => get_the_ID()
  )); ?>

</main>
<?php endwhile; ?>

<?php
get_footer();