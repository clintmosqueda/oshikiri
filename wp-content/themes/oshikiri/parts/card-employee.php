<?php
    global $post;
    $post_slug = $post->post_name;
    $url = get_site_url() . '/employee/' . get_the_id();
    
?>

<article>
  <div class="card-employee js-card-employee card-employee-<?php echo the_ID(); ?>">
    <?php if( have_rows('employee_info') ):?>
      <?php while ( have_rows('employee_info') ) : the_row();?>
        <div class="card-employee-feature">
          <div class="card-employee-image" style="background-image: url('<?php echo get_sub_field('employee_profile')?>')">
            <!-- <img src="<?php echo get_sub_field('employee_profile')?>" alt=""> -->
          </div>
          <span class="card-employee-feature-icon"></span>
        </div>
        <h3 class="card-employee-title"><?php the_title(); ?></h3>
        <div class="card-employee-info">
          <span class="card-employee-department">
            <?php $categories = get_the_terms(get_the_ID(), EMPLOYEE_POST_TYPE_CATEGORY);
            foreach($categories as $category ) {
              echo $category->name;
            } ?>
          </span>
          <span class="card-employee-joined"><?php echo get_sub_field('date_started') ?></span>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>

  <div id="employee-<?php echo the_ID(); ?>" class="popup js-popup">
    <span class="popup-bg js-popup-bg"></span>
    <div class="popup-wrapper js-popup-wrapper">
      <div class="popup-main js-popup-main">
        <span class="popup-close js-popup-close"></span>
        <?php if( have_rows('employee_info') ):?>
          <?php while ( have_rows('employee_info') ) : the_row();?>
            <div class="popup-feature">
              <div class="popup-feature-profile">
                <img src="<?php echo get_sub_field('employee_profile')?>" alt="">
              </div>
              <h3 class="popup-feature-name"><?php echo get_sub_field('employee_name') ?></h3>
            </div>

            <div class="popup-info">
              <span class="popup-division">
                <?php $categories = get_the_terms(get_the_ID(), EMPLOYEE_POST_TYPE_CATEGORY);
                foreach($categories as $category ) {
                  echo $category->name;
                } ?>
              </span>
              <span class="popup-joined"><?php echo get_sub_field('date_started') ?></span>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>

        <h1 class="popup-title"><?php the_title(); ?></h1>

        <div class="popup-discussions">
          <?php if( have_rows('discussions') ):?>
            <?php while ( have_rows('discussions') ) : the_row();?>
              <div class="popup-discussion">
                <h2 class="popup-question">
                  <span class="popup-question-q">Q</span>
                  <?php echo get_sub_field('question') ?>
                </h2>
                <div class="popup-answer">
                  <p class="popup-desc"><?php echo get_sub_field('answer') ?></p>
                </div>

                <div class="popup-photo">
                  <img src="<?php echo get_sub_field('photo')?>" alt="">
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>

        <div class="popup-schedule">
          <span class="popup-schedule-heading">A.Hさんの一日のスケジュール</span>
          <div class="popup-timeline">
            <?php if( have_rows('schedule') ):?>
              <?php while ( have_rows('schedule') ) : the_row();?>
                <dl>
                  <dt><?php echo get_sub_field('time') ?></dt>
                  <dd><?php echo get_sub_field('plan') ?></dd>
                </dl>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
        
        <?php 
        $org_chart = get_field('organizational_chart');
        if($org_chart) {?>
        <div class="popup-orginazation-chart">
          <h3 class="popup-orginazation-chart-title">組織図</h3>
          <div class="popup-orginazation-chart-figure">
            <img src="<?php echo $org_chart; ?>" alt="">
          </div>
        </div>
        <?php } ?>

        <?php
          $job_desc = get_field('job_description');
          if($job_desc) {
        ?>
        <div class="popup-job-description">
          <h3 class="popup-job-description-title">仕事内容</h3>
          <div class="popup-job-description-figure">
            <img src="<?php echo $job_desc; ?>" alt="">
          </div>
        </div>
        <?php } ?>
        
        
          <?php import_part("button", array(
            'modifier' => 'popup-button js-popup-close',
            'link_url' => '',
            'link_text' => '閉じる',
            'link_icon' => '#arrow'
          ))?>
        

      </div>
    </div>
  </div>
</article>