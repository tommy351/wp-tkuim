<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
<header id="header">
  <nav id="top-nav-wrap">
    <div id="top-nav">
      <ul id="top-nav-right">
        <?php
        if (has_nav_menu('top')){
          wp_nav_menu(array(
            'theme_location' => 'top',
            'items_wrap' => '%3$s',
            'container' => ''
          ));
        }
        ?>
      </ul>
    </div>
  </nav>
  <div id="banner"></div>
</header>
<div id="wrapper">
<div id="container">

<nav id="main-nav">
  <h1 id="logo-wrap">
    <a href="<?= esc_url(home_url('/')) ?>" rel="home" id="logo"><?php bloginfo('name') ?></a>
  </h1>
  <?php wp_nav_menu(array('theme_location' => 'primary')) ?>
</nav>

<div id="container-body">
<div id="main-content">
