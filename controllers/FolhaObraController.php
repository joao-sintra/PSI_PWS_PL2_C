<?php

class FolhaObraController extends Controller
{
    public function index()
    {
        $this->renderView('folhaobra', 'index',[], 'backoffice');
    }

    public function create()
    {
        $this->renderView('empresa', 'create');
    }
}

