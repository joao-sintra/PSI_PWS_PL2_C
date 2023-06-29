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
        $clientes = User::find('all', array('conditions' => array('role = ?', 'cliente')));
        $servicos = Servico::all();
        $ivas = Iva::all();
        $FoEmitidas = folhaObra::find('all', array('conditions' => array('estado = ?', 'Emitida')));

        $contaClientes = Count($clientes);
        $contaServicos = Count($servicos);
        $contaIvas = Count($ivas);
        $contaFoEmitidas = Count($FoEmitidas);

        $this->renderView('backoffice', 'index', ['contaClientes' => $contaClientes, 'contaServicos' => $contaServicos, 'contaIvas' => $contaIvas,'contaFoEmitidas'=> $contaFoEmitidas]);
    }
}

