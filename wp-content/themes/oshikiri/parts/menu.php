<span class="hamburger js-hamburger">
  <span class="hamburger-inner"></span>
</span>
<div class="menu-overlay"></div>
<div class="menu">
  <div class="menu-container">
    <ul class="menu-list">
      <li class="menu-item"><a class="menu-link" href="<?php echo resolve_url('about'); ?>">オシキリについて</a></li>
      <li class="menu-item">
        <div class="menu-item-group">
          <a class="menu-link" href="<?php echo resolve_url('product'); ?>">製品を探す</a>
          <span class="menu-item-caret"></span>
        </div>
        <div class="menu-sublist menu-sublist-product">
          <a 
          class="menu-sublink" 
          data-tab="category" 
          href="<?php echo resolve_archive_url(PRODUCT_POST_TYPE)?>">単体機種</a>
          <a 
          class="menu-sublink" 
          data-tab="type"
          href="<?php echo resolve_archive_url(PRODUCT_POST_TYPE)?>">パンから探す</a>
          <a 
          class="menu-sublink" 
          data-tab="line"
          href="<?php echo resolve_archive_url(PRODUCT_POST_TYPE)?>">ラインから探す</a>
        </div>
      </li>
      <li class="menu-item">
        <div class="menu-item-group">
          <a class="menu-link" href="<?php echo resolve_url('corporate'); ?>">会社情報</a>
          <span class="menu-item-caret"></span>
        </div>
      
        
        <div class="menu-sublist">
          <a class="menu-sublink" href="<?php echo resolve_url('corporate/philosophy')?>">企業理念</a>
          <a class="menu-sublink" href="<?php echo resolve_url('corporate/profile')?>">会社概要</a>
          <a class="menu-sublink" href="<?php echo resolve_url('corporate/history')?>">沿革</a>
          <a class="menu-sublink" href="<?php echo resolve_url('corporate/branch')?>">拠点一覧</a>
          <a class="menu-sublink" href="<?php echo resolve_url('corporate/network')?>">海外ネットワーク</a>
          <a class="menu-sublink" href="<?php echo resolve_url('recruit')?>">採用情報</a>
        </div>
      </li>
      <li class="menu-item"><a class="menu-link" href="<?php echo resolve_archive_url('catalog'); ?>">カタログ</a></li>
      <li class="menu-item"><a class="menu-link" href="<?php echo resolve_archive_url('case'); ?>">導入事例</a></li>
      <li class="menu-item"><a class="menu-link" href="<?php echo resolve_archive_url('news'); ?>">ニュース</a></li>
    </ul>
    <div class="menu-buttons">
      <a class="menu-button" href="<?php echo resolve_url('contact'); ?>">お問い合わせ</a>
      <?php import_part('translator')?>
      <!-- <div class="menu-translator">
        <div class="menu-translator-button">
          <?php import_part("svg", array(
            'svg_class' => '',
            'svg_id' => '#globe'
          )); ?>
          Japanese
        </div>
      </div> -->
    </div>
  </div>
</div>