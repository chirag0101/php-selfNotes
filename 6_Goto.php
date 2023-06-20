<?php
    //goto statement is used to jump at a particular section of the code for a given condition
    $var1=10;
    while($var1!=0){
        if($var1==5){
            goto abc;
        }
        echo $var1." ";
        $var1--;
    }
    abc:
        echo "<br>Into the goto section.";
?>