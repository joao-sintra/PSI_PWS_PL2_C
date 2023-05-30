<?php

require_once 'models/LinhaObra.php';
require_once 'controllers/Controller.php';

class LinhaObraController extends Controller
{
    public function index(){
        $linhasobras = LinhaObra::all();

        //mostrar a vista index passando os dados por parâmetro
        $this -> renderView('linhaobra', 'index', ['linhasobras' => $linhasobras]);
    }

    public function show($id) {
        $linhaobra = LinhaObra::find($id);

        if (is_null($linhaobra)) {
            //TODO redirect to standard error page

        } else {
            //mostrar a vista show passando os dados por parâmetro
            $this -> renderView('linhaobra', 'show', ['linhaobra' => $linhaobra]);
        }
    }

    public function create() {
        $this -> renderView('linhaobra', 'create');
    }

    public function store(){
        $linhaobra = new LinhaObra($this -> getHTTPPost());

        if($linhaobra->is_valid()){
            $linhaobra->save();
            //redirecionar para o index
            $this -> redirectToRoute('linhaobra', 'index');

        } else {
            //mostrar vista create passando o modelo como parâmetro

            $this -> renderView('linhaobra', 'create', ['linhaobra' => $linhaobra]);
        }
    }

    public function edit($id) {
        $linhaobra = LinhaObra::find($id);

        if (is_null($linhaobra)) {
            //TODO redirect to standard error page
            $this -> renderView('linhaobra', 'edit', ['linhaobra' => $linhaobra]);

        } else {
            //mostrar a vista edit passando os dados por parâmetro
            $this -> renderView('linhaobra', 'edit', ['linhaobra' => $linhaobra]);
        }
    }

    public function update($id) {
        $linhaobra = LinhaObra::find($id);
        $linhaobra -> update_attributes($this -> getHTTPPost());

        if($linhaobra->is_valid()){
            $linhaobra->save();

            //redirecionar para o index
            $this -> redirectToRoute('linhaobra', 'index');

        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this -> renderView('linhaobra', 'edit', ['linhaobra' => $linhaobra]);
        }
    }

    public function delete($id) {
        $linhaobra = LinhaObra::find($id);
        $linhaobra->delete();

        //redirecionar para o index
        $this -> redirectToRoute('linhaobra', 'index');
    }
}