<?php

$schools = [
    'BOB' => [
        'school' => 'NYU',
        'graduation' => '2019'
    ],
    'Jack' => [
        'school' => 'Columbia',
        'graduation' => '2021'
    ]
    
];

$keys = array_keys($schools);

for($i = 0; $i <count($schools); $i++){
    
    foreach ($schools[$keys[$i]] as $key => $value) {
     echo $key. ":" .$value ."<br>";
    }
  
}

?>
