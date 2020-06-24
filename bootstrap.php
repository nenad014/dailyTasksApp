<?php

session_start();

require_once 'class/Connection.class.php';
require_once 'class/User.class.php';
require_once 'class/Category.class.php';
require_once 'class/Task.class.php';

$db = new Connection();
$conn = $db->getConnection();

$user = new User($conn);
$category = new Category($conn);
$task = new Task($conn);