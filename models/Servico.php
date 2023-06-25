<?php

class Servico extends ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('referencia', 'message' => 'Deve preencher a Referência'),
        array('descricao', 'message' => 'Deve preencher a Descrição'),
        array('valorunitario', 'message' => 'Deve preencher o Valor Unitário'),
        array('iva_id', 'message' => 'Deve preencher o Id do Iva')
    );

    static $has_many = array(
        array('linhasobras')
    );

    static $belongs_to = array(
        array('iva')
    );

    static $validates_size_of = array(
        array('descricao', 'maximum' => 80, 'too_long' => 'Não deve ultrapassar os 80 carateres!'),
    );
}