<section class="mv">
  <div class="mv-wrapper">
    <div class="mv-content">
      <div class="swiper js-mv-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide swiper-slide-text" data-text="オシキリについて">
            <div class="mv-slide">
              <a href="<?php echo resolve_url('about'); ?>" class="mv-slide-figure">
                <img src="<?php echo resolve_asset_url('/images/slide1.webp'); ?>" alt="">
              </a>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-text" data-text="導入事例">
            <div class="mv-slide">
              <a href="<?php echo resolve_archive_url('case'); ?>" class="mv-slide-figure">
                <img src="<?php echo resolve_asset_url('/images/slide2.webp'); ?>" alt="">
              </a>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-text" data-text="製品情報">
            <div class="mv-slide" >
              <a href="<?php echo resolve_archive_url('product'); ?>" class="mv-slide-figure">
                <img src="<?php echo resolve_asset_url('/images/slide3.webp'); ?>" alt="">
              </a>
            </div>
          </div>

        </div>
      </div>
      <!-- <span class="mv-navi-button mv-navi-prev"></span>
        <span class="mv-navi-button mv-navi-next"></span> -->
      <div class="mv-slider-nav-left mv-navi-prev">
        <div class="swiper js-mv-slider-nav-left">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="mv-slider-nav-text">
                製品情報
                <?php import_part("svg", array(
                  'svg_class' => 'mv-navi-icon',
                  'svg_id' => '#arrow'
                ))?>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="mv-slider-nav-text">
                オシキリについて
                <?php import_part("svg", array(
                  'svg_class' => 'mv-navi-icon',
                  'svg_id' => '#arrow'
                ))?>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="mv-slider-nav-text">
                導入事例
                <?php import_part("svg", array(
                  'svg_class' => 'mv-navi-icon',
                  'svg_id' => '#arrow'
                ))?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mv-slider-nav-right mv-navi-next">
        <div class="swiper js-mv-slider-nav-right">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="mv-slider-nav-text">
                導入事例
                <?php import_part("svg", array(
                  'svg_class' => 'mv-navi-icon',
                  'svg_id' => '#arrow'
                ))?>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="mv-slider-nav-text">
                製品情報
                <?php import_part("svg", array(
                  'svg_class' => 'mv-navi-icon',
                  'svg_id' => '#arrow'
                ))?>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="mv-slider-nav-text">
                オシキリについて
                <?php import_part("svg", array(
                  'svg_class' => 'mv-navi-icon',
                  'svg_id' => '#arrow'
                ))?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mv-orb">
    <div class="mv-orb-wrap">
      <span class="mv-orb-text"></span>
      <?php import_part("svg", array(
        'svg_class' => 'mv-slide-circle-icon',
        'svg_id' => '#arrow'
      ))?>
    </div>
  </div>
</section>