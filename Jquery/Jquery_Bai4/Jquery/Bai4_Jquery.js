var oldpoint=0;
$(document).mousemove(function (event) {
  if (oldpoint < event.pageX) {
    $(".pic-move-1").css({left: '+=1'});
    $(".pic-move-2").css({left: '+=0.75'});
    $(".pic-move-3").css({left: '+=0.5'});
  }
  else {
    $(".pic-move-1").css({left: '-=1'});
    $(".pic-move-2").css({left: '-=0.75'});
    $(".pic-move-3").css({left: '-=0.5'});
  }
  oldpoint=event.pageX;
})