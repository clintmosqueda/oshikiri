<?php
  $sidebar_links = [
    array(
      'text' => '高い技術力',
      'url' => '#',
    ),
    array(
      'text' => '業界最大手の実績',
      'url' => '#',
    ),
    array(
      'text' => 'サポート体制',
      'url' => '#',
    ),
    array(
      'text' => '幅広い製品ラインナップ',
      'url' => '#',
    ),
  ];

  $breadcrumbs = [
    array(
      'text' => 'TOP',
      'url' => resolve_url(),
    ),
    array(
      'text' => 'オシキリの強み',
      'url' => '#',
    ),
  ];
?>


<?php 
/*
* Template name: About
*/
get_header(); ?>
<?php import_part('banner', array(
  'modifier' => '',
  'image' => resolve_asset_url('/images/banner/about.jpg'),
  'text_jp' => 'オシキリの強み',
  'text_en' => 'About.',
  'breadcrumbs' => $breadcrumbs
));?>


<?php import_part('/composition-slots/composition-start', array(
  'modifier' => 'about-composition',
  'sidebar_links' => $sidebar_links,
  'breadcrumbs' => $breadcrumbs,
));?>
  <div class="about">
    <p class="about-excerpt">ダミー文です。私たちは1949年の創業以来、常に「独立経営」の利点を活かしたユニークな
    企業アイデンティティを築いてきました。高い付加価値をもってお客様への最高のパフォーマンスを実現してきた、オシキリの強みをご紹介します。</p>

    <div class="about-section">
      <?php import_part('caption', array(
        'modifier' => '',
        'text' => '高い技術力'
      ));?>

      <div class="about-content">
        <div class="about-content-figure">
          <img src="<?php echo resolve_asset_url('/images/about/about-image1.jpg'); ?>" alt="">
        </div>
        <div class="about-content-company">
        <?php import_part('card-article', array(
            'modifier' => '',
            'image' => '',
            'title' => '特許を取得した独自技術の開発',
            'desc' => '独自の技術が組み込まれた製品の開発を続けてきており、特許も多数取得しています。'
          ));?>
          <?php import_part('card-article', array(
            'modifier' => '',
            'image' => '',
            'title' => '特許を取得した独自技術の開発',
            'desc' => '独自の技術が組み込まれた製品の開発を続けてきており、特許も多数取得しています。'
          ));?>
        </div>
        <div class="about-content-case">
            <div class="swiper about-carousel js-about-carousel">
              <div class="swiper-wrapper">

                <?php for ($x = 1; $x <= 5; $x++) { ?>
                  <div class="swiper-slide">
                    <div class="about-carousel-slide">
                    <?php import_part("card-cases", array(
                      'modifier' => 'about-content-card-case',
                      'link' => '',
                      'image' => resolve_asset_url('/images/card-cases1.jpg'),
                      'desc' => 'ベルトドライブプルーファ後、チェーンカス等の異物混入の不安がなくなりました。'
                    ));?>
                    </div>
                  </div>
                <?php } ?>

              </div>
            </div>

        </div>
      </div>
    </div>

    <div class="about-section">
      <?php import_part('caption', array(
        'modifier' => '',
        'text' => '業界最大手の実績'
      ));?>
      <div class="about-content">
        <div class="about-content-figure">
          <img src="<?php echo resolve_asset_url('/images/about/about-image1.jpg'); ?>" alt="">
        </div>
        <div class="about-content-company">
          <?php import_part('card-article', array(
            'modifier' => '',
            'image' => '',
            'title' => '特許を取得した独自技術の開発',
            'desc' => '独自の技術が組み込まれた製品の開発を続けてきており、特許も多数取得しています。',
            'link_url' => '/',
            'link_text' => '沿革',
          ));?>
          <?php import_part('card-article', array(
            'modifier' => '',
            'image' => '',
            'title' => '特許を取得した独自技術の開発',
            'desc' => '独自の技術が組み込まれた製品の開発を続けてきており、特許も多数取得しています。',
            'link_url' => '/',
            'link_text' => '沿革',
          ));?>
        </div>
      </div>
    </div>

    <div class="about-section">
      <?php import_part('caption', array(
        'modifier' => '',
        'text' => '幅広い製品ラインナップ'
      ));?>
      <div class="about-content">
        <div class="about-content-figure">
          <img src="<?php echo resolve_asset_url('/images/about/about-image1.jpg'); ?>" alt="">
        </div>
        <div class="about-content-company">
          <?php import_part('card-article', array(
            'modifier' => '',
            'image' => '',
            'title' => '製パンのあらゆるフェーズに対応した機械の提供',
            'desc' => 'パン製造には複数の工程があり、種類によっても工程が異なるため、それぞれに合ったラインが必要です。さらにパンを作るためにはミキサや分割丸め機、整形機、オーブン、プルーファ、包装機など、数多くの機械が不可欠です。私たちはこれらすべての機械を手掛け、最初から最後まで一貫して提案しています。'
          ));?>
          <?php import_part('card-article', array(
            'modifier' => '',
            'image' => '',
            'title' => '製パン・製菓機械にとどまらない研究・開発',
            'desc' => '製パン・製菓の分野だけでなく、食肉・鮮魚加工や化学薬品等、新分野にも積極的に参入しています。食品業界のみならず、医薬品、化学工業分野まで幅広い分野で注目される製品も開発しています。'
          ));?>
        </div>
      </div>
    </div>

    <?php import_part("related-cases"); ?>

  </div>
<?php import_part('/composition-slots/composition-end');?>
<?php
get_footer();