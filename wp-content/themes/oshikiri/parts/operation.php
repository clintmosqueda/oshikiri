<?php
$links = [
  array(
    'modifier' => '',
    'url' => resolve_url('company/philosophy'),
    'image' => resolve_asset_url('/images/company-image1.1.jpg'),
    'text_jp' => '企業理念',
    'text_en' => 'Philosophy',
  ),
  array(
    'modifier' => '',
    'url' => resolve_url('company/branch'),
    'image' => resolve_asset_url('/images/company-image2.1.jpg'),
    'text_jp' => '事業所一覧',
    'text_en' => 'Branch',
  ),
  array(
    'modifier' => '',
    'url' => resolve_url('company/profile'),
    'image' => resolve_asset_url('/images/company-image3.1.jpg'),
    'text_jp' => '会社概要',
    'text_en' => 'About',
  ),
  array(
    'modifier' => '',
    'url' => resolve_url('company/history'),
    'image' => resolve_asset_url('/images/company-image4.1.jpg'),
    'text_jp' => '沿革',
    'text_en' => 'History',
  ),
  array(
    'modifier' => '',
    'url' => resolve_url('company/network'),
    'image' => resolve_asset_url('/images/company-image5.1.jpg'),
    'text_jp' => '海外ネットワーク',
    'text_en' => 'Network',
  ),
]
?>

<div class="operation <?php echo $modifier; ?>">
  <div class="operation-links">
    <?php foreach($links as $link) {?>
      <a class="operation-link <?php echo $link["modifier"] ?>" href="<?php echo $link["url"]; ?>">
        <div class="operation-content"
          style="background-image: url('<?php echo $link["image"]; ?>')">
          <h3 class="operation-title">
            <span class="operation-title-jp"><?php echo $link["text_jp"]; ?></span>
            <span class="operation-title-en"><?php echo $link["text_en"]; ?></span>
          </h3>
          <span class="operation-icon"></span>
        </div>
      </a>
    <?php } ?>
  </div>
</div>