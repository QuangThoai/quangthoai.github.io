$(document).ready(function () {
  var arr=[1,2,3,4,5,6,7];
  $('#click').click(function (){
      $.ajax({
        url:'ajax/handing/bai3_2.php',
        type:'post',
        dataType:'text',
        data:{'numberArray':arr
        },
        success: function (result) {
          $('#showresult').html(result);
        }
      })
    }
  )
})
