<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <title>Waqar Hussain</title>
</head>
<body>
<header class="header">
  <?php $logoimg = get_header_image(); ?>
  <a href="<?php site_url('http://theme-development.test/'); ?> " class="logo">Waqar Hussain</a>
  <?php
  wp_nav_menu(array('theme_location'=>'primary-menu','menu_class'=>'nav'));
  ?>
</header>