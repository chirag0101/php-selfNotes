<?php
    $var1=10;

    //while loop(entry control loop) ex: for html lists
    echo "<ul>";
    while($var1!=0){
        echo "<li>".$var1."</li> ";
        $var1--;
    }
    echo "</ul>";

    echo "<br>";

    //do while loop(exit control loop)->does it work at least once
    $var1=10;
    do{
        echo $var1;
        $var1--;
    }while($var1!=0);

    echo "<br>";

    //for loop
    for($var1=10;$var1!=0;$var1--){
        echo $var1." ";
    }
    

?>