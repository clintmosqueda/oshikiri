<?php
/**
 * The template for displaying all single posts.
 *
 * @see    https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */
get_header(); 
$user_id = get_the_author_meta('ID');
?>
<?php while (have_posts()) : the_post(); ?>
<main class="article">
  <div class="wrapper">
    <div class="article-inner">

      <div class="article-top">
        <h1 class="article-heading">
          <?php (get_field('english_title') && is_english()) ? the_field('english_title') : the_field('japanese_title'); ?>
        </h1>

        <div class="article-info">
          <div class="article-author">
            <img class="article-author-avatar" src="<?php echo esc_url( get_avatar_url( get_the_author_meta( 'ID' ), ['size' => '45'])) ?>" alt="">
            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) )?>"><span class="article-author-name"><?php echo get_the_author_meta('first_name', get_the_author_meta( 'ID' )) . ' ' . get_the_author_meta('last_name', get_the_author_meta( 'ID' )) ?></span></a>
          </div>
          <?php $categories = get_the_terms(get_the_ID(), ARTICLE_POST_TYPE_CATEGORY);?>
          <div class="article-categories">
            <?php foreach($categories as $term ) { 
              $en_cat = get_field('english_category', $term->taxonomy . '_' . $term->term_id); 
            ?>
              <a href="<?php echo get_term_link($term->name, ARTICLE_POST_TYPE_CATEGORY);?>" class="article-category"><?php echo is_english() && !empty($en_cat) ? $en_cat : $term->name; ?></a>
            <?php } ?>
          </div>
        </div>

        <?php if(has_post_thumbnail(get_the_ID())): ?>
          <div class="article-featured">
          <img src="<?php the_post_thumbnail_url('featured-article') ?>" alt="">
          </div>
        <?php endif; ?>

      </div>

      <div class="single-content">
        <?php (get_field('english_version') && is_english()) ? the_field('english_version') : the_field('japanese_version'); ?>
      </div>

      <?php import_part('cta', array(
        'modifier' => 'article-cta',
        'link_uri' => resolve_archive_url(ARTICLE_POST_TYPE),
        'link_text' => is_english() ? 'Return to List Page' : '一覧ページに戻る',
      ));?>

    
    </div>

    <?php import_part('related', array(
      'modifier' => 'article-related',
      'heading' => 'ウサインボルトが書いた記事'
    )); ?>
    
  </div>
</main>
<?php endwhile; ?>
<?php
get_footer();