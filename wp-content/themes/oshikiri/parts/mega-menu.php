<div class="megamenu">
  <div class="megamenu-item megamenu-company">
    <div class="megamenu-label">
      <span class="megamenu-label-en">Company</span>
      <h3 class="megamenu-label-jp">会社情報</h3>
    </div>
    <div class="megamenu-links">
      <a class="megamenu-link" href="<?php echo resolve_url('company/philosophy')?>">企業理念</a>
      <a class="megamenu-link" href="<?php echo resolve_url('company/profile')?>">会社概要</a>
      <a class="megamenu-link" href="<?php echo resolve_url('company/history')?>">沿革</a>
      <a class="megamenu-link" href="<?php echo resolve_url('company/branch')?>">拠点一覧</a>
      <a class="megamenu-link" href="<?php echo resolve_url('company/network')?>">海外ネットワーク</a>
      <a class="megamenu-link" href="">採用情報</a>
    </div>
  </div>

  <div class="megamenu-item megamenu-products">
    <div class="megamenu-label">
      <span class="megamenu-label-en">Products</span>
      <h3 class="megamenu-label-jp">製品を探す</h3>
    </div>
    <div class="megamenu-machines">
      <a class="megamenu-machine" data-tab="category" href="<?php echo resolve_archive_url(PRODUCT_POST_TYPE)?>">
        <div class="megamenu-machine-figure" style="width: 170px">
          <img src="<?php echo resolve_asset_url('/images/mega-menu-image1.png'); ?>" alt="">
        </div>
        <span class="megamenu-machine-label">単体機種</span>
      </a>
      <a class="megamenu-machine" data-tab="type" href="<?php echo resolve_archive_url(PRODUCT_POST_TYPE)?>">
        <div class="megamenu-machine-figure" style="width: 144px">
          <img src="<?php echo resolve_asset_url('/images/mega-menu-image2.png'); ?>" alt="">
        </div>
        <span class="megamenu-machine-label">パンから探す</span>
      </a>
      <a class="megamenu-machine" data-tab="line" href="<?php echo resolve_archive_url(PRODUCT_POST_TYPE)?>">
        <div class="megamenu-machine-figure" style="width: 170px">
          <img src="<?php echo resolve_asset_url('/images/mega-menu-image3.png'); ?>" alt="">
        </div>
        <span class="megamenu-machine-label">ラインから探す</span>
      </a>
    </div>
  </div>
</div>