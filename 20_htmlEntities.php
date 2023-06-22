<?php
    //sometimes users input html code as input which helps hackers to perform sql injection so to prevent it we use following functions
    //this functions encodes: & " ' < >
    $str="<a href='https://www.google.com'></a>";       
    echo  htmlentities($str,ENT_QUOTES)."<br>";                                    //this functions converts html tags into their equivalent entitiy codes
                                                                                                                // do: view page source for it

    echo  html_entity_decode($str);                                                           //EN_QUOTES for encoding quotes
    
    echo htmlspecialchars($str);                                                                //does the same as above functions

    
?>