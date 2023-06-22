<?php


require_once 'controllers/Controller.php';
require_once 'models/FolhaObra.php';

class FolhaObraController extends Controller
{
    public function index()
    {
        $folhasObra = FolhaObra::all();

        $this->renderView('folhaobra', 'index', ['folhasObra' => $folhasObra]);
    }

    public function create()
    {
        $this->renderView('folhaobra', 'create');
    }

    public function selectCliente()
    {
        $users = User::find('all',array('conditions' => array('role = ?', 'cliente')));

        $this->renderView('folhaobra', 'selectcliente', ['users' => $users]);
    }

    public function store($idCliente)
    {

    }
}

