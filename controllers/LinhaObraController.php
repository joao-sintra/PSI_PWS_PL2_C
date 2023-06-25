<?php

use Carbon\Carbon;

require_once 'models/LinhasObra.php';
require_once 'controllers/Controller.php';

class LinhaObraController extends Controller
{
    public function __construct()
    {
        $this->authenticationFilterAllows($roles = ['admin','funcionario']);
    }

    public function index()
    {
        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('linhaobra', 'index');
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

    public function create()
    {
        $this->renderView('linhaobra', 'create');
    }

    public function store()
    {
        $linhaobra = new LinhasObra($this->getHTTPPost());

        if ($linhaobra->is_valid()) {
            $linhaobra->save();
            //redirecionar para o index
            $this->redirectToRoute('linhaobra', 'index');

        } else {
            //mostrar vista create passando o modelo como parâmetro

            $this->renderView('linhaobra', 'create', ['linhaobra' => $linhaobra]);
        }
    }

    public function edit($id)
    {
        $linhaobra = LinhasObra::find($id);

        if (is_null($linhaobra)) {
            //TODO redirect to standard error page
            $this->renderView('linhaobra', 'edit', ['linhaobra' => $linhaobra]);

        } else {
            //mostrar a vista edit passando os dados por parâmetro
            $this->renderView('linhaobra', 'edit', ['linhaobra' => $linhaobra]);
        }
    }

    public function update($id)
    {
        $linhaobra = LinhasObra::find($id);
        $linhaobra->update_attributes($this->getHTTPPost());

        if ($linhaobra->is_valid()) {
            $linhaobra->save();

            //redirecionar para o index
            $this->redirectToRoute('linhaobra', 'index');

        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->renderView('linhaobra', 'edit', ['linhaobra' => $linhaobra]);
        }
    }

    public function delete($id)
    {
        $linhaobra = LinhasObra::find($id);
        $linhaobra->delete();

        //redirecionar para o index
        $this->redirectToRoute('linhaobra', 'index');
    }
}