<?php

class Empresa extends ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('designacaosocial'),
        array('email', 'message' => 'tem que preencher o email'),
        array('telefone', 'message' => 'tem que preencher o telefone'),
        array('nif','message' => 'tem que preencher o NIF'),
        array('morada','message' => 'tem que preencher o morada'),
        array('codigopostal','message' => 'tem que preencher o código postal'),
        array('localidade','message' => 'tem que preencher o localidade'),
        array('capitalsocial','message' => 'tem que preencher o capital social')

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

}