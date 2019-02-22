<?php
  $numberArray = $_POST['numberArray'];
  $sum=0;
  $tich=1;
  foreach ($numberArray as $value) {
    $sum+=$value;
    $tich*=$value;
  }
  echo '<pre>';
  print_r($numberArray);
  echo '</pre>';
  $result=['Tong'=>$sum,'Tich'=>$tich];
  echo "<br> Kết quả tổng & tích : ".json_encode($result,true);
?>