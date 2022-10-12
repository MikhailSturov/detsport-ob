<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="">
  <meta name="description" content="">

  <meta property="og:title" content="<?php the_field('organisation_title', 'options'); ?>">
  <meta property="og:site_name" content="<?php the_field('organisation_type', 'options'); ?>">
  <meta property="og:url" content="http://na-pushkinskoj.vrn.ru/index.html">
  <meta property="og:image" content="img/slider/slide-2.jpg">

  <link type="image/x-icon" rel="shortcut icon" href="img/favicon.ico">
  <title><?php the_field('organisation_title', 'options'); ?></title>
</head>

<body>

  <?php wp_head(); ?>

  <header class="page-header--inner">
      
      <nav class="main-nav main-nav--inner main-nav--nojs">
        <button class="main-nav__toggle" type="button"><span class="visually-hidden">Открыть меню</span></button>
        
        <div class="main-nav__wrapper main-nav__wrapper--inner">
          <?php wp_nav_menu(array(
          'theme_location' => 'top-inner',
          'container' => null,
          'menu_class' => 'main-nav__list site-list--inner',
          'menu_id' => ' '
          ));?>
        </div>
        
      </nav>

    <div class="page-header__wrapper page-header__wrapper--inner">
          
      <div class="page-header__tools-container--inner">
        <article class="page-header__blind blind" itemprop="copy">
          <?php echo do_shortcode( '[bvi text=""]' ); ?>
          <p class="blind__paragraph">Версия для слабовидящих</p>
        </article>
        <?php get_sidebar(); ?>
      </div>

      <div class="page-title__wrapper">
        <h1 class="page-title">Новости центра</h1>
      </div>

    </div>

  </header>