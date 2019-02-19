<?php
  Bai1();
  Bai2();
  Bai3();
  Bai4();
  function Bai1()
  {
    echo "<br><b>Bài 1: Single quote và double quotes</b><br>";
    echo 'Sử dụng single quote: Money $__$ money';
    echo "<br>";
    echo "Sử dụng double quote: Money \$__\$ money";
  }
  function Bai2()
  {
    echo "<br><b>Bài 2: Tìm kiếm trong String</b><br>";
    $parStr="Day la chuoi cha";
    $finStr="cha";
    $listParam=[$parStr,$finStr];
    checkParameters($listParam);
    echo "Chuỗi 1: ".$parStr."<br>";
    echo "Chuỗi 2: ".$finStr."<br>";
    echo "Kết quả tìm kiếm: ";
    if(strpos($parStr,$finStr)!==false) {
      echo "TRUE";
    }
    else {
      echo "FALSE";
    }
  }
  function Bai3()
  {
    echo "<br><b>Bài 3: Multiple bytes string</b><br>";
    $text="Trần Quang Thoại";
    $listParam=[$text];
    checkParameters($listParam);
    echo "Parameter là: <b>".$text."</b><br>";
    echo "Kết quả: ";
    if(strlen($text)!=mb_strlen($text)){
      echo "TRUE";
    }else{
      echo "FALSE";
    }
  }
  function Bai4()
  {
    echo "<br><b>Bài 4: Trim </b><br>";
    $trim='trim';
    $listParam=[$trim];
    checkParameters($listParam);
    echo "1. Xóa chữ 'm' ra khỏi chữ 'trim'"."<br>";
    echo rtrim($trim,'m');
    echo "<br>2. Đảo ngược chuỗi và sử dụng hàm ltrim xóa chữ 'm' <br>";
    echo ltrim(strrev($trim),"m");
  }
  function checkParameters($listParam){
    try{
      $errParams = [];
      //Use for to find parameter input is'nt array
      for ($i = 0; $i < count($listParam); $i++) {
        //input in position i is'nt array
        if (!is_string($listParam[$i]) || empty($listParam[$i]))
          $errParams[] = $i+1;
      }
      if (empty($errParams)!=true) {
        throw new LogicException('<b>Invalid parameter ' . implode(',', $errParams) . '</b>');
      }
    }catch (LogicException $e) {
      echo $e->getMessage();
      die();
    }
  }
?>