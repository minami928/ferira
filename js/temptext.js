$(function(){
       
	// 「.modal_open」をクリックしたらモーダルと黒い背景を表示する
	$('.modal_open').on("click",function(){
		console.log('.modal_open');

		$(".modal_wrap").css({
			display:"block"
		})
		$(".modal_box").css({
			display:"block"
		})
   
	//   黒い背景をbody内に追加
	  $('body').append('<div class="modal_bg"></div>');
	  $('.modal_bg').fadeIn();
   
	  // data-targetの内容をIDにしてmodalに代入
	  var modal = '#' + $(this).attr('data-target');
   
	  // モーダルをウィンドウの中央に配置する
	  function modalResize(){
		  var w = $(window).width();
		  var h = $(window).height();
   
		  var x = (w - $(modal).outerWidth(true)) / 2;
		  var y = (h - $(modal).outerHeight(true)) / 2;
   
		  $(modal).css({'left': x + 'px','top': y + 'px'});
	  }
   
	  // modalResizeを実行
	  modalResize();
   
	  // modalをフェードインで表示
	  $(modal).fadeIn();
   
	  // .modal_bgか.modal_closeをクリックしたらモーダルと背景をフェードアウトさせる
	  $('.modal_bg, .modal_close').off().click(function(){
		  $('.modal_box').fadeOut();
		  $('.modal_bg').fadeOut('slow',function(){
			  $('.modal_bg').remove();
		  });
		  $(".modal_wrap").css({
			display:"none"
		})
	  });
   
	  // ウィンドウがリサイズされたらモーダルの位置を再計算する



	});
  });