<div class="search sad">
  <form class="search-form" method="get" id="searchform" action="<?php bloginfo('url'); ?>">
    <div class="search-form-content">
      <input class="search-form-button" type="submit"/>
      <input class="search-form-input" type="text" name="s" id="s" placeholder="例：売却" />
      <?php wp_dropdown_categories(array(
        'post_type' => ARTICLE_POST_TYPE,
        'show_option_all'  => __( 'すべてのカテゴリー' ),
        'name' => 'taxTerm',
        'echo' => 1,
        'selected' => $cat,
        'taxonomy' => ARTICLE_POST_TYPE_CATEGORY,
        'value_field' => 'term_id',
      ))?>
    </div>
  </form>
</div>

