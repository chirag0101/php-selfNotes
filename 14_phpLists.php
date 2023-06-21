<?php
    //list function is used to store multiple data in foreach loops

        $arr=[
            [1,"chirag",19],
            [2,"rupali",44],
            [3,"sanjay",52]
        ];  

        echo "<table border='2px' cellspan='2px' cellpadding='2px'>";
        echo "<tr>";
        echo "<th>";
            echo "id name age";
        echo "</th>";
        echo "</tr>";

        foreach($arr as list($id,$name,$age)){
            echo "<tr>";
            echo "<td>";
            echo $id ." ".$name." " .$age."<br>";
            echo "</td>";
            echo "</tr>";
        }
        
        echo "</table>";

?>