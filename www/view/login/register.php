<?php
include "../../init.php";

$registerController = new RegisterController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $registerController->registerUser($username, $password);
}
