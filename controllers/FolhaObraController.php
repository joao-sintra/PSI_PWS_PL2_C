<?php

use Carbon\Carbon;

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
        $users = User::find('all', array('conditions' => array('role = ?', 'cliente')));

        if ($id == 0) {
            $this->renderView('folhaobra', 'create', ['users' => $users]);

        } else {
            $user = User::find($id);

            $this->renderView('folhaobra', 'create',['users' => $user]);
        }
    }

    public function selectCliente()
    {
        $users = User::find('all', array('conditions' => array('role = ?', 'cliente')));

        $this->renderView('folhaobra', 'selectcliente', ['users' => $users]);
    }

    public function store($idCliente)
    {

        $folhaObra = new FolhaObra($this->getHTTPPost());
        $auth = new Auth();

        if ($folhaObra->is_valid()){
            $folhaObra->save();
            $this->redirectToRoute('folhaobra', 'index',['id' => $folhaObra->id]);
        }
        else {
            $linhasObra = Linhaobra::all();

            $this->renderView('folhaobra', 'create', ['folhaobra' => $folhaObra, 'linhasobra' => $linhasObra]);
        }

        $folhaObra->data = Carbon::Now();
        $folhaObra->valortotal = 0;
        $folhaObra->ivatotal = 0;
        $folhaObra->estado = 'Em lançamento';
        $folhaObra->user_id = $auth->getUserId();
        $folhaObra->cliente_id = $idcliente;

    }
}

