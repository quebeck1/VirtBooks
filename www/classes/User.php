<?php

class User
{
	private $db;

	public function __construct()
	{
		$this->db = new Database();
	}

	public function checkLogin($username, $password)
	{
		$sql = "SELECT * FROM accounts WHERE username = '$username'";
		$result = $this->db->query($sql);

		if ($result->num_rows > 0)
		{
			$row = $result->fetch_assoc();
			$storedPasswordHash = $row['password'];

			if (password_verify($password, $storedPasswordHash)) return true;
		}

		return header("Location: /");
	}

	public function register($username, $hashedPassword)
	{
		$sql = "INSERT INTO accounts (username, password, isAdmin) VALUES ('$username', '$hashedPassword', 0)";
		return $this->db->query($sql);
	}
}
