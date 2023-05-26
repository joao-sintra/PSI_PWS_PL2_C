<?php

require_once 'controllers/BackOfficeController.php';
require_once 'controllers/FrontOfficeController.php';
require_once 'controllers/LoginController.php';

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
];
