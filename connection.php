<?php
Class db0bj {
    var $servername = "localhost";
    var $username = "root";
    var $password = "";
    var $dbname = "test_api";
    var $conn;
    function getConnstring(){
        $con = mysqli_connect($this->servername, $this->username, $this->password,$this->dbname) or 
        die("Connection failed:" . mysqli_connect_error());
            if(mysqli_connect_error()){
                printf("connect failed: %s\n", mysqli_connect_error());
                exit();
            }else{
                $this->conn = $con;
            }
            return $this->conn;
    }
}
?>