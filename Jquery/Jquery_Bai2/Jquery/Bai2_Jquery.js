var index=0;
$(document).ready(function () {
  change_items(index);

  //Auto play change slide show after 3s
  var i = 1;
  var tabInterval = setInterval(function(){
    $('#btn_next').trigger('click');
    i++;
    if(i > 3){i = 1;}
  }, 5000);

  //Event change slide when click button next
  $("#btn_next").click(function () {
    index++;
    if(index>=5) {
      TweenMax.to($(".list-items").eq(0), 1, {x: 0});
      index = 0;
    }
    else {
      TweenMax.to($(".list-items").eq(0), 1, {x: index * (-648)});
    }
    change_items(index);
  });

  //Event change slide when click button pre
  $('#btn_pre').click(function () {
    index--;
    if(index<0) {
      index = 4;
      TweenMax.to($(".list-items").eq(0), 1, {x: index * (-648)});
    }
    else {
      TweenMax.to($(".list-items").eq(0), 1, {x: index*(-648)});
    }
    change_items(index);
  })
  $('.nav-bot ul li img').click(function () {
    click_item($(".nav-bot ul li img").index($(this)));
  })
})
//Change opacity when change slide in content
function change_items(index) {
  for (var i = 0; i < 5; i++) {
    if (i == index) {
      $(".nav-bot ul li img").eq(i).css("opacity", "0.5");
    }
    else {
      $(".nav-bot ul li img").eq(i).css("opacity", "1");
    }
  }
}
//Event when click into items bot
function click_item(itemindex) {
  TweenMax.to($(".list-items").eq(0), 1, {x: itemindex * (-648)});
  index=itemindex;
  change_items(itemindex);
}
