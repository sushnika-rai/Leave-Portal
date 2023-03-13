<?php 
class Database{
    private $connection;
    function connection_db(){
        $this->connection = mysqli_connect('localhost','root','','leave_app');
        if(mysqli_connect_error()){
            echo "Error: ", mysqli_connect_error();
        }
    }
}

?>
