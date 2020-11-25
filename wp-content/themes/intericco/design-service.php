<?php
/*
Template Name: service-design
*/

 get_header(); ?>

<?php include("menu.php") ?> 

<section class="top-site top-site-service-design top-site-with-crumbs"> 

    <div class="swiper-container swiper-bg">
        <div class="swiper-wrapper">
            <?php while ( have_rows('galereya') ) : the_row(); ?>
                <?php $image = get_sub_field('image')['url']; ?>
                <div class="swiper-slide">
                    <img src="<?php echo $image;?>" alt="">
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
           <a href="#">Главная</a>           
        </div>    
        <div class="crumbs-last">
           <span>Дизайн интерьера</span>           
        </div>
    </div>  
    <div class="top-site-middle">
        <h1 class="top-site-middle-title"> <?php the_field('title'); ?> </h1>
        <div class="design-icon"><img src="/wp-content/themes/intericco/images/design-icon.svg" alt=""></div>
    </div>
    <a href="#" class="text-with-logo">
        <h3>INTERICCO </h3>
        <span>Interior design studio</span>
    </a>
</section>

<section class="middle-wrapper-design-service">

    <div class="middle-line middle-line-first"></div>
    <div class="middle-line middle-line-second"></div>
    <div class="middle-line middle-line-third"></div>
    <div class="middle-line middle-line-fourth"></div>
    <div class="middle-line middle-line-fifth"></div>

    <div class="stages">
        <div class="left-side middle-portfolio-left">
            <div class="left-side-text middle-portfolio-left-text">
              <span>ЭТАПЫ</span>
            </div>
        </div>
        <div class="stages-middle">
            
            <div class="lines-title-wrapper">
                <h1 class="lines-title info-middle-top-title">Мы делаем</h1>
                <span class="line line-purple line-purple-mob"></span>
                <span class="line line-corner line-corner-mob"></span>
                <span class="line line-blue line-blue-mob"></span>   
                <span class="service-sub-text">Наш комплекс услуг</span>          
            </div>  

            <div class="stages-middle-blocks">
                <?php
                    $numb;
                    while ( have_rows('we_do') ) : the_row(); $numb++?>
                        <?php $titleWeDo = get_sub_field('title_we_do'); ?>


                        <div class="stages-middle-blocks-item">
                            <h2 class="middle-blocks-item-title"><?php echo $titleWeDo;?></h2>
                            <div class="tripple-btn tripple-btn-small">
                                <span class="tripple-btn-first"></span>
                                <span class="tripple-btn-second"></span>
                                <span class="tripple-btn-third"></span>                           
                            </div>
                            <span class="middle-blocks-item-number">0<?php echo $numb;?></span>
                        </div>

                    <?php endwhile; 
                ?>
            </div>
        </div>

        <div class="news-right">
            <a class="news-right-logo" href="#">
              <span><img src="/wp-content/themes/intericco/images/logo-e.svg"></span>
            </a>
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
          </div>
    
        <div class="info-middle">
    
            <div class="lines-title-wrapper">
                <h1 class="lines-title info-middle-top-title">  <?php the_field('unikalnyj_metod_title'); ?> </h1>
                <span class="line line-purple line-purple-mob"></span>
                <span class="line line-corner line-corner-mob"></span>
                <span class="line line-blue line-blue-mob"></span>        
            </div>  
 
          <div class="info-middle-main">
            <p class="service-text"><?php the_field('unikalnyj_metod_text'); ?></p>
            <div class="service-info-items">

            



            





                <?php
                    $numbb;
                    while ( have_rows('spisok') ) : the_row(); $numbb++?>
                        <?php $titleSpisok = get_sub_field('title_spisok'); ?>
                        <div class="service-info-items-block">
                            <h2><?php echo $titleSpisok;?></h2>
                            <div class="tripple-btn tripple-btn-small">
                                <span class="tripple-btn-first"></span>
                                <span class="tripple-btn-second"></span>
                                <span class="tripple-btn-third"></span>                           
                            </div>
                            <span class="number">0<?php echo $numbb;?></span>
                        </div>

                    <?php endwhile; 
                ?>




                

             

            </div>

            <div class="service-info-price">
                <span class="service-info-price-text">Мы просчитаем бесплатно Ваш дизайн-проект!</span>
                <div class="tripple-btn tripple-btn-medium">
                    <span class="tripple-btn-first"></span>
                    <span class="tripple-btn-second"></span>
                    <span class="tripple-btn-third"></span>
                    <h3 class="tripple-btn-title">Расчитать</h3>
                </div>
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

      <div class="service-slider">

        <div class="left-side left-side-sm left-side-info">       
        </div>

        <div class="service-slider-middle">
            <div class="lines-title-wrapper">
                <h1 class="lines-title info-middle-top-title">Составляющие дизайн-проекта</h1>
                <span class="line line-purple line-purple-mob"></span>
                <span class="line line-corner line-corner-mob"></span>
                <span class="line line-blue line-blue-mob"></span>        
            </div> 
            <div class="service-slider-wrapper">
                <div class="swiper-container swiper-main">
    
                    <!-- swiper slides -->
                    <div class="swiper-wrapper">
                    


                    <?php
                        while ( have_rows('sostovlyayushhee_dizajn_proekt') ) : the_row(); $numbb++?>
                            <?php 
                                $zagolovok = get_sub_field('zagolovok'); 
                                $podzagolvook = get_sub_field('podzagolvook'); 
                                $podtekst = get_sub_field('podtekst'); 
                            ?>
                            




                            <div class="swiper-slide">
                                <div class="slide-square">
                                    <span>Intericco</span>
                                </div>
                                <h2><?php echo $zagolovok;?></h2>
                                <div class="tripple-btn tripple-btn-small">
                                    <span class="tripple-btn-first"></span>
                                    <span class="tripple-btn-second"></span>
                                    <span class="tripple-btn-third"></span>                          
                                </div>
                                <span><?php echo $podzagolvook;?></span>
                                <p> <?php echo $podtekst;?> </p>
                                <span><strong>Входят:</strong></span>    
                                <ul>
                                    <?php
                                        while ( have_rows('spisok_uslug') ) : the_row();?>
                                            <?php $nazvanie = get_sub_field('nazvanie'); ?>

                                            <li><?php echo $nazvanie;?></li>
                                            

                                        <?php endwhile; 
                                    ?>
                                </ul>
                                <div class="tripple-btn tripple-btn-medium">
                                    <span class="tripple-btn-first"></span>
                                    <span class="tripple-btn-second"></span>
                                    <span class="tripple-btn-third"></span>
                                    <h3 class="tripple-btn-title">Расчитать</h3>
                                </div>
                            </div>
                            



                        <?php endwhile; 
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

      <div class="service-accordion">          
            
        <div class="left-side left-side-sm left-side-info">       
        </div>

        <div class="accordion-middle">
            
            <div class="lines-title-wrapper">
                <h1 class="lines-title info-middle-top-title">Уникальный метод</h1>
                <span class="line line-purple line-purple-mob"></span>
                <span class="line line-corner line-corner-mob"></span>
                <span class="line line-blue line-blue-mob"></span>        
            </div>  

            <div class="accordion">

                <div class="design-icon"><img src="/wp-content/themes/intericco/images/small-design-icon.svg" alt=""></div>        

                <div class="content-box">
                    <div class="label">
                        <span class="number">01</span>
                        <span class="label-name">Планировка уже определена</span>
                        <div class="open-plus">
                            <svg class="icon"><use xlink:href="#plus"></svg>
                        </div>
                    </div>
                    
                    <div class="content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis eum illo laudantium beatae delectus omnis natus, quia accusamus architecto temporibus debitis, tempore, exercitationem eligendi hic dolores tenetur maiores explicabo repudiandae.
                        </p>
                    </div>
                </div>
                
                <div class="content-box">
                    <div class="label">
                        <span class="number">02</span>
                        <span class="label-name">Планировка уже определена</span>
                        <div class="open-plus">
                            <svg class="icon"><use xlink:href="#plus"></svg>
                        </div>
                    </div>
                    
                    <div class="content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis eum illo laudantium beatae delectus omnis natus, quia accusamus architecto temporibus debitis, tempore, exercitationem eligendi hic dolores tenetur maiores explicabo repudiandae.
                        </p>
                    </div>
                </div>
                
                <div class="content-box">
                    <span class="line line-purple"></span>
                    <span class="line line-corner"></span>
                    <span class="line line-blue"></span>  
                    <div class="label">
                        <span class="number">03</span>
                        <span class="label-name">Планировка уже определена</span>
                        <div class="open-plus">
                            <svg class="icon"><use xlink:href="#plus"></svg>
                        </div>
                    </div>
                    
                    <div class="content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis eum illo laudantium beatae delectus omnis natus, quia accusamus architecto temporibus debitis, tempore, exercitationem eligendi hic dolores tenetur maiores explicabo repudiandae.
                        </p>
                    </div>
                </div>
                
            </div>

            <div class="accordion-question">
                <span class="line line-purple"></span>
                <span class="line line-corner"></span>
                <span class="line line-blue"></span>  
                <div class="design-icon"><img src="/wp-content/themes/intericco/images/small-design-icon.svg" alt=""></div>      
                <div class="accordion-question-left">
                    <h3>Остались вопросы?</h3>
                    <span>Получи ответ на все вопросы, заполнив форму обратной связи!</span>
                </div>
                <div class="tripple-btn tripple-btn-medium">
                    <span class="tripple-btn-first"></span>
                    <span class="tripple-btn-second"></span>
                    <span class="tripple-btn-third"></span>
                    <h3 class="tripple-btn-title">Расчитать</h3>
                </div>
            </div>

        </div>
      </div>

      <div class="seo-service">
        <div class="left-side left-side-sm left-side-info">       
        </div>
        <div class="design-seo">

            <div class="design-icon"><img src="/wp-content/themes/intericco/images/small-design-icon.svg" alt=""></div>
    
            <div class="lines-title-wrapper">
              <h1 class="lines-title info-middle-top-title">Какой-то SEO текст</h1>
              <span class="line line-purple line-purple-mob"></span>
              <span class="line line-corner line-corner-mob"></span>
              <span class="line line-blue line-blue-mob"></span>             
            </div>  
    
            <div class="design-seo-middle">
              <h4>Какой-то SEO заголовок</h4>
              <p>Жизнь любого нашего проекта, будь то дизайн интерьера или архитектура, начинается задолго до первой линии эскиза
                задолго до первой линии эскиза задолго до первой линии эскиза. Начало заложено в жизненном опыте заказчика и в
                его понимании своих желаний. В его естественных, сложившехся за годы привычках и мироощущении. Начало
                вшито в наши компетенции и врожденную скрупулезность в деталях. Начало заложено в жизненном опыте заказчика и
                в его понимании своих желаний. В его естественных, сложившехся за годы привычках и мироощущении. Начало
                вшито в наши компетенции и врожденную скрупулезность в деталях</p>
            </div>
    
          </div>
      </div>
    
</section>

<?php get_footer(); ?>