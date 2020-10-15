"use strict";

$(document).ready(function () {

    
    var mySwiper = new Swiper ('.swiper-main', {
        speed: 400,
        spaceBetween: 100,
        //truewrapper adoptsheight of active slide
        autoHeight: false,
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        // delay between transitions in ms
        autoplay: 5000,
        autoplayStopOnLast: false, // loop false also
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
                  clickable: true,
                renderBullet: function (index, className) {
                    return '<span class="' + className + '">' + ('0' + (index + 1)) + '</span>';
                },
          },     
        scrollbar: {
          el: '.slider-scrollbar',
          draggable: true,
          snapOnRelease: true
        },
        
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        
        // And if we need scrollbar
        //scrollbar: '.swiper-scrollbar',
        // "slide", "fade", "cube", "coverflow" or "flip"
        effect: 'slide',
        // Distance between slides in px.
        spaceBetween: 60,
        //
        slidesPerView: 3,
        //
        centeredSlides: true,
        //
        grabCursor: true,
      });
      
      var swiper = new Swiper('.service-middle-main', {
        direction: 'horizontal',
        slidesPerView: 2,
        loop: true,
        spaceBetween: 0,
        mousewheelControl: true,  
        speed: 600,
        navigation: {
          nextEl: '.service-button-next',
        },

    });

    //menu
    $(".menu-left-top").click(function() {
      $("body").addClass("menu-opened");
      $(".navigation").addClass("navigation-open");
    })

    $(".menu-left-top-burger-close").click(function() {
      $("body").removeClass("menu-opened");
      $(".navigation").removeClass("navigation-open");
    })
    

});


