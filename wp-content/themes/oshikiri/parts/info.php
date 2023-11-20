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
              <?php for ($x = 1; $x <= 7; $x++) { ?>
                <div class="swiper-slide">
                  <div class="info-carousel-slide">
                    <?php import_part('card', array(
                      'modifier' => '',
                      'link' => '',
                      'image' => resolve_asset_url('/images/card-placeholder.png'),
                      'title' => '上海新国際博覧中心(エキスポセンタ)',
                      'category' => '展示会',
                    ));?>
                  </div>
                </div>
              <?php } ?>

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