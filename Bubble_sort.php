<?php

function bubble_sort($arr_values)
{
    for($i = 0; $i < count($arr_values); $i++){
        for($j = 0; $j <count($arr_values) -$i -1; $j++){
            if($arr_values[$j] > $arr_values[$j+1]){
                $temp = $arr_values[$j];
                $arr_values[$j] = $arr_values[$j+1];
                $arr_values[$j+1] = $temp;
            }
        }
       
    }
    return $arr_values;
}


$numbers = [50, 20, 5, 100, 40, 9, 30, 1, 4];

$sorts = bubble_sort($numbers);

foreach ($sorts as $key => $item) {
    echo $item. " ";
}
