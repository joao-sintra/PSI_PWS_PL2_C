<?php

class FolhaObraController extends Controller
{
    public function create()
    {
        $this->renderView('folhaobra', 'create');
    }

    public function selectcliente()
    {
        $this->renderView('folhaobra', 'selectcliente');
    }

    public function store($idCliente)
    {
        $this->renderView('folhaobra', 'selectcliente');
    }
}

