<?php
  $paramArray1=['A'=>1,2,5,'D'=>7,9,'F'=>4];
  $paramArray2=[11,'D'=>222,'E'=>333,'C'=>3,'F'=>2];
  $paramArray3=[15,'G'=>1,'H'=>13,'I'=>4,'K'=>5,'L'=>6];
  try{
		echo 'Check parameters: ';
		checkParameters($paramArray1,$paramArray2,$paramArray3);
    $mainArray=merArray($paramArray2,$paramArray3);
  } catch (LogicException $e) {
    echo $e->getMessage();
    die();
  }
  echo "<b> Logic function :</b><pre>";
  echo "1. Find number 1 in first parameter: ";
	findNumber(1,$paramArray1);
	echo "<br>2. Merge second array with third array, delete same values:  ";
	echo "<b>". implode(',',$mainArray) ."</b>";
	echo "<br>3. Print out all values ​​of (*) whose sum of digits is divisible by 2 :  ";
	filValue($mainArray);
	echo "<br>4. Print out all values (sort asc) of first parameter whose values in (*) :   ";
	intersectArray($paramArray1,$mainArray);
	echo "<br>5. Print out all values (sort desc) of first parameter whose key not in (*) :  ";
	keyNotInArray($paramArray1,$mainArray);
  echo "</pre>";
/**
 * Check input :
 * @param array $array1 to check
 * @param array $array2 to check
 * @param array $array3 to check
 * @throws LogicException message: "Invalid parameter ..."
 */
  function checkParameters($array1,$array2,$array3){
    $listParams = [$array1, $array2, $array3];
    $errParams = [];
    //Use for to find parameter input is'nt array
    for ($i = 0; $i < count($listParams); $i++) {
    	//input in position i is'nt array
      if (!is_array($listParams[$i]))
        $errParams[] = $i+1;
    }
    if (empty($errParams)) {
      echo '<b> Correct </b>';
      echo "<br><b> List arrays: </b> <br><pre>";
      //Use for to prints params
      for ($i = 0; $i < count($listParams); $i++) {
        echo '<b>Parameter Array '. ($i +1) .':</b><br>';
        print_r($listParams[$i]);
      }
      echo "</pre>";
    } else {
      throw new LogicException('<b>Invalid parameter ' . implode(',', $errParams) . '</b>');
    }
  }
  /**
	 *Function find number in param array
	 * @param $number want to find in array
	 * @param $array array to find $number in this
	 * @return void
  */
  function findNumber($number,$array){
  	$found=in_array($number,$array);
  	if($found){
  		echo '<b>Found</b>';
		}
  	else{
  		echo '<b>Not Found</b>';
		}
	}
	/**
	 * Function merge 2 array
	 * @param array $array1 merge with $array2
	 * @param array $array2 merge with $array1
	 * @return  array $mergeArray result of merge between $array1 and $array2
	*/
	function merArray($array1,$array2){
  	$mergeArray=array_merge($array1,$array2);
  	$mergeArray=array_unique($mergeArray);
  	return $mergeArray;
	}
	/**
	 * Function  sum of digits is divisible by 2
	 * @param array $array to filter
	 * @return void
	*/
	function filValue($array){
  	$fitArray=array_filter($array,function ($value){
  		$tmp=0;
  		//Get a single number
  		while ($value>10){
  			$tmp += $value % 10;
  			$value=$value/10;
			}
			$tmp+=$value;
			return ($tmp%2==0) ? true:false;
		});
    echo "<b>" .implode(',',$fitArray)."</b>";
	}
	/**
	 *Function get values of the first array exists in the merge array and sort ascending
	 * @param array $array1 is first array find value in $array2
	 * @param array $array2 is $mainArray for first array to find
	 * @return void
	*/
	function intersectArray($array1,$array2){
  	$result=array_intersect($array1,$array2);
//  	print_r($array2);
//    print_r($array1);
  	sort($result);
    echo "<b>" .implode(',',$result)."</b>";
	}
	/**
	 * Function get values of first array whose key not exists in $mainArray and sort descending
	 * @param array $array1 is first array key find not exist in $array2 values
	 * @param array $array2 is $mainArray for $array1 to find exists by key
	 * @return void
	*/
	function keyNotInArray($array1,$array2){
  	$array1 =array_flip($array1);
		$result=array_diff($array1,$array2);
//		print_r($array1);
//    print_r($array2);
    $result=array_flip($result);
		sort($result);
		$result=array_reverse($result);
		echo "<b>" .implode(',',$result)."</b>";
	}
?>
<br/>
/**
 * Created by PhpStorm.
 * User: Quay
 * Date: 14/02/2019
 * Time: 9:20 SA
 */