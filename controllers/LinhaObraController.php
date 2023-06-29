<?php

use Carbon\Carbon;

require_once 'models/LinhasObra.php';
require_once 'controllers/Controller.php';

class LinhaObraController extends Controller
{
    public function __construct()
    {
        $this->authenticationFilterAllows($roles = ['admin', 'funcionario']);
    }

    public function index($id_folhaobra)
    {
        $folhaObra = FolhaObra::find($id_folhaobra);
        $cliente = User::find($folhaObra->cliente_id);
        $empresa = Empresa::first();
        $exists = LinhasObra::exists(array('conditions' => array('folhaobra_id' => $id_folhaobra)));

        if (!$exists) {
            $this->renderView('linhaobra', 'index', ['folhaObra' => $folhaObra, 'cliente' => $cliente, 'empresa' => $empresa]);
        } else {
            $linhasObra = LinhasObra::find_all_by_folhaobra_id($id_folhaobra);

            $subtotal = $this->calculaSubtotal($folhaObra, $linhasObra);
            $this->renderView('linhaobra', 'index', ['folhaObra' => $folhaObra, 'cliente' => $cliente, 'empresa' => $empresa, 'linhasObra' => $linhasObra, 'subtotal' => $subtotal]);
        }


    }

    public function show($id)
    {
        $linhaobra = LinhasObra::find($id);

        if (is_null($linhaobra)) {
            //TODO redirect to standard error page

        } else {
            //mostrar a vista show passando os dados por parâmetro
            $this->renderView('linhaobra', 'show', ['linhaobra' => $linhaobra]);
        }
    }

    public function create($id_folhaobra, $referencia)
    {

        $servicos = Servico::all();
        if ($referencia == 0) {
            $this->renderView('linhaobra', 'selectservico', ['id_folhaobra' => $id_folhaobra, 'servicos' => $servicos]);
        } else {
            $servico = Servico::find_by_referencia($referencia);
            $this->renderView('linhaobra', 'create', ['id_folhaobra' => $id_folhaobra, 'servico' => $servico]);
        }

    }

    public function store()
    {

        $var = $this->getHTTPPost();
        $quantidade = $var['quantidade'];
        $id_folhaobra = $var['folhaobra_id'];
        $referencia = $var['referencia'];
        $exists = Servico::exists(array('conditions' => array('referencia' => $referencia)));
        if(!$exists){
            $this->redirectToRoute('linhaobra', 'create', ['id_folhaobra' => $id_folhaobra, 'referencia' => 0]);
        }else {
            $servico = Servico::find_by_referencia($referencia);
            $lo = new LinhasObra();

            $lo->quantidade = $quantidade;
            $lo->servico_id = $servico->id;
            $lo->folhaobra_id = $id_folhaobra;


            $lo->valorunitario = $servico->valorunitario;
            $lo->valoriva = $lo->valorunitario * $quantidade * $servico->iva->percentagem / 100;


            if ($lo->is_valid()) {
                $lo->save();
                //redirecionar para o index
                $folhaObra = FolhaObra::find($id_folhaobra);
                $linhasObra = LinhasObra::last();

                $this->atualizaDados($folhaObra);
                $this->redirectToRoute('linhaobra', 'index', ['id_folhaobra' => $id_folhaobra]);


            } else {
                $this->renderView('linhaobra', 'create', ['id_folhaobra' => $id_folhaobra, 'servico' => $servico]);
            }
        }
    }

    public function selectservico()
    {

        $servicos = Servico::all();
        /*if($servicos->is_valid()) {
            $servicos->save();
            $this->redirectToRoute('linhaobra', 'selectservico');
        }*/
        $this->renderView('linhaobra', 'selectservico', ['servicos' => $servicos]);
    }

    public function edit($id)
    {
        $linhaobra = LinhasObra::find($id);

        if (is_null($linhaobra)) {
            //TODO redirect to standard error page
            $this->renderView('linhaobra', 'update', ['linhaobra' => $linhaobra]);

        } else {
            //mostrar a vista edit passando os dados por parâmetro
            $this->renderView('linhaobra', 'edit', ['linhaobra' => $linhaobra]);
        }
    }


    public function update($id)
    {
        $linhaobra = LinhasObra::find($id);
        $folhaobra = FolhaObra::find($linhaobra->folhaobra_id);
        $linhaobra->update_attributes($this->getHTTPPost());

        if ($linhaobra->is_valid()) {
            $linhaobra->valoriva = $linhaobra->valorunitario * $linhaobra->quantidade * $linhaobra->servico->iva->percentagem / 100;
            $linhaobra->save();
            $this->atualizaDados($folhaobra, $linhaobra);
            //redirecionar para o index
            $this->redirectToRoute('linhaobra', 'index', ['id_folhaobra' => $folhaobra->id]);

        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->redirectToRoute('linhaobra', 'index', ['id_folhaobra' => $folhaobra->id]);
        }
    }

    public function delete($id)
    {
        $linhaobra = LinhasObra::find($id);
        $folhaObra = FolhaObra::find($linhaobra->folhaobra_id);

        $linhaobra->delete();
        $this->atualizaDados($folhaObra);
        //redirecionar para o index
        $this->redirectToRoute('linhaobra', 'index', ['id_folhaobra' => $folhaObra->id]);
    }

    public function atualizaDados($folhaObra)
    {
        $fo = FolhaObra::find($folhaObra->id);
        $linhasObra = LinhasObra::find_all_by_folhaobra_id($folhaObra->id);
        $fo->valortotal = 0;
        $fo->ivatotal = 0;

        foreach ($linhasObra as $linhaObras) {
            $fo->valortotal += ($linhaObras->valorunitario * $linhaObras->quantidade) + $linhaObras->valoriva;
            $fo->ivatotal += $linhaObras->valoriva;
        }

        $fo->save();

    }

    public function calculaSubtotal($folhaObra, $linhaObras)
    {
        $subtotal = 0;

        foreach ($linhaObras as $linhaObra) {
            $subtotal += $linhaObra->valorunitario * $linhaObra->quantidade;
        }
        return $subtotal;
    }
}