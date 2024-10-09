<?php
  $sidebar_links = [
    array(
      'modifier' => 'is-active',
      'text' => '企業理念',
      'url' => resolve_url('corporate/philosophy'),
    ),
    array(
      'text' => '事業所一覧',
      'url' => resolve_url('corporate/branch'),
    ),
    array(
      'text' => '会社概要',
      'url' => resolve_url('corporate/profile'),
    ),
    array(
      'text' => '沿革',
      'url' => resolve_url('corporate/history'),
    ),
    array(
      'text' => '海外ネットワーク',
      'url' => resolve_url('corporate/network'),
    ),
  ];

  $breadcrumbs = [
    array(
      'text' => 'TOP',
      'url' => resolve_url(),
    ),
    array(
      'text' => '会社情報',
      'url' => resolve_url('corporate'),
    ),
    array(
      'text' => '企業理念',
      'url' => '#',
    ),
  ];
?>

<?php 
/*
* Template name: Philosophy
*/
get_header(); ?>
<?php import_part('banner', array(
  'modifier' => '',
  'image' => resolve_asset_url('/images/banner/philosophy.jpg'),
  'text_jp' => '企業理念',
  'text_en' => 'Philosophy.',
  'breadcrumbs' => $breadcrumbs
));?>



<?php import_part('/composition-slots/composition-start', array(
  'sidebar_links' => $sidebar_links,
  'breadcrumbs' => $breadcrumbs
));?>

<div class="company-philosophy">
  <div class="company-philosophy-info">
    <h2 class="company-philosophy-info-heading">「人と食」の関係を新しい視点でとらえ、
    お客様に喜ばれ愛される機械・システムを提案していきます。</h2>
    <p class="company-philosophy-info-par">株式会社オシキリは創業の１９４９年以来、人と食を結びつける技術に注目し、
    その可能性を追い求めながら製パン製菓機械の開発を行い、
    それだけではなく食肉・水産分野・化学薬品等の新分野にも活用いただくまでに成長して参
    りました。</p>
    <p class="company-philosophy-info-par">創業から続く、「既存の概念にとらわれない柔軟な発想」、
    「創造のための新しいもうひとつの視点」を基に機械の開発に尽力し、
    日本のみならず世界中のユーザ様に愛され、社会に貢献する企業としてチャレンジを続けて
    参ります。
    人と食とのつながりを喜びにして。機械とシステムで、豊かな明日のために。</p>
    <div class="company-philosophy-info-signage">
      <span class="company-philosophy-info-signage-text">代表取締役社長</span>
      <span class="company-philosophy-info-signature">
        <img src="<?php echo resolve_asset_url('/images/signature.svg')?>" alt="">
      </span>
    </div>
  </div>

  <?php import_part('caption', array(
    'modifier' => 'company-philosophy-caption',
    'text' => '企業理念'
  ));?>

  <div class="company-philosophy-corp">
    <p class="company-philosophy-corp-par">人と食の関係を新しい視点で捉え、喜ばれ愛される機械、
    システムを提供するために当社の総合力を発揮し、お客様の要望を高いレベルで満足させるよう努めます。</p>
    <ul class="company-philosophy-list">
      <li class="company-philosophy-item">蓄積されたノウハウで新しい価値創造に挑戦していきます。</li>
      <li class="company-philosophy-item">お客様の立場に視点をおいた新しい提案をおこないます。</li>
      <li class="company-philosophy-item">社会変化を迅速に捉え、積極果敢に技術革新していきます。</li>
      <li class="company-philosophy-item">今まで気づかなかったこと、埋もれていたものを視点を変えてとらえなおします。</li>
    </ul>
  </div>

  <div class="company-philosophy-figure">
    <div class="company-philosophy-image">
      <picture>
        <source 
        srcset="<?php echo resolve_asset_url('/images/philosophy/machinery.jpg')?>"
        media="(min-width: 768px)"
        />
        <img 
        src="<?php echo resolve_asset_url('/images/philosophy/machinery_sp.jpg')?>" 
        alt=""
        />
      </picture>
    </div>
  </div>

</div>

<?php import_part('/composition-slots/composition-end');?>
<?php
get_footer();