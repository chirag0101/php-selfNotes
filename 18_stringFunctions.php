<?php
    $a="hello";
     
    $arr1=str_split($a);                                        //this function splits a string and stores each charater in an array

     echo "<pre>";
     print_r($arr1);
     echo "</pre>";

    //param: str afterHowMuchLen symbolToAdd
     $newStr=chunk_split($a,1,"-");                       //this function is used to add any symbol between the characters of a string
     echo $newStr;

    $str="hello";
    echo "<br>".strtoupper($str);                          //convert string to upper case

    $str="HELLO";
    echo "<br>".strtolower($str);                           //convert string to lower case

    $str="hello";
    echo "<br>".ucfirst($str);                                  //convert 1st character of string to upper case

    $str="hello to the php world";
    echo "<br>".ucwords($str);                              //converts 1st character of each word to upper case

    $str="HELLO";
    echo "<br>".lcfirst($str);                                   //converts 1st character of string to lower case

    $str="hello to the php world";
    echo "<br>".strlen($str);                                   //counts the number of characters in string

    $str="hello to the php world";
    echo "<br>".str_word_count($str);                    //counts the words in the string

    $str="hello to php to world";
    echo "<br>".substr_count($str,"to");                 //counts the number of times an word is repeated 

    $str="hello to the php world";
    echo "<br>".strpos($str,"to");                             //finds the 1st occurence position of the word in the string

    $str="hello to the php to world";
    echo "<br>".strrpos($str,"to");                             //finds the 1st occurence position of the word in the string in reverse order

    $str="hello to the php world";
    echo "<br>".strstr($str,"to");                               //returns the string after the given string
    //strchr() & strrchr() are also similar
    //strpbrk() for single character

    $str="hello to the php world";
    echo "<br>".substr($str,5,15);                             //removes a part of the string

    $str="hello to the php world";
    echo "<br>".str_replace("php","c",$str);              //replaces a particular string with another

    $str1="hello";
    $str2="Hello";
    if(strcmp($str1,$str2)==0){                                   //this compares 2 strings
        echo "<br>Strings are equal ";                         //if a function returns 0 means true & if >0 then string 1 is greater & if <0 then string 2 is greater

    }else{
        echo "<br>Strings aren't equal ";
    }

    echo "<br>".strcasecmp("hello","Hello");
    
    //substr_compare() used to compare strings in between(substrings)

    $str="chirag";
    echo "<br>".strrev($str);                                       //used to reverse a string

    echo "<br>".str_shuffle($str);                                //used to shuffle the alphabets of the string

    echo "<br>".strlen($str);                                      //returns length of any given string

    echo "<br>".str_pad($str,8,"i",STR_PAD_RIGHT);                           //it adds by default character after the given string    

    echo "<br>".str_repeat($str,3);                             //repeats the string after itself

    echo "<br>".trim($str,"ch");                                   //removes alphabet from the string, mostly for removing spaces

    //ex: rtrim(), ltrim(),chop(),etc

    $str="hello";

    $str1=ord($str);                                                        //calculates the ascii value of the very first alphabet of the string

    echo $str1."<br>";

    echo chr($str1)."<br>";                                             //returns the alphabet associated to the given ascii value

 ?>