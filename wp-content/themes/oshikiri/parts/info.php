<?php
$news = query_custom_post(4, NEWS_POST_TYPE)
?>
<section class="info">
  <div class="wrapper">
    <div class="info-content">

      <div class="info-top">
        <h3 class="info-title">最新情報</h3>
      </div>

      <div class="info-carousel">
        <div class="info-carousel-wrap">
          <div class="swiper js-info-carousel">
            <div class="swiper-wrapper">
            <?php if($news->have_posts()): ?>
              <?php while($news->have_posts()): $news->the_post();
                $categories = get_the_terms(get_the_ID(), NEWS_POST_TYPE_CATEGORY);
              ?>
                <div class="swiper-slide">
                  <div class="info-carousel-slide">
                    <?php import_part('card', array(
                      'modifier' => '',
                      'link' => get_permalink(),
                      'image' => get_eyecatch_data(get_the_ID(), 'card-news', ''),
                      'title' => get_the_title(),
                      'category' => $categories,
                    ));?>
                  </div>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>

            </div>
          </div>
        </div>
        <div class="info-carousel-scroll"></div>
      </div>
      <a class="info-link" href="<?php echo resolve_archive_url(NEWS_POST_TYPE); ?>">
        もっとみる
        <?php import_part("svg", array(
          'svg_class' => 'info-link-icon',
          'svg_id' => '#arrow'
        )); ?>
      </a>
    </div>
  </div>
</section>