$(function () {
    $('#openModal').click(function(){
        $('#modalArea').fadeIn();
    });
    $('#closeModal , #modalBg').click(function(){
      $('#modalArea').fadeOut();
    });
    $('.button_close').onclick(function(){
        modal.style.display='none';
    })
    
  });
  $('.modal_switch').click(function(){
 
    // 押された.modal_switchの親要素の.modal_boxをフェードアウトさせる
    $(this).parents('.modal_box').fadeOut();

    // 押された.modal_switchのdata-targetの内容をIDにしてmodalに代入
    var modal = '#' + $(this).attr('data-target');

    // モーダルをウィンドウの中央に配置する
    function modalResize(){
        var w = $(window).width();
        var h = $(window).height();

        var x = (w - $(modal).outerWidth(true)) / 2;
        var y = (h - $(modal).outerHeight(true)) / 2;

        $(modal).css({'left': x + 'px','top': y + 'px'});
    }
});


