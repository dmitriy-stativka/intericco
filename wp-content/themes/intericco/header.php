<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head>
section and everything up until
<div id="content">
  * * @link
  https://developer.wordpress.org/themes/basics/template-files/#template-partials
  * * @package cp */ ?>
  <!DOCTYPE html>
  <html <?php language_attributes(); ?>
    >
    <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>" />
	  <meta name="viewport" content="width=device-width, initial-scale=1" />
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
      <link
        href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Montserrat:wght@500&display=swap"
        rel="stylesheet"
      />
      <link rel="profile" href="https://gmpg.org/xfn/11" />
      <link
        rel="stylesheet"
        href="/wp-content/themes/intericco/styles/styles.min.css"
      />
      <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?> >
      <?php wp_body_open(); ?>

      <div class="wrapper">
        <header class="header">
          <div class="header-left-block">       
            <div class="header-lang">
              <span class="header-lang-item header-lang-item-active">RU</span>
              <span class="slash">/</span>
              <span class="header-lang-item">EN</span>
            </div>
          </div>       
          <a href="#" class="header-logo">
            <img src="/wp-content/themes/intericco/images/logo.svg" alt="Logo">
          </a>
          <div class="header-right-block">
            <div class="small-line"></div>
            <div class="social">
              <a class="social-icon" href="#"><svg class="icon"><use xlink:href="#inst"></svg></a>
              <a class="social-icon" href="#"><svg class="icon"><use xlink:href="#twitter"></svg></a>
              <a class="social-icon" href="#"><svg class="icon"><use xlink:href="#facebook"></svg></a>                
            </div>
          </div>
        </header>