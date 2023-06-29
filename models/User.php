<?php

class User extends ActiveRecord\Model

{
    static $validates_presence_of = array(
        array('username', 'message' => 'Tem que preencher o nome'),
        array('password', 'message' => 'Tem que preencher o password'),
        array('email', 'message' => 'Tem que preencher o email'),
        array('telefone', 'message' => 'Tem que preencher o telefone'),
        array('nif', 'message' => 'Tem que preencher o NIF'),
        array('morada', 'message' => 'Tem que preencher a morada '),
        array('codigopostal', 'message' => 'Tem que preencher o código postal'),
        array('localidade', 'message' => 'Tem que preencher o localidade'),
    );

    static $validates_size_of = array(
        array('username', 'maximum' => 30, 'too_long' => 'Não deve ultrapassar os 30 carateres!'),
        array('password', 'maximum' => 13, 'too_long' => 'Não deve ultrapassar os 30 carateres!'),
        array('email', 'maximum' => 60, 'too_long' => 'Não deve ultrapassar os 60 carateres!'),
        array('morada', 'maximum' => 80, 'too_long' => 'Não deve ultrapassar os 80 carateres!'),
        array('localidade', 'maximum' => 30, 'too_long' => 'Não deve ultrapassar os 30 carateres!')
    );

    static $validates_uniqueness_of = array(
        array('username', 'message' => 'Este nome já existe.'),
        array('email', 'message' => 'Este email já existe.'),
        array('nif', 'message' => 'Este NIF já existe.'),
    );

    static $validates_format_of = array(
        array('telefone', 'with' => '/^\d{9}$/', 'message' => 'O número de telefone deve ter exatamente 9 números.'),
        array('nif', 'with' => '/^\d{9}$/', 'message' => 'O NIF deve ter exatamente 9 números.'),
        array('codigopostal', 'with' => '/^\d{4}-\d{3}$/', 'message' => 'O código postal deve ter apenas números e o seguinte formato: "1234-567" '),

    );

    static $belongs_to = array(
        array('folha_obra')
    );

}