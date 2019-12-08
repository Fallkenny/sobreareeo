<?php
abstract class MySQLDAO {

    protected $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }
} 
?>