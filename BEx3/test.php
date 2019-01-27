<?php
/**
 * Created by PhpStorm.
 * User: hoa
 * Date: 24/01/2019
 * Time: 03:20
 */
$arr = [1,2,3,4,5,6,7,8,10];
function findMin($arr){
    $min = $arr[0];
    for($i = 0; count($arr); $i++ ){
        if($min > $arr[$i]){
            $min = $arr[$i];
        }
    }
    return $min;
}

echo findMin($arr);
?>
