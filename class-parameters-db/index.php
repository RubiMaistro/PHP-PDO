<?php
    require_once 'connect.php';
    
    if(isset($_GET['first_name'], $_GET['last_name'], $_GET['data']) && !empty($_GET['first_name']) && !empty($_GET['last_name'])){
        $firstName = $_GET['first_name'];
        $lastName = $_GET['last_name'];
        $data = $_GET['data'];
    }

    $query = $db_handle->prepare("INSERT INTO peoples (id, first_name, last_name, data, connection_date)
        VALUES (null, :firstName, :lastName, :data, NOW())
    ");

    $query->execute(array(
        //keys:
        ':firstName' => $firstName,
        ':lastName' => $lastName,
        ':data' => $data
    ));

    $lastId = $db_handle->lastInsertId();
    echo $lastId;

    //Another solution
    /*
    $query = $db_handle->prepare("INSERT INTO peoples (id, first_name, last_name, data, connection_date)
        VALUES (null, ?, ?, ?, NOW())
    ");

    //The query use the execute function parameters instead of ? (question mark above)
    $query->execute(array($firstName, $lastName, $data));
    */

    //Close DataBase Connection
    $db_handle = null;
    
?>
