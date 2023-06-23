<?php

    //we can access data stored in the 26th file
    include '26_includeRequire.php';
    echo $name;

    //require() is also the same but if any file doesn't exist then there occurs an error and require doesn't allow the rest of the program to execute whereas include allows the rest of the code to be executed

    //include_once() :   this allows a file to be included only once
    //require_once() :   this allows a file to be required only once


?>