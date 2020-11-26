<?php
/*
Template Name: Front-page
*/

 get_header(); ?>

 <?php include("menu.php") ?> 

<section style="background: url(/wp-content/themes/intericco/images/front-page-bg.jpg) no-repeat top center; background-size: cover;" class="top-site">   
  <div class="top-site-middle">
    <h1 class="top-site-middle-title">
      <?php the_field('general_title');?>
    </h1>
    <div class="top-site-middle-bottom">
      <a href="#" class="main-link top-site-middle-bottom-link"><?php the_field('general_btn');?></a>
      <p><?php the_field('prizyv');?></p>
    </div>
  </div>
  <div class="long-line"></div>
</section>

<section class="middle-wrapper">

  <div class="middle-line middle-line-first"></div>
  <div class="middle-line middle-line-second"></div>
  <div class="middle-line middle-line-third"></div>
  <div class="middle-line middle-line-fourth"></div>
  <div class="middle-line middle-line-fifth"></div>

  <div class="middle-portfolio">
    <div class="left-side middle-portfolio-left">
      <div class="left-side-title middle-portfolio-left-title">
        <div class="left-side-title-wrapper portfolio-left-title-wrapper">
          <h2 class="left-side-title-tag portfolio-left-title-tag"><?php pll_e('portfolio'); ?></h2>
          <span class="line line-purple line-purple-mob"></span>
          <span class="line line-corner line-corner-mob"></span>
          <span class="line line-blue line-blue-mob"></span>        
        </div>
        <div class="portfolio-left-title-red_line">
          <span></span>
        </div>
        <a class="portfolio-left-scroll"><?php pll_e('down'); ?></a>
      </div>
      <div class="left-side-text middle-portfolio-left-text">
        <span><?php pll_e('work'); ?></span>
      </div>
    </div>
    <div class="middle-portfolio-slider">
      <div class="middle-portfolio-slider-top">

        <div class="middle-portfolio-slider-top-left">
          <a href="#" class="tripple-btn tripple-btn-small">
            <span class="tripple-btn-first"></span>
            <span class="tripple-btn-second"></span>
            <span class="tripple-btn-third"></span>
            <h3 class="tripple-btn-title"><?php pll_e('designtitle'); ?></h3>
          </a>
          <span class="slash">\</span>
          <h3 class="category"><?php pll_e('architekttitle');?></h3>
        </div>

        <a class="tripple-btn tripple-btn-big" href="#">
          <span class="tripple-btn-first"></span>
          <span class="tripple-btn-second"></span>
          <span class="tripple-btn-third"></span>
          <h3 class="tripple-btn-title tripple-btn-title-arrow"><?php pll_e('allprojects');?></h3>
        </a>

      </div>

      <div class="swiper-container-design">
        <span class="line line-purple"></span>
        <span class="line line-corner"></span>
        <span class="line line-blue"></span>    
        <div class="swiper-container swiper-main">

          <div class="swiper-wrapper">

                <?php
                  $params = array(
                      'post_type' => 'design',
                      'tax_query' => array(
                        array(
                            'taxonomy' => 'kategoriya',
                            'field'    => 'kategoriya',
                            'terms'    => 'kategoriya',
                        )
                      ),
                      'posts_per_page' => -1
                  );
                  $query = new WP_Query( $params );
                  ?>
                  <?php if($query->have_posts()): ?>
                      
                      <?php while ($query->have_posts()): $query->the_post() ?>
                        <?php $miniImg = get_field('miniatyura');  ?>

                          <div class="swiper-slide">
                            <img src="<?php echo $miniImg['url']?>">
                            <h3 class="slide-title"><?php the_title();?></h3>
                          </div>

                      <?php endwhile; ?>
                  <?php endif; 
                ?>
          </div>
          <div class="swiper-pagination">
            <span>1</span>
            <span>2</span>
            <span>3</span>
          </div>
          <div class="swiper-button-next"><svg class="icon"><use xlink:href="#plus"></svg></div>  
          <div class="swiper-button-prev"><svg class="icon"><use xlink:href="#minus"></svg></div>  

        </div>
      </div>

    </div>
  </div>

  <div class="info" style="background: url(/wp-content/themes/intericco/images/info-bg.jpg) no-repeat top center; background-size: cover;">

    <div class="middle-line middle-line-first">
      <div class="middle-line-square"></div>
      <div class="middle-line-square middle-line-square-mob"></div>
    </div>
    <div class="middle-line middle-line-second">
      <div class="middle-line-square"></div>
    </div>
    <div class="middle-line middle-line-third">
      <div class="middle-line-square"></div>
    </div>
    <div class="middle-line middle-line-fourth">
      <div class="middle-line-square"></div>
    </div>
    <div class="middle-line middle-line-fifth">
      <div class="middle-line-square"></div>
      <div class="middle-line-square middle-line-square-mob"></div>

    </div>

    <div class="left-side left-side-sm left-side-info">
      <div class="left-side-title left-side-sm-title">
        <div class="left-side-title-wrapper left-side-sm-title-wrapper">
          <h2 class="left-side-title-tag left-side-sm-title-tag"><?php pll_e('aboutus');?></h2>       
        </div>
      </div>
      <div class="left-side-text left-side-sm-text">
        <span>ABOUT US</span>
      </div>
    </div>

    <div class="info-middle">

      <div class="info-middle-top">

          <div class="lines-title-wrapper">
            <!-- <h2 class="left-side-title-tag">Инфографика</h2> -->
            <h1 class="lines-title info-middle-top-title"><?php pll_e('infographics');?></h1>
            <span class="line line-purple line-purple-mob"></span>
            <span class="line line-corner line-corner-mob"></span>
            <span class="line line-blue line-blue-mob"></span>             
          </div>       
      </div>
      <div class="info-middle-main">
        <div class="info-middle-main-numbers">

          <div class="main-numbers-block">
            <span class="number"><?php pll_e('numbfirst');?></span>
            <div class="tripple-btn tripple-btn-tiny">
              <span class="tripple-btn-first"></span>
              <span class="tripple-btn-second"></span>
              <span class="tripple-btn-third"></span>         
            </div>
            <span class="main-numbers-block-category"><?php pll_e('projectstext');?></span>
            <span class="main-numbers-block-bottom-text"><?php pll_e('done');?></span>
          </div>

          <div class="main-numbers-block">
            <span class="number"><?php pll_e('numbsec');?></span>
            <div class="tripple-btn tripple-btn-tiny">
              <span class="tripple-btn-first"></span>
              <span class="tripple-btn-second"></span>
              <span class="tripple-btn-third"></span>         
            </div>
            <span class="main-numbers-block-category"><?php pll_e('projectstextsec');?></span>
            <span class="main-numbers-block-bottom-text"><?php pll_e('donesec');?></span>
          </div>

          <div class="main-numbers-block">
            <span class="number"><?php pll_e('numbthird');?></span>
            <div class="tripple-btn tripple-btn-tiny">
              <span class="tripple-btn-first"></span>
              <span class="tripple-btn-second"></span>
              <span class="tripple-btn-third"></span>         
            </div>
            <span class="main-numbers-block-category"><?php pll_e('projectstextthird');?></span>
            <span class="main-numbers-block-bottom-text"><?php pll_e('donethird');?></span>
          </div>

        </div>
        <div class="info-middle-main-rating">
            <h3 class="info-middle-main-rating-title"><?php pll_e('webest');?></h3>
            <div class="info-middle-main-rating-stars">
              <span class="star-icon star-icon-active"><svg class="icon"><use xlink:href="#star"></svg></span>
              <span class="star-icon star-icon-active"><svg class="icon"><use xlink:href="#star"></svg></span>
              <span class="star-icon star-icon-active"><svg class="icon"><use xlink:href="#star"></svg></span>
              <span class="star-icon star-icon-active"><svg class="icon"><use xlink:href="#star"></svg></span>
              <span class="star-icon star-icon-active"><svg class="icon"><use xlink:href="#star"></svg></span>
            </div>
            <span class="info-middle-main-rating-text"><?php pll_e('generaltext');?> </span>
            <a class="main-link" href="#"><?php pll_e('callus');?> </a>
        </div>
      </div>

    </div>

    <div class="info-right">
      <a href="#" class="text-with-logo">
        <h3>INTERICCO </h3>
        <span>Interior design studio</span>
      </a>
    </div>

  </div>

  <div class="service">
    <div class="middle-line middle-line-first"></div>
    <div class="middle-line middle-line-third"></div>
    <div class="middle-line middle-line-fifth"></div>

    <div class="service-top">
      <div class="service-top-left"></div>
      <div class="service-top-middle">
        <div class="service-top-middle-left">
          <div class="service-top-middle-left-line"></div>
        </div>
        <div class="service-top-middle-right">

          <div class="title-block">
            <div class="lines-title-wrapper">
              <h2 class="lines-title info-middle-top-title"><?php pll_e('ourservices');?></h2>
              <span class="line line-purple line-purple-mob"></span>
              <span class="line line-corner line-corner-mob"></span>
              <span class="line line-blue line-blue-mob"></span>             
            </div>   
            <div class="title-block-lines">
              <span class="line line-purple"></span>
              <span class="line line-corner"></span>
              <span class="line line-blue"></span>  
            </div>         
          </div>

        </div>
      </div>
      <div class="service-top-right"></div>
    </div>

    <div class="service-middle">

      <div class="left-side service-middle-left">  
        <div class="left-side-text service-middle-left-text">
          <span>SERVICES</span>
        </div>
        <div class="service-middle-left-sign">
          interrico
        </div>
      </div>

        <div class="service-middle-main">
  
        <?php
                $params = array(
                    'post_type' => 'services',
                    'posts_per_page' => 2
                );
                $query = new WP_Query( $params );
                ?>
                <?php if($query->have_posts()): ?>

                  <?php $numb = 00; ?>

                    
                    <?php while ($query->have_posts()): $query->the_post() ?>
                        <?php 
                            $imgmini = get_field('min_img')['url'];  
                            $minidesc = get_field('mini_desc');  
                            $link = get_field('link');  
                            $numb ++;
                        ?>

                        <a class="service-middle-main-block" href="<?php echo $link;?>">
                          <div style="background: url(<?php echo $imgmini;?>); background-size: cover;" class="service-middle-main-block-bg"></div>
                          <div class="middle-main-block-number">0<?php echo $numb;?></div>
                          <h2 class="middle-main-block-title"><?php the_title();?></h2>
                          <p class="middle-main-block-text"><?php echo $minidesc;?></p>
                          <div class="middle-main-block-bottom">
                            <span class="tripple-btn tripple-btn-medium">
                              <span class="tripple-btn-first"></span>
                              <span class="tripple-btn-second"></span>
                              <span class="tripple-btn-third"></span>
                              <h3 class="tripple-btn-title"><?php pll_e('moredetails');?></h3>
                            </span>
                          </div>
                        </a>
                        
                        <?php endwhile; ?>
                <?php endif; 
            ?>
  
           
  
          <div class="service-button-next"><svg class="icon"><use xlink:href="#arrow-down"></svg></div>
  
        </div>
      
      <div class="middle-service-left"></div>
    </div>

    <div class="service-bottom">
      <a class="service-bottom-link" href="#"> <svg class="icon"><use xlink:href="#arrow-down"></svg></a>
    </div>
  </div>

  <div class="news">
    <div class="middle-line middle-line-first"></div>
    <div class="middle-line middle-line-second"></div>
    <div class="middle-line middle-line-fourth"></div>
    <div class="middle-line middle-line-fifth"></div>

    <div class="left-side left-side-sm">
      <div class="left-side-title left-side-sm-title">
        <div class="left-side-title-wrapper left-side-sm-title-wrapper">
          <h2 class="left-side-title-tag left-side-sm-title-tag"><?php pll_e('ournews');?></h2>       
        </div>
      </div>
      <div class="left-side-text left-side-sm-text">
        <span>NEWS</span>
      </div>
    </div>

    <div class="news-middle">

      <div class="news-middle-top">

        <div class="title-block title-block-reverse">      
          <div class="title-block-lines">
            <span class="line line-purple"></span>
            <span class="line line-corner"></span>
            <span class="line line-blue"></span>  
          </div>    
          <div class="lines-title-wrapper">
              <h2 class="lines-title info-middle-top-title"><?php pll_e('newstitle');?></h2>
              <span class="line line-purple line-purple-mob"></span>
              <span class="line line-corner line-corner-mob"></span>
              <span class="line line-blue line-blue-mob"></span>             
            </div>     
        </div>

        <a class="news-middle-top-link" href="/blog"><?php pll_e('ournews');?></a>

      </div>

      <div class="news-middle-slider">
        <div class="swiper-container swiper-main">

          <div class="swiper-wrapper">

          <?php
                $params = array(
                    'post_type' => 'blog',
                    'posts_per_page' => -1
                );
                $query = new WP_Query( $params );
                ?>
                <?php if($query->have_posts()): ?>
                    
                    <?php while ($query->have_posts()): $query->the_post() ?>
                        <?php $imgmini = get_field('img_mini')['url']; 
                    ?>

                      <div class="swiper-slide">
                        <img src="<?php echo $imgmini;?>">
                        <span class="slide-date"><?php echo get_the_date('d.m.Y'); ?></span>
                        <h3 class="slide-title"><?php the_title();?></h3>
                        <a href="<?php the_permalink();?>" class="tripple-btn tripple-btn-bigger">
                          <span class="tripple-btn-first"></span>
                          <span class="tripple-btn-second"></span>
                          <span class="tripple-btn-third"></span>
                          <h3 class="tripple-btn-title"><?php pll_e('readmoretitle');?></h3>
                        </a>
                      </div>
                        <?php endwhile; ?>
                <?php endif; 
            ?>

          </div>
          <div class="slider-scrollbar"></div>
          <div class="swiper-pagination">
            <span>1</span>
            <span>2</span>
            <span>3</span>
          </div>          
          <div class="swiper-button-next"><svg class="icon"><use xlink:href="#plus"></svg></div>    
          <div class="swiper-button-prev"><svg class="icon"><use xlink:href="#minus"></svg></div>   

          </div>
        </div>
      </div>

      <div class="news-right">
        <a class="news-right-logo" href="#">
          <span><img src="/wp-content/themes/intericco/images/logo-e.svg"></span>
        </a>
      </div>

  </div>

</section>

<?php get_footer(); ?>
