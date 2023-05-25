<?php

class Auth
{
    public function __construct()
    {
        if (session_status() != 2) {
            session_start();
        }


    }

    public function getUserName()
    {
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        } else {
            return '';
        }


    }

    public function CheckAuth($user, $pass)
    {

        if ($user === 'admin' && $pass === 'admin123') {
            $_SESSION['user'] = $user;
            return true;
        } else {
            return false;
        }
    }

    public function isLoggedIn()
    {
        return isset($_SESSION['user']);
    }

    public function logout()
    {
        session_destroy();
    }

}