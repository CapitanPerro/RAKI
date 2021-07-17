<!-- header styles -->

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" media="screen" type="text/css" />
<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>

<style>.u-header {
  background-image: none;
}
.u-header .u-sheet-1 {
  min-height: 105px;
}
.u-header .u-image-1 {
  margin: 5px auto 0 0;
}
.u-header .u-logo-image-1 {
  max-width: 95px;
  max-height: 95px;
}
.u-header .u-social-icons-1 {
  white-space: nowrap;
  height: 26px;
  min-height: 16px;
  width: 80px;
  min-width: 50px;
  animation-duration: 1000ms;
  margin: -61px 0 0 auto;
}
.u-header .u-icon-1 {
  height: 100%;
}
.u-header .u-icon-2 {
  height: 100%;
}
.u-header .u-icon-3 {
  height: 100%;
}
.u-header .u-menu-1 {
  margin: -28px 118px 38px auto;
}
.u-header .u-nav-1 {
  font-size: 1rem;
}
.u-block-0bd6-24 {
  font-size: 1rem;
}
.u-header .u-nav-2 {
  font-size: 1rem;
}
.u-block-0bd6-25 {
  font-size: 1rem;
}
@media (max-width: 1199px) {
  .u-header .u-sheet-1 {
    min-height: 137px;
  }
  .u-header .u-image-1 {
    margin-top: 21px;
  }
  .u-header .u-social-icons-1 {
    margin-top: -60px;
  }
  .u-header .u-menu-1 {
    margin-top: -28px;
    margin-right: auto;
    margin-bottom: 54px;
  }
}
@media (max-width: 991px) {
  .u-header .u-image-1 {
    width: auto;
    height: 32px;
  }
}
@media (max-width: 767px) {
  .u-header .u-sheet-1 {
    min-height: 148px;
  }
  .u-header .u-image-1 {
    margin-left: auto;
  }
  .u-header .u-social-icons-1 {
    margin-right: auto;
  }
}
@media (max-width: 575px) {
  .u-header .u-sheet-1 {
    min-height: 165px;
  }
}</style>
