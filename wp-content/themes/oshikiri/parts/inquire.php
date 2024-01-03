<?php
$modifier = empty($modifier) ? '' : $modifier;
?>
<section class="inquire <?php echo $modifier; ?>">
  <?php import_part("heading", array(
    'modifier' => 'inquire-heading',
    'heading' => 'Contact',
    'subheading' => 'お問い合わせ'
  ));?>
  <div class="inquire-method">
    <div class="inquire-mail">
      <div class="inquire-mail-content">
        <?php import_part("svg", array(
              'svg_class' => 'inquire-mail-icon',
              'svg_id' => '#email'
              ))?>
        <?php import_part("button", array(
              'modifier' => 'inquire-mail-button',
              'link_url' => resolve_url('contact'),
              'link_text' => 'お問い合わせフォーム',
              'link_icon' => '#arrow'
              ))?>
      </div>

    </div>
    <div class="inquire-phone">
      <div class="inquire-phone-content">
        <?php import_part("svg", array(
              'svg_class' => 'inquire-phone-icon',
              'svg_id' => '#phone'
              ))?>
        <div class="inquire-phone-numbers">
          <p class="inquire-phone-number">Tel <a href="tel:0466446011">0466-44-6011</a></p>
          <p class="inquire-phone-number">Fax <span>0466-44-6969</span></p>
        </div>
      </div>

    </div>
  </div>
</section>