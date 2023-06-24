<?php

    require_once 'models/User.php';
    require_once 'controllers/Controller.php';


class ClienteController extends Controller
{
    public function index()
    {
        $clientes = User::find('all', array('conditions' => array('role = ?', 'cliente')));

        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('cliente', 'index', ['clientes' => $clientes]);
    }

    public function show($id)
    {
        $cliente = User::find($id);

        if (is_null($cliente)) {
            //TODO redirect to standard error page

        } else {
            //mostrar a vista show passando os dados por parâmetro
            $this->renderView('cliente', 'show', ['cliente' => $cliente]);
        }
    }

    public function create()
    {
        $this->renderView('cliente', 'create');
    }

    public function store()
    {
        $cliente = new User($this->getHTTPPost());

        if ($cliente->is_valid()) {
            $cliente->save();
            //redirecionar para o index
            $this->redirectToRoute('cliente', 'index');

        } else {
            //mostrar vista create passando o modelo como parâmetro

            $this->renderView('cliente', 'create', ['cliente' => $cliente]);
        }
    }

    public function edit($id)
    {
        $cliente = User::find($id);

        if (is_null($cliente)) {
            //TODO redirect to standard error page
            $this->renderView('cliente', 'edit', ['cliente' => $cliente]);

        } else {
            //mostrar a vista edit passando os dados por parâmetro
            $this->renderView('cliente', 'edit', ['cliente' => $cliente]);
        }
    }

    public function update($id)
    {
        $cliente = User::find($id);
        $cliente->update_attributes($this->getHTTPPost());

        if ($cliente->is_valid()) {
            $cliente->save();

            //redirecionar para o index
            $this->redirectToRoute('cliente', 'index');

        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->renderView('cliente', 'edit', ['cliente' => $cliente]);
        }
    }

    public function delete($id)
    {
        $cliente = User::find($id);
        $cliente->delete();

        //redirecionar para o index
        $this->redirectToRoute('cliente', 'index');
    }
}