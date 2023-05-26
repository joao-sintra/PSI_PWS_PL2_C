<?php

class User extends ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('username','message' => 'tem que preencher o username'),
        array('password', 'message' => 'tem que preencher o password'),
        array('email', 'message' => 'tem que preencher o email'),
        array('telefone','message' => 'tem que preencher o telefone'),
        array('nif','message' => 'tem que preencher o NIF'),
        array('morada','message' => 'tem que preencher a morada '),
        array('codigopostal','message' => 'tem que preencher o código postal'),
        array('localidade','message' => 'tem que preencher o localidade'),
    );
    static $validates_size_of = array(
        array('username','maximum' => 30, 'too_long' => 'Não deve ultrapassar os 30 carateres!'),
        array('password', 'maximum' => 30, 'too_long' => 'Não deve ultrapassar os 30 carateres!'),
        array('email','maximum' => 60, 'too_long' => 'Não deve ultrapassar os 60 carateres!'),
        array('telefone','maximum' => 9, 'too_long' => 'Não deve ultrapassar os 9 carateres!'),
        array('nif','maximum' => 9, 'too_long' => 'Não deve ultrapassar os 9 carateres!'),
        array('morada','maximum' => 80, 'too_long' => 'Não deve ultrapassar os 80 carateres!'),
        array('codigopostal','maximum' => 8, 'too_long' => 'Não deve ultrapassar os 8 carateres!'),
        array('localidade','maximum' => 30, 'too_long' => 'Não deve ultrapassar os 30 carateres!')
    );
}