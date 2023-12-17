<footer class="footer">
  <div class="wrapper">
    <div class="footer-inner">
      <div class="footer-left">
        <a class="footer-logo" href="<?php echo resolve_url(); ?>">
          <img src="<?php echo resolve_asset_url('/images/logo.svg'); ?>" alt="">
        </a>

        <div class="footer-slogan">Food Machines,
          For Quality <span>Life</span>
        </div>

        <div class="footer-address">株式会社オシキリ
          〒252-0811
          神奈川県藤沢市桐原町４番地
        </div>

        <span class="footer-copyright">©OSHIKIRI MACHINERY LTD.</span>

      </div>
      <div class="footer-right">
        <div class="footer-links">
          <div class="footer-groups">
            <span class="footer-label">製品を探す</span>
            <div class="footer-group">
              <a class="footer-sublink" data-tab="category" href="<?php echo resolve_archive_url(PRODUCT_POST_TYPE)?>">単体機種</a>
              <a class="footer-sublink" data-tab="line" href="<?php echo resolve_archive_url(PRODUCT_POST_TYPE)?>">ラインから探す</a>
              <a class="footer-sublink" data-tab="type" href="<?php echo resolve_archive_url(PRODUCT_POST_TYPE)?>">パンから探す</a>
            </div>
          </div>

          <div class="footer-groups">
            <span class="footer-label">製品情報</span>
            <div class="footer-group">
              <a class="footer-sublink" href="<?php echo resolve_archive_url('catalog'); ?>">カタログ一覧</a>
              <a class="footer-sublink" href="<?php echo resolve_archive_url('case'); ?>">導入事例</a>
            </div>
          </div>

          <div class="footer-groups">
            <span class="footer-label">会社情報</span>
            <div class="footer-group">
              <a class="footer-sublink" href="<?php echo resolve_url('company/philosophy')?>">企業理念</a>
              <a class="footer-sublink" href="<?php echo resolve_url('company')?>">会社概要</a>
              <a class="footer-sublink" href="<?php echo resolve_url('company/history')?>">沿革</a>
              <a class="footer-sublink" href="<?php echo resolve_url('company/branch')?>">事業所一覧</a>
              <a class="footer-sublink" href="<?php echo resolve_url('company/network')?>">海外ネットワーク</a>
              <a class="footer-sublink" href="<?php echo resolve_url('recruit')?>">採用情報</a>
              <a class="footer-sublink" href="<?php echo resolve_url('about')?>">オシキリの強み</a>
            </div>
          </div>

          <div class="footer-groups">
            <span class="footer-label">お問い合わせ</span>
            <div class="footer-group">
              <a class="footer-link" href="<?php echo resolve_url('sitemap'); ?>">サイトマップ</a>
              <a class="footer-link" href="<?php echo resolve_archive_url('news'); ?>">ニュース</a>
              <a class="footer-link" href="<?php echo resolve_url('privacy'); ?>">プライバシーポリシー</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</footer>