<?php
require_once "../../init.php";

$loginController = new LoginController();
$ssmngr = new SessionManager();
$qd = new QueryDatabase();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$loginController->handleLogin($username, $password);
}else {
	header("Location: /login");
}
