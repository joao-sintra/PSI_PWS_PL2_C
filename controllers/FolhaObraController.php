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


        if ($id == 0) {
            $this->renderView('folhaobra', 'create', ['dataFormatada' => $dataFormatada, 'folhaObra' => $folhaObra, 'empresa' => $empresa]);

        } else {

            $folhaObra = FolhaObra::find($id);

            $cliente = User::find($folhaObra->cliente_id);


            $this->renderView('folhaobra', 'create', ['cliente' => $cliente, 'dataFormatada' => $dataFormatada , 'folhaObra' => $folhaObra, 'empresa' => $empresa]);
        }
    }

    public function selectCliente()
    {
        $users = User::find('all', array('conditions' => array('role = ?', 'cliente')));

        $this->renderView('folhaobra', 'selectcliente', ['users' => $users]);
    }

    public function store($idCliente)
    {
        $folhaObra = new FolhaObra();
        $auth = new Auth();

        $folhaObra->data = Carbon::Now();
        $folhaObra->valortotal = 0;
        $folhaObra->ivatotal = 0;
        $folhaObra->estado = 'Em lançamento';
        $folhaObra->user_id = $auth->getUserId();
        $folhaObra->cliente_id = $idCliente;




        if ($folhaObra->is_valid()){
            $folhaObra->save();

            $this->redirectToRoute('folhaobra', 'create',['id' => $folhaObra->id]);
        }


        else {
            $linhasObra = LinhasObra::all();

            $this->renderView('folhaobra', 'create', ['folhaObra' => $folhaObra, 'linhasObra' => $linhasObra]);
        }



    }
}

