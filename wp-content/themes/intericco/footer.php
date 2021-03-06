<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cp
 */

 

?>




<?php wp_reset_query(); ?>
	<footer class="footer">
		<div class="footer-top" style="background: url(/wp-content/themes/intericco/images/footer-bg.jpg); background-size: cover;">
			<div class="footer-container">
				<div class="footer-map">
					<h1 class="footer-title"><?php pll_e('wherewe');?></h1>
					<div class="map-container">
						<span class="line line-purple"></span>
						<span class="line line-corner"></span>
						<span class="line line-blue"></span>  
						<div class="footer-map-block">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d164153.5222922773!2d36.145743208428314!3d49.994507027136756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a09f63ab0f8b%3A0x2d4c18681aa4be0a!2z0KXQsNGA0YzQutC-0LIsINCl0LDRgNGM0LrQvtCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0Yw!5e0!3m2!1sru!2sua!4v1602794927384!5m2!1sru!2sua" width="600" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>  					
					</div>
				</div>
				<div class="footer-form">
					<h1 class="footer-title">Связаться</h1>
					<div class="tripple-lines">
						<div class="tripple-lines-long"></div>
						<div class="tripple-lines-two"></div>
					</div>



					<?php
						if(pll_current_language() == 'ru'){
							$contacts = 42;
							echo do_shortcode( '[cf7form cf7key="kontaktnaya-forma-1"]' );
					
						}elseif(pll_current_language() == 'en'){
							$contacts = 178;
							echo do_shortcode( '[cf7form cf7key="bez-nazvaniya"]' );
						}
					?>



				</div>
				<div class="footer-top-right-text">
					<span>Interrico</span>
				</div>
			</div>	
		</div>
		<div class="footer-bottom">
			<div class="footer-container">
				<div class="footer-bottom-left">
					<div class="footer-bottom-left-title">
						<h1 class="footer-title">Навигация</h1>
						<span>ПО САЙТУ</span>
					</div>
					<ul class="footer-bottom-left-menu">
						<li class="footer-menu-item"><a href="/">Главная</a></li>
						<li class="footer-menu-item"><a href="/portfolio">Портфолио</a></li>
						<li class="footer-menu-item"><a href="/blog">Блог</a></li>
						<li class="footer-menu-item"><a href="/dizajn">Дизайн</a></li>
						<li class="footer-menu-item"><a href="/arhitekruta">Архитектура</a></li>
						<li class="footer-menu-item"><a href="/kontakty">Контакты</a></li>
					</ul>

					<div class="footer-social">
						<div class="social">
							<a class="social-icon" href="<?php the_field('insta');?>"><svg class="icon"><use xlink:href="#inst"></svg></a>
							<a class="social-icon" href="<?php the_field('twitter');?>"><svg class="icon"><use xlink:href="#twitter"></svg></a>
							<a class="social-icon" href="<?php the_field('facebook');?>"><svg class="icon"><use xlink:href="#facebook"></svg></a>                
						</div>
					</div>
				</div>
				<div class="footer-bottom-right">

				
				
					<?php if(get_field('adres_1', $contacts)){?>
						<div class="footer-right-info-item">
							<img src="/wp-content/themes/intericco/images/location.svg">
							<div class="footer-right-info-item-place">
								<span class="city"><?php the_field('adres_1', $contacts);?></span>
							</div>
						</div>
					<?php }?>

					<?php if(get_field('adres_2', $contacts)){?>
						<div class="footer-right-info-item">
							<img src="/wp-content/themes/intericco/images/time.svg">
							<div class="footer-right-info-item-place">
								<span class="city"><?php the_field('adres_2', $contacts);?></span>
							</div>
						</div>
					<?php }?>

					<?php if(get_field('adres_3', $contacts)){?>
						<div class="footer-right-info-item">
							<img src="/wp-content/themes/intericco/images/time.svg">
							<div class="footer-right-info-item-place">
							<span class="city"><?php the_field('adres_3', $contacts);?></span>
							</div>
						</div>
					<?php }?>
				</div>
			</div>
			<div class="footer-anchor">
				<div class="footer-anchor-left">
					<a href="#">Соглашение с конечным пользователем</a>
					<a href="#">Гарантия</a>
				</div>
				<div class="footer-anchor-right">
					<span>© 2020 AJAX SYSTEMS CH. Все права защищены</span>
				</div>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</div> 
