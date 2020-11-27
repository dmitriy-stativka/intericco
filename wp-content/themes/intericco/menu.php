<div class="menu-left">
    <div class="navigation">
        <div class="navigation-left">
            <div class="menu-left-top-burger-close">
                <button class="menu-left-top-burger-cross">
                    <span></span>
                </button> 
            </div>
            <a class="logo-mob" href="#">
                <img src="/wp-content/themes/intericco/images/logo.svg">
            </a>
            <a href="#" class="text-with-logo">
                <h3>INTERICCO </h3>
                <span>Interior design studio</span>
            </a>
        </div>


        <!-- <ul class="menu-list">
            <li class="menu-list-item">
                <div style="background-image: url(/wp-content/themes/intericco/images/menu-bg.jpg); background-size: cover; background-position: center;" class="menu-list-item-bg"></div>
                <div class="menu-list-item-container" href="#">
                    <a class="menu-list-item-link" href="#"></a>
                    <div class="link-content">
                        <a class="link-content-main" href="#">Главная</a>                      
                    </div>
                </div>
            </li>
            <li class="menu-list-item">
                <div style="background-image: url(/wp-content/themes/intericco/images/menu-bg.jpg); background-size: cover; background-position: center;" class="menu-list-item-bg"></div>
                <div class="menu-list-item-container" href="#">
                    <a class="menu-list-item-link" href="#"></a>
                    <div class="link-content">
                        <a class="link-content-main" href="#">Портфолио</a>

                        <ul class="link-content-sub">
                            <li class="link-content-sub-item">
                                <a href="#">Дизайн</a>
                            </li>
                            <li class="link-content-sub-item">
                                <a href="#">Архитектура</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>

            <li class="menu-list-item">
                <div style="background-image: url(/wp-content/themes/intericco/images/menu-bg.jpg); background-size: cover; background-position: center;" class="menu-list-item-bg"></div>
                <div class="menu-list-item-container" href="#">
                    <a class="menu-list-item-link" href="#"></a>
                    <div class="link-content">
                        <a class="link-content-main" href="#">Блог</a>                      
                    </div>
                </div>
            </li>

            <li class="menu-list-item">
                <div style="background-image: url(/wp-content/themes/intericco/images/menu-bg.jpg); background-size: cover; background-position: center;" class="menu-list-item-bg"></div>
                <div class="menu-list-item-container" href="#">
                    <a class="menu-list-item-link" href="#"></a>
                    <div class="link-content">
                        <a class="link-content-main" href="#">Дизайн</a>                      
                    </div>
                </div>
            </li>
            <li class="menu-list-item">
                <div style="background-image: url(/wp-content/themes/intericco/images/menu-bg.jpg); background-size: cover; background-position: center;" class="menu-list-item-bg"></div>
                <div class="menu-list-item-container" href="#">
                    <a class="menu-list-item-link" href="#"></a>
                    <div class="link-content">
                        <a class="link-content-main" href="#">Архитектура</a>                      
                    </div>
                </div>
            </li>
            <li class="menu-list-item">
                <div style="background-image: url(/wp-content/themes/intericco/images/menu-bg.jpg); background-size: cover; background-position: center;" class="menu-list-item-bg"></div>
                <div class="menu-list-item-container" href="#">
                    <a class="menu-list-item-link" href="#"></a>
                    <div class="link-content">
                        <a class="link-content-main" href="#">Контакты</a>                      
                    </div>
                </div>
            </li>
        </ul> -->


        <ul class="menu-list">
        <?php
            $params = array(
                'post_type' => 'menu',
                'posts_per_page' => -1
            );
            $query = new WP_Query( $params );
            ?>
            <?php if($query->have_posts()): ?>
                
                <?php while ($query->have_posts()): $query->the_post() ?>
                    <?php $background = get_field('background'); 
                            $link = get_field('link'); 
                    ?>

                <li class="menu-list-item">
                    <div style="background-image: url(<?php echo $background['url'] ?>); background-size: cover; background-position: center;" class="menu-list-item-bg"></div>
                    <div class="menu-list-item-container">
                        <a class="menu-list-item-link" href="<?php echo $link;?>"></a>
                        <div class="link-content">
                            <a class="link-content-main" href="<?php echo $link;?>"><?php the_title();?></a>  

                            <ul class="link-content-sub">
                                <?php
                                    while ( have_rows('sub_category') ) : the_row(); ?>
                                        <?php $sub_category_text = get_sub_field('sub_category_text'); 
                                              $sub_categoty_link = get_sub_field('sub_categoty_link'); ?>

                                        <li class="link-content-sub-item">
                                            <a href="<?php echo $sub_categoty_link;?>"><?php echo $sub_category_text?></a>
                                        </li>
                                    
                                    <?php endwhile; 
                                ?>
                            </ul>
                        </div>
                    </div>
                </li>
                    
                    <?php endwhile; ?>
            <?php endif; 
        ?>
        </ul>


        <?php
            wp_reset_postdata();
            global $post;
        ?>


    </div>
    <div class="menu-left-top wow animate__fadeInLeft" data-wow-duration="1s">
        <div class="menu-left-top-burger">
            <button class="menu-left-top-burger-btn">
                <span></span>
            </button> 
        </div>
        <div class="menu-left-top-name">
            <span class="menu-left-top-name-text">menu</span>
        </div>
    </div>   
    <div class="menu-left-bottom wow animate__fadeInLeft" data-wow-duration="1.5s">
        <svg class="icon"><use xlink:href="#arrow-down"></svg>
    </div>  
    <div class="info-right">
        <a href="#" class="text-with-logo">
            <h3>INTERICCO </h3>
            <span>Interior design studio</span>
        </a>
    </div>   
</div>