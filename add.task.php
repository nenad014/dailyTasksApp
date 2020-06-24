<?php

require_once 'bootstrap.php';

if(isset($_POST['addTaskBtn'])) {
    $task->addTask();
}