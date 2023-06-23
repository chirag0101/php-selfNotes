<?php
    $arr=[1,3,2,0,4,5];
    
    echo min($arr)."<br>";

    echo max($arr)."<br>";
    
    $num1=6.2;
    echo abs($num1)."<br>";                     //gives the positive actual number
    
    $num2=6.2;  
    echo floor($num2)."<br>";                   //gives the floor value 

    $num3=6.2;
    echo ceil($num3)."<br>";                     //gives the ceil value 

    $num4=6.6;
    echo round($num4)."<br>";                 //gives the roundoff value 

        // dividend divisor
    echo intdiv(8,2)."<br>";                        //returns the quotient

    //num raiseto 
    echo pow(2,3)."<br>";

    echo sqrt(4)."<br>";

    echo rand(1000,9999)."<br>";
 
?>