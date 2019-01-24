var clickcount=0;
var status_popup=0;
$(document).ready(function(){
  var preclick;
    $('.topic-title').click(function(){
      if(status_popup==0) {
        var index = $('.list-topic .topic-title').index($(this));
        check_down(index, preclick);
        preclick = index;
        if (clickcount % 2 == 0) {
          $(this).attr('src', "images/about" + (index+1) + "_mb.jpg");
          $('.content-hide').eq(index).animate({height:"toggle"},500);
        } else {
          $(this).attr('src', 'images/about' + (index+1) + '_mb_hover.jpg');
          $('.content-hide').eq(index).animate({height:"toggle"},500);
        }
        clickcount++;
      }
    });
  $('.btn-about').click(function () {
    if(status_popup==0) {
      status_popup = 1;
      $(".popup").eq(preclick % 2).animate({
        top: "100",
      }, 500);
    }
  });
  $('.close').click(function () {
    status_popup=0;
    $(".popup").eq(preclick % 2).animate({
      top: "-300",
    },500);
  });
});

function check_down(index,preclick) {
  if (index != preclick) {
    $('.topic-title').eq(preclick).attr('src',"images/about"+(preclick+1)+"_mb.jpg");
    $('.content-hide').eq(preclick).slideUp(500);
    clickcount=1;
  }
}
