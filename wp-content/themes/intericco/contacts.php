<?php
/*
Template Name: contacts
*/
get_header(); ?>

<div class="contacts-wrapper">
    <div class="middle-line middle-line-first"></div>
    <div class="middle-line middle-line-second"></div>
    <div class="middle-line middle-line-third"></div>
    <div class="middle-line middle-line-fourth"></div>
    <div class="middle-line middle-line-fifth"></div>
    <?php include("menu.php") ?> 

    <div class="contacts-container">
        <div class="top-crumbs">       
            <div class="crumbs-last">
               <span><?php the_title();?></span>
                <span class="line line-purple"></span>
                <span class="line line-corner"></span>
                <span class="line line-blue"></span>  
            </div>
        </div>

        <div class="contacts-text">
            <?php the_content();?>
        </div>

        <div class="contacts-middle">

            <div class="contacts-middle-left">
                <h2 class="contacts-title"><?php pll_e('ourcontacts');?></h2>

                <div class="footer-bottom-right">
                    
                    <div class="footer-right-info-item">
                        <img src="/wp-content/themes/intericco/images/location-black.svg">
                        <div class="footer-right-info-item-place">
                            <span class="city">г. Харьков пр-т Московский 261</span>
                        </div>
                    </div>

                    <div class="footer-right-info-item">
                        <img src="/wp-content/themes/intericco/images/watch-black.svg">
                        <div class="footer-right-info-item-place">
                            <span class="city">г. Харьков пр-т Московский 261</span>
                        </div>
                    </div>

                    <div class="footer-right-info-item">
                        <img src="/wp-content/themes/intericco/images/watch-black.svg">
                        <div class="footer-right-info-item-place">
                            <span class="city">г. Харьков пр-т Московский 261</span>
                        </div>
                    </div>
        
                </div>

                <div class="contacts-map-block">
                    <img src="/wp-content/themes/intericco/images/small-design-icon.svg" alt="">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d164153.5222922773!2d36.145743208428314!3d49.994507027136756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a09f63ab0f8b%3A0x2d4c18681aa4be0a!2z0KXQsNGA0YzQutC-0LIsINCl0LDRgNGM0LrQvtCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0Yw!5e0!3m2!1sru!2sua!4v1602794927384!5m2!1sru!2sua" width="570" height="360" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>  
            </div>

            <div class="contacts-middle-form">
                <h2 class="contacts-title">Оставить заявку</h2>
            </div>

        </div>  

    </div>
</div>

<?php get_footer(); ?>