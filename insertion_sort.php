<?php

function insertion_sort($arr)
{
    for($i = 1; $i <count($arr); $i++){
        $item = $arr[$i];
        $j = $i -1;

        while($j >= 0 && $arr[$j] > $item){
            $arr[$j+1] = $arr[$j];
            $j = $j -1;
        }

        $arr[$j+1] = $item;
    }

    return $arr;


}

$array_numbers = [5,4,3,1,2];
$result = insertion_sort($array_numbers);
foreach($result as $item){
    echo $item. "<br>";
}


?>
