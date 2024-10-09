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
              <a class="footer-sublink" data-tab="category" href="<?php echo resolve_archive_url(PRODUCT_POST_TYPE)?>">製品カテゴリから探す</a>
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
            <span class="footer-label"><a href="<?php echo resolve_url('corporate')?>">会社情報</a></span>
            <div class="footer-group">
              <a class="footer-sublink" href="<?php echo resolve_url('corporate/philosophy')?>">企業理念</a>
              <a class="footer-sublink" href="<?php echo resolve_url('corporate/profile')?>">会社概要</a>
              <a class="footer-sublink" href="<?php echo resolve_url('corporate/history')?>">沿革</a>
              <a class="footer-sublink" href="<?php echo resolve_url('corporate/branch')?>">事業所一覧</a>
              <a class="footer-sublink" href="<?php echo resolve_url('corporate/network')?>">海外ネットワーク</a>
              <a class="footer-sublink" href="<?php echo resolve_url('recruit')?>">採用情報</a>
              <a class="footer-sublink" href="<?php echo resolve_url('employee')?>">オシキリを支える人と技術</a>
              <a class="footer-sublink" href="<?php echo resolve_url('about')?>">オシキリの強み</a>
            </div>
          </div>

          <div class="footer-groups">
            <span class="footer-label"><a href="<?php echo resolve_url('contact')?>">お問い合わせ</a></span>
            <div class="footer-group">
              <a class="footer-link" href="<?php echo resolve_url('sitemaps'); ?>">サイトマップ</a>
              <a class="footer-link" href="<?php echo resolve_archive_url('news'); ?>">ニュース</a>
              <a class="footer-link" href="<?php echo resolve_url('privacy'); ?>">プライバシーポリシー</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</footer>