<?php
/**
 * Created by PhpStorm.
 * User: hoa
 * Date: 24/01/2019
 * Time: 03:20
 */
$arr = [[1,2,3],[2,6,8]];
function findMax($arr){
    $max = $arr[0][0];
    for($i = 0; count($arr);$i++){
        for($j = 0;count($arr[$i]);$j++){
            if($max < $arr[$i][$j]){
                $max = $arr[$i][$j];
            }
        }
    }
    return $max;
}
echo findMax($arr);