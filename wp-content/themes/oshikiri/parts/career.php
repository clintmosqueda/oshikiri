<?php
$jobs = get_field('job', 'option');
?>

<div class="career" id="career">
  <h2 class="career-heading"> 
    <span>中途採用</span>
    Mid-Career
  </h2>

  <div class="career-jobs">
    <?php if($jobs) : ?>
      <?php foreach( $jobs as $job ):?>
        <div class="career-job">
          <div class="career-job-top">
            <h3 class="career-position js-trigger"><?php echo $job["position"]; ?></h3>
            <div class="career-toggle">
              <span></span>
              詳細
            </div>
          </div>
          <div class="career-job-group js-career-job-group">
            <div class="career-job-details js-career-job-details">
              <?php foreach( $job["info"] as $info ):?>
                <dl>
                  <dt><?php echo $info["info_label"]; ?></dt>
                  <dd><?php echo $info["info_description"]; ?></dd>
                </dl>
              <?php endforeach ?>

                <?php import_part("button", array(
                  'modifier' => 'career-job-button',
                  'link_url' => resolve_url('career'),
                  'link_text' => '応募フォームへ',
                  'link_icon' => '#arrow'
                ))?>

            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif;?>
  </div>
</div>