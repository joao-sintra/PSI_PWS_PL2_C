<?php
require_once 'controllers/Controller.php';
require_once 'models/Auth.php';
class LoginController extends Controller
{

    public function index(){

            $this->renderView('login', 'login',[], 'login');
    }

    public function checkLogin() {
        $utilizador = $this -> getHTTPPostParam('username');
        $senha = $this ->getHTTPPostParam('password');

        $auth = new Auth();

        if($auth -> checkAuth($utilizador, $senha)) {
            echo 'Login com sucesso';
            if($auth->isLoggedInAs())
                //falta validar as roles para mandar para as views certas 
           echo $auth->getUsername(). ' '. $auth->getUserId(). ' ' . $auth->getUserRole();
            
        } else {
           // echo 'Login falho';
            //redirect po index
        }
    }
  
    
}