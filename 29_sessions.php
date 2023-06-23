<?php
        //to store temporary data on server we use sessions
        //on login page we use sessions

        session_start();                                                                //to start the session

        $_SESSION["name"]="chirag";

        echo $_SESSION["name"];

        session_unset();                                                                //we need to unset things as the session can't be directly destoryed

        session_destroy();                                                              //for destroying or slopping the session


?>