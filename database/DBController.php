<?php

class DBController
{
    // Database connection
    protected $host = "localhost";
    protected $user = "root";
    protected $password = "";
    protected $database = "mobilestore";

    //connection property
    public $con = null;

    public function __construct(){
        $this->con = mysqli_connect($this->host, $this->user,$this->password,$this->database);
        if($this->con->connect_error){
            echo "Fail" . $this->con->connect_error;
        }
    }

    public function __destruct(){
        $this->closeConnection();
    }

    // mysqli closing connection
    protected function closeConnection(){
        if($this->con != null){
            $this->con->close();
            $this->con = null;
        }
    }
}

