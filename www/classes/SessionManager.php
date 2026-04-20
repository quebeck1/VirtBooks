<?php

class SessionManager
{
	private $name;
	private $lifetime;
	private $path;
	private $domain;
	private $secure;
	private $httponly;

	public function __construct()
	{
		$this->name = 'user_session';
		$this->lifetime = 3600;
		$this->path = '/';
		$this->domain = null;
		$this->secure = false;
		$this->httponly = true;

		$this->startSession();
	}

	private function startSession()
	{
		if (session_status() == PHP_SESSION_NONE)
		{
			session_name($this->name);
			session_set_cookie_params(
				$this->lifetime,
				$this->path,
				$this->domain,
				$this->secure,
				$this->httponly
			);
			session_start();
		}
	}

	public function set($key, $value)
	{
		$_SESSION[$key] = $value;
	}

	public function get($key, $default = null)
	{
		return isset($_SESSION[$key]) ? $_SESSION[$key] : $default;
	}

	public function remove($key)
	{
		if (isset($_SESSION[$key])) unset($_SESSION[$key]);
	}

	public function destroy()
	{
		session_unset();
		session_destroy();
	}
}
