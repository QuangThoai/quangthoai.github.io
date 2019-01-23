function drawPieSlice(ctx,centerX, centerY, radius, startAngle, endAngle, color ){
  ctx.fillStyle = color;
  ctx.beginPath();
  ctx.moveTo(centerX,centerY);
  ctx.arc(centerX, centerY, radius, startAngle, endAngle);
  ctx.closePath();
  ctx.fill();
}
var Piechart = function(options){
  this.options = options;
  this.canvas = options.canvas;
  this.canvas.width=1000;
  this.canvas.height=500;
  this.ctx = this.canvas.getContext("2d");
  this.ctx.scale(1,0.4);
  this.colors = options.colors;
  this.draw = function(){
    for (var i = 0; i < 100; i++) {
      var total_value = 0;
      var color_index = 0;
      for (var categ in this.options.data) {
        var val = this.options.data[categ];
        total_value += val;
      }
      var start_angle = 0;
      var index=0;
      if(i==99) {
        color_index = 2;
      }
      for (categ in this.options.data) {
        val = this.options.data[categ];
        var slice_angle = 2 * Math.PI * val / total_value;
        if(index==0) {
          drawPieSlice(
            this.ctx,
            this.canvas.width / 2 +10,
            this.canvas.height / 2 + 130 - i,
            this.canvas.height / 2,
            start_angle,
            start_angle + slice_angle,
            this.colors[color_index%this.colors.length]
          );
        }
        else
        {
          drawPieSlice(
            this.ctx,
            this.canvas.width / 2 ,
            this.canvas.height / 2 +100 - i,
            this.canvas.height / 2,
            start_angle,
            start_angle + slice_angle,
            this.colors[color_index%this.colors.length]
          );
        }
        start_angle += slice_angle;
        color_index++;
        index++;
      }
    }
    draw_text_fail(this.ctx,this.colors[0],this.options.data,this.canvas.width / 2 + 100 ,
      this.canvas.width / 2 + 160,this.canvas.height / 2 + 100,
      this.canvas.height / 2 -50,this.canvas.width / 2 + 600
    );
    draw_text_pass(this.ctx,this.colors[1],this.options.data);
    draw_title(this.ctx);
  }
}
function draw_text_fail(ctx,colors,data,pointX1,pointX2,pointY1,pointY2,pointX3) {
  ctx.restore();
  ctx.fillStyle = "#000";
  ctx.font="30px Arial";
  ctx.lineWidth=3;
  ctx.beginPath();
  ctx.strokeStyle=colors;
  ctx.moveTo(pointX1, pointY1);
  ctx.lineTo(pointX2 , pointY2);
  ctx.moveTo(pointX2, pointY2);
  ctx.lineTo(pointX3 , pointY2);
  ctx.fillText(data.fail * 100 + " % chưa đạt", pointX2 +100, pointY2 -20);
  ctx.stroke();
  ctx.closePath();
}
function draw_text_pass(ctx,colors,data) {
  ctx.beginPath();
  ctx.strokeStyle=colors;
  ctx.moveTo(400, 300);
  ctx.lineTo(300 , 200);
  ctx.moveTo(300, 200);
  ctx.lineTo(50 , 200);
  ctx.fillText(data.pass * 100 + " % chưa đạt", 50, 180);
  ctx.stroke();
  ctx.closePath();
}
function draw_title(ctx) {
  ctx.restore();
  ctx.fillStyle = "#ff0000";
  ctx.beginPath();
  ctx.fillText(" BIỂU ĐỒ TỔNG QUAN KHUNG NĂNG LỰC", 200, 700);
  ctx.stroke();
  ctx.closePath();

}