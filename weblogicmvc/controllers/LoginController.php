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
            //echo 'Login com sucesso <br>';
            //echo  '-> '.$auth->getUserId(). ' '.$auth->getUsername().' ' . $auth->getUserRole();
            //if($auth->isLoggedInAs())
            $role = $auth ->getUserRole();
            switch ($role){
                case 'admin':
                    $this->redirectToRoute('backoffice','index');
                    break;
                case 'funcionario':
                    $this->redirectToRoute('backoffice','index');
                    break;
                case 'cliente':
                    $this->redirectToRoute('frontoffice','index');
                    break;
                default:
                    break;
            }
            
        } else {
            //redirect para o index
            $this->redirectToRoute('login','index');
        }
    }

    public function logout(){
        $auth = new Auth();
        $auth -> logout();
        $this->redirectToRoute('login','index');
    }
  
    
}