<section class="related-cases">
  <?php import_part("heading", array(
    'modifier' => 'related-cases-heading',
    'heading' => 'Cases',
    'subheading' => '導入事例'
  ));?>
  <div class="related-cases-cards">
    <div class="swiper related-cases-carousel js-related-cases-carousel">
      <div class="swiper-wrapper">
        <?php for ($x = 1; $x <= 3; $x++) { ?>
          <div class="swiper-slide">
            <?php import_part("card-cases", array(
              'modifier' => '',
              'link' => '',
              'image' => resolve_asset_url('/images/card-cases1.jpg'),
              'title' => '株式会社三好屋食品工業様',
              'desc' => 'ベルトドライブプルーファ後、チェーンカス等の異物混入の不安がなくなりました。'
            ));?>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>

