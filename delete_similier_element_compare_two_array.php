<?php 
$arr = ['yeasin', 'arafat', 'shuvo', 'sakil', 'Fahad', 'ibrahim', 'junayed'];
$arr_two = ['Fahad', 'junayed'];


    foreach ($arr_two as $key => $order_values) {
        foreach ($arr as $key => $value) {
            if ($value == $order_values) {
            unset($arr[$key]);
            }
        }
        
    }
 
    echo var_dump($arr);
?>

