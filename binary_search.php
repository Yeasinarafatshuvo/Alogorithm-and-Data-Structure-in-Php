<?php

 function binary_search($arr, $n, $x)
{
    $left = 0; 
    $right = $n - 1; 
    $mid;

    while($left <= $right){
        $mid = round(($left + $right) / 2);
        if($arr[$mid] === $x){
            return $mid;
        }
        if($arr[$mid] < $x){
            $left = $mid + 1;
        }else{
            $right = $mid -1;
        }
    }
    return -1;


}

$numbers = array(10,20,30,40,50,60,70,80,90,100);
$n = count($numbers);
$x = 90;
$result = binary_search($numbers, $n, $x);

echo "Value of $x is found in index numbers: " . $result;
