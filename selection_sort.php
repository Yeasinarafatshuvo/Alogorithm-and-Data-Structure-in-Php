
<?php

function selection_sort($arr_numbers, $total_array_number){
    for($i = 0; $i < $total_array_number - 1; $i++){
        $index_min_number = $i;
        for($j = $i +1; $j <$total_array_number; $j++){
            if($arr_numbers[$j] < $arr_numbers[$index_min_number]){
                $index_min_number  = $j;
            }
        }
        if($index_min_number != $i){
            $temp = $arr_numbers[$i];
            $arr_numbers[$i] = $arr_numbers[$index_min_number];
            $arr_numbers[$index_min_number] = $temp;

        }
       
    }
    return $arr_numbers;
   
}

$numbers = [5, 7, 2, 10, 6, 12, 9, 18, 20, 1];
$n = count($numbers);
$new_array = [];
$new_array = selection_sort($numbers, $n);
foreach($new_array as $item){
    echo $item ." ";
}
