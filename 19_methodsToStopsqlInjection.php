<?php
    //to prevent sql injection we add slashes to data
    
    //to do this we use following methods
    $str="chirag is a 'developer'";
    echo addslashes($str)."<br>";

    //to remove slashes we use stripslashes()
    echo stripslashes($str)."<br>";

    //to customly add slashes in a string
    echo addcslashes($str,"i")."<br>";

    echo addcslashes($str,"a..z")."<br>";       //to add slashes for alphabets coming in between a to z

    echo stripcslashes($str)."<br>";                //to remove slashes


?>