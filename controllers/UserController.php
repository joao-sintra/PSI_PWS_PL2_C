<?php

require_once 'models/User.php';
require_once 'controllers/Controller.php';

class UserController extends Controller
{
    public function __construct()
    {
        $this->authenticationFilterAllows($roles = ['admin', 'funcionario']);
    }

    public function index()
    {
        //$users = User::find('all', array('conditions' => array('role = ?', 'funcionario')));
        $users = User::all();
        $auth = new Auth();
        $userlogado = User::find($auth->getUserId());

        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('user', 'index', ['users' => $users, 'userlogado' => $userlogado]);
    }

    public function show($id)
    {
        $user = User::find($id);

        if (is_null($user)) {
            //TODO redirect to standard error page

        } else {
            //mostrar a vista show passando os dados por parâmetro
            $this->renderView('user', 'show', ['user' => $user]);
        }
    }

    public function create()
    {
        $this->renderView('user', 'create');
    }

    public function store()
    {
        $user = new User($this->getHTTPPost());

        if ($user->is_valid()) {
            $user->save();
            //redirecionar para o index
            $this->redirectToRoute('user', 'index');

        } else {
            //mostrar vista create passando o modelo como parâmetro

            $this->renderView('user', 'create', ['user' => $user]);
        }
    }

    public function edit($id)
    {
        $user = User::find($id);

        if (is_null($user)) {
            //TODO redirect to standard error page
            $this->renderView('user', 'edit', ['user' => $user]);

        } else {
            //mostrar a vista edit passando os dados por parâmetro
            $this->renderView('user', 'edit', ['user' => $user]);
        }
    }

    public function update($id)
    {
        $user = User::find($id);
        $user->update_attributes($this->getHTTPPost());

        if ($user->is_valid()) {
            $user->save();

            //redirecionar para o index
            $this->redirectToRoute('user', 'index');

        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->renderView('user', 'edit', ['user' => $user]);
        }
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        //redirecionar para o index
        $this->redirectToRoute('user', 'index');
    }

    public function dadosfuncionario()
    {
        $auth = new Auth();
        $user = User::find($auth->getUserId());
        $this->renderView('user', 'dadosfuncionario', ['user' => $user]);
    }

    public function updatefuncionario($id)
    {
        $user = User::find($id);
        $user->update_attributes($this->getHTTPPost());

        if ($user->is_valid()) {
            $user->save();

            //redirecionar para o index
            $this->redirectToRoute('backoffice', 'index');

        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->renderView('user', 'dadosfuncionario');
        }
    }
}