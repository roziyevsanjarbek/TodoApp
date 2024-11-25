<?php

class Database {
    public $host = "localhost";
    public $user = "root";
    public $pass = "qwert";
    public $dt_name = "TodoApp";
    public $conn;
    public function __construct(){
        $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dt_name, $this->user, $this->pass);
    }
}
