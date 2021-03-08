jQuery(function($){  

  // 雪を降らす
  $('.avocado').on('click', function(){
    $(document).ready(function(){
      $('body').snowfall({  
        // 雪の量 (数値)
        flakeCount : 60,
        // 色 (RGB)
        // flakeColor : "",
        // z-indexの値
        flakeIndex : "888",
        // 最小サイズ （数値）
        minSize : 20,
        // 最大サイズ（数値）
        maxSize : 30,
        // 最低速度（数値）
        minSpeed : 0.5,
        // 最高速度（数値）
        maxSpeed : 1,
        // 雪の形を丸にする（boolean）
        round : true,
        // 影をつける（boolean）
        shadow : false,    
        // 画像
        image : "https://nkrin.com/wp-content/themes/Portfolio/img/logo.png",
      });
    });
  });


  // MVタイトル 一文字づつ
  $(window).on('load',function(){
    // テキストを<span></span>で囲む
    $('.typing').children().andSelf().contents().each(function() {
    if (this.nodeType == 3) {
    $(this).replaceWith($(this).text().replace(/(\S)/g, '<span>$1</span>'));
    }
    });
    // 一文字ずつフェードインさせる
    $('.typing').css({'opacity':1});
    for (var i = 0; i <= $('.typing').children().size(); i++) {
    $('.typing').children('span:eq('+i+')').delay(50*i).animate({'opacity':1},50);
    };
  });
  


});
