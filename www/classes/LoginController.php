<?php

class LoginController extends User
{
    private $user;

    public function __construct()
    {
        $this->user = new User;
    }

    public function handleLogin($username, $password)
    {
        $ssmngr = new SessionManager;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($this->user->checkLogin($username, $password)) {
                $ssmngr->set('username', $username);
                header('Location: /bookshelf');
            }
        }
    }
}
