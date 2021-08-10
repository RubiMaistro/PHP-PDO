<?php
    require_once 'connect.php';
    
    class People{
        public $id, $first_name, $last_name, $data, $connection_date, $country,
            $full_name;

            function __CONSTRUCT(){
                $this->full_name = $this->first_name .' '. $this->last_name;
            }
    }

    if($result = $db_handle->query("SELECT * FROM peoples")){
        if($result->rowCount()){
            $result->setFetchMode(PDO::FETCH_CLASS, 'People');
            while($row = $result->fetch()){
                echo '<pre>';
                print_r($row);
            }
        }else{
            echo '<p>No results</p>';
        }
    }
    
    $db_handle->close();
?>
