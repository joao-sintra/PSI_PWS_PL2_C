<?php

require_once 'models/Empresa.php';
require_once 'controllers/Controller.php';

class EmpresaController extends Controller
{

    public function __construct()
    {
        $this->authenticationFilterAllows($roles = ['admin']);
    }

    public function index()
    {
        $empresas = Empresa::all();

        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('empresa', 'index', ['empresas' => $empresas]);
    }

    public function show($id)
    {
        $empresa = Empresa::find($id);

        if (is_null($empresa)) {
            //TODO redirect to standard error page

        } else {
            //mostrar a vista show passando os dados por parâmetro
            $this->renderView('empresa', 'show', ['empresa' => $empresa]);
        }
    }

    public function create()
    {
        $this->renderView('empresa', 'create');
    }

    public function store()
    {
        $empresa = new Empresa($this->getHTTPPost());

        if ($empresa->is_valid()) {
            $empresa->save();
            //redirecionar para o index
            $this->redirectToRoute('empresa', 'index');

        } else {
            //mostrar vista create passando o modelo como parâmetro

            $this->renderView('empresa', 'create', ['empresa' => $empresa]);
        }
    }


    public function edit($id)
    {
        $empresa = Empresa::find($id);

        if (is_null($empresa)) {
            //TODO redirect to standard error page
            $this->renderView('empresa', 'edit', ['empresa' => $empresa]);

        } else {
            //mostrar a vista edit passando os dados por parâmetro
            $this->renderView('empresa', 'edit', ['empresa' => $empresa]);
        }
    }

    public function update($id)
    {
        $empresa = Empresa::find($id);
        $empresa->update_attributes($this->getHTTPPost());

        if ($empresa->is_valid()) {
            $empresa->save();

            //redirecionar para o index
            $this->redirectToRoute('empresa', 'index');

        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->renderView('empresa', 'edit', ['empresa' => $empresa]);
        }
    }
    public function delete($id)
    {
        $empresa = Empresa::find($id);
        $empresa->delete();

        //redirecionar para o index
        $this->redirectToRoute('empresa', 'index');
    }

}