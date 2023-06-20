<?php
    //array inside an array
    
    $arr=array(
        array(1,"chirag"),
        array(2,"rupali"),
        array(3,"sanjay"),
        array(4,"suryawanshi")
    );

    //or

    $arr=[
        [1,"chirag"],
        [2,"rupali"],
        [3,"sanjay"],
        [4,"suryawanshi"]
    ];

    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    //using for loop
    echo "<ul>";
    for($i=0;$i<sizeof($arr);$i++){
        echo "<li>";
        for($j=0;$j<sizeof($arr[$i]);$j++){
            echo $arr[$i][$j]." ";
        }
        echo "</li>";
        echo "<br>";
    }
    echo "</ul>";

        //using foreach loop
        echo "<table border='2px'>";
        foreach($arr as $val1){
            echo "<tr>";
            foreach($val1 as $val2){
                echo "<td>".$val2."</td>";
            }
            echo "</tr>";
            echo "<br>";
        }


?>