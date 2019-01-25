var checkjp=0;
var checken=0;
var changeicon=0;
$(document).ready(function () {
  $(".list-lang li img").click(function () {
    var check=$(".list-lang li ").index($(this).parent(0))
    if(check==0) {
      checkjp++;
      changcheck($('.list-lang li img').index($(this)), checkjp,".text");
    }
    else {
      checken++;
      changcheck($('.list-lang li img').index($(this)), checken,'.pDummy');
    }
  });
  function changcheck(langcheck, checkindex,lang) {
    if (checkindex % 2 != 0) {
      $('.list-lang li img').eq(langcheck+1).show();
      $('.list-lang li img').eq(langcheck).hide();
      $(lang).css('opacity','0');
    } else {
      $('.list-lang li img').eq(langcheck-1).show();
      $('.list-lang li img').eq(langcheck).hide();
      $(lang).css('opacity','1');
    }
  };
  $('.man-smile-sad img').click(function () {
    changeicon++;
    var tmp=$('.man-smile-sad img').eq(0).attr('src');
    $('.man-smile-sad img').eq(0).attr('src',$('.man-smile-sad img').eq(1).attr('src'));
    $('.man-smile-sad img').eq(1).attr('src',tmp);
    if(changeicon%2!=0) {
      $('.col-left').hide();
      $('.col-right').show();
    }
    else{
      $('.col-right').hide();
      $('.col-left').show();
    }
  })
});
