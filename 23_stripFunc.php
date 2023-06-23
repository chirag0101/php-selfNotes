<?php

    //strip_tags are used to remove html tags from the string, if we give paramater in the function as a tag then it will ignore that specific tag
    $str="hello user to <b>php</b> <i>world</i>";
    echo strip_tags($str,"<b>");
    
    echo "<br>";

    echo wordwrap($str,4,"<br>",true);      //wordwrap is used to wrap a string with some size
    
?>