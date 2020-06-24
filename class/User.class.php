<?php

class User {
    public $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function registerUser() {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $sql = "INSERT INTO users VALUES (NULL, ?, ?, ?)";
        $query = $this->conn->prepare($sql);
        $query->execute([$username, $email, $password]);

        $row_count = $query->rowCount();

        if($row_count == 1) {
            header('Location: login.view.php');
        } else {
            header('Location: register.view.php');
        }
    }

    public function logUser() {
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
        $query = $this->conn->prepare($sql);
        $query->execute([$email, $password]);

        $loggedUser = $query->fetch(PDO::FETCH_OBJ);

        if($loggedUser != NULL) {
            $_SESSION['loggedUser'] = $loggedUser;
            header('Location: user.view.php');
        } else {
            header('Location: login.view.php');
        }
    }
}