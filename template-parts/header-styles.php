<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
<style> .u-header {
  background-image: none;
  min-height: 96px;
}
.u-header .u-menu-1 {
  margin: 24px auto 24px 0;
}
.u-header .u-nav-1 {
  font-size: 1rem;
}
.u-block-94b0-19 {
  font-size: 1rem;
}
.u-header .u-nav-2 {
  font-size: 1rem;
}
.u-block-94b0-17 {
  font-size: 1rem;
}</style>