<!-- wrapper end -->

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">     

	<symbol id="inst" viewBox="0 0 25 25">
		<path d="M17.7379 0H7.26211C3.25776 0 0 3.25776 0 7.26211V17.7379C0 21.7422 3.25776 25 7.26211 25H17.7379C21.7422 25 25 21.7422 25 17.7379V7.26211C25 3.25776 21.7422 0 17.7379 0ZM23.0469 17.7379C23.0469 20.6653 20.6653 23.0469 17.7379 23.0469H7.26211C4.33472 23.0469 1.95312 20.6653 1.95312 17.7379V7.26211C1.95312 4.33472 4.33472 1.95312 7.26211 1.95312H17.7379C20.6653 1.95312 23.0469 4.33472 23.0469 7.26211V17.7379Z"/>
		<path d="M12.5 5.76172C8.78447 5.76172 5.76172 8.78447 5.76172 12.5C5.76172 16.2155 8.78447 19.2383 12.5 19.2383C16.2155 19.2383 19.2383 16.2155 19.2383 12.5C19.2383 8.78447 16.2155 5.76172 12.5 5.76172ZM12.5 17.2852C9.86147 17.2852 7.71484 15.1385 7.71484 12.5C7.71484 9.86147 9.86147 7.71484 12.5 7.71484C15.1385 7.71484 17.2852 9.86147 17.2852 12.5C17.2852 15.1385 15.1385 17.2852 12.5 17.2852Z"/>
		<path d="M19.3359 6.64062C19.8753 6.64062 20.3125 6.2034 20.3125 5.66406C20.3125 5.12472 19.8753 4.6875 19.3359 4.6875C18.7966 4.6875 18.3594 5.12472 18.3594 5.66406C18.3594 6.2034 18.7966 6.64062 19.3359 6.64062Z"/>
	</symbol>

	<symbol id="facebook" viewBox="0 0 25 25">
		<path d="M18.3302 0.615234H1.64932C1.07815 0.615578 0.61512 1.07883 0.615234 1.65024V18.3311C0.615578 18.9023 1.07883 19.3653 1.65024 19.3652H10.6311V12.1143H8.1958V9.27612H10.6311V7.18746C10.6311 4.76532 12.1098 3.44696 14.2704 3.44696C15.3053 3.44696 16.1946 3.52409 16.4539 3.55854V6.09009H14.964C13.7884 6.09009 13.5608 6.64867 13.5608 7.46853V9.27612H16.3715L16.0052 12.1143H13.5608V19.3652H18.3302C18.9017 19.3653 19.3651 18.9022 19.3652 18.3307C19.3652 18.3306 19.3652 18.3305 19.3652 18.3302V1.64932C19.365 1.07815 18.9016 0.61512 18.3302 0.615234Z"/>
	</symbol>

	<symbol id="twitter" viewBox="0 0 25 25">
		<path d="M21 3.79875C20.2191 4.125 19.3869 4.34125 18.5194 4.44625C19.4119 3.93875 20.0931 3.14125 20.4133 2.18C19.5812 2.6525 18.6624 2.98625 17.6833 3.1725C16.8932 2.37125 15.7671 1.875 14.5386 1.875C12.1551 1.875 10.2362 3.7175 10.2362 5.97625C10.2362 6.30125 10.2651 6.61375 10.3359 6.91125C6.75675 6.745 3.58969 5.11125 1.46212 2.6225C1.09069 3.23625 0.872813 3.93875 0.872813 4.695C0.872813 6.115 1.64062 7.37375 2.78513 8.1025C2.09344 8.09 1.41488 7.89875 0.84 7.5975C0.84 7.61 0.84 7.62625 0.84 7.6425C0.84 9.635 2.33231 11.29 4.28925 11.6712C3.93881 11.7625 3.55687 11.8062 3.1605 11.8062C2.88488 11.8062 2.60662 11.7913 2.34544 11.7362C2.90325 13.36 4.48613 14.5538 6.36825 14.5925C4.9035 15.6838 3.04369 16.3412 1.03031 16.3412C0.67725 16.3412 0.338625 16.3263 0 16.285C1.90706 17.4563 4.16719 18.125 6.6045 18.125C14.5267 18.125 18.858 11.875 18.858 6.4575C18.858 6.27625 18.8514 6.10125 18.8423 5.9275C19.6967 5.35 20.4146 4.62875 21 3.79875Z"/>
	</symbol>

	<symbol id="arrow-down" viewBox="0 0 27 27">
		<path d="M26.6919 6.98133C26.2804 6.569 25.6127 6.56836 25.2003 6.9798L14.2458 17.9116C13.8345 18.3228 13.1655 18.3228 12.7534 17.9108L1.79972 6.9798C1.38739 6.56831 0.719667 6.569 0.308127 6.98133C-0.103306 7.39366 -0.102621 8.06143 0.309657 8.47287L11.2626 19.4031C11.8797 20.0201 12.6899 20.3285 13.5003 20.3285C14.3102 20.3285 15.1203 20.0202 15.7365 19.4039L26.6903 8.47287C27.1026 8.06143 27.1033 7.39366 26.6919 6.98133Z"/>
	</symbol>

	<symbol id="arrow-right" viewBox="0 0 34 12">
		<path d="M28.9589 11.0411L34 6.00009L28.9589 0.958984L27.4444 2.47352L29.8999 4.92914L0 4.92914V7.07103L29.8999 7.07103L27.4444 9.52658L28.9589 11.0411Z"/>
	</symbol>

	<symbol id="star" viewBox="0 0 29 29">
		<path d="M29 11.223L18.5745 10.3385L14.5 0.725037L10.4255 10.3385L0 11.223L7.91699 18.0815L5.53897 28.275L14.5 22.8665L23.461 28.275L21.083 18.0815L29 11.223Z"/>
	</symbol>

	<symbol id="plus" viewBox="0 0 16 16">
		<path d="M14.5831 7.3728H8.31122V1.1009C8.31122 0.754497 8.03042 0.473694 7.68402 0.473694C7.33762 0.473694 7.05682 0.754497 7.05682 1.1009V7.37283H0.784919C0.438518 7.3728 0.157715 7.6536 0.157715 8C0.157715 8.3464 0.438518 8.6272 0.784919 8.6272H7.05685V14.8991C7.05685 15.2455 7.33766 15.5263 7.68406 15.5263C8.03046 15.5263 8.31126 15.2455 8.31126 14.8991V8.6272H14.5832C14.9296 8.6272 15.2104 8.3464 15.2104 8C15.2104 7.6536 14.9295 7.3728 14.5831 7.3728Z"/>
	</symbol>

	<symbol id="minus" viewBox="0 0 16 2">
		<rect x="0.157715" y="0.315796" width="15.0526" height="1.36842" rx="0.684211"/>
	</symbol>

	<symbol id="location" viewBox="0 0 28 36">
		<path d="M13.9997 0C6.66675 0 0.701172 5.96558 0.701172 13.2986C0.701172 15.7126 1.78383 18.309 1.8292 18.4185C2.17888 19.2485 2.86884 20.5377 3.36636 21.2934L12.4845 35.109C12.8576 35.6754 13.4099 36 13.9997 36C14.5896 36 15.1419 35.6754 15.515 35.1098L24.6339 21.2934C25.1322 20.5377 25.8214 19.2485 26.1711 18.4185C26.2164 18.3098 27.2983 15.7134 27.2983 13.2986C27.2983 5.96558 21.3327 0 13.9997 0ZM24.7286 17.8115C24.4164 18.5554 23.7742 19.7546 23.3275 20.4321L14.2086 34.2485C14.0287 34.5215 13.9716 34.5215 13.7917 34.2485L4.67275 20.4321C4.22607 19.7546 3.58383 18.5546 3.27171 17.8107C3.25841 17.7786 2.26571 15.3888 2.26571 13.2986C2.26571 6.82842 7.52959 1.56454 13.9997 1.56454C20.4699 1.56454 25.7338 6.82842 25.7338 13.2986C25.7338 15.3919 24.7387 17.788 24.7286 17.8115Z" fill="white"/>
		<path d="M13.9999 6.25891C10.1175 6.25891 6.95947 9.41771 6.95947 13.2993C6.95947 17.1809 10.1175 20.3397 13.9999 20.3397C17.8823 20.3397 21.0403 17.1809 21.0403 13.2993C21.0403 9.41771 17.8823 6.25891 13.9999 6.25891ZM13.9999 18.7752C10.9811 18.7752 8.52401 16.3189 8.52401 13.2993C8.52401 10.2798 10.9811 7.82345 13.9999 7.82345C17.0187 7.82345 19.4758 10.2798 19.4758 13.2993C19.4758 16.3189 17.0187 18.7752 13.9999 18.7752Z" />
	</symbol>

	<symbol id="time" viewBox="0 0 28 36">
		<path d="M13.9997 0C6.66675 0 0.701172 5.96558 0.701172 13.2986C0.701172 15.7126 1.78383 18.309 1.8292 18.4185C2.17888 19.2485 2.86884 20.5377 3.36636 21.2934L12.4845 35.109C12.8576 35.6754 13.4099 36 13.9997 36C14.5896 36 15.1419 35.6754 15.515 35.1098L24.6339 21.2934C25.1322 20.5377 25.8214 19.2485 26.1711 18.4185C26.2164 18.3098 27.2983 15.7134 27.2983 13.2986C27.2983 5.96558 21.3327 0 13.9997 0ZM24.7286 17.8115C24.4164 18.5554 23.7742 19.7546 23.3275 20.4321L14.2086 34.2485C14.0287 34.5215 13.9716 34.5215 13.7917 34.2485L4.67275 20.4321C4.22607 19.7546 3.58383 18.5546 3.27171 17.8107C3.25841 17.7786 2.26571 15.3888 2.26571 13.2986C2.26571 6.82842 7.52959 1.56454 13.9997 1.56454C20.4699 1.56454 25.7338 6.82842 25.7338 13.2986C25.7338 15.3919 24.7387 17.788 24.7286 17.8115Z" fill="white"/>
		<path d="M13.9999 6.25891C10.1175 6.25891 6.95947 9.41771 6.95947 13.2993C6.95947 17.1809 10.1175 20.3397 13.9999 20.3397C17.8823 20.3397 21.0403 17.1809 21.0403 13.2993C21.0403 9.41771 17.8823 6.25891 13.9999 6.25891ZM13.9999 18.7752C10.9811 18.7752 8.52401 16.3189 8.52401 13.2993C8.52401 10.2798 10.9811 7.82345 13.9999 7.82345C17.0187 7.82345 19.4758 10.2798 19.4758 13.2993C19.4758 16.3189 17.0187 18.7752 13.9999 18.7752Z" />
	</symbol>

</svg>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="/wp-content/themes/intericco/js/app.min.js"></script>

</body>
</html>