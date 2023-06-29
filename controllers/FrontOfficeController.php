<?php

require_once 'controllers/Controller.php';
class FrontOfficeController extends Controller
{
    public function __construct()
    {
        $this->authenticationFilterAllows($roles = ['cliente']);
    }

    public function index()
    {
        $auth = new Auth();

        $folhasObra = FolhaObra::find_all_by_cliente_id($auth->getUserId());


        $this->renderView('frontoffice', 'index', ['folhasObra' => $folhasObra], 'frontoffice');
    }

    public function show($id_folhaobra){

        $folhaObra = FolhaObra::find($id_folhaobra);
        $cliente = User::find($folhaObra->cliente_id);
        $empresa = Empresa::first();

        $linhasObra = LinhasObra::find_all_by_folhaobra_id($id_folhaobra);

        $subtotal = $this->calculaSubtotal($folhaObra, $linhasObra);
        $this->renderView('frontoffice', 'show', ['folhaObra' => $folhaObra, 'cliente' => $cliente, 'empresa' => $empresa, 'linhasObra' => $linhasObra, 'subtotal' => $subtotal], 'frontoffice');


    }

    public function pagarfolha($id_folhaobra)
    {
        $folhaObra = FolhaObra::find($id_folhaobra);
        $folhaObra->estado = 'Paga';
        $folhaObra->save();
        $this->redirectToRoute('frontoffice', 'index');
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