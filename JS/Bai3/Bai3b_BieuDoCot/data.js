window.onload = eventWindowLoaded;
function eventWindowLoaded() {
  DrawCanvas();
}
function DrawCanvas() {
  var myVinyls = {
    A: 2,
    B: 0.1,
    C: 3,
    D: 4,
    E: 4
  };
  var myCanvas=document.getElementById('Canvas');
  var ctxcanvas=myCanvas.getContext("2d");
  var myPiechart = new Piechart(
    {
      canvas: myCanvas,
      data: myVinyls,
      ctx: ctxcanvas
    }
  );
  myPiechart.draw();
}