$(document).ready(function () {
  $('#click').click(function (){
      $.ajax({
        url:'ajax/handing/bai3_1.php',
        type:'post',
        dataType:'text',
        data:{

        },
        success: function (result) {
          alert(result);
        }
      })
    }
  )
})
