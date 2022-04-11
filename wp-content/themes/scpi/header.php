<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head() ?>
</head>
<body >

<header class="nav">
<a id ="seul" href="<?= home_url('/'); ?>"  title="<?= __('Homepage','scpi') ?>" >
    <img class="menu-logo" src="<?=get_theme_mod('logo')?> "alt=""> </a>
  <?php
  wp_nav_menu([
    'theme_location' => 'header',
    'container' => false,
    'menu_class' => 'nav__menu'
  ]);
  ?>
  <button class="nav__burger">
    <span></span>
  </button>
</header>
