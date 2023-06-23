<?php

class User extends ActiveRecord\Model

{
    static $validates_presence_of = array(
        array('username','message' => 'Tem que preencher o nome'),
        array('password', 'message' => 'Tem que preencher o password'),
        array('email', 'message' => 'Tem que preencher o email'),
        array('telefone','message' => 'Tem que preencher o telefone'),
        array('nif','message' => 'Tem que preencher o NIF'),
        array('morada','message' => 'Tem que preencher a morada '),
        array('codigopostal','message' => 'Tem que preencher o código postal'),
        array('localidade','message' => 'Tem que preencher o localidade'),
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