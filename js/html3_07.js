$(function(){
  var toggleNavi = $(".toggleNavi");
  var nav = $(".nav>nav>ul");
  var duration = 200;
  var easing = 'swing';
  toggleNavi.on("click",function(){
      if(nav.css("right") != '0px'){
          nav.stop().animate({
              right: 0
          },duration,easing,function(){
              toggleNavi.find(".fa-bars").removeClass("fa-bars").addClass("fa-times");
          });
      }
      else{
          nav.stop().animate({
              right: '-300px'
          },duration,easing,function(){
              toggleNavi.find(".fa-times").removeClass("fa-times").addClass("fa-bars");
          });
      }
  });
});
