window.onload = eventWindowLoaded;
function eventWindowLoaded() {
  DrawCanvas();
}
function DrawCanvas() {
  var myVinyls = {
    fail: 0.3,
    pass: 0.7
  };
  var myCanvas=document.getElementById('Canvas_1');
  var myPiechart = new Piechart(
    {
      canvas:myCanvas,
      data:myVinyls,
      colors:["#EA655A","#00E5FF","#ff0000","#0D00FF"]
    }
  );
  myPiechart.draw();
}