$(function() {
  
    //下からフェードイン
    $(window).on('load scroll',function (){
      $('.animation-bottom').each(function(){
        let target = $(this).offset().top;
        let scroll = $(window).scrollTop();
        let height = $(window).height();
        if (scroll > target - height){
          $(this).addClass('active-bottom');
        }
      });
    });
  
    //上からフェードイン
    $(window).on('load scroll',function (){
      $('.animation-top').each(function(){
        let target = $(this).offset().top;
        let scroll = $(window).scrollTop();
        let height = $(window).height();
        if (scroll > target - height){
          $(this).addClass('active-top');
        }
      });
    });
  
    //左からフェードイン
    $(window).on('load scroll',function (){
      $('.animation-left').each(function(){
        let target = $(this).offset().top;
        let scroll = $(window).scrollTop();
        let height = $(window).height();
        if (scroll > target - height){
          $(this).addClass('active-left');
        }
      });
    });
  
    //右からフェードイン
    $(window).on('load scroll',function (){
      $('.animation-right').each(function(){
        let target = $(this).offset().top;
        let scroll = $(window).scrollTop();
        let height = $(window).height();
        if (scroll > target - height){
          $(this).addClass('active-right');
        }
      });
    });
  
});

