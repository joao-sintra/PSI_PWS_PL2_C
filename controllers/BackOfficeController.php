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
        $this->renderView('backoffice', 'index');
    }

}

