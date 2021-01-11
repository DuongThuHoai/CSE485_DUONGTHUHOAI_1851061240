<?php

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db_name = 'blog_btl';
    $sconn = new MySQLi($host, $user,$pass, $db_name);

    if($sconn->connect_error){
        die('Database connetcion error: '.$sconn->connect_error);
    }
    

?>