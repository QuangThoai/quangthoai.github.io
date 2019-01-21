$(document).ready(function () {
  $(document).scroll(function () {
    if($(this).height() -($(document).scrollTop() + $(window).height()) <=1)
    {
      $('.container').css({'color':'#fff','background':'#000'});
      $('.caption').css("background-color","#330000")
      $('.text-21').css("color","#fff");
      $('.text-60').css("color","#ac0000");
      $('.text-40').css("color","#ac0000");
      $('.text-42').css("color","#ac0000");
      $('.text-14').css({"background-color":"#330000","color":"#ac0000"});
      $('.text-24').css({"color":"#ac0000","border-top-color":"#ac0000"});
      $('.blood').css({"max-height":$('.contain').height(),"bottom":$('.footer').height()});
      $('.blood').show();
      $('.show').show();
      $("#pic_1").css("display","none");
      $('#pic_3').css("display","none");
      $('body').animate({scollTop:0},5000,function () {
        $('.container').css({'color':'#000','background':'#fff'});
        $('.caption').css("background-color","#333")
        $('.text-21').css("color","#fff");
        $('.text-60').css("color","#fff");
        $('.text-40').css("color","#fff");
        $('.text-42').css("color","#000");
        $('.text-14').css({"background-color":"#ccc","color":"#000"});
        $('.text-24').css({"color":"#000","border-top-color":"#000"});
        $('.blood').css("max-height",$('.contain').height());
        $('.blood').hide();
        $('.show').hide();
        $("#pic_1").show();
        $('#pic_3').show();
      })
    }
  })
});