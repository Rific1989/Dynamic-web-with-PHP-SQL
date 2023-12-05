<?php

    $db_host = "127.0.0.1";
    $db_user = "rific";
    $db_password = "abc123";
    $db_name = "messages_o_autorovi";

    $connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    if(mysqli_connect_error()){
        echo mysqli_conncet_error();
        exit();
    }

?>