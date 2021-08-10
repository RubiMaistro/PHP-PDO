<?php
    require_once 'connect.php';

    //Last added member
    $lastId = $db_handle->lastInsertId();
    echo $lastId;

    //Close DataBase Connection
    $db_handle = null;
    
?>
