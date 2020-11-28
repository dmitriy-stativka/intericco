<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package intericco
 */

get_header();
?>

<div class="error-wrapper">
    <div class="middle-line middle-line-first"></div>
    <div class="middle-line middle-line-second"></div>
    <div class="middle-line middle-line-third"></div>
    <div class="middle-line middle-line-fourth"></div>
    <div class="middle-line middle-line-fifth"></div>

    <div class="error-icon"><img src="/wp-content/themes/intericco/images/design-icon.svg"> </div>
    <div class="error-icon error-icon-sec"><img src="/wp-content/themes/intericco/images/design-icon.svg"> </div>

    <div class="error-container">
        <div class="error-right-text">
            <span>Intericco</span>
        </div>
        <h1 class="error-title"><?php pll_e('errortext');?>
            <span class="line line-purple"></span>
            <span class="line line-corner"></span>
            <span class="line line-blue"></span> 
        </h1>      
        <div class="error-middle">
            <span class="error-num">4</span>        
            <img class="error-img" src="/wp-content/themes/intericco/images/404.svg">
            <span class="error-num">4</span>
        </div>
        <div class="error-bottom">
            <div class="error-bottom-title">
                <h1 class="error-title"><?php pll_e('errorewording');?></h1>    
            </div>

            <ul class="footer-bottom-left-menu">
                <li class="footer-menu-item"><a href="/">Главная</a></li>
                <li class="footer-menu-item"><a href="/portfolio">Портфолио</a></li>
                <li class="footer-menu-item"><a href="/blog">Блог</a></li>
                <li class="footer-menu-item"><a href="/dizajn">Дизайн</a></li>
                <li class="footer-menu-item"><a href="/arhitekruta">Архитектура</a></li>
                <li class="footer-menu-item"><a href="/kontakty">Контакты</a></li>
            </ul>        
        </div>
    </div>
</div>

<?php get_footer();