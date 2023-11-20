<?php get_header(); ?>

<?php
  $breadcrumbs = [
    array(
      'text' => 'TOP',
      'url' => resolve_url(),
    ),
    array(
      'text' => '最新情報',
      'url' => '#',
    ),
  ];
?>

<?php import_part('banner', array(
  'modifier' => '',
  'image' => resolve_asset_url('/images/banner/news.jpg'),
  'text_jp' => '最新情報',
  'text_en' => 'News.',
  'breadcrumbs' => $breadcrumbs
));?>

<?php import_part('/composition-slots/composition-start', array(
  'breadcrumbs' => $breadcrumbs
));?>

<div class="news-archive">
  
  <div class="news-archive-filters">
    <div class="news-archive-filter">
      <select class="news-archive-select" name="category">
        <option value="カテゴリ">カテゴリ</option>
        <option value="お知らせ">お知らせ</option>
        <option value="採用">採用</option>
      </select>
    </div>
    <div class="news-archive-filter">
      <select class="news-archive-select" name="tag">
        <option value="タグA ">タグA</option>
        <option value="タグB  ">タグB</option>
      </select>
    </div>
  </div>

  <?php if ( have_posts() ) : ?>
    <div class="news-archive-articles">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php import_part('card', array(
          'modifier' => '',
          'link' => '',
          'image' => resolve_asset_url('/images/card-placeholder.png'),
          'title' => '上海新国際博覧中心(エキスポセンタ)',
          'category' => '展示会',
          'tags' => array('タグA ', 'タグB ')
        ));?>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>

  <div class="pagination">
    <div class="pagination-nav pagination-prev">
      <span class="pagination-nav-icon">
        <?php import_part("svg", array(
          'svg_class' => '',
          'svg_id' => '#arrow'
        ))?>
      </span>
      前へ
    </div>
    <div class="pagination-select">
      <div class="pagination-label">
        <div class="pagination-label-wrap">
          <span class="pagination-page pagination-page-current">1</span>
          /
          <span class="pagination-page pagination-page-last">7</span>
        </div>
        <span class="pagination-caret"></span>
      </div>
      <div class="pagination-list">1/7</div>
    </div>
    <div class="pagination-nav pagination-next">
      次へ
      <span class="pagination-nav-icon">
        <?php import_part("svg", array(
          'svg_class' => '',
          'svg_id' => '#arrow'
        ))?>
      </span>
    </div>
  </div>
</div>

<?php import_part('/composition-slots/composition-end');?>
<?php
get_footer();