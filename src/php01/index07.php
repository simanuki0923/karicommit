<?php
$si = [
    [
        "name1" => "taro",
        "age" => "25",
        'gender' => "men"
    ],

    [
       "name1" => "jiro",
        "age" => "20",
        'gender' => "men"   
    ],
    [
       "name1" => "hanako",
        "age" => "16",
        'gender' => "women"   
    ]
 ];

 foreach ($si as $sa) {
echo $sa["name1"] . " (" . $sa["age"] . "歳" . $sa["gender"] . ")" . "<br>";
 }