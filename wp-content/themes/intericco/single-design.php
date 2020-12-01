<?php
/*
Template Name: design-single
*/

 get_header(); ?>

<?php include("menu.php") ?> 

<section class="top-site top-site-with-crumbs"> 

    <div class="swiper-container swiper-bg">

        <div class="swiper-wrapper">
           <?php while ( have_rows('kartinki_fonovye') ) : the_row(); ?>
                  <?php $img = get_sub_field('kartinka')['url']; ?>

                  <div class="swiper-slide">
                    <img src="<?php echo $img;?>" alt="">
                  </div>
            <?php endwhile; ?>  

        </div>

        <div class="swiper-pagination">
            <span>1</span>
            <span>2</span>
            <span>3</span>
        </div>
    </div>

    <div class="top-crumbs">   
        <div class="crumbs-item">
           <a href="#">Кейс</a>           
        </div>    
        <div class="crumbs-last">
           <span>квартиры</span>           
        </div>
    </div>  
    <div class="top-site-middle">
        <h1 class="top-site-middle-title">
            <?php the_title();?>
        </h1>
        <p class="top-site-middle-text"><?php the_field('opisanie')?></p>
        <div class="top-site-middle-bottom">
        <a href="#" class="main-link top-site-middle-bottom-link"><?php pll_e('callus');?></a>
        <p class="date"><?php echo get_the_date('d.m.Y'); ?></p>
        </div>
    </div>
    <a href="#" class="text-with-logo">
        <h3>INTERICCO </h3>
        <span>Interior design studio</span>
    </a>
</section>

