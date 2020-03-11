<?php

abstract class AbstractDao {


    private $host        = "host = 127.0.0.1";
    private $port        = "port = 5432";
    private $dbname      = "dbname = todo";
    private $credentials = "user = postgres password=martin";


    public $conn;

    public function getConnection(){

        $this->conn = null;

        try{
            $this->conn = pg_connect( "$this->host $this->port $this->dbname $this->credentials connect_timeout=5"  );
 
        }catch(exception $exception){
            echo "Connection error: " . $exception->getMessage();
        }
        //echo "Connected successfully";
        return $this->conn;
    }



}

?>