"use strict";

$(document).ready(function () {

  if(window.innerWidth < 1023) {
    $("body").addClass("body-mob")
  }

  new WOW().init();

  $.fn.animate_Text = function(t) {
    var string = this.text();
    return this.each(function(){
        var $this = $(this);
        $this.html(string.replace(/./g, '<span class="new">$&</span>'));
        $this.find('span.new').each(function(i, el){
            setTimeout(function(){ $(el).addClass('div_opacity'); }, t * i);
        });
    });
  };

  $('.top-site-text').attr('data-wow-duration', '1.5s');
  $('.top-site-text h1').show();
  $('.top-site-text h1').animate_Text(70);

  $('#design-tab1').prop('checked', true);

      var mySwiper2 = new Swiper(".blog-slider-container", {
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
        },



        breakpoints: {
          1024: {
            slidesPerView: 2
          },
          767: {
            slidesPerView: 1
          },
          320: {
            slidesPerView: 1,
            slidesPerColumn: 3,
          }
        },

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
      $(".body-mob").addClass("menu-opened");
      $(".navigation").addClass("navigation-open");
    })

    $(".menu-left-top-burger-close").click(function() {
      $(".body-mob").removeClass("menu-opened");
      $(".navigation").removeClass("navigation-open");
    })

    $(".show-more").click(function() {
      $(".show-more-text").addClass("show-more-text-open");
    })

    const accordion = document.getElementsByClassName('content-box');

    for (let i = 0; i < accordion.length; i++ ) {
      accordion[i].addEventListener('click', function() {
        this.classList.toggle('active');
      });
    }

    var mySwiper = new Swiper ('.swiper-main', {
      speed: 400,
      spaceBetween: 100,
      autoHeight: false,
      direction: 'horizontal',
      loop: true,
      autoplay: 5000,
      autoplayStopOnLast: false,
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + ('0' + (index + 1)) + '</span>';
        }
      },     
      scrollbar: {
        el: '.slider-scrollbar',
        draggable: true,
        snapOnRelease: true
      },
      
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      breakpoints: {
        1024: {
          slidesPerView: 3
        }
      },

      effect: 'slide',

      spaceBetween: 60,
      //
      slidesPerView: 1,
      //
      centeredSlides: false,
      //
      grabCursor: true
    });
    
    

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


