<?php

    $cookie_name="user";
    $cookie_value="chirag";
    setcookie($cookie_name, $cookie_value,time()+(60*60*24),"/");  

?>
<html>
    <head>  </head>
		<body>

        <h1>
            <?php
                    if(!isset($_COOKIE[$cookie_name])){
                        echo "not set";
                    }else{
                       echo $_COOKIE[$cookie_name];
                    }
            ?>
        </h1>

        </body>

</html>