<?php
    require_once 'connect.php';

    if($result = $db_handle->query("SELECT * FROM peoples")){
        if($result->rowCount()){
            //fetchAll() params ex. : FETCH_BOTH, FETCH_NUM, FETCH_ASSIC
            $table = $result->fetchAll(PDO::FETCH_NUM);
            echo '<pre>';
            print_r($table);
            echo $table[0][1];
        }else{
            echo '<p>Nothing.</p>';
        }
    }
    
?>
