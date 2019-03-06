<?php
  $to = "tranquangthoai19970730@gmail.com";
  $subject = "Test mail by JP";
  $message = "こんにちは！はじめまして";
  $headers = "From:tranquangthoai19970730@gmail.com";
  if (mb_send_mail($to,$subject,$message,$headers)!=false) {
    echo 'success';
  } else {
    echo 'fail';
  }
?>