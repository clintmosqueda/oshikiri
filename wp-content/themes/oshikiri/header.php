<?php
/**
 * The header for our theme.
 *
 * @see https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php wp_title('|'); ?></title>
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" id="js-viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta property="og:image" content="<?php echo resolve_asset_url('/images/ogp.jpg'); ?>">
  <meta name="twitter:image" content="<?php echo resolve_asset_url('/images/ogp.jpg'); ?>"></meta>

  <?php if(is_404()) {?>
    <meta name="description" content="製パン機械・製菓機械の設計・製造・販売｜株式会社オシキリ"></meta>
    <meta property="og:description" content="製パン機械・製菓機械の設計・製造・販売｜株式会社オシキリ"></meta>
    <meta name="twitter:description" content="製パン機械・製菓機械の設計・製造・販売｜株式会社オシキリ"></meta>
  <?php }?>

  <link rel="icon" type="image/x-icon" href="<?php echo resolve_asset_url('/images/favicon.ico'); ?>">

  <link rel="stylesheet" href="<?php echo resolve_asset_url('/css/app.css'); ?>">
  <?php wp_head(); ?>
  
</head>

<body <?php body_class(); ?>>

  <input id="base-url" type="hidden" value="<?php echo resolve_url(); ?>" />
  <div class="wrap js-wrap">

    <div class="header-container">
      <header class="header">
        <div class="header-content">
          <div class="header-logo">
            <?php if(is_single()) {?>
            <a class="header-logo-brand" href="<?php echo resolve_url(); ?>"><img
                src="<?php echo resolve_asset_url('/images/logo.svg'); ?>" alt="Company Logo"></a>
            <?php } else { ?>
            <h1><a class="header-logo-brand" href="<?php echo resolve_url(); ?>"><img
                  src="<?php echo resolve_asset_url('/images/logo.svg'); ?>" alt="Company Logo"></a>
            </h1>
            <?php } ?>
          </div>

          <div class="header-actions">
            <?php import_part('nav');?>
            <div class="header-links">
              <a class="header-link" href="<?php echo resolve_url('contact'); ?>">お問い合わせ</a>
              <?php import_part('translator');?>
            </div>
          </div>
          <?php import_part('mega-menu');?>
          <?php import_part('menu');?>
        </div>
      </header>
    </div>