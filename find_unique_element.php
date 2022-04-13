<?php 
$current_product_serial_no = [10,20,30,40,70,80,90,100,99,88,77];
$without_null_inventory_serial = [20,10,30,40,70,80,90,100,99,77];


$newArray = [];
foreach ($current_product_serial_no as $key => $value) { 
    for ($j=0; $j < count($without_null_inventory_serial); $j++) {
        if($value == $without_null_inventory_serial[$j]){
            $index = array_search($value,$current_product_serial_no);
            if($index !== FALSE){
                // echo $index.'<br>';
                unset($current_product_serial_no[$index]);
            }
        }

	}	
        
}

foreach ($current_product_serial_no as $key => $value) {
    echo $key.'<br>';
    echo $value; 

}
?>
