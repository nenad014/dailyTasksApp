<?php

class Category {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getCategory() {
        $sql = "SELECT * FROM categories";
        $query = $this->conn->query($sql);
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }
}
