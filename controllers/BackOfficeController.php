<?php
require_once 'controllers/Controller.php';
class BackOfficeController extends Controller
{
    public function index()
    {
        $this->renderView('backoffice', 'index');
    }
}
