<?php
    //foreach loops are mostly used for iterating over associative arrays (having keys)

//for printing only array elements
    $arr=[1=>10,
              2=>20,
              3=>30 
            ];

    foreach($arr as $key=>$val){
        echo $val."<br>";
    }

//for printing array elements with their keys
    $arr=[1=>10,
              2=>20,
              3=>30 
            ];

    foreach($arr as $key=>$val){
        echo $key."=>".$val."<br>";
    }

?>