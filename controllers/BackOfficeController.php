<?php
require_once 'controllers/Controller.php';
class BackOfficeController extends Controller
{
    public function __construct()
    {
      $this->authenticationFilterAllows($roles = ['admin','funcionario']);
    }

    public function index()
    {
        $users = User::all();
        $servicos = Servico::all();
        $ivas = Iva::all();

        $this->renderView('backoffice', 'index', ['users' => $users, 'servicos' => $servicos, 'ivas' => $ivas]);
    }
}

