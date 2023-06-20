<?php
    //calling a function within itself, there needs to be a base condition to stop the recursion
    function display($num){
        if($num<=5){
            echo "$num<br>";
            display($num++);
        }
    }

    display(4);

    //factorial of a number
    function factorial($num){
        if($num==0){
            return 1;
        }else{
            return $num*factorial($num-1);
        }
    }

    echo factorial(5);
?>