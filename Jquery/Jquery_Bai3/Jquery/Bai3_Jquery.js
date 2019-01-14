$(document).ready(function() {
  for(var i=1;i<=16;i++)
  {
    var index=Math.ceil(Math.random()*5);
    $('.container').append('<img src="images/leaves'+ index+'.png" alt="leave'+index+'" class="leaf'+index+'">');
  }
  setInterval(function () {
    var rdtime=Math.ceil(Math.random()*20)+10;
    var rd_startX=Math.ceil(Math.random()*800)+10;
    var rd_endX=Math.ceil(Math.random()*800)+10;
    TweenMax.fromTo($('.leaf'+Math.ceil(Math.random()*5)),rdtime,{x:rd_startX,y:-100},{x:rd_endX,y:600});
  },1000);
  // hieu ung 1 goc la 0
});