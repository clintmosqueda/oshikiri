<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @see https://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>

  <?php import_part('preload');?>
  <?php import_part('mv');?>
  <?php import_part('slogan');?>
  <?php import_part('info');?>
  <?php import_part('assembly/assembly-start');?>
    <div class="assembly-products">
      <div class="assembly-product" id="type" data-assembly="type">
        <?php import_part("product-type", array(
          'modifier' => '',
          'itemPerPage' => 8,
        )); ?>
      </div>
      <div class="assembly-product" id="line" data-assembly="line">
        <?php import_part("product-line", array(
          'modifier' => '',
          'itemPerPage' => 8,
        )); ?>
      </div>
      <div class="assembly-product" id="category" data-assembly="category">
        <?php import_part("product-category"); ?>
      </div>
    </div>
  <?php import_part('assembly/assembly-end');?>

  <?php import_part('cases');?>
  <?php import_part('corporation');?>
  <?php import_part('enlist');?>
<?php
get_footer();