<?php

use Carbon\Carbon;

require_once 'controllers/Controller.php';
require_once 'models/FolhaObra.php';

class FolhaObraController extends Controller
{
    public function create($id)
    {
        $data = Carbon::Now();
        $dataFormatada = $data -> format('d/m/Y');
        $folhaObra = FolhaObra::last();
        $empresa = Empresa::first();
        $users = User::find('all', array('conditions' => array('role = ?', 'cliente')));

        if ($id == 0) {
            $this->renderView('folhaobra', 'create', ['users' => $users, 'dataFormatada' => $dataFormatada, 'folhaObra' => $folhaObra, 'empresa' => $empresa]);

        } else {
            $user = User::find($id);

            $this->renderView('folhaobra', 'create', ['users' => $user, 'dataFormatada' => $dataFormatada , 'folhaObra' => $folhaObra, 'empresa' => $empresa]);
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

            $this->renderView('folhaobra', 'create', ['folhaObra' => $folhaObra, 'linhasObra' => $linhasObra]);
        }

        $folhaObra->data = Carbon::Now();
        $folhaObra->valortotal = 0;
        $folhaObra->ivatotal = 0;
        $folhaObra->estado = 'Em lançamento';
        $folhaObra->user_id = $auth->getUserId();
        $folhaObra->cliente_id = $idCliente;
    }
}

