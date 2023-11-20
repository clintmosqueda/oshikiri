<div class="progress">
  <?php foreach($lists as $list) { ?>
    <span class="progress-label <?php echo $list['modifier']?>"><?php echo $list['text']?></span>
  <?php  } ?>
</div>