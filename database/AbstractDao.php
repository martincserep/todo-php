<?php

abstract class AbstractDao {


    private $host        = "host = 127.0.0.1";
    private $port        = "port = 5432";
    private $dbname      = "dbname = todo";
    private $credentials = "user = postgres password=";


    public $conn;

    public function getConnection(){

        $this->conn = null;

        try{
            $this->conn = pgpg_connect( "$host $port $dbname $credentials"  );
 
        }catch(exception $exception){
            echo "Connection error: " . $exception->getMessage();
        }
        //echo "Connected successfully";
        return $this->conn;
    }



}

?>