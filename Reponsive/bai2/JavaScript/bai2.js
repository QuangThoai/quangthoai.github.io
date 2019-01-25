var start=false;
$(document).ready(function () {
  $(document).scroll(function () {
    if(!start)
    {
      if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
        start=true;
        $('head').append('<link href="CSS/bai2horror.css" rel="stylesheet">');
        $('.blood').css({"max-height":$('.contain').height(),"bottom":$('.footer').height()});
        $('.blood').show();
        $('.show').show();
        $("html").animate({scrollTop: 0},5000,function () {
          window.scrollTo(0, 0);
          setTimeout(function(){ $("body").show() }, 0);
          $('head link').eq(1).remove();
          $('.blood').hide();
          $('.show').hide();
          start=false;
        })
      }
    }

  })
});