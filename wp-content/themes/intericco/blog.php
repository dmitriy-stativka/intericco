<?php
/*
Template Name: blog
*/

 get_header(); ?>

<div class="blog-wrapper">

  <div class="middle-line middle-line-first"></div>
  <div class="middle-line middle-line-second"></div>
  <div class="middle-line middle-line-third"></div>
  <div class="middle-line middle-line-fourth"></div>
  <div class="middle-line middle-line-fifth"></div>
  <?php include("menu.php") ?> 

  <div class="blog-container">
    <div class="top-crumbs">       
        <div class="crumbs-last">
           <span><?php the_title();?></span>
            <span class="line line-purple"></span>
            <span class="line line-corner"></span>
            <span class="line line-blue"></span>  
        </div>
    </div>

    <section class="blog-slider">
        <div class="design-icon"><img src="/wp-content/themes/intericco/images/design-icon.svg" alt=""></div>
        <div class="swiper-container blog-slider-container">
            <div class="swiper-wrapper">


            <?php
                $params = array(
                    'post_type' => 'blog',
                    'posts_per_page' => -1
                );
                $query = new WP_Query( $params );
                ?>
                <?php if($query->have_posts()): ?>

                    <?php $numb = -1; ?>
                    
                    <?php while ($query->have_posts()): $query->the_post() ?>
                        <?php 
                            $imgmini = get_field('img_mini')['url'];  
                            $minidesc = get_field('mini_desc');  
                            $numb ++;
                        ?>

                        <a href="<?php the_permalink();?>" class="blog-item swiper-slide" data-index="<?php echo $numb;?>">
                            <span class="line line-purple"></span>
                            <span class="line line-corner"></span>
                            <span class="line line-blue"></span>  
                            <div class="blog-item-title">
                                <h3><?php the_title();?></h3>
                                <div class="tripple-btn tripple-btn-small">
                                        <span class="tripple-btn-first"></span>
                                        <span class="tripple-btn-second"></span>
                                        <span class="tripple-btn-third"></span>                           
                                </div>
                            </div>
                            <div class="blog-item-img">
                                    <img src="<?php echo $imgmini;?>">                    
                            </div>
                            <p class="blog-item-text"><?php echo $minidesc;?></p>
                            <div class="blog-item-bottom">
                                <div class="tripple-btn tripple-btn-bigger">
                                    <span class="tripple-btn-first"></span>
                                    <span class="tripple-btn-second"></span>
                                    <span class="tripple-btn-third"></span>
                                    <h3 class="tripple-btn-title"><?php pll_e('viewnew'); ?></h3>
                                </div>
                                <span class="blog-item-bottom-date"><?php echo get_the_date('d.m.Y'); ?></span>
                            </div>                      
                        </a>
                        
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
    </section>

    <a href="#" class="consultation">
        <div class="consultation-text">
            <h3><?php pll_e('blogtitle');?></h3>
            <p><?php pll_e('blogtext');?></p>
        </div>
        <div class="tripple-btn tripple-btn-bigger">
            <span class="tripple-btn-first"></span>
            <span class="tripple-btn-second"></span>
            <span class="tripple-btn-third"></span>
            <h3 class="tripple-btn-title"><?php pll_e('consultation');?></h3>
        </div>
    </a>

    <div class="design-seo">

        <div class="design-icon"><img src="/wp-content/themes/intericco/images/small-design-icon.svg" alt=""></div>

        <div class="lines-title-wrapper">
          <h1 class="lines-title info-middle-top-title"><?php pll_e('blogtitleseo');?></h1>
          <span class="line line-purple line-purple-mob"></span>
          <span class="line line-corner line-corner-mob"></span>
          <span class="line line-blue line-blue-mob"></span>             
        </div>  

        <div class="design-seo-middle">
            <?php
                wp_reset_postdata();
                global $post;
                the_content();
            ?>
        </div>

      </div>
  </div>

</div>

<?php get_footer(); ?>