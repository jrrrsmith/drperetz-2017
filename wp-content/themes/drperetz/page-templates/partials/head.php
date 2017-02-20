<!DOCTYPE html>
<html lang="en">
<head>
  <?php wp_head(); ?>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico?v=2" />
  <meta name="viewport" content="width=device-width, initial-scale=1" >
  <title><?php bloginfo('title'); ?></title>
  <link href="https://fonts.googleapis.com/css?family=Alegreya:400,400i,700,700i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/style.min.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body <?php body_class(); ?>>
