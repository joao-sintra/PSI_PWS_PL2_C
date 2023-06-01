<?php
require_once 'models/Servico.php';
require_once 'controllers/Controller.php';


class ServicoController extends Controller
{

    public function index()
    {
        $servicos = Servico::all();

        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('servico', 'index', ['servicos' => $servicos]);
    }

    public function show($id)
    {
        $servico = Servico::find($id);

        if (is_null($servico)) {
            //TODO redirect to standard error page

        } else {

            //mostrar a vista show passando os dados por parâmetro
            $iva = Iva::find($servico->iva_id);


            $this->renderView('servico', 'show', ['servico' => $servico, 'iva' => $iva]);
        }
    }

    public function create()
    {
        $ivas = Iva::all();

        $this->renderView('servico', 'create', ['ivas' => $ivas]);
    }

    public function store()
    {
        $servico = new Servico($this->getHTTPPost());

        if ($servico->is_valid()) {
            $servico->save();
            //redirecionar para o index
            $this->redirectToRoute('servico', 'index');

        } else {
            //mostrar vista create passando o modelo como parâmetro
            $ivas = Iva::all();

            $this->renderView('servico', 'create', ['servico' => $servico, 'ivas' => $ivas]);
        }
    }

    public function edit($id)
    {
        $servico = Servico::find($id);

        if (is_null($servico)) {
            //TODO redirect to standard error page
            $this->renderView('genre', 'edit', ['servico' => $servico]);

        } else {
            //mostrar a vista edit passando os dados por parâmetro
            $ivas = Iva::all();

            $this->renderView('servico', 'edit', ['servico' => $servico, 'ivas' => $ivas]);


        }
    }

    public function update($id)
    {
        $servico = Servico::find($id);
        $servico->update_attributes($this->getHTTPPost());

        if ($servico->is_valid()) {
            $servico->save();

            //redirecionar para o index
            $this->redirectToRoute('servico', 'index');

        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $ivas = Iva::all();
            $this->renderView('servico', 'edit', ['servico' => $servico, 'ivas' => $ivas]);
        }
    }

    public function delete($id)
    {
        $servico = Servico::find($id);
        $servico->delete();

        //redirecionar para o index
        $this->redirectToRoute('servico', 'index');
    }
}