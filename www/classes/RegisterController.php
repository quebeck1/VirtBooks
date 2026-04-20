<?php

class RegisterController extends User
{
	private $user;

	public function __construct()
	{
		$this->user = new User();
	}

	public function registerUser($username, $password)
	{
		$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

		$success = $this->user->register($username, $hashedPassword);

		if ($success)
		{
			echo "Registration successful";
		} else {
			echo "Registration failed.";
		}
	}
}
