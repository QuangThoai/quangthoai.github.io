var Piechart = function(options) {
  this.options = options;
  this.canvas = options.canvas;
  this.canvas.width = 1100;
  this.canvas.height = 600;
  this.ctx = options.ctx;
  this.data=options.data;
  this.draw = function () {
    draw_title_top(this.ctx);
    draw_chart(this.ctx,this.data);
    draw_level(this.ctx,this.data);
    draw_title_right(this.ctx);
    draw_title_left(this.ctx);
  }
}
// create title top
function draw_title_top(ctx) {
  ctx.restore();
  ctx.fillStyle = "#000";
  ctx.font="30px Arial";
  ctx.beginPath();
  ctx.fillText(" BIỂU ĐỒ LỊCH SỬ LEVEL OF POSTION", 250, 50);
  ctx.stroke();
  ctx.closePath();
}
/*
   x: to down
   y: to left
   title left create by 2 step:
   step 1: create canvas copy (translate)
   step 2: rotele - PI/2
 */
// create the title left with rotate
function draw_title_left(ctx) {
  ctx.restore();
  ctx.translate(0,500);   // create canvas copy with new (x,y) after add
  ctx.fillStyle = "gray";
  ctx.font="30px Arial";
  ctx.beginPath();
  ctx.rotate(-Math.PI/2); //rotele -pi/2
  ctx.transform(1,0 ,-0.5,1,0,0);
  ctx.fillText("LEVEL OF POSTION", 30, 30);
  ctx.stroke();
  ctx.closePath();
}
function draw_chart(ctx,data) {
  for(var i=4;i>=0;i--)
  {
    ctx.fillStyle = "#000";
    ctx.font="30px Arial";
    ctx.beginPath();
    ctx.fillText(i, 150, 500 - i*80);
    ctx.moveTo(200, 490-i*80);
    ctx.lineTo(900, 490-i*80);
    ctx.stroke();
    ctx.closePath();
  }
}
function draw_level(ctx,data) {
  var index=0;
  for(var i in data)
  {
    ctx.fillStyle = "#000";
    ctx.font="30px Arial";
    ctx.beginPath();
    ctx.fillText( i, 230+index*140, 520 );
    ctx.fillStyle = "blue";
    ctx.fillRect(index*140 + 200,490-data[i]*80,80,data[i]*80);
    ctx.stroke();
    ctx.closePath();
    index++;
  }
}
function draw_title_right(ctx) {
  ctx.fillStyle = "#000";
  ctx.font="25px Arial";
  ctx.beginPath();
  ctx.fillText( "LEVEL", 950, 250 );
  ctx.fillText( "OF", 950, 300 );
  ctx.fillText( "POSTION", 950, 350 );
  ctx.fillStyle = "blue";
  ctx.fillRect(950,170,80,40);
  ctx.fillStyle = "gray";
  ctx.fillText( "TÊN DỰ ÁN", 450, 600 );
  ctx.stroke();
  ctx.closePath();
}