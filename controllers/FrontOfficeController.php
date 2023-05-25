<?php

require_once 'controllers/Controller.php';
class FrontOfficeController extends Controller
{
    public function index()
    {
        $this->renderView('frontoffice', 'index',[],'frontoffice');
    }
}