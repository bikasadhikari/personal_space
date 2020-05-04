$(window).on('load',function(){

  var $header = $('header');
  var $sticky = $header.before($header.clone().addClass("sticky"));

  $(window).on("scroll",function(){
    $scrollfromtop = $(window).scrollTop();
    $("body").toggleClass("scroll",($scrollfromtop > 350));
  });


  $('.menu li a[href^="#"]').on('click', function(e){
    e.preventDefault();

    var target = $(this.hash);
    if(target.length){
      $('html, body').stop().animate({
          scrollTop: target.offset().top -67
      },1000);
    }
  });

  //masonry
  $('.grid').masonry({
    //options
    itemSelector: '.grid-item',
    columnWidth: 20,
    fitWidth: true,
    gutter: 0,
  });

  $('.slider').slick({
    autoplay: true,
    autoplaySpeed: 2500,
    arrows: true,
    centerMode: true,
    slidesToShow: 3,
    prevArrow: '<button type="button" class="slick-prev">Previous</button>',
    nextArrow: '<button type="button" class="slick-next">Previous</button>',
    responsive: [
      {
        breakpoint : 1000,
        settings: {
          slidesToShow: 2
            }
      },
      {
        breakpoint: 700,
        settings: {
          slidesToShow: 1
            }
      }
    ]
  });

  var body = $('body');
  var menuTrigger = $('.js-menu-trigger');
  var mainOverlay = $('.js-main-overlay');

  menuTrigger.on('click', function(){
    body.addClass('menu-is-active');
  });

  mainOverlay.on('click', function(){
    body.removeClass('menu-is-active');
  });

  $('.menu li a').on('click', function(){
    $('body').removeClass('menu-is-active');
  });

  $()

});
