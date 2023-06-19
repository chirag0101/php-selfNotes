<?php
    //normal variables in php
    $var=10;
    echo $var;
    $var=5;
    //values can be changed later on

    //constant variables in php
    //syntax: define(num,value,case-insensitive);
    define("var2",10);
    echo "<br>". var2;

    //now the value of var2 can't be changed
    var2=1;         //it gives error if we do this
?>