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
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
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
            <ul class="header-lang">
              <?php pll_the_languages();?>
            </ul>
          </div>       
      
          <?php 	
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

            if($custom_logo_id){ ?>
              <a href="<?php echo home_url(); ?>" class="header-logo">
                <img src="<?php echo $image[0];?>" alt="">
              </a> 
            <?php }
          ?>

          <div class="header-right-block">
            <div class="small-line"></div>
            <div class="social">
              <a class="social-icon" target="_blank" href="<?php the_field('insta');?>"><svg class="icon"><use xlink:href="#inst"></svg></a>
              <a class="social-icon" target="_blank" href="<?php the_field('twitter');?>"><svg class="icon"><use xlink:href="#twitter"></svg></a>
              <a class="social-icon" target="_blank" href="<?php the_field('facebook');?>"><svg class="icon"><use xlink:href="#facebook"></svg></a>                
            </div>
          </div>
        </header>