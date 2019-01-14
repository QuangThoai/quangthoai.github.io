var clickcount=0;
var status_popup=0;
$(document).ready(function(){
  var preclick;
    $('.topic-title').click(function(){
      if(status_popup==0) {
        var index = $(this).attr('id');
        check_down(index, preclick);
        preclick = index;
        if (clickcount % 2 == 0) {
          $("#" + index).attr('src', "images/about" + index + "_mb.jpg");
          $("#content" + index).slideUp(500);
        } else {
          $("#" + index).attr('src', 'images/about' + index + '_mb_hover.jpg');
          $("#content" + index).slideDown(500);
        }
        clickcount++;
      }
    });
});
$('.btn-about').click(function () {
  if(status_popup==0) {
    status_popup = 1;
    var index = $(this).parent().attr('id');
    index = index.substr(index.length - 1, 1);
    $("#popup" + index % 2).animate({
      top: "+=100",
      height: "toggle"
    }, 500);
  }
});
$('.close').click(function () {
  status_popup=0;
  var index=$(this).parent().attr('id');
  index=index.substr(index.length-1,1);
  $("#popup"+index%2).animate({
    top: "-=100",
    height: "toggle"
  },0);
});
function check_down(index,preclick) {
  if (index != preclick) {
    $("#"+preclick).attr('src',"images/about"+preclick+"_mb.jpg");
    $("#content"+preclick).slideUp(500);
    clickcount=1;
  }
}
