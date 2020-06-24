<?php

class Connection {
    private $host = 'localhost';
    private $dbname = 'dailyapp';
    private $user = 'root';
    private $password = '';
    public $conn;

    public function getConnection() {
        try {
            $this->conn = new PDO('mysql:host='.$this->host.'; dbname='.$this->dbname.';', $this->user, $this->password);
            return $this->conn;
        } catch(PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }
}