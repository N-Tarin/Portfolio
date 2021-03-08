
jQuery(function($){

  // SPヘッダーアコーディオンメニュー
  $('.js__header__sp__button').on('click', function(){
    if($(this).hasClass('active')) {
      $(this).removeClass('active');
      $('.js__header__sp__menu').removeClass('open');
      $('.js__header__sp__background').removeClass('open');

    } else {
      $(this).addClass('active');
      $('.js__header__sp__menu').addClass('open');
      $('.js__header__sp__background').addClass('open');
    }
  });

  // メニューの背景がクリックされたときの処理
  $('.js__header__sp__background').on('click', function(){
    if($(this).hasClass('open')) {
      $(this).removeClass('open'); 
      $('.js__header__sp__menu').removeClass('open');
    }
  });

  //アコーディオンメニューのリストクリックしたら
  $('.js__sp__item__button').on('click', function() {
    $('.js__header__sp__menu').removeClass('open');
    $('.js__header__sp__background').removeClass('open');
  });

});