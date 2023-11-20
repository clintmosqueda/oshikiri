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
<main class="vlog vlog-news">
  <div class="vlog-group">
    <?php foreach($categories as $category ) {?>
      <a class="vlog-category" href="<?php echo get_term_link( $category->name, NEWS_POST_TYPE_CATEGORY)?>"><?php echo $category->name; ?></a>
    <?php } ?>
    <?php foreach($tags as $tag ) {?>
      <a class="vlog-tag" href="<?php echo $tag->slug;?>"><?php echo $tag->name; ?></a>
    <?php } ?>

  </div>
  <h1 class="vlog-title">
    <?php the_title();?>
    <span class="vlog-title-icon"></span>
  </h1>
  <?php if (has_post_thumbnail()) { ?>
    <div class="vlog-figure vlog-figure-news">
      <img src="<?php the_post_thumbnail_url('featured-news'); ?>" alt="">
    </div>
  <?php } ?>
  <div class="single context">
    <div class="context-wrap">
      <?php import_part('context'); ?>
      <div class="vlog-button">
        <?php import_part("button", array(
          'modifier' => '',
          'link_url' => resolve_url(),
          'link_text' => '一覧へ戻る',
          'link_icon' => '#arrow'
        ))?>
      </div>
    </div>
  </div>
  
</main>
<?php endwhile; ?>

<?php
get_footer();