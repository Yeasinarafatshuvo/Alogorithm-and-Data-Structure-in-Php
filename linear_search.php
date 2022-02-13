<?php
function linear_search($arr, $x){
	for($i= 0; $i<sizeof($arr); $i++){
		if($arr[$i] == $x){
			return $i;
		}
	}
	$i = -1;
	return $i;
}

$arr = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 48);
$ans = linear_search($arr,48);

echo $ans;


?>
