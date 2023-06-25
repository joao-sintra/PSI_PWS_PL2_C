<?php

class Iva extends ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('percentagem', 'message' => 'tem que preencher a percentagem'),
        array('descricao', 'message' => 'tem que preencher a descrição')
    );
    static $validates_size_of = array(
        array('descricao', 'maximum' => 80, 'too_long' => 'Não deve ultrapassar os 80 carateres!'),
    );
    static $has_many = array(
        array('servicos')

    );

}