<?php
    //Ternary operators acts same to if else statements but the difference is in ternary operators you can;t use multiple statements whereas opposite in if else statements
    
    //using if else
    $var1=10;
    if($var1>10){
        $var1=11;
    }else{
        $var1=9;
    }

    echo $var1;

    //same using ternary operators
    $var1=10;

    //condn         if true         if false  
    ($var1>10) ? $var1=11 : $var1=9 ;
    echo $var1;

?>