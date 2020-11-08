"use strict";

$(document).ready(function () {

    $('#design-tab1').prop('checked', true);


    
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

          breakpoints: {
            1024: {
              slidesPerView: 3
            }
          },
        
        // And if we need scrollbar
        //scrollbar: '.swiper-scrollbar',
        // "slide", "fade", "cube", "coverflow" or "flip"
        effect: 'slide',
        // Distance between slides in px.
        spaceBetween: 60,
        //
        slidesPerView: 1,
        //
        centeredSlides: false,
        //
        grabCursor: true,
      });

      var mySwiper = new Swiper(".blog-slider-container", {
        // Optional parameters
        slidesPerView: 2,
        slidesPerColumn: 2,
        direction: "horizontal",
        // loop: true,
        speed: 500,
      
        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
          type: 'bullets',
                clickable: true,
              renderBullet: function (index, className) {
                  return '<span class="' + className + '">' + ('0' + (index + 1)) + '</span>';
              },
        },  
      
        // Navigation arrows
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        }
      });

 
        var swiper = new Swiper(".swiper-bg", {
          autoplay: {
            delay: 5000,
            disableOnInteraction: false
          },
          slidesPerView: 1,
          speed: 500,
          loop: true,
          pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
                  clickable: true,
                renderBullet: function (index, className) {
                    return '<span class="' + className + '">' + ('0' + (index + 1)) + '</span>';
                },
          }
        });

      
      
    
    //menu
    $(".menu-left-top").click(function() {
      // $("body").addClass("menu-opened");
      $(".navigation").addClass("navigation-open");
    })

    $(".menu-left-top-burger-close").click(function() {
      // $("body").removeClass("menu-opened");
      $(".navigation").removeClass("navigation-open");
    })

    $(".show-more").click(function() {
      $(".show-more-text").addClass("show-more-text-open");
    })
    
    

});


// let arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];

// let firstArr = [];
// let secondArr = [];
// let res = [];

// let index = 0;

// for (let i = 0; i < arr.length/4; i++) {
//   firstArr.push(arr[index]);
//   firstArr.push(arr[index + 1]);

//   secondArr.push(arr[index + 2]);
//   secondArr.push(arr[index + 3]);

//   index = index + 4;
// }

// res = firstArr.concat(secondArr);

// console.log(res);

// let result = [];

// console.log(res.length)

// for(let i = 0; i < res.length; i++) {
  
//   if(res[i] == undefined) {
//     console.log(res.indexOf(res[res.length - 1]))

//     result = res.slice(res.indexOf(res[0]), res.indexOf(res[i]));
//   }
// }

