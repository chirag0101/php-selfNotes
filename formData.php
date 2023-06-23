<?php

    echo "<pre>";
    // print_r( $_GET);
    // print_r( $_POST);
    print_r( $_REQUEST);
    echo "</pre>";

    //$_POST is used where we have sensitive data like passwords nd stuff as the $_GET sends the data through the http headers which gets visible in the page url

    //$_REQUEST is also the same & can work with both methods get or post 

?>