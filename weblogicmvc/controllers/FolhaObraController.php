<?php

use Carbon\Carbon;

require_once 'controllers/Controller.php';
require_once 'models/FolhaObra.php';

class FolhaObraController extends Controller
{

    public function __construct()
    {
        $this->authenticationFilterAllows($roles = ['admin', 'funcionario']);
    }

    public function create($id_cliente, $id_folhaobra)
    {
        $data = Carbon::Now();
        $dataFormatada = $data->format('d/m/Y');

        $folhaObra = FolhaObra::last();
        $empresa = Empresa::first();

        if ($id_folhaobra != 0) {
            $folhaObra = FolhaObra::find($id_folhaobra);
        }

        if ($id_cliente == 0) {
            $this->renderView('folhaobra', 'create', ['dataFormatada' => $dataFormatada, 'folhaObra' => $folhaObra, 'empresa' => $empresa]);

        } else {

            $cliente = User::find($id_cliente);


            $this->renderView('folhaobra', 'create', ['cliente' => $cliente, 'dataFormatada' => $dataFormatada, 'folhaObra' => $folhaObra, 'empresa' => $empresa]);
        }
    }

    public function show()
    {

        $auth = new Auth();
        if($auth->getUserRole() == 'admin'){
            $folhasObra = FolhaObra::all();
        }else{
            $folhasObra = FolhaObra::find_all_by_user_id($auth->getUserId());
        }

        $users = User::all();

        $this->renderView('folhaobra', 'show', ['folhasObra' => $folhasObra, 'users' => $users]);
    }

    public function selectCliente($pesquisa)
    {
        if ($pesquisa == null) {
            $users = User::find('all', array('conditions' => array('role = ?', 'cliente')));
        } else {
            $users = User::find('all', array('conditions' => array('role = ? AND username LIKE ?', 'cliente', '%' . $pesquisa . '%')));
        }
        $this->renderView('folhaobra', 'selectcliente', ['users' => $users]);
    }

    public function store($id_cliente)
    {
        $folhaObra = new FolhaObra();
        $auth = new Auth();

        $folhaObra->data = Carbon::Now();
        $folhaObra->valortotal = 0;
        $folhaObra->ivatotal = 0;
        $folhaObra->estado = 'Em lançamento';
        $folhaObra->user_id = $auth->getUserId();
        $folhaObra->cliente_id = $id_cliente;


        if ($folhaObra->is_valid()) {
            $folhaObra->save();

            $this->redirectToRoute('linhaobra', 'index', ['id_folhaobra' => $folhaObra->id]);

            // $this->redirectToRoute('folhaobra', 'create',['folhaObra' => $folhaObra, 'cliente' => $cliente, 'empresa' => $empresa, 'dataFormatada' =>  $dataFormatada]);
        } else {
            $linhaObras = LinhasObra::all();

            $this->renderView('folhaobra', 'create', ['folhaObra' => $folhaObra, 'linhaObras' => $linhaObras]);
        }

    }

    public function emitirfolha($id_folhaobra)
    {
        $folhaObra = FolhaObra::find($id_folhaobra);
        $folhaObra->estado = 'Emitida';
        $folhaObra->save();
        $this->redirectToRoute('backoffice', 'index');
    }


}

