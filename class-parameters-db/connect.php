<?php
    // Drivers: ex mysql, sqlite
    /*echo '<pre>';
    print_r(PDO::getAvailableDrivers());*/

    try{
        //Param: drive, host, password
        $db_handle = new PDO('mysql:host=127.0.0.1;dbname=website','root','');
        //error ex.
        //$db_handle = new PDO('mysql:host=127.0.0.1;dbname=website','root','');
        
        //if couldn't catch the error
        $db_handle->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo $e->getMessage();
        die();
    }
?>