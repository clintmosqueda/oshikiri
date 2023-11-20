<section class="cases">
  <div class="wrapper">
    <div class="cases-content">
      <?php import_part("heading", array(
        'modifier' => 'cases-heading',
        'heading' => 'Cases',
        'subheading' => '導入事例'
      ));?>

      <div class="cases-links">
        <a href="" class="cases-link">導入会社ロゴ</a>
        <a href="" class="cases-link">導入会社ロゴ</a>
        <a href="" class="cases-link">導入会社ロゴ</a>
        <a href="" class="cases-link">導入会社ロゴ</a>
      </div>

      <div class="cases-articles">
        <?php import_part("card-cases", array(
          'modifier' => '',
          'link' => '',
          'image' => resolve_asset_url('/images/card-cases1.jpg'),
          'title' => '株式会社三好屋食品工業様',
          'desc' => 'ベルトドライブプルーファ後、チェーンカス等の異物混入の不安がなくなりました。'
        ));?>
        <?php import_part("card-cases", array(
          'modifier' => '',
          'link' => '',
          'image' => resolve_asset_url('/images/card-cases2.jpg'),
          'title' => '株式会社三好屋食品工業様',
          'desc' => 'ベルトドライブプルーファ後、チェーンカス等の異物混入の不安がなくなりました。'
        ));?>
        <?php import_part("card-cases", array(
          'modifier' => '',
          'link' => '',
          'image' => resolve_asset_url('/images/card-cases3.jpg'),
          'title' => '株式会社三好屋食品工業様',
          'desc' => 'ベルトドライブプルーファ後、チェーンカス等の異物混入の不安がなくなりました。'
        ));?>
      </div>

      <?php import_part("button", array(
        'modifier' => 'cases-button',
        'link_url' => '/',
        'link_text' => 'もっとみる',
        'link_icon' => '#arrow'
        ))?>
    </div>
  </div>
</section>