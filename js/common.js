jQuery(document).on("click", ".openbtn8" ,function () {
    $(this).toggleClass('active');
})
   



  

// jQuery('.zoomInClickTrigger').on('click', function() {
//     $(this).addClass('zoomIn2');
//   })
  
//   jQuery('.news-item').on('click', function() {
//     $(this).addClass('fadeUp2');
//   })
  
  
//   jQuery('.zoomInClickTrigger').on('mouseenter', function() {
//     $(this).addClass('zoomIn');
//   })
//   jQuery('.zoomInClickTrigger').on('mouseenter', function() {
//     $(this).removeClass('zoomOut');
//   })
  
  
//   jQuery('.zoomInClickTrigger').on('mouseleave', function() {
//     $(this).addClass('zoomOut');
//   })
//   jQuery('.zoomInClickTrigger').on('mouseleave', function() {
//     $(this).removeClass('zoomIn');
//   });
  
 

  
  jQuery('#job-contents').slick({
    
  
    autoplay: false, //自動でスクロール
      autoplaySpeed: 0, //自動再生のスライド切り替えまでの時間を設定
      speed: 300, //スライドが流れる速度を設定
      cssEase: "linear", //スライドの流れ方を等速に設定
      slidesToShow: 2, //表示するスライドの数
      swipe: true, // 操作による切り替えはさせない
      arrows: false, //矢印非表示
      pauseOnFocus: true, //スライダーをフォーカスした時にスライドを停止させるか
      pauseOnHover: true, //スライダーにマウスホバーした時にスライドを停止させるか
      centerMode: true,
      centerPadding: '10%',
      dots: true,
      
    responsive: [
      {
          breakpoint: 1200,
          settings: {
          slidesToShow: 1,
          centerMode: true,
          centerPadding: '5%',
          speed: 300,
      }}
  ]
  });

  jQuery('.top-slick').slick({
    // centerMode: true,
    // centerPadding: '30%',
    // autoplay: true,
    // autoplayspeed: 0,
    // speed: 1000,
    // arrows: false,
  
    autoplay: true, //自動でスクロール
      autoplaySpeed: 8000, //自動再生のスライド切り替えまでの時間を設定
      speed: 1000, //スライドが流れる速度を設定
      cssEase: "linear", //スライドの流れ方を等速に設定
      slidesToShow: 1, //表示するスライドの数
      swipe: true, // 操作による切り替えはさせない
      arrows: false, //矢印非表示
      pauseOnFocus: false, //スライダーをフォーカスした時にスライドを停止させるか
      pauseOnHover: false, //スライダーにマウスホバーした時にスライドを停止させるか
      centerMode: false,
      centerPadding: '0%',
      dots: true,
      fade: true,
  });


  
jQuery(window).scroll(function (){
    jQuery('.fadeUpTrigger').each(function(){
      var elemPos =$(this).offset().top-50;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight){
      $(this).addClass('fadeUp');
      }else{
      $(this).removeClass('fadeUp');
      }
    });
});

jQuery(window).scroll(function (){
  jQuery('.right').each(function(){
      var elemPos = $(this).offset().top-0.1;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
  if (scroll >= elemPos - windowHeight){
      $(this).addClass('fadeRight');
      }else{
      $(this).removeClass('fadeRight');
      }    });
});
jQuery(window).scroll(function (){
  jQuery('.left').each(function(){
      var elemPos = $(this).offset().top-0.1;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
  if (scroll >= elemPos - windowHeight){
      $(this).addClass('fadeLeft');
      }else{
      $(this).removeClass('fadeLeft');
      }    });
});

jQuery(window).on('load resize', function() {
  var windowWidth = window.innerWidth;
  var elements = $('.fixed');
  if (windowWidth >= 768) {
    Stickyfill.add(elements);
  }else{
  } 
});