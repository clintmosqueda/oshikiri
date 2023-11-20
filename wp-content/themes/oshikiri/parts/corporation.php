<section class="corporation <?php echo $modifier; ?>">
  <div class="wrapper">
    <div class="corporation-content">
      <div class="corporation-left">
        <?php import_part("heading", array(
          'modifier' => 'corporation-heading',
          'heading' => 'Company',
          'subheading' => '会社情報'
        ));?>
      </div>
      <div class="corporation-right">
        <p class="corporation-par">多様なニーズに応える技術力により、
        お客様に喜ばれ愛される機械・システム開発を行っています。</p>
        <?php import_part("operation");?>
      </div>
    </div>
  </div>

  <?php import_part('circle', array(
    'modifier' => 'circle-corporation',
    'circle_count' => 20
  ))?>
</section>