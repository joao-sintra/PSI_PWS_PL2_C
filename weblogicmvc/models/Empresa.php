<?php

class Empresa extends ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('designacaosocial', 'message' => 'Tem que preencher a designação social.'),
        array('email', 'message' => 'Tem que preencher o email'),
        array('telefone', 'message' => 'Tem que preencher o telefone'),
        array('nif','message' => 'Tem que preencher o NIF'),
        array('morada','message' => 'Tem que preencher o morada'),
        array('codigopostal','message' => 'Tem que preencher o código postal'),
        array('localidade','message' => 'Tem que preencher o localidade'),
        array('capitalsocial','message' => 'Tem que preencher o capital social')

    );
    static $validates_size_of = array(
        array('designacaosocial','maximum' => 30, 'too_long' => 'Não deve ultrapassar os 30 carateres!'),
        array('email', 'maximum' => 80, 'too_long' => 'Não deve ultrapassar os 80 carateres!'),
        array('telefone','maximum' => 9, 'too_long' => 'Não deve ultrapassar os 9 carateres!'),
        array('nif','maximum' => 9, 'too_long' => 'Não deve ultrapassar os 9 carateres!'),
        array('morada','maximum' => 70, 'too_long' => 'Não deve ultrapassar os 70 carateres!'),
        array('codigopostal','maximum' => 10, 'too_long' => 'Não deve ultrapassar os 10 carateres!'),
        array('localidade','maximum' => 60, 'too_long' => 'Não deve ultrapassar os 60 carateres!')
    );

    static $validates_format_of = array(
        array('telefone', 'with' => '/^\d{9}$/', 'message' => 'O número de telefone deve ter exatamente 9 números.'),
        array('nif', 'with' => '/^\d{9}$/', 'message' => 'O NIF deve ter exatamente 9 números.'),
        array('codigopostal', 'with' => '/^\d{4}-\d{3}$/', 'message' => 'O código postal deve ter apenas números e o seguinte formato: "1234-567" '),
    );


}