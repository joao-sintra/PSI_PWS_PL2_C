<?php

class Auth
{
    public function __construct()
    {
        if (session_status() != 2) {
            session_start();
        }


    }


    public function CheckAuth($user, $pass)
    {
        $user = User::find_by_username_and_password($user, $pass);

        if (is_null($user)) {
            return false;
        } else {
            $_SESSION['auth']['username'] = $user->username;
            $_SESSION['auth']['userid'] = $user->id;
            $_SESSION['auth']['userrole'] = $user->role;
            return true;

        }
    }

    public function isLoggedIn()
    {
        return isset($_SESSION['auth']);
    }

    public function logout()
    {
        session_destroy();
    }

    public function getUsername()
    {
        if ($this->isLoggedIn()) {
            return $_SESSION['auth']['username'];
        } else {
            return '';
        }
    }

    public function getUserId()
    {
        if ($this->isLoggedIn()) {
            return $_SESSION['auth']['userid'];
        } else {
            return '';
        }
    }

    public function getUserRole()
    {
        if ($this->isLoggedIn()) {
            return $_SESSION['auth']['userrole'];
        } else {
            return '';
        }
    }

    public function isLoggedInAs($roles=[]){
    if($this->isLoggedIn()){
        $role=$this->getUserRole();
        return in_array($role,$roles);
        
    }

    }
}