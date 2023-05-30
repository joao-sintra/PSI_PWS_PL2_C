<?php

require_once 'controllers/BackOfficeController.php';
require_once 'controllers/FrontOfficeController.php';
require_once 'controllers/LoginController.php';
require_once 'controllers/ServicoController.php';
require_once 'controllers/LinhaObraController.php';

return [
    'defaultRoute' => ['GET', 'BackOfficeController', 'index'],
    'backoffice' => [
        'index' => ['GET', 'BackOfficeController', 'index'],
      
    ],

    'frontoffice' => [
        'index' => ['GET', 'FrontOfficeController', 'index']

    ],
    'login' => [
        'index' => ['GET', 'LoginController', 'index'],
        'login' => ['POST', 'LoginController', 'checkLogin'],

    ],
    'servico' => [
        'index' => ['GET', 'ServicoController', 'index'],
        'show' => ['GET', 'ServicoController', 'show'],
        'create' => ['GET', 'ServicoController', 'create'],
        'store' => ['POST', 'ServicoController', 'store'],
        'edit' => ['GET', 'ServicoController', 'edit'],
        'update' => ['POST', 'ServicoController', 'update'],
        'delete' => ['GET', 'ServicoController', 'delete'],
        ],
    'linhaobra' => [
        'index' => ['GET', 'LinhaObraController', 'index'],
        'show' => ['GET', 'LinhaObraController', 'show'],
        'create' => ['GET', 'LinhaObraController', 'create'],
        'store' => ['POST', 'LinhaObraController', 'store'],
        'edit' => ['GET', 'LinhaObraController', 'edit'],
        'update' => ['POST', 'LinhaObraController', 'update'],
        'delete' => ['GET', 'LinhaObraController', 'delete'],
    ],
];
