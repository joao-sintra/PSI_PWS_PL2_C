<?php

require_once 'controllers/BackOfficeController.php';
require_once 'controllers/FrontOfficeController.php';

return [
    'defaultRoute' => ['GET', 'BackOfficeController', 'index'],
    'backoffice' => [
        'index' => ['GET', 'BackOfficeController', 'index'],
        'login' => ['GET', 'BackOfficeController', 'login'],
    ],

    'frontoffice' => [
        'index' => ['GET', 'FrontOfficeController', 'index']

    ]
];
