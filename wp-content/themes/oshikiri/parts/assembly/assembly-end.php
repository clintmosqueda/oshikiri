      <?php if(is_front_page()) :?>
        <?php import_part("button", array(
          'modifier' => 'assembly-button',
          'link_url' => resolve_archive_url(PRODUCT_POST_TYPE),
          'link_text' => 'もっとみる',
          'link_icon' => '#arrow'
          ))?>
      <?php endif;?>
    </div>
  </div>
</section>