$(document).ready(function () {
  $('.btn-submit').click(function () {
    $formUpLoad=$('#formUpload');
    $fileUpLoad=$('#fileUpLoad').val();
    $status=$('.status');
    $progress=$('.progress');
    $progresbar=$('.progress-bar');
    if($fileUpLoad=='')
    {
      $status.show();
      $status.html('Please choose 1 file to upload!');
    }
    else
    {
      $formUpLoad.ajaxSubmit({
        beforeSubmit:function () {
          $progress.show();
          $progresbar.width('0%');
        },
        uploadProgress:function (event,position,total,percentComplete) {
          $progresbar.width(percentComplete+'%');
          $progresbar.html(percentComplete+'%');
        },
        success:function (result) {
          $status.show();
          if(result=='false')
          {
            $progress.hide();
            $progresbar.width('0%');
            $status.html('Can not open file');
          }
          else {
            if (result =='errorextension'){
              $progress.hide();
              $progresbar.width('0%');
              $status.html('File is not text');
            }
            else
            {
              $status.addClass('success');
              $status.html(result);
            }
          }
        }
        }
      )
    }
  })
})