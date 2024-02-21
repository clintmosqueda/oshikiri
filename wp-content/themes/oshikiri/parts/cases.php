<?php
$cases = query_custom_post(3, CASE_POST_TYPE)
?>

<section class="cases">
  <div class="wrapper">
    <div class="cases-content">
      <?php import_part("heading", array(
        'modifier' => 'cases-heading',
        'heading' => 'Cases',
        'subheading' => '導入事例'
      ));?>

      <!-- <div class="cases-links">
        <a href="" class="cases-link">導入会社ロゴ</a>
        <a href="" class="cases-link">導入会社ロゴ</a>
        <a href="" class="cases-link">導入会社ロゴ</a>
        <a href="" class="cases-link">導入会社ロゴ</a>
      </div> -->

      <div class="cases-articles">
        <?php if($cases->have_posts()): ?>
          <?php while($cases->have_posts()): $cases->the_post();?>
            <?php import_part("card-cases", array(
              'modifier' => '',
              'link' => get_permalink(),
              'image' => get_field('featured_image'),
              'title' => get_the_title(),
              'desc' => wp_strip_all_tags(get_first_paragraph(50))
            ));?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>

      <?php import_part("button", array(
        'modifier' => 'cases-button',
        'link_url' => resolve_archive_url('case'),
        'link_text' => 'もっとみる',
        'link_icon' => '#arrow'
        ))?>
    </div>
  </div>
</section>