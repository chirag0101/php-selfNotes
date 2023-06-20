<?php
    //arrays are used to store multiple values of different datatypes in one variable
    
    //we use array() for it
    $a=array(10,"20",30);
    
    //or
    
    $a=[10,"20",30];
    
    //or
    
    $a[0]=10;
    $a[1]="20";
    $a[3]=30;

    echo $a[1];

    echo "<pre>";       //pre tag is used for formatting the output
    print_r($a);             //inbuilt php function to print array elements
    echo "</pre>";


    //associative array
    $a=array(1=>10,2=>20,3=>30);

    //or

    $a=[1=>10,
            2=>20,
            3=>30
        ];

    var_dump($a);       //var_dump() shows the datatype of elements of the array
?>