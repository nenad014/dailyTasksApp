<?php

class Task {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function addTask() {
        $task = $_POST['task'];
        $cat_id = $_POST['category'];
        $date = $_POST['date'];
        $user_id = $_POST['user_id'];

        $sql = "INSERT INTO tasks VALUES (NULL, :task, :date, :cat_id, :user_id)";
        $query = $this->conn->prepare($sql);
        $query->execute(["task"=>$task, "date"=>$date, "cat_id"=>$cat_id, "user_id"=>$user_id]);

        $row_count = $query->rowCount();

        if($row_count == 1) {
            header('Location: user.view.php');
        } else {
            header('Location: add.task.view.php');
        }
    }

    public function getDailyTasks($id) {
        $id = $_SESSION['loggedUser']->id;
        $date = date("Y-m-d");

        $sql = "SELECT *, categories.category_name FROM tasks INNER JOIN categories ON tasks.cat_id = categories.id WHERE tasks.date = ? AND tasks.user_id = ?";
        $query = $this->conn->prepare($sql);
        $query->execute([$date, $id]);
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }

    public function getAllUserTasks($id) {
        $id = $_SESSION['loggedUser']->id;

        $sql = "SELECT *, categories.category_name FROM tasks INNER JOIN categories ON tasks.cat_id = categories.id WHERE user_id = ? ORDER BY date DESC";
        $query = $this->conn->prepare($sql);
        $query->execute([$id]);
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }
}