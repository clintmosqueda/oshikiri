<?php if( have_rows('dynamic_content') ):?>
  <?php while ( have_rows('dynamic_content') ) : the_row();?>

    <?php if( get_row_layout() == 'title_&_description' ): ?>
      <div class="context-title-description">
        <?php 
        $title = get_sub_field('title');
        if($title):
        ?>
        <h2 class="context-heading"><?php the_sub_field('title');?></h2>
        <?php endif; ?>
        <div class="context-body"><?php the_sub_field('description');?></div>
      </div>

    <?php elseif( get_row_layout() == 'image_slider' ): ?>
      <div class="context-slider">
        <div class="swiper js-context-slider ">
          <div class="swiper-wrapper">
            <?php
              $images = get_sub_field('Gallery');
              if($images):
            ?>
              <?php foreach( $images as $image ): ?>
                <div class="swiper-slide">
                  <div class="context-slider-figure">
                    <img src="<?php echo $image['url']; ?>" alt="">
                  </div>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="context-slider-nav">
          <span class="context-slider-button context-slider-prev">
            <?php import_part("svg", array(
              'svg_class' => '',
              'svg_id' => '#arrow'
            ))?>
          </span>
          <div class="context-slider-list"></div>
          <span class="context-slider-button context-slider-next">
            <?php import_part("svg", array(
              'svg_class' => '',
              'svg_id' => '#arrow'
            ))?>
          </span>
        </div>
      </div>

    <?php elseif( get_row_layout() == 'photo' ): ?>
      <div class="context-photo">
        <img src="<?php the_sub_field('image');?>" alt="">
      </div>

    <?php elseif( get_row_layout() == 'title_description_&_image' ): ?>
      <div class="context-title-description-image">
        <h3 class=""><?php the_sub_field('title');?></h3>
        <div class="context-group">
          <div class="context-group-desc">
            <?php the_sub_field('description');?>
          </div>
          <?php
            $photo = get_sub_field('photo');
            if($photo) : 
          ?>
            <div class="context-group-figure">
              <img src="<?php the_sub_field('photo');?>" alt="">
            </div>
          <?php endif; ?>
        </div>
      </div>

    <?php elseif( get_row_layout() == 'title_&_images' ): ?>
      <div class="context-title-images">
        <h3 class="context-cluster-title"><?php the_sub_field('title');?></h3>
        <div class="context-cluster-desc"><?php the_sub_field('description');?></div>
        <div class="context-cluster-cards">
          <?php if( have_rows('photo_list') ): ?>
            <?php while( have_rows('photo_list') ): the_row(); ?>
              <div class="context-cluster-card">
                <div class="context-cluster-figure">
                  <img src="<?php the_sub_field('image');?>" alt="">
                </div>
                <span class="context-cluster-label"><?php the_sub_field('label');?></span>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>

    <?php endif; ?>

  <?php endwhile; ?>
<?php endif; ?>