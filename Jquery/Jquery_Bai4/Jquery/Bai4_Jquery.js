var oldpoint=0;
$(document).mousemove(function (event) {
  if (oldpoint < event.pageX) {
    $("img").eq(2).css({left: '+=1'});
    $("img").eq(3).css({left: '+=0.75'});
    $("img").eq(4).css({left: '+=0.5'});
  }
  else {
    $("img").eq(2).css({left: '-=1'});
    $("img").eq(3).css({left: '-=0.75'});
    $("img").eq(4).css({left: '-=0.5'});
  }
  oldpoint=event.pageX;
})