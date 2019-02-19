<?php
  printOutSceen();
  findString("Day la chuoi cha","cha");
  checkMultiBytesString("Trần Quang Thoại");
  trimString('trim');
  /**
   *Function printf out sceen use single quote and double quote
   * @return void
   */
  function printOutSceen()
  {
    echo "<br><b>Bài 1: Single quote và double quotes</b><br>";
    echo 'Sử dụng single quote: Money $__$ money';
    echo "<br>";
    echo "Sử dụng double quote: Money \$__\$ money";
  }
  /**
   *Function find $findString in $parentString.
   * @param string $parentString for find $findString in this
   * @param string $findString find in $parentString
   * @return void
   */
  function findString($parentString,$findString)
  {
    echo "<br><b>Bài 2: Tìm kiếm trong String</b><br>";
    $listParam = [$parentString,$findString];
    //Check input parameter is string
    checkParameters($listParam);
    echo "Chuỗi 1: ".$parentString."<br>";
    echo "Chuỗi 2: ".$findString."<br>";
    echo "Kết quả tìm kiếm: ";
    //find $findString in $parentString
    if ( strpos($parentString,$findString)!==false ) {
      echo "true";
    } else {
      echo "false";
    }
  }
  /**
   *Function check string is multi-byte
   * @param string $text to check multi-byte
   * @return void
   */
  function checkMultiBytesString($text)
  {
    echo "<br><b>Bài 3: Multiple bytes string</b><br>";
    $listParam=[$text];
    //Check input parameter is string
    checkParameters($listParam);
    echo "Parameter là: <b>".$text."</b><br>";
    echo "Kết quả: ";
    if ( strlen($text)!=mb_strlen($text) ) {
      echo "TRUE";
    } else {
      echo "FALSE";
    }
  }
  /**
   *Function trim 'm' get out $trim
   * @param string $trim need trim
   * @return void
   */
  function trimString($trim)
  {
    echo "<br><b>Bài 4: Trim </b><br>";
    $listParam=[$trim];
    //Check input parameter is string
    checkParameters($listParam);
    echo "1. Xóa chữ 'm' ra khỏi chữ 'trim'"."<br>";
    echo rtrim($trim,'m');
    echo "<br>2. Đảo ngược chuỗi và sử dụng hàm ltrim xóa chữ 'm' <br>";
    echo ltrim(strrev($trim),"m");
  }
/**
 *Function check parameters is string
 * @param array $listParam to check parameters
 * @throws LogicException message: "Invalid parameter ..."
 */
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