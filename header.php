<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge, chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
<nav class="header__top-menu">
  <ul>
    <?php if (has_nav_menu('top')) : ?>
      <?php wp_nav_menu(array(
        'theme_location' => 'top',
        'items_wrap' => '%3$s',
        'container' => '',
        'depth' => 1
      )) ?>
    <?php endif; ?>
    <?php pll_the_languages(array(
      'show_flags' => true,
      'hide_current' => true
    )) ?>
  </ul>
</nav>
<div class="base__container">
<div class="header__menu">
  <h1 class="header__logo-wrap">
    <a href="<?= esc_url(home_url('/')) ?>" class="header__logo"><?php bloginfo('name') ?></a>
  </h1>
  <label class="header__menu-toggle" for="header__menu-checkbox">
    <i class="fa fa-bars"></i>
  </label>
  <input id="header__menu-checkbox" type="checkbox">
  <nav class="header__nav">
    <?php wp_nav_menu(array('theme_location' => 'primary')) ?>
  </nav>
</div>
<main class="base__main">