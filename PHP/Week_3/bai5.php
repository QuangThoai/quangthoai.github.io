<?php
  $to = "tranquangthoai19970730@gmail.com";
  $subject = "Checking PHP mail";
  $message = "PHP mail works just fine";
  $headers = "From:tranquangthoai19970730@gmail.com";
  if (mail($to,$subject,$message,$headers)!=false) {
    echo 'success';
  } else {
    echo 'fail';
  }
?>