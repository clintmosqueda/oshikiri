<?php
  $sidebar_links = [
    array(
      'text' => '新卒採用',
      'url' => '#graduate',
    ),
    array(
      'text' => '中途採用',
      'url' => '#career',
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
      'text' => '採用情報',
      'url' => '#',
    ),
  ];
?>

<?php 
/*
* Template name: Recruit
*/
get_header(); ?>
<?php import_part('banner', array(
  'modifier' => '',
  'image' => resolve_asset_url('/images/banner/recruit.jpg'),
  'text_jp' => '採用情報',
  'text_en' => 'Recruit.',
  'breadcrumbs' => $breadcrumbs
));?>


<?php import_part('/composition-slots/composition-start', array(
  'sidebar_links' => $sidebar_links,
  'breadcrumbs' => $breadcrumbs,
  'modifier' => 'recruit-composition'
));?>

<div class="recruit">
  <p class="recruit-excerpt">人と食の関係を創造するオシキリで、
  共に大きな可能性に挑戦しませんか？</p>

  <div class="recruit-workspace">
    <span>
      <picture>
        <source 
        srcset="<?php echo resolve_asset_url('/images/recruit/recruit-image1.jpg'); ?>"
        media="(min-width: 768px)"
        />
        <img src="<?php echo resolve_asset_url('/images/recruit/recruit-image1-sp.jpg')?>" alt="">
      </picture>
    </span>
  </div>

  <?php import_part('caption', array(
    'modifier' => 'recruit-caption',
    'text' => '会社について'
  ));?>

  <div class="recruit-about">
    <p class="recruit-about-par">私たちは開発において、エンドユーザーの希望を直接聞き、そのニーズに応えるため、一人の技術者がすべての工程を担当します。自分のアイデアを表現し製品として日本のみならず、世界に向けてモノづくりに携わることも可能です。
    豊かな明日のため、日々新しい挑戦を続けるオシキリで、あなたも一緒に働いてみませんか？</p>

    <?php import_part("operation", array(
      'modifier' => "recruit-about-operation"
    ));?>
  </div>

  <?php import_part('caption', array(
    'modifier' => 'recruit-caption',
    'text' => 'オシキリの人と技術について'
  ));?>

  <div class="recruit-organization">
    <p class="recruit-organization-excerpt">オシキリで働く先輩たちの声を集めました。興味のある方は参考にしてみてください。</p>

    <a class="recruit-interview" href="<?php echo resolve_archive_url('employee'); ?>">
      <div class="recruit-interview-link">
        オシキリを支える人と技術
        <span class="recruit-interview-link-icon">
          <?php import_part("svg", array(
            'svg_class' => '',
            'svg_id' => '#arrow'
          ))?>
        </span>  
      </div>
      <div class="recruit-interview-text">
        <span>Interview</span>
        <span class="recruit-interview-circle small"></span>
      </div>
      <span class="recruit-interview-circle big"></span>
      <div class="recruit-interview-figure">
        <img src="<?php echo resolve_asset_url('/images/recruit/recruit-interview.png')?>" alt="">
      </div>
    </a>
  </div>

  <?php import_part('graduate')?>
  <?php import_part('career')?>
  
</div>



<?php import_part('/composition-slots/composition-end');?>
<?php
get_footer();