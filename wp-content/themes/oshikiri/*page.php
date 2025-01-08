<?php
/**
 * The template for displaying all pages
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @see https://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>
<main class="main">
  <div class="inner-pages">
    <div class="wrapper">
    <?php while (have_posts()) : the_post(); ?>
      <h1 class="inner-pages-title"><?php echo get_the_title();?></h1>
      <div class="sitemap">
        <?php the_content();?>
      </div>
    <?php endwhile; // End of the loop.?>
    </div>
  </div>
</main>
<?php
get_sidebar();
get_footer();
