<?php
    // functions are used to reduce loc by using them repeteadly
    // function keyword is used for creating a function followed by it's name
    function func1(){
        $var1=1;
        return $var1;
    }

    echo func1();   //function call

    echo "<br>";

    // functions with arguments as values
    //$a has default value 0 in case if no value is passed to the function
    function sum($a=0,$b){
        $c=$a+$b;
        return $c;
    }

    echo sum(10,20);

    echo "<br>";

    //functions arguments as reference-> passing address of a variable as a parameter so here the value of val1 changes as we make changes directly to it's address 
    function displayAdd(&$val1){
        $val1="Hey";
    }
    $val1="Hello";
    displayAdd($val1);
    echo $val1;

?>