<div class="design-single-wrapper">

    <div class="middle-line middle-line-first"></div>
    <div class="middle-line middle-line-second"></div>
    <div class="middle-line middle-line-third"></div>
    <div class="middle-line middle-line-fourth"></div>
    <div class="middle-line middle-line-fifth"></div>

    <div class="design-single-portfolio">

        <div class="left-side middle-portfolio-left">
            <div class="left-side-title middle-portfolio-left-title">
                <div class="left-side-title-wrapper portfolio-left-title-wrapper">
                    <h2 class="left-side-title-tag portfolio-left-title-tag">Портфолио</h2>
                    <span class="line line-purple line-purple-mob"></span>
                    <span class="line line-corner line-corner-mob"></span>
                    <span class="line line-blue line-blue-mob"></span>        
                </div>
                <div class="portfolio-left-title-red_line">
                    <span></span>
                </div>
            </div>
        </div>

        <div class="portfolio-author">
            <div class="author-block">
                <h2 class="author-block-title">автор</h2>
                <div class="author-img-block">



                



                    <img class="author-avatar" src="<?php $foto_avtora = get_field('foto_avtora')['url'];  echo $foto_avtora;?>" alt="">
                    <div class="design-icon"><img src="/wp-content/themes/intericco/images/small-design-icon.svg" alt=""></div>
                </div>
                <span class="author-name"><?php the_field('name_author');?></span>               
            </div>
        
            <div class="blog-single-main-top-moment">
                <div class="moment-left">
                    <span>Момент</span>
                    <div class="tripple-btn tripple-btn-small">
                        <span class="tripple-btn-first"></span>
                        <span class="tripple-btn-second"></span>
                        <span class="tripple-btn-third"></span>                           
                    </div>
                </div>
                <div class="moment-text">
                  <?php the_field('tekst_avtora');?>

                    <div class="moment-text-bg">
                        <span>ABOUT</span>
                    </div>
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
              <h2 class="left-side-title-tag left-side-sm-title-tag">1 этап</h2>       
            </div>
            <a class="portfolio-left-scroll" href="#">ВНИЗ</a>
          </div>
          <div class="left-side-text left-side-sm-text">
            <span>ЭТАП 1</span>
          </div>          
        </div>
    
        <div class="info-middle">
    
          <div class="info-middle-top">

            <div class="title-block title-block-reverse">      
                <div class="title-block-lines">
                  <span class="line line-purple"></span>
                  <span class="line line-corner"></span>
                  <span class="line line-blue"></span>  
                </div>    
                <div class="lines-title-wrapper">
                    <h2 class="lines-title info-middle-top-title"><?php the_field('2d_dizajn');?></h2>
                    <span class="line line-purple line-purple-mob"></span>
                    <span class="line line-corner line-corner-mob"></span>
                    <span class="line line-blue line-blue-mob"></span>             
                  </div>     
              </div>
 
          </div>
          
          <div class="info-blog-single-middle">

            <div class="info-blog-single-middle-text">
                <?php the_field('tekstovaya_oblast');?>
            </div>

            <div class="info-blog-single-middle-img">
                <span class="line line-purple"></span>
                <span class="line line-corner"></span>
                <span class="line line-blue"></span>  
                <img src="<?php $izobrazhenie_dizajna_2d = get_field('izobrazhenie_dizajna_2d')['url'];  echo $izobrazhenie_dizajna_2d;?>" alt="">
                <span class="blog-single-img-text"><?php the_field('tekst-miniatyura');?></span>
            </div>
          </div>
    
        </div>
    </div>

    <div class="design-single-bottom">
        
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

          <div class="design-single-bottom-3d">

            <div class="left-side left-side-sm left-side-info">
                <div class="left-side-title left-side-sm-title">
                  <div class="left-side-title-wrapper left-side-sm-title-wrapper">
                    <h2 class="left-side-title-tag left-side-sm-title-tag">2 этап</h2>       
                  </div>
                  <a class="portfolio-left-scroll" href="#">ВНИЗ</a>
                </div>       
              </div>

              <div class="middle-3d">

                <div class="info-middle-top">
                    <div class="title-block title-block-reverse">      
                        <div class="title-block-lines">
                          <span class="line line-purple"></span>
                          <span class="line line-corner"></span>
                          <span class="line line-blue"></span>  
                        </div>    
                        <div class="lines-title-wrapper">
                            <h2 class="lines-title info-middle-top-title"><?php the_field('3d_dizajn');?></h2>
                            <span class="line line-purple line-purple-mob"></span>
                            <span class="line line-corner line-corner-mob"></span>
                            <span class="line line-blue line-blue-mob"></span>    
                            <div class="design-icon"><img src="/wp-content/themes/intericco/images/small-design-icon.svg" alt=""></div>         
                        </div>     
                      </div>                      
                      <div class="middle-top-big-text">
                        <span>About</span>
                      </div>
                  </div>

                  <div class="middle-3d-center">

                    <div class="info-blog-single-middle-img">
                        <span class="line line-purple"></span>
                        <span class="line line-corner"></span>
                        <span class="line line-blue"></span>  
                        <img src="<?php $izobrazhenie_dizajna = get_field('izobrazhenie_dizajna')['url'];  echo $izobrazhenie_dizajna;?> " alt="">
                        <span class="blog-single-img-text">Этап 2</span>
                    </div>

                    <div class="middle-3d-center-text">
                        <?php the_field('tekst_dizajna');?>
                        <a class="show-more">Посмотреть больше</a>
                    </div>
                  </div>

                  <a href="#" class="consultation">
                    <div class="consultation-text">
                        <h3><?php the_field('zagolovok_ponravilsya');?></h3>
                        <p><?php the_field('podzagolovok');?></p>
                    </div>
                    <div class="tripple-btn tripple-btn-bigger">
                        <span class="tripple-btn-first"></span>
                        <span class="tripple-btn-second"></span>
                        <span class="tripple-btn-third"></span>
                        <h3 class="tripple-btn-title">Консультация</h3>
                    </div>
                </a>

              </div>

              <div class="right-3d">
                  <span class="right-3d-text">intericco</span>
                  <span class="right-3d-text right-3d-text-dark">intericco</span>
                  <span class="right-3d-text">intericco</span>
                  <span class="right-3d-text right-3d-text-dark">intericco</span>
              </div>

          </div>

          <div class="design-single-bottom-fabric">
            <div class="fabric-middle">

                <div class="info-middle-top">
                    <div class="title-block title-block-reverse">      
                        <div class="title-block-lines">
                          <span class="line line-purple"></span>
                          <span class="line line-corner"></span>
                          <span class="line line-blue"></span>  
                        </div>    
                        <div class="lines-title-wrapper">
                            <h2 class="lines-title info-middle-top-title"><?php the_field('zagolovok_osobyj_material');?></h2>
                            <span class="line line-purple line-purple-mob"></span>
                            <span class="line line-corner line-corner-mob"></span>
                            <span class="line line-blue line-blue-mob"></span>                                
                        </div>     
                    </div>                      
                </div> 

                <div class="fabric-middle-content">
                    <div class="fabric-middle-content-img">
                        <img src="<?php $izobrazhenie_materiala = get_field('izobrazhenie_materiala')['url'];  echo $izobrazhenie_materiala;?>" alt="">
                    </div>

                    <div class="fabric-middle-content-text">
                        <h2><?php the_field('zagolovokmateriala');?></h2>
                        <div>
                        <?php the_field('opisanie_materiala');?>
                        </div>     
                        <span class="number">01</span>              
                    </div>
                </div>

            </div>
          </div>
    </div>
    
</div>


<?php get_footer(); ?>