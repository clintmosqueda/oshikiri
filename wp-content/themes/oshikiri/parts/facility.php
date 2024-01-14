<?php 
$modifier = empty($modifier) ? '' : $modifier;
$id = empty($id) ? '' : $id;
$image = empty($image) ? '' : $image;
$name = empty($name) ? '' : $name;
$address = empty($address) ? '' : $address;
$tel = empty($tel) ? '' : $tel;
$fax = empty($fax) ? '' : $fax;
$map_location = empty($map_location) ? '' : $map_location;
$head_office_detail_pc = empty($head_office_detail_pc) ? '' : $head_office_detail_pc;
$head_office_detail_sp = empty($head_office_detail_sp) ? '' : $head_office_detail_sp;
?>

<div class="facility <?php echo $modifier;?> <?php echo !empty($head_office_detail_pc) ? 'has-detail' : '' ?>" id="<?php echo $id;?>">
  <div class="facility-top">
    <div class="facility-figure">
      <img src="<?php echo $image; ?>" alt="<?php echo $name;?> facility">
    </div>
    <div class="facility-content">
      <h3 class="facility-name"><?php echo $name;?></h3>
      <p class="facility-address"><?php echo $address;?></p>
      <dl class="facility-contact">
        <dt class="facility-contact-name">TEL</dt>
        <dd class="facility-contact-number"><?php echo $tel;?></dd>
      </dl>
      <dl class="facility-contact">
        <dt class="facility-contact-name">FAX</dt>
        <dd class="facility-contact-number"><?php echo $fax;?></dd>
      </dl>
      <a target="_blank" class="facility-map" href="<?php echo $map_location;?>">GoogleMap</a>
    </div>
  </div>
  <?php if(!empty($head_office_detail_pc)): ?>
  <div class="facility-bottom">
    <div class="facility-bottom-wrap">
      <div class="facility-details-image">
        <img class="show-pc" src="<?php echo $head_office_detail_pc;?>" alt="">
        <img class="show-sp" src="<?php echo $head_office_detail_sp;?>" alt="">
      </div>
      <span class="facility-access">アクセス方法</span>
    </div>
  </div>
  <?php endif; ?>
</div>