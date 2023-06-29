<?php

require_once 'controllers/BackOfficeController.php';
require_once 'controllers/FrontOfficeController.php';
require_once 'controllers/LoginController.php';
require_once 'controllers/ServicoController.php';
require_once 'controllers/LinhaObraController.php';
require_once 'controllers/FolhaObraController.php';
require_once 'controllers/ClienteController.php';
require_once 'controllers/UserController.php';
require_once 'controllers/EmpresaController.php';
require_once 'controllers/IvaController.php';





return [
    'defaultRoute' => ['GET', 'BackOfficeController', 'index'],
    'backoffice' => [
        'index' => ['GET', 'BackOfficeController', 'index'],
      
    ],

    'frontoffice' => [
        'index' => ['GET', 'FrontOfficeController', 'index'],
         'show' => ['GET', 'FrontOfficeController', 'show'],
         'pagarfolha' => ['GET', 'FrontOfficeController', 'pagarfolha']


    ],

    'login' => [
        'index' => ['GET', 'LoginController', 'index'],
        'login' => ['POST', 'LoginController', 'checkLogin'],
        'logout' => ['GET', 'LoginController', 'logout'],
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

    'empresa' => [
        'index' => ['GET', 'EmpresaController', 'index'],
        'show' => ['GET', 'EmpresaController', 'show'],
        'create' => ['GET', 'EmpresaController', 'create'],
        'store' => ['POST', 'EmpresaController', 'store'],
        'edit' => ['GET', 'EmpresaController', 'edit'],
        'update' => ['POST', 'EmpresaController', 'update'],
        'delete' => ['GET', 'EmpresaController', 'delete'],
    ],

    'user' => [
        'index' => ['GET', 'UserController', 'index'],
        'show' => ['GET', 'UserController', 'show'],
        'create' => ['GET', 'UserController', 'create'],
        'store' => ['POST', 'UserController', 'store'],
        'edit' => ['GET', 'UserController', 'edit'],
        'update' => ['POST', 'UserController', 'update'],
        'delete' => ['GET', 'UserController', 'delete'],
        'dadosfuncionario' => ['GET', 'UserController', 'dadosfuncionario'],
        'updatefuncionario' => ['POST', 'UserController', 'updatefuncionario'],
    ],

    'iva' => [
        'index' => ['GET', 'IvaController', 'index'],
        'show' => ['GET', 'IvaController', 'show'],
        'create' => ['GET', 'IvaController', 'create'],
        'store' => ['POST', 'IvaController', 'store'],
        'edit' => ['GET', 'IvaController', 'edit'],
        'update' => ['POST', 'IvaController', 'update'],
        'delete' => ['GET', 'IvaController', 'delete'],
    ],

    'linhaobra' => [
        'index' => ['GET', 'LinhaObraController', 'index'],
        'show' => ['GET', 'LinhaObraController', 'show'],
        'create' => ['GET', 'LinhaObraController', 'create'],
        'store' => ['POST', 'LinhaObraController', 'store'],
        'selectservico' => ['GET', 'LinhaObraController', 'selectservico'],
        'edit' => ['GET', 'LinhaObraController', 'edit'],
        'update' => ['POST', 'LinhaObraController', 'update'],
        'delete' => ['GET', 'LinhaObraController', 'delete'],
    ],

    'folhaobra' => [
        'create' => ['GET', 'FolhaObraController', 'create'],
        'show' => ['GET', 'FolhaObraController', 'show'],
        'selectcliente' => ['GET', 'FolhaObraController', 'selectcliente'],
        'store' => ['POST', 'FolhaObraController', 'store'],
        'update' => ['POST', 'FolhaObraController', 'update'],
        'delete' => ['GET', 'FolhaObraController', 'delete'],
        'emitirfolha' => ['GET', 'FolhaObraController', 'emitirfolha'],
    ],

    'cliente' => [
        'index' => ['GET', 'ClienteController', 'index'],
        'show' => ['GET', 'ClienteController', 'show'],
        'create' => ['GET', 'ClienteController', 'create'],
        'store' => ['POST', 'ClienteController', 'store'],
        'edit' => ['GET', 'ClienteController', 'edit'],
        'update' => ['POST', 'ClienteController', 'update'],
        'delete' => ['GET', 'ClienteController', 'delete'],
    ],
];
