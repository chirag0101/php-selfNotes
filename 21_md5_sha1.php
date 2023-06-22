<?php
    //used for password protection
    //mda -> message digest algorithm
    //sh1-> us secure hash algorithm 1
    //sh 1 is more secure than md5

    $str="chiragsuryavanshi@01";
    echo md5($str)."<br>";                                         //converts the given string into a  hexa alphanumeric format text size:32
    echo md5($str,true)."<br>";                                 //converts the given string into a binary 32 size long alphanumeric format text

    echo sha1($str)."<br>";                                         //converts the given string into a  hexa alphanumeric format text-size:40
    echo sha1($str,true); 

?>