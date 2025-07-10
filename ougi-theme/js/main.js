const test = "test";

// PC/SPクラス付与
$(function () {
  $(window).on('load resize', function () {
    if ($(this).width() < 768) {
      $('body').addClass('is-sp');
      $('body').removeClass('is-pc');
    }
    else {
      $('body').addClass('is-pc');
      $('body').removeClass('is-sp');
    }
  });
});

//ロード画面
$(function () {
  var webStorage = function () {
    if (sessionStorage.getItem('access')) {
      /*
        2回目以降アクセス時の処理
      */
      $(".loading-bg").addClass('is-active');
    } else {
      /*
        初回アクセス時の処理
      */
      sessionStorage.setItem('access', 'true'); // sessionStorageにデータを保存
      $(".loading-inner").addClass('is-active'); // loadingアニメーションを表示
      setTimeout(function () {
        // ローディングを数秒後に非表示にする
        $(".loading-bg").addClass('is-active');
        $(".loading-inner").removeClass('is-active');
      }, 1800); // ローディングを表示する時間
    }
  }
  webStorage();
});

// ハンバーガー開閉
$(function () {
  $('#js-hamburger').click(function () {
    $('body').toggleClass('is-menu-open');
    $('.l-header').toggleClass('is-active');
    $('#js-hamburger-menu').fadeToggle();
  });
});

// スムーススクロール
$(function () {
  $('a[href*="#"]').click(function () {
    if($('body').hasClass('is-pc')){
      $('html,body').animate({ scrollTop: $($(this).attr("href")).offset().top - 10 }, 'slow', 'swing');
    }
    else if($('body').hasClass('is-sp')){
      $('html,body').animate({ scrollTop: $($(this).attr("href")).offset().top - $('.l-header').height() - 10 }, 'slow', 'swing');
    }
    return false;
  });
});
// クリッカブルマップホバーで画像チェンジ
function changeMapImage(imgsrc) {
  $(function () {
    $('#js-map').attr('src', imgsrc);
  });
};

// クリッカブルマップクリックでボックス表示
function showMkbox(id) {
  $(function () {
    $('.js-mkbox').hide();
    $('.js-mkboxs').show();
    $('.js-mkbox#' + id).show();
  });
};

// MENDOKUSAIBOX閉じる
$(function(){
  $('.js-mkbox-close').click(function(){
    $('.js-mkboxs').hide();
  });
});

// お客様の声ポップアップ
$(function(){
  $('.js-voice-popup').click(function(){
    $(this).next().show();
  });
});

// お客様の声ポップアップ閉じる
$(function () {
  $('.js-voice-close').click(function () {
    $('.p-voice-popup').hide();
  });
});

// SPメニュー下層開閉
$(function(){
  $('.js-lower-toggle').click(function(){
    $(this).next().slideToggle();
    return false;
  });
});

// 次の要素トグル
$(function(){
  $('.js-next-toggle').click(function(){
    $(this).toggleClass('is-open');
    $(this).next().slideToggle();
  });
});

// ハッシュがあった場合位置調整
$(function(){
  $(window).on('load', function(){
    if (location.hash) {
      if ($('body').hasClass('is-pc')) {
        $('html,body').scrollTop($(location.hash).offset().top - 10);
      }
      else if ($('body').hasClass('is-sp')) {
        $('html,body').scrollTop($(location.hash).offset().top - $('.l-header').height() - 10);
      }
    }
  });
});

//動画再生ボタンカスタム
$(function () {
  $('.play_btn').on('click', function(){ // 再生ボタンが押されたら
      if($(this).hasClass('playActive')){
          $('.video1').get(0).pause();
      }else{
          $('.video1').get(0).play();
      }
  });

  $('.video1').on('playing', function(){
      $('.play_btn').addClass('playActive'); 
      $(this).attr('controls', ''); // ブラウザが表示する再生ボタンを非表示にするために後から属性付与
      $('.video_content').addClass('play');
  });

  $(".video1").on('pause', function(){
      $('.play_btn').removeClass('playActive');
      $(this).attr('controls', '');
      $('.video_content').removeClass('play');
  });

  $('.video1').on('ended', function(){ 
      $('.play_btn').removeClass('playActive');
      $(this).removeAttr('controls');
      $('.video_content').removeClass('play');
  });
});

//アコーディオン
$(function() {
	$('.ac_btn').on('click', function() {//タイトル要素をクリックしたら
		var findElm = $(this).next(".a_box");//直後のアコーディオンを行うエリアを取得し
		$(findElm).slideToggle();//アコーディオンの上下動作
		
		if($(this).hasClass('close')){//タイトル要素にクラス名closeがあれば
			$(this).removeClass('close');//クラス名を除去し
		}else{//それ以外は
			$(this).addClass('close');//クラス名closeを付与
		}
    $(this).find(".icon").toggleClass('open');
	})
});

//エフェクト
$(function() {
  $('.visible').on('inview', function(event, isInView) {
    if (isInView) {
      $(this).addClass('effect');
    } else {
      $(this).removeClass('effect');
    }
  });
